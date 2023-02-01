<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Http\Controllers\Admin\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $categories = Category::where('status','0')->get();
    return view('frontend.collections.category.index', compact('categories'));
});

Route::get('/collections/{category_slug}', function ($category_slug) {
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
});

Route::get('/collections/{category_slug}/{product_slug}', function(string $category_slug, string $product_slug) {
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\FrontEndController::class, 'categories'])->name('home');
Route::get('/collections', [App\Http\Controllers\FrontEndController::class, 'categories']);
Route::get('/collections/{category_slug}', [App\Http\Controllers\FrontEndController::class, 'products']);

Route::get('/collections/{category_slug}/{product_slug}', [App\Http\Controllers\FrontEndController::class, 'productView']);

// Auth::routes();
Route::prefix('admin')->middleware(['auth','isAdmin'])->group (function () {

    Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    
    //Category Routes
    Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function () {
        Route::get('/category', 'index');
        Route::get('/category/create', 'create');
        Route::post('/category', 'store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');
    });

    Route::controller(App\Http\Controllers\Admin\ProductController::class)->group(function () {
        Route::get('/products', 'index');
        Route::get('/products/create', 'create');
        Route::post('/products', 'store');
        Route::get('/products/{product}/edit', 'edit');
        Route::put('/products/{product}', 'update');
        Route::get('products/{product_id}/delete', 'destroy');
        Route::get('product-image/{product_image_id}/delete','destroyImage');
    });

    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);
    
});

    

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');