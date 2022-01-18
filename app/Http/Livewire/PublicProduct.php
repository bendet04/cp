<?php

namespace App\Http\Livewire;

use App\Models\Products as ProductModel;
use App\Models\News as NewsModel;
use Livewire\Component;


class PublicProduct extends Component
{

    public $products = [];
   
    public function mount()
    {
        $this->products = ProductModel::get();
    }

    public function render()
    {
        return view('livewire.public-product')->extends('layouts.public-app');
    }
}
