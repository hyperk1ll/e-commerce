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
    public $outOfStockProducts;

    public function mount()
    {
        $this->count_products = Product::count();
        $this->count_admin = User::count();
        $this->count_category = Category::count();
        $this->count_brand = Brand::count();
        $this->outOfStockProducts = Product::where('quantity', 0)->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard.index', [
            'count_products' => $this->count_products,
            'count_admin' => $this->count_admin,
            'count_category' => $this->count_category,
            'count_brand' => $this->count_brand,
            'outOfStockProducts' => $this->outOfStockProducts,
        ]);
    }
}