<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blog_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->text('title');
            $table->text('seo_title');
            $table->longText('content');
            $table->text('short_content');
            $table->longText('seo_desc');
            $table->text('slug');
            $table->unique(['blog_id', 'locale']);
            $table->foreignId('blog_id')->references('id')->on('blogs')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blog_translations');
    }
};
