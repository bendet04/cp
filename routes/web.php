<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',  \App\Http\Livewire\PublicNews::class);
Route::get('/produk', \App\Http\Livewire\PublicProduct::class)->name('produk');
Route::get('/buku-terbit', \App\Http\Livewire\PublicBookRelease::class)->name('buku-terbit');
Route::get('/buku-akan-terbit', \App\Http\Livewire\PublicBookWillRelease::class)->name('buku-akan-terbit');
Route::get('/cari-buku', \App\Http\Livewire\PublicBookSearch::class)->name('cari-buku');
Route::get('/profil', \App\Http\Livewire\PublicProfil::class)->name('profil');
Route::get('/buku-detail/{id}', \App\Http\Livewire\PublicBookDetail::class)->name('buku-buku');
Route::get('/produk-detail/{id}', \App\Http\Livewire\ProductDetail::class)->name('produk-detail');
Route::get('/news-detail/{id}', \App\Http\Livewire\NewsDetail::class)->name('news-detail');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/products', \App\Http\Livewire\Products::class)->name('products');
    Route::get('/books', \App\Http\Livewire\Book::class)->name('books');
    Route::get('/product-category', \App\Http\Livewire\ProductCategory::class)->name('product-category');
    Route::get('/news', \App\Http\Livewire\News::class)->name('news');
    Route::get('/news-category', \App\Http\Livewire\NewsCategory::class)->name('news-category');
});
