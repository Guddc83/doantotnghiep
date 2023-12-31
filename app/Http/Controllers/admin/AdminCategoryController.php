<?php

namespace App\Http\Controllers\admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminCategoryController extends Controller
{
    private Category $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->latest()->paginate(5);
        return view('admin.pages.categories.index', compact('categories'));
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.pages.categories.addcategory', compact('htmlOption'));
    }

    public function store(Request $request)
    {
        $this->category->create(array(
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' =>   Str::slug($request->name)
        ));
        return redirect()->route('category.index');
    }

    public function edit($id)
    {

        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('admin.pages.categories.editcategory', compact('category', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' =>   Str::slug($request->name)
        ]);
        return redirect()->route('category.index');
    }

    public function delete($id)
    {
        $this->category->find($id)->delete();
        return redirect()->route('category.index');
    }

    public function getCategory($parentId)
    {
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->Recusive($parentId);
        return $htmlOption;
    }
}
