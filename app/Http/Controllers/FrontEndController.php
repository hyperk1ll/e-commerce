<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;


class FrontEndController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        return view('frontend.index');
    }

    public function categories() 
    {
        $categories = Category::where('status','0')->get();
        return view('frontend.collections.category.index', compact('categories'));
    }

    public function products($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();

        if($category) {
            $products = $category->products()->get();
            return view('frontend.collections.products.index', compact('category'));
        }

        else{
            return redirect()->back();
        }

    }
}
