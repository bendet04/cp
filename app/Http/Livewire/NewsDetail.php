<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\News as NewsModel;

class NewsDetail extends Component
{
    public $news;

    public function mount($id)
    {
        $this->news = NewsModel::with(['category'])->where('id', $id)->first();
        // $this->news = $news->items();
    }

    public function render()
    {
        return view('livewire.news-detail')->extends('layouts.public-app');
    }
}
