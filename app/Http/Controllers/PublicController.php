<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products as ProductModel;

class PublicController extends Controller
{
    public function index()
    {
        $products = ProductModel::get();
        return view('livewire.public-component',['products'=>$products]);
    }
}
