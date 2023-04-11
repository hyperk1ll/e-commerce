<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    # count how many products in the database
    public static function countProducts()
    {
        $products = Product::all();
        return $products->count();
    }

}
