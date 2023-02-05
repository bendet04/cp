<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['judul', 'deskripsi', 'penulis', 'sinopsis', 'isbn', 'grade', 'penerbit', 'tahun_terbit', 'harga', 'halaman', 'bahasa', 'dimensi', 'penyunting', 'status', 'foto', 'nama_foto', 'created_at', 'updated_at'];
}
