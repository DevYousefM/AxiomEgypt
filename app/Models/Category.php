<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory, Translatable;
    protected $fillable = ['image'];
    public $translatedAttributes = ['name', 'slug', 'desc', 'seo_title', 'seo_desc'];

    public function articles(): HasMany
    {
        return $this->hasMany(CategoryArticle::class);
    }
}
