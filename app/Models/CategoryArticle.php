<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class CategoryArticle extends Model
{
    use HasFactory, Translatable;
    protected $fillable = ['cover', 'image', 'category_id'];
    public $translatedAttributes = [
        'title',
        'content',
        'short_content',
        'seo_title',
        'seo_desc',
        'slug',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    protected static function booted()
    {
        static::deleted(function ($article) {
            $article->deleteImages();
        });
    }
    public function deleteImages()
    {
        Storage::disk('public')->exists($this->image)
            && Storage::disk('public')->delete($this->image);

        Storage::disk('public')->exists($this->cover)
            && Storage::disk('public')->delete($this->cover);
    }
}
