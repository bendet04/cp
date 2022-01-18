<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products as ProductsModel;

class ProductDetail extends Component
{
    public $product;

    public function mount($id)
    {
        $this->product = ProductsModel::with(['category'])->where('id', $id)->first();
        // $this->news = $news->items();
    }

    public function render()
    {
        return view('livewire.produk-detail')->extends('layouts.public-app');
    }
}
