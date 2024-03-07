<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProfileController;
use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryArticle;
use Illuminate\Support\Facades\Route;


Route::middleware('checkAdmin')->group(function () {
  Route::get("/", function () {
    $blogs = Blog::all();
    $categories = Category::all();
    $category_articles = CategoryArticle::all();
    return view("admin.pages.dashboard", ['blogs' => count($blogs), 'categories' => count($categories), 'articles' => count($category_articles),]);
  })->name("homepage");

  Route::prefix("profile")->name("profile.")->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/update', [ProfileController::class, 'update'])->name('update');
    Route::post('/update-password', [ProfileController::class, 'updatePassword'])->name('updatePassword');
  });
  Route::prefix("blog")->name("blog.")->group(function () {
    Route::get("/", [BlogController::class, "index"])->name("index");
    Route::get("/add", [BlogController::class, "create"])->name("create");
    Route::post("/store", [BlogController::class, "store"])->name("store");
    Route::get("/edit/{id}", [BlogController::class, "edit"])->name("edit");
    Route::post("/update/{id}", [BlogController::class, "update"])->name("update");
    Route::delete("/delete/{id}", [BlogController::class, "delete"])->name("delete");
  });
  Route::prefix("categories")->name("categories.")->group(function () {
    Route::get("/", [CategoryController::class, "index"])->name("index");
    Route::get("/add", [CategoryController::class, "create"])->name("create");
    Route::post("/store", [CategoryController::class, "store"])->name("store");
    Route::get("/edit/{id}", [CategoryController::class, "edit"])->name("edit");
    Route::post("/update/{id}", [CategoryController::class, "update"])->name("update");
    Route::delete("/delete/{id}", [CategoryController::class, "delete"])->name("delete");
  });
  Route::prefix("category-articles")->name("category_articles.")->group(function () {
    Route::get("/", [CategoryArticleController::class, "index"])->name("index");
    Route::get("/add", [CategoryArticleController::class, "create"])->name("create");
    Route::post("/store", [CategoryArticleController::class, "store"])->name("store");
    Route::get("/edit/{id}", [CategoryArticleController::class, "edit"])->name("edit");
    Route::post("/update/{id}", [CategoryArticleController::class, "update"])->name("update");
    Route::delete("/delete/{id}", [CategoryArticleController::class, "delete"])->name("delete");
  });
});
