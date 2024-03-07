@extends('admin.layouts.main')

@section('title')
    أضافة قسم
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
                    <h1>أضافة قسم</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.homepage') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.categories.index') }}">الاقسام</a></li>
                        <li class="breadcrumb-item active">أضافة قسم</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <form action="{{ route('dashboard.categories.store') }}" class="row" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="col-md-6 col-12">
                <div class="card card-outline card-info">
                    <div class="card-header">
                        <h3 class="card-title col-12 text-left p-0 m-0">
                            القسم باللغة العربية
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">الأسم</label>
                            <input type="text" value="{{ old('ar.name') }}" class="form-control" name="ar[name]"
                                id="exampleInputEmail1" placeholder="الأسم">
                        </div>
                        @error('ar.name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug القسم</label>
                            <input type="text" value="{{ old('ar.slug') }}" class="form-control" name="ar[slug]"
                                id="exampleInputEmail1" placeholder="Slug القسم">
                        </div>
                        @error('ar.slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pad">
                        <div>
                            <label for="exampleInputEmail1">وصف القسم</label>
                            <textarea class="textarea" name="ar[desc]"
                                style="width: 100%; height: 100px;
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd;
                                padding: 10px;">{{ old('ar.desc') }}</textarea>
                        </div>
                        @error('ar.desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان القسم (SEO) </label>
                            <input type="text" value="{{ old('ar.seo_title') }}" class="form-control"
                                name="ar[seo_title]" id="exampleInputEmail1" placeholder="عنوان القسم">
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
                            القسم باللغة الأنجليزية
                        </h3>
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">الأسم</label>
                            <input type="text" value="{{ old('en.name') }}" class="form-control" name="en[name]"
                                id="exampleInputEmail1" placeholder="الأسم">
                        </div>
                        @error('en.name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">Slug القسم</label>
                            <input type="text" value="{{ old('en.slug') }}" class="form-control" name="en[slug]"
                                id="exampleInputEmail1" placeholder="Slug القسم">
                        </div>
                        @error('en.slug')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pad">
                        <div>
                            <label for="exampleInputEmail1">وصف القسم</label>
                            <textarea class="textarea" name="en[desc]"
                                style="width: 100%; height: 100px;
                                font-size: 14px; line-height: 18px;
                                border: 1px solid #dddddd;
                                padding: 10px;">{{ old('en.desc') }}</textarea>
                        </div>
                        @error('en.desc')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="card-body pb-0">
                        <div class="form-group mb-0">
                            <label for="exampleInputEmail1">عنوان القسم (SEO) </label>
                            <input type="text" value="{{ old('en.seo_title') }}" class="form-control"
                                name="en[seo_title]" id="exampleInputEmail1" placeholder="عنوان القسم">
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
                                style="width: 100%; height: 200px;
                                font-size: 14px; line-height: 18px; border:
                                1px solid #dddddd; padding: 10px;">{{ old('en.seo_desc') }}</textarea>
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
                <label for="exampleInputFile">صورة القسم</label>
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
