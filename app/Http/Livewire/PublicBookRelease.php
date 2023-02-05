<?php

namespace App\Http\Livewire;

use App\Models\Book as BookModel;
use Livewire\Component;
use Livewire\WithPagination;

class PublicBookRelease extends Component
{
    use WithPagination;

    public function render()
    {
        $books = BookModel::where(['status' => 'Terbit'])->paginate(20);
        return view('livewire.public-release-book', ['books' => $books])->extends('layouts.public-app');
    }

    public function paginationView()
    {
        return 'livewire.custom-paginator';
    }
}
