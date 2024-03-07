<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory, Translatable;
    protected $fillable = ['cover', 'image'];
    public $translatedAttributes = [
        'title',
        'content',
        'short_content',
        'seo_title',
        'seo_desc',
        'slug'
    ];
}
