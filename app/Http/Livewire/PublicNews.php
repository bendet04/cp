<?php

namespace App\Http\Livewire;

use App\Models\Products as ProductModel;
use App\Models\News as NewsModel;
use Livewire\Component;


class PublicNews extends Component
{

    public $news = [];

    public function mount()
    {
        $this->news = NewsModel::get();
    }

    public function render()
    {
        return view('livewire.public-news')->extends('layouts.public-app');
    }
}
