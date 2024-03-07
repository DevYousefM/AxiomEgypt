<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index', ["categories" => $categories]);
    }
    public function create()
    {
        return view("admin.categories.add");
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'ar.name' => 'required|string|max:255',
            'en.name' => 'required|string|max:255',

            'ar.seo_title' => 'required|string|max:255',
            'en.seo_title' => 'required|string|max:255',

            'ar.seo_desc' => 'required|string',
            'en.seo_desc' => 'required|string',

            'ar.desc' => 'required|string|max:450',
            'en.desc' => 'required|string|max:450',

            'ar.slug' => [
                'required',
                'string',
                Rule::unique('category_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'ar');
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('category_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'en');
                }),
            ],

            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $image = $request->file('image')->store("/categories", 'public');
        $data["image"] = $image;

        Category::create($data);
        return redirect()->route("dashboard.categories.index");
    }
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', ['category' => $category]);
    }
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $data = $request->validate([
            'ar.name' => 'required|string|max:255',
            'en.name' => 'required|string|max:255',

            'ar.seo_title' => 'required|string|max:255',
            'en.seo_title' => 'required|string|max:255',

            'ar.seo_desc' => 'required|string',
            'en.seo_desc' => 'required|string',

            'ar.desc' => 'required|string|max:450',
            'en.desc' => 'required|string|max:450',

            'ar.slug' => [
                'required',
                'string',
                Rule::unique('category_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'ar')->where('category_id', '<>', $id);
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('category_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'en')->where('category_id', '<>', $id);
                }),
            ],
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($category->image);
            $path = $request->file('image')->store("/categories", 'public');
            $data["image"] = $path;
        }
        $category->update($data);
        return redirect()->route("dashboard.categories.index");
    }
    public function delete($id)
    {
        $category = Category::find($id);
        if (!$category) redirect()->route('dashboard.categories.index');

        Storage::disk('public')->delete($category->image);
        $category->articles->each(function ($article) {
            Storage::disk("public")->delete($article->image);
            Storage::disk("public")->delete($article->cover);
        });

        $category->delete();
        return redirect()->route("dashboard.categories.index");
    }
}
