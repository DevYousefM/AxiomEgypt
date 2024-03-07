@extends('admin.layouts.main')

@section('title')
    مقالات الاقسام
@endsection
@section('css')
    <style>
        div.dataTables_wrapper div.dataTables_filter {
            text-align: left !important;
        }

        #category_articles td:last-child {
            border-right: 1px solid #dee2e6;
        }
    </style>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>مقالات الاقسام</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.homepage') }}">الرئيسية</a></li>
                        <li class="breadcrumb-item active">مقالات الاقسام</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row mr-0">
            <div class="col-12">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-12 d-flex justify-content-end p-0">
                            <button class="btn btn-primary mb-2">
                                <a class="text-white" href="{{ route('dashboard.category_articles.create') }}">أضافة
                                    مقال</a>
                            </button>
                        </div>
                        <table id="category_articles" class="table table-bordered table-hover" dir="rtl">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>صورة المقال</th>
                                    <th>Slug المقال</th>
                                    <th>القسم</th>
                                    <th>المقال</th>
                                    <th>حذف</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($category_articles as $index => $item)
                                    @foreach ($item->translations as $t)
                                        @if ($t->locale === 'ar')
                                            <tr>
                                                <td style="vertical-align: middle !important;width:0">
                                                    <span>{{ $index + 1 }}</span>
                                                </td>
                                                <td style="width: 10rem">
                                                    <img src="{{ asset('uploads/' . $item->image) }}" class="col-12"
                                                        alt="">
                                                </td>
                                                <td style="vertical-align: middle !important;">
                                                    <span>
                                                        {{ $t->slug }}
                                                    </span>
                                                </td>
                                                <td style="vertical-align: middle !important;">
                                                    @foreach ($item->category->translations as $c)
                                                        @if ($c->locale == 'ar')
                                                            <span>
                                                                {{ $c->name }}
                                                            </span>
                                                        @endif
                                                    @endforeach
                                                </td>
                                                <td style="vertical-align: middle !important;">
                                                    <a href="{{ route('dashboard.category_articles.edit', $item->id) }}">
                                                        <button class="btn bg-success">
                                                            عرض
                                                        </button>
                                                    </a>
                                                </td>
                                                <td style="vertical-align: middle !important;">
                                                    <form
                                                        action="{{ route('dashboard.category_articles.delete', $item->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn bg-danger"
                                                            onclick="return confirm('Are you sure you want to delete this article?')">حذف</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
@section('js')
    <!-- DataTables -->
    <script src="{{ asset('admin/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>

    <!-- page script -->
    <script>
        $(function() {
            $('#category_articles').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "lengthChange": true,
                "lengthMenu": [10, 25, 50, 100],
                "language": {
                    "lengthMenu": " _MENU_ ",
                    "zeroRecords": "@lang('site.emptyTable')",
                    "info": "@lang('site.infoS') (_PAGE_) @lang('site.page') @lang('site.of') (_PAGES_) @lang('site.pages')",
                    "infoEmpty": "@lang('site.emptyTable')",
                    "search": "@lang('site.search') : ",
                }
            });
        });
    </script>
@endsection
