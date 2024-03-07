<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        Route::get('/', [FrontController::class, 'index'])->name('homepage');
        Route::get('/blog', [FrontController::class, "blog"])->name("blog");
        Route::get('/blog/{slug}', [FrontController::class, "single"])->name("blog.show");

        Route::get('/services', [FrontController::class, "services"])->name("services");
        Route::get('/service/{slug}', [FrontController::class, "service"])->name("services.show");
        Route::get('/service/article/{slug}', [FrontController::class, "article"])->name("article.show");
    }
);
require __DIR__ . '/auth.php';
