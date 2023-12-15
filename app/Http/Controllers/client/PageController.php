<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public  function index()
    {
        return view('client.pages.index');
    }
    public function product()
    {
        return view('client.pages.product');
    }
    public function category()
    {
        return view('client.pages.category');
    }
    public function dashboard()
    {
        return view('client.pages.dashboard');
    }
    public function login()
    {
        return view('client.pages.login');
    }
    public function wishlist()
    {
        return view('client.pages.wishlist');
    }
    public function contact()
    {
        return view('client.pages.contact');
    }
    public function faq()
    {
        return view('client.pages.faq');
    }
    public function error404()
    {
        return view('client.pages.error404');
    }
}
