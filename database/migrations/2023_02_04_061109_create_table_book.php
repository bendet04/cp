<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('foto');
            $table->string('penulis');
            $table->text('sinopsis');
            $table->string('isbn');
            $table->string('grade');
            $table->string('penerbit');
            $table->integer('tahun_terbit');
            $table->integer('harga');
            $table->integer('halaman');
            $table->string('bahasa');
            $table->string('dimensi');
            $table->string('penyunting');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book');
    }
}
