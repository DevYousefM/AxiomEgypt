<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'content',
        'short_content',
        'seo_title',
        'seo_desc',
        'slug'
    ];
}
