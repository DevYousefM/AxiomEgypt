<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('category_articles', function (Blueprint $table) {
            $table->id();
            $table->string("cover");
            $table->string("image");
            $table->foreignId("category_id")->references("id")->on("categories")->onDelete("cascade");
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('category_articles');
    }
};
