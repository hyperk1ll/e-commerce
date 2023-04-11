<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use App\Models\Brand;
use App\Models\Category;

class Index extends Component
{
    public $count_products, $count_admin, $count_category, $count_brand;
    
    // count products and parse to blade view
    public function count_products()
    {
        $products = Product::all();
        $this->count_products = $products->count();
    }

    // count admins and parse to blade view
    public function count_admin()
    {
        $admins = User::all();
        $this->count_admin = $admins->count();
    }

    // count categories and parse to blade view
    public function count_category()
    {
        $categories = Category::all();
        $this->count_category = $categories->count();
    }

    // count brands and parse to blade view
    public function count_brand()
    {
        $brands = Brand::all();
        $this->count_brand = $brands->count();
    }

    public function render()
    {
        $products = Product::all();
        $count_products = $products->count();

        return view('livewire.admin.dashboard.index', [
            'count_products' => $this->count_products(),
            'count_admin' => $this->count_admin(),
            'count_category' => $this->count_category(),
            'count_brand' => $this->count_brand(),
        ]);
    }
}
