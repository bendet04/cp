<?php

namespace App\Http\Livewire;

use App\Models\Products as ProductModel;
use App\Models\ProductCategories as CategoryModel;
use App\Models\News as NewsModel;
use Livewire\Component;


class PublicProduct extends Component
{

    public $products = [];
    public $product_categories = [];
   
    public function mount()
    {
        $this->products = ProductModel::get();
        $product_categories = CategoryModel::with(['Products']);
        $product_categories = $product_categories->paginate();
        $this->product_categories = $product_categories->items();
        //dd($this->product_categories);
    }

    public function render()
    {
        return view('livewire.public-product')->extends('layouts.public-app');
    }
}
