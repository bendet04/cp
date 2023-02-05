<?php

namespace App\Http\Livewire;

use App\Models\Book as BookModel;
use Livewire\Component;
use Livewire\WithPagination;

class PublicBookWillRelease extends Component
{
    use WithPagination;

    public function render()
    {
        $books = BookModel::where(['status' => 'Akan Terbit'])->paginate(20);
        return view('livewire.public-will-release-book', ['books' => $books])->extends('layouts.public-app');
    }
}
