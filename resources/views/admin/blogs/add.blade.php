@extends('admin.layouts.main')

@section('title')
    أضافة مقال
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('admin/plugins/summernote/summernote-bs4.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>أضافة مقال</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.homepage') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.blog.index') }}">المدونة</a></li>
                        <li class="breadcrumb-item active">أضافة مقال</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('dashboard.blog.store') }}" class="row" method="post" enctype="multipart/form-data">
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
                            <input type="text" value="{{ old('ar.title') }}" class="form-control" name="ar[title]"
                                id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('ar.title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug المقال</label>
                            <input type="text" value="{{ old('ar.slug') }}" class="form-control" name="ar[slug]"
                                id="exampleInputEmail1" placeholder="Slug المقال">
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
                                style="width: 100%; 
                                height: 200px; 
                                font-size: 14px; line-height: 18px; border: 1px solid #dddddd;
                                padding: 10px;">{{ old('ar.content') }}</textarea>
                        </div>
                        @error('ar.content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="short_content">جزء من المقال (100 حرف) للعرض في صفحة المقالات</label>
                            <textarea maxlength="100" name="ar[short_content]"
                                style="width: 100%; height: 100px; 
                                font-size: 14px; line-height: 18px; 
                                border: 1px solid #dddddd; 
                                padding: 10px;">{{ old('ar.short_content') }}</textarea>
                        </div>
                        @error('ar.short_content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال (SEO) </label>
                            <input type="text" value="{{ old('ar.seo_title') }}" class="form-control"
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
                            <textarea class="textarea" name="ar[seo_desc]"
                                style="width: 100%; height: 200px; 
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd;
                                padding: 10px;">{{ old('ar.seo_desc') }}</textarea>
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
                            <input type="text" value="{{ old('en.title') }}" class="form-control" name="en[title]"
                                id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('en.title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug المقال</label>
                            <input type="text" value="{{ old('en.slug') }}" class="form-control" name="en[slug]"
                                id="exampleInputEmail1" placeholder="Slug المقال">
                        </div>
                        @error('en.slug')
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
                                padding: 10px;">{{ old('en.content') }}</textarea>
                        </div>
                        @error('en.content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="short_content">جزء من المقال (100 حرف) للعرض في صفحة المقالات</label>
                            <textarea maxlength="100" name="en[short_content]"
                                style="width: 100%; height: 100px;
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd;
                                padding: 10px;">{{ old('en.short_content') }}</textarea>
                        </div>
                        @error('en.short_content')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان المقال (SEO) </label>
                            <input type="text" value="{{ old('en.seo_title') }}" class="form-control"
                                name="en[seo_title]" id="exampleInputEmail1" placeholder="عنوان المقال">
                        </div>
                        @error('en.seo_title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pad">
                        <div class="mb-3">
                            <label for="exampleInputEmail1">الوصف (SEO) </label>
                            <textarea class="textarea" name="en[seo_desc]"
                                style="width: 100%; height: 200px; font-size: 14px;
                                line-height: 18px; border: 1px solid #dddddd;
                                padding: 10px;">{{ old('en.seo_desc') }}</textarea>
                        </div>
                        @error('en.seo_desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group bg-white mb-4"
                style="
                width: 100%;
                padding: 15px 20px;
                margin: 0 18px;
                border: 1px solid rgba(0, 0, 0, .125);
                border-radius: 0.25rem;">
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
            <div class="form-group bg-white mb-4"
                style="
                width: 100%;
                padding: 15px 20px;
                margin: 0 18px;
                border: 1px solid rgba(0, 0, 0, .125);
                border-radius: 0.25rem;">
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
            $('.textEditor').summernote()
        })
    </script>
@endsection
