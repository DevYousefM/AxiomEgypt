<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_article_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->text('title');
            $table->text('seo_title');
            $table->longText('content');
            $table->text('short_content');
            $table->longText('seo_desc');
            $table->text('slug');
            $table->unique(['category_article_id', 'locale']);
            $table->foreignId('category_article_id')->references('id')->on('category_articles')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_article_translations');
    }
};
