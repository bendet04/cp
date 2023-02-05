<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book as BookModel;

class PublicBookDetail extends Component
{
    public $book;

    public function mount($id)
    {
        $this->book = BookModel::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.book-detail')->extends('layouts.public-app');
    }
}
