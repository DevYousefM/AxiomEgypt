<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CategoryArticleController extends Controller
{
    public function index()
    {
        $category_articles = CategoryArticle::all();
        return view('admin.category_articles.index', ['category_articles' => $category_articles]);
    }
    public function create()
    {
        $categories = Category::all();
        return view("admin.category_articles.add", ['categories' => $categories]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'ar.title' => 'required|string|max:255',
            'en.title' => 'required|string|max:255',

            'ar.content' => 'required|string',
            'en.content' => 'required|string',

            'ar.short_content' => 'required|string|max:100',
            'en.short_content' => 'required|string|max:100',

            'ar.seo_title' => 'required|string|max:255',
            'en.seo_title' => 'required|string|max:255',

            'ar.seo_desc' => 'required|string',
            'en.seo_desc' => 'required|string',

            'ar.slug' => [
                'required',
                'string',
                Rule::unique('category_article_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'ar');
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('category_article_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'en');
                }),
            ],

            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|exists:categories,id'
        ]);

        $cover = $request->file('cover')->store("/category-articles", 'public');
        $data["cover"] = $cover;

        $image = $request->file('image')->store("/category-articles", 'public');
        $data["image"] = $image;

        $data["category_id"] = $request->category;

        CategoryArticle::create($data);
        return redirect()->route("dashboard.category_articles.index");
    }
    public function edit($id)
    {
        $article = CategoryArticle::findOrFail($id);
        $categories = Category::all();
        return view('admin.category_articles.edit', ['article' => $article, 'categories' => $categories]);
    }
    public function update(Request $request, $id)
    {
        $article = CategoryArticle::findOrFail($id);
        $data = $request->validate([
            'ar.title' => 'required|string|max:255',
            'en.title' => 'required|string|max:255',

            'ar.content' => 'required|string',
            'en.content' => 'required|string',

            'ar.short_content' => 'required|string|max:100',
            'en.short_content' => 'required|string|max:100',

            'ar.seo_title' => 'required|string|max:255',
            'en.seo_title' => 'required|string|max:255',

            'ar.seo_desc' => 'required|string',
            'en.seo_desc' => 'required|string',
            'ar.slug' => [
                'required',
                'string',
                Rule::unique('category_article_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'ar')->where('category_article_id', '<>', $id);
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('category_article_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'en')->where('category_article_id', '<>', $id);
                }),
            ],
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category' => 'required|exists:categories,id'
        ]);
        if ($request->hasFile('cover')) {
            Storage::disk('public')->delete($article->cover);
            $path = $request->file('cover')->store("/category-articles", 'public');
            $data["cover"] = $path;
        }
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($article->image);
            $path = $request->file('image')->store("/category-articles", 'public');
            $data["image"] = $path;
        }
        $data["category_id"] = $request->category;

        $article->update($data);
        return redirect()->route("dashboard.category_articles.index");
    }
    public function delete($id)
    {
        $article = CategoryArticle::find($id);
        if (!$article) redirect()->route('dashboard.category_articles.index');
        $article->delete();
        return redirect()->route("dashboard.category_articles.index");
    }
}
