<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Book as BookModel;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Book extends Component
{
    use WithFileUploads;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $editing = False;

    public $id_buku, $judul, $deskripsi, $penulis, $sinopsis, $dimensi, $penyunting, $status;
    public $isbn, $grade, $penerbit, $tahun_terbit, $harga, $halaman, $bahasa, $foto, $nama_foto;

    protected $rules = [];

    public function render()
    {
        $books = BookModel::paginate(10);
        return view('livewire.book', ['books' => $books])->extends('layouts.app');
    }

    public function save()
    {
        // $this->validate();
        BookModel::updateOrCreate(
            ['id' => $this->id_buku],
            [
                'judul' => $this->judul,
                'penulis' => $this->penulis,
                'sinopsis' => $this->sinopsis,
                'dimensi' => $this->dimensi,
                'penyunting' => $this->penyunting,
                'status' => $this->status,
                'isbn' => $this->isbn,
                'grade' => $this->grade,
                'penerbit' => $this->penerbit,
                'tahun_terbit' => $this->tahun_terbit,
                'harga' => $this->harga,
                'halaman' => $this->halaman,
                'bahasa' => $this->bahasa,
                'deskripsi' => $this->deskripsi,
                'foto' => $this->nama_foto
            ]
        );

        $this->clear();
        $this->editing = False;
    }

    public function edit($id)
    {
        $book = BookModel::find($id);
        $this->id_buku = $book->id;
        $this->judul = $book->judul;
        $this->penulis = $book->penulis;
        $this->sinopsis = $book->sinopsis;
        $this->dimensi = $book->dimensi;
        $this->penyunting = $book->penyunting;
        $this->status = $book->status;
        $this->isbn = $book->isbn;
        $this->grade = $book->grade;
        $this->penerbit = $book->penerbit;
        $this->tahun_terbit = $book->tahun_terbit;
        $this->harga = $book->harga;
        $this->halaman = $book->halaman;
        $this->bahasa = $book->bahasa;
        $this->nama_foto = $book->foto;
        $this->editing = True;
        $this->dispatchBrowserEvent('edit-deskripsi', ['deskripsi' => $book->deskripsi]);
        $this->dispatchBrowserEvent('edit-sinopsis', ['sinopsis' => $book->sinopsis]);
    }

    public function delete($id)
    {
        BookModel::where('id', $id)->delete();
    }

    public function clear()
    {
        $this->id = null;
        $this->judul = null;
        $this->penulis = null;
        $this->sinopsis = null;
        $this->dimensi = null;
        $this->penyunting = null;
        $this->status = null;
        $this->isbn = null;
        $this->grade = null;
        $this->penerbit = null;
        $this->tahun_terbit = null;
        $this->harga = null;
        $this->halaman = null;
        $this->bahasa = null;
        $this->deskripsi = null;
        $this->foto = null;
        $this->nama_foto = null;
        $this->dispatchBrowserEvent('delete-deskripsi');
        $this->dispatchBrowserEvent('delete-sinopsis');
    }

    public function updatedFoto()
    {
        $this->validate([
            'foto' => 'mimes:pdf,png,jpg,jpeg|file|max:1024',
        ]);

        $this->nama_foto = str_replace('public', '', $this->foto->store('public'));
    }
}
