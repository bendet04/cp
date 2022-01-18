<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ProductCategories as Category;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ProductCategory extends Component
{

    public $category = [] ;
    public $editing = False;
    public $id_category, $name, $description;

    protected $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    public function mount()
    {
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.product-category')->extends('layouts.app');
    }


    public function loadList()
    {
        $this->category = Category::get();
    }

    public function save()
    {
        $this->validate();
        $cust_id = Category::updateOrCreate(['id'=>$this->id_category],
        [
            'name'=>$this->name,
            'description'=>$this->description,    
        ]);
        $this->loadList();
        $this->clear();
        $this->editing = False;
    }

    public function edit($id)
    {
        $product = Category::find($id);
        $this->id_category = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->editing = True;
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        $this->loadList();
    }

    public function clear()
    {
        $this->name = null;
        $this->description = null;
    }
}
