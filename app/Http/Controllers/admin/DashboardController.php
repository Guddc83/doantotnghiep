<?php

namespace App\Http\Controllers\admin;

use App\Components\Recusive;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.layout.layout');
    }

    public function login()
    {
        return view('admin.layout.login');
    }
}
