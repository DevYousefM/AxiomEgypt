@extends('admin.layouts.main')

@section('title')
    تعديل مقال في قسم
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
    <style>
        .my-card {
            width: 100%;
            padding: 15px 20px;
            margin: 0 18px;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: 0.25rem;
        }
    </style>
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>تعديل مقال في قسم</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.homepage') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.category_articles.index') }}">مقالات
                                الاقسام</a></li>
                        <li class="breadcrumb-item active">تعديل مقال في قسم</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('dashboard.category_articles.update', $article->id) }}" class="row" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 col-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title col-12 text-left p-0 m-0">
                            المقال باللغة العربية
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال</label>
                            <input type="text" value="{{ $article->translate('ar')->title }}" class="form-control"
                                name="ar[title]" id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('ar.title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug المقال</label>
                            <input type="text" value="{{ $article->translate('ar')->slug }}" class="form-control"
                                name="ar[slug]" id="exampleInputEmail1" placeholder="Slug المقال">
                        </div>
                        @error('ar.slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="content">المقال</label>
                            <textarea class="textEditor" name="ar[content]"
                                style="width: 100%; height: 200px; 
                                font-size: 14px; line-height: 18px; 
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ $article->translate('ar')->content }}</textarea>
                        </div>
                        @error('ar.content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="short_content">جزء من المقال (100 حرف) للعرض في صفحة مقالات القسم</label>
                            <textarea maxlength="100" name="ar[short_content]"
                                style="width: 100%; height: 100px; 
                                font-size: 14px; line-height: 18px; 
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ $article->translate('ar')->short_content }}</textarea>
                        </div>
                        @error('ar.short_content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال (SEO) </label>
                            <input type="text" value="{{ $article->translate('ar')->seo_title }}" class="form-control"
                                name="ar[seo_title]" id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('ar.seo_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">الوصف (SEO) </label>
                            <textarea class="textarea" name="ar[seo_desc]" rows="4"
                                style="width: 100%;font-size: 14px;
                            line-height: 18px;
                            border: 1px solid #dddddd; 
                            padding: 10px;">{{ $article->translate('ar')->seo_desc }}</textarea>
                        </div>
                        @error('ar.seo_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <!-- /.col-->
            <div class="col-md-6 col-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title col-12 text-left p-0 m-0">
                            المقال باللغة الأنجليزية
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال</label>
                            <input type="text" value="{{ $article->translate('en')->title }}" class="form-control"
                                name="en[title]" id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('en.title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug المقال</label>
                            <input type="text" value="{{ $article->translate('en')->slug }}" class="form-control"
                                name="en[slug]" id="exampleInputEmail1" placeholder="Slug المقال">
                        </div>
                        @error('ar.slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="content">المقال</label>
                            <textarea class="textEditor" name="en[content]"
                                style="width: 100%; height: 200px; 
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ $article->translate('en')->content }}</textarea>
                        </div>
                        @error('en.content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="short_content">جزء من المقال (100 حرف) للعرض في صفحة مقالات القسم</label>
                            <textarea maxlength="100" name="en[short_content]"
                                style="width: 100%; height: 100px; 
                                font-size: 14px; line-height: 18px; 
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ $article->translate('en')->short_content }}</textarea>
                        </div>
                        @error('en.short_content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال (SEO) </label>
                            <input type="text" value="{{ $article->translate('en')->seo_title }}"
                                class="form-control" name="en[seo_title]" id="exampleInputEmail1"
                                placeholder="عنوان المقال">
                        </div>
                        @error('en.seo_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">الوصف (SEO) </label>
                            <textarea class="textarea" name="en[seo_desc]" rows="4"
                                style="width: 100%;
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ $article->translate('en')->seo_desc }}</textarea>
                        </div>
                        @error('en.seo_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group bg-white mb-4 d-flex justify-content-center my-card">
                <img src="{{ asset('uploads/' . $article->image) }}" class="img-fluid mb-2 col-10"
                    alt="Responsive image">
            </div>
            <div class="form-group bg-white mb-4 my-card">
                <label for="exampleInputFile">صورة المقال</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">تصفح</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">رفع</span>
                    </div>
                </div>
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group bg-white mb-4 d-flex justify-content-center my-card">
                <img src="{{ asset('uploads/' . $article->cover) }}" class="img-fluid mb-2 col-10"
                    alt="Responsive image">
            </div>
            <div class="form-group bg-white mb-4 my-card">
                <label for="exampleInputFile">صورة غلاف المقال</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" name="cover" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">تصفح</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">رفع</span>
                    </div>
                </div>
                @error('cover')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group bg-white mb-4 my-card">
                <label>قسم المقال</label>
                <select name="category" class="form-control py-0">
                    <option value="-" selected disabled>اختر القسم</option>
                    @foreach ($categories as $item)
                        @foreach ($item->translations as $t)
                            @if ($t->locale == 'ar')
                                <option value="{{ $item->id }}"
                                    {{ $article->category->id === $item->id ? 'selected' : null }}>{{ $t->name }}
                                </option>
                            @endif
                        @endforeach
                    @endforeach
                </select>
                @error('category')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <!-- /.col-->
            <div class="card-footer col-12">
                <button type="submit" class="btn btn-primary">أضافة</button>
            </div>
        </form>
        <!-- ./row -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <!-- Summernote -->
    <script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script>
        $(function() {
            $('.textEditor').summernote({
                height: 100
            })
        })
    </script>
@endsection
