@extends('admin.layouts.main')
@section('title')
    لوحة التحكم
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">الصفحة الرئيسية</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">الصفحة الرئيسية</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="small-box bg-info">
                        <div class="inner text-center">
                            <h3>{{ $blogs }}</h3>
                            <p>مقالات المدونة</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner text-center">
                            <h3>{{ $categories }}</h3>
                            <p>الاقسام</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner text-center">
                            <h3>{{ $articles }}</h3>
                            <p>مقالات الاقسام</p>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
