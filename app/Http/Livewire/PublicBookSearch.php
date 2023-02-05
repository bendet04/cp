<?php

namespace App\Http\Livewire;

use App\Models\Book as BookModel;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;

class PublicBookSearch extends Component
{
    use WithPagination;

    public $judul, $isbn, $kategori, $tahun, $penulis;

    public function render()
    {
        $books = BookModel::where(function ($sub_query) {
            if (!empty($this->judul)) $sub_query->where('judul', 'like', '%' . $this->judul . '%');
            if (!empty($this->isbn)) $sub_query->where('isbn', 'like', '%' . $this->isbn . '%');
            if (!empty($this->kategori)) $sub_query->where('status', 'like', '%' . $this->kategori . '%');
            if (!empty($this->tahun)) $sub_query->where('tahun_terbit', 'like', '%' . $this->tahun . '%');
            if (!empty($this->penulis)) $sub_query->where('penulis', 'like', '%' . $this->penulis . '%');
        });
        $result = $books->paginate(20);
        return view('livewire.public-book-search', ['books' => $result])->extends('layouts.public-app');
    }
}
