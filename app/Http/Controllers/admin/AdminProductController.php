<?php

namespace App\Http\Controllers\admin;

use AllowDynamicProperties;
use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use App\Traits\StorageImageTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

#[AllowDynamicProperties] class AdminProductController extends Controller
{
    use StorageImageTrait;
    private Category $category;
    private Product $product;
    private ProductImage $productImage;
    public function __construct(Category $category, Product $product, ProductImage $productImage)
    {
        $this->category = $category;
        $this->product = $product;
        $this->productImage = $productImage;
    }

    public function index()
    {
        $products = $this->product->paginate(5);
        return view('admin.pages.products.index', compact('products'));
    }

    public function create()
    {
        $htmlOption = $this->getProduct($parent_id = '');
        return view('admin.pages.products.addproduct', compact('htmlOption'));
    }

    public function getProduct($parent_id)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->Recusive($parent_id);
        return $htmlOption;
    }
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            // dd($request->path);
            $dataProductCreate = [
                'user_id' => auth()->id(),
                'name' => $request->name,
                'category_id' => $request->category_id,
                'content' => $request->input('content'),
                'price' => $request->price,
                'description' => $request->description,
                'sale' => $request->sale,
                'hot' => $request->input('hot') === 'on' ? 1 : 0,
                'status' => $request->input('status') === 'on' ? 1 : 0,
            ];
            // dd($dataProductCreate);
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'avartar', 'product');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductCreate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductCreate['avartar'] = $dataUploadFeatureImage['file_path'];
            }
            $product = $this->product->create($dataProductCreate);
            // dd($dataProductCreate);

            //insert data vao products_images
            if ($request->hasFile('path')) {
                foreach ($request->path as $fileItem) {
                    $dataProductDetail = $this->storageTraitUploadMulti($fileItem, 'product');
                    // dd($dataProductDetail);
                    $this->productImage->create([
                        'product_id' => $product->id,
                        'path' =>    $dataProductDetail['file_path'],
                        'image_name' => $dataProductDetail['file_name']
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $exception) {
            DB::rollBack();
            error_log('Message: ' . $exception->getMessage() . 'line: ' . $exception->getLine());
        }
    }
    public function edit($id)
    {
        $product = $this->product->find($id);
        $htmlOption = $this->getProduct($parent_id = '');
        return view('admin.pages.products.editproduct', compact('htmlOption', 'product'));
    }
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            // dd($request->path);
            $dataProductUpdate = [
                'user_id' => auth()->id(),
                'name' => $request->name,
                'category_id' => $request->category_id,
                'content' => $request->input('content'),
                'price' => $request->price,
                'description' => $request->description,
                'sale' => $request->sale,
                'hot' => $request->input('hot') === 'on' ? 1 : 0,
                'status' => $request->input('status') === 'on' ? 1 : 0,
            ];
            $dataUploadFeatureImage = $this->storageTraitUpload($request, 'avartar', 'product');
            if (!empty($dataUploadFeatureImage)) {
                $dataProductUpdate['feature_image_name'] = $dataUploadFeatureImage['file_name'];
                $dataProductUpdate['avartar'] = $dataUploadFeatureImage['file_path'];
            }
            $this->product->find($id)->update($dataProductUpdate);
            $product = $this->product->find($id);
            //insert data vao products_images
            if ($request->hasFile('path')) {
                $this->productImage->where('product_id', $id)->delete();
                foreach ($request->path as $fileItem) {
                    $dataProductDetail = $this->storageTraitUploadMulti($fileItem, 'product');
                    // dd($dataProductDetail);
                    $this->productImage->create([
                        'product_id' => $product->id,
                        'path' =>    $dataProductDetail['file_path'],
                        'image_name' => $dataProductDetail['file_name']
                    ]);
                }
            }
            DB::commit();
            return redirect()->route('product.index');
        } catch (Exception $exception) {
            DB::rollBack();
            error_log('Message: ' . $exception->getMessage() . 'line: ' . $exception->getLine());
        }
    }
}
