<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function blog()
    {
        $blogs = Blog::all();
        return view('blogs', ["blogs" => $blogs]);
    }
    public function single($slug)
    {
        $blog = Blog::whereTranslation('slug', $slug)
            ->whereTranslation('locale', app()->getLocale())
            ->first();
        $anotherBlogs = Blog::where('id', '!=', $blog->id)->withTranslation('locale', app()->getLocale())->latest()->take(3)->get();
        return view('single', ["blog" => $blog, 'anotherBlogs' => $anotherBlogs]);
    }
    public function services()
    {
        $services = Category::all();
        return view('services', ["services" => $services]);
    }
    public function service($slug)
    {
        $service = Category::whereTranslation('slug', $slug)
            ->whereTranslation('locale', app()->getLocale())
            ->first();
        return view('service', ["service" => $service]);
    }
    public function article($slug)
    {
        return $slug;
        $article = CategoryArticle::whereTranslation('slug', $slug)
            ->whereTranslation('locale', app()->getLocale())
            ->first();
        $anotherArticles = CategoryArticle::where('id', '!=', $article->id)->where('category_id', $article->category->id)->withTranslation('locale', app()->getLocale())->latest()->take(3)->get();
        return view('article', ["article" => $article, 'anotherArticles' => $anotherArticles]);
    }
}
