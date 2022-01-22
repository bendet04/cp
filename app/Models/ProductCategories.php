<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategories extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];

    public function Products(){
        return $this->hasMany(Products::class, 'category_id');
    }
}
