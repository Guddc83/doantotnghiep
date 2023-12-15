<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('client.pages.login');
    }
    public function dashboard()
    {
        return view('client.pages.dashboard');
    }
}
