<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blogs.index', ["blogs" => $blogs]);
    }
    public function create()
    {
        return view("admin.blogs.add");
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
                Rule::unique('blog_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'ar');
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('blog_translations', 'slug')->where(function ($query) use ($request) {
                    return $query->where('locale', 'en');
                }),
            ],

            'cover' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $cover = $request->file('cover')->store("/blogs", 'public');
        $data["cover"] = $cover;

        $image = $request->file('image')->store("/blogs", 'public');
        $data["image"] = $image;

        Blog::create($data);
        return redirect()->route("dashboard.blog.index");
    }
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', ['blog' => $blog]);
    }
    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
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
                Rule::unique('blog_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'ar')->where('blog_id', '<>', $id);
                }),
            ],
            'en.slug' => [
                'required',
                'string',
                Rule::unique('blog_translations', 'slug')->where(function ($query) use ($id) {
                    return $query->where('locale', 'en')->where('blog_id', '<>', $id);
                }),
            ],
            'cover' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        if ($request->hasFile('cover')) {
            Storage::disk('public')->delete($blog->cover);
            $path = $request->file('cover')->store("/blogs", 'public');
            $data["cover"] = $path;
        }
        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($blog->image);
            $path = $request->file('image')->store("/blogs", 'public');
            $data["image"] = $path;
        }
        $blog->update($data);
        return redirect()->route("dashboard.blog.index");
    }
    public function delete($id)
    {
        $blog = Blog::find($id);
        if (!$blog) redirect()->route('dashboard.blog.index');
        Storage::disk('public')->delete($blog->cover);
        Storage::disk('public')->delete($blog->image);
        $blog->delete();
        return redirect()->route("dashboard.blog.index");
    }
}
