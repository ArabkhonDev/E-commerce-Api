<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory, HasTranslations;

    protected $fillable = ['name', 'price', 'desc', 'category_id']; 
    public $translatable = ['name', 'desc'];

    public function category(){
        return $this->belongsTo(Product::class);
    }
}
