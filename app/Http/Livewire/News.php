<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News as NewsModel;
use App\Models\NewsCategories;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;

class News extends Component
{
    use WithFileUploads;

    public $news = [] ;
    public $categories = [];
    public $editing = False;
    public $id_product, $name, $category,  $image, $image_name, $description, $news_ckeditor;

    protected $rules = [
        'name' => 'required',
        'category'=> 'required',
        'image_name'=> 'required',
        'description' => 'required'
    ];

    public function mount()
    {
        $this->loadList();
    }

    public function render()
    {
        return view('livewire.news')->extends('layouts.app');
        $this->openModal();
    }


    public function loadList()
    {
        $news = NewsModel::with(['category']);
        $news = $news->paginate(20);
        $this->news = $news->items();
        $this->categories = NewsCategories::get();
    }

    public function save()
    {
        $this->validate();
        $cust_id = NewsModel::updateOrCreate(['id'=>$this->id_product],
        [
            'name'=>$this->name,
            'category_id'=>$this->category, 
            'image'=>$this->image_name,
            'description'=>$this->description,    
        ]);
        $this->loadList();
        $this->clear();
        $this->editing = False;
    }

    public function edit($id)
    {
        $product = NewsModel::find($id);
        $this->id_product = $product->id;
        $this->name = $product->name;
        $this->category = $product->category_id;
        $this->image_name = $product->image;
        $this->description = $product->description;
        $this->news_ckeditor = $product->description;
        $this->editing = True;
        $this->dispatchBrowserEvent('edit-desc', ['desc' => $product->description]);
    }

    public function delete($id)
    {
        NewsModel::where('id', $id)->delete();
        $this->loadList();
    }

    public function clear()
    {
        $this->name = null;
        $this->category = null;
        $this->image_name = null;
        $this->description = null;
        $this->image=null;
    }
    
    public function updatedImage(){
        $this->validate([
            'image' => 'mimes:pdf,png,jpg,jpeg|file|max:1024',
        ]);
    
        $this->image_name = str_replace('public','',$this->image->store('public'));

    }
}
