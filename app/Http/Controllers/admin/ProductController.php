<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create()
    {
        return view('admin.pages.addproduct');
    }
    public function store(Request $request)
    {
        $dataCreate=$request->all();
        $image=$request->file('avartar');
        dd($image);

        $requestData = [
            'categories' => $request->input('categories'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'content' => $request->input('content'),
//            'avartar' => $request->file('avartar'),
            'status' => $request->input('status') === 'on' ? 1 : 0,

        ];

    }
}
