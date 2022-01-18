<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['name','category_id','image','description'];

    public function category(){
        return $this->belongsTo(NewsCategories::class);
    }
}
