<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory, HasTranslations;
    protected $fillable = ["name", "icon", 'order'];
    public $translatable = ['name'];

    public function products(){
        return $this->hasMany(Product::class);
    }
        
}
