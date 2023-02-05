<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Products as ProductModel;
use App\Models\ProductCategories;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Products extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $categories = [];
    public $editing = False;
    public $id_product, $name, $category, $price, $image, $image_name, $description;

    protected $rules = [
        'name' => 'required',
        'category' => 'required',
        'price' => 'required',
        'image_name' => 'required',
        'description' => 'required'
    ];

    public function mount()
    {
        $this->loadList();
    }

    public function render()
    {
        $products = ProductModel::with(['category']);

        $products = $products->paginate(20);

        return view('livewire.products', ['products' => $products])->extends('layouts.app');
    }


    public function loadList()
    {
        $this->categories = ProductCategories::get();
    }

    public function save()
    {
        $this->validate();
        $cust_id = ProductModel::updateOrCreate(
            ['id' => $this->id_product],
            [
                'name' => $this->name,
                'category_id' => $this->category,
                'price' => $this->price,
                'image' => $this->image_name,
                'description' => $this->description,
            ]
        );
        $this->loadList();
        $this->clear();
        $this->editing = False;
    }

    public function edit($id)
    {
        $product = ProductModel::find($id);
        $this->id_product = $product->id;
        $this->name = $product->name;
        $this->category = $product->category_id;
        $this->price = $product->price;
        $this->image_name = $product->image;
        $this->description = $product->description;
        $this->editing = True;
        $this->dispatchBrowserEvent('edit-desc', ['desc' => $product->description]);
    }

    public function delete($id)
    {
        ProductModel::where('id', $id)->delete();
        $this->loadList();
    }

    public function clear()
    {
        $this->name = null;
        $this->category = null;
        $this->price = null;
        $this->image_name = null;
        $this->description = null;
        $this->image = null;
        $this->dispatchBrowserEvent('delete-desc');
    }

    public function updatedImage()
    {
        $this->validate([
            'image' => 'mimes:pdf,png,jpg,jpeg|file|max:1024',
        ]);

        $this->image_name = str_replace('public', '', $this->image->store('public'));
    }
}
