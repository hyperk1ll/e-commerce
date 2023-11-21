<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;

class FrontEndController extends Controller
{
    public function index()
    {
        $trendingProducts = Product::where('trending','1')->where('status','0')
        ->latest()
        ->take(10)
        ->get();

        // dd($trendingProducts);
        
        return view('frontend.index', compact('trendingProducts'));
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

    public function productView(string $category_slug, string $product_slug)
    {
        $category = Category::where('slug', $category_slug)->first();

        if($category) {
            $product = $category->products()->where('slug', $product_slug)->where('status','0')->first();
            if($product) {
                return view('frontend.collections.products.view', compact('product','category'));
            }
            else{
                return redirect()->back();
            }
        }

        else{
            return redirect()->back();
        }
    }
    public function searchProducts(Request $request){
        if($request->search){
            $searchProducts = Product::where('status', '0')
            ->where(function ($query) use ($request) {
                $query->where('name', 'LIKE', '%' . $request->search . '%')
                    ->orWhere('brand', 'LIKE', '%' . $request->search . '%')
                    ->orWhere(function ($query) use ($request) {
                        $query->whereHas('category', function ($query) use ($request) {
                            $query->where('name', 'LIKE', '%' . $request->search . '%');
                        });
                    });
            })
                ->orderBy('name')
                ->paginate(15);
            return view('frontend.pages.search', compact('searchProducts'));
        } else {
            return redirect()->back()->with('message','Empty Search');
        }
    }
    
}
