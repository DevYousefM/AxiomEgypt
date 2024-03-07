@extends('layouts.main')

@section('title')
    {{ $blog->seo_title }}
@endsection
<meta name="description" content="{{ $blog->seo_desc }}">
<meta property="og:title" content="{{ $blog->seo_title }}">
<meta property="og:description" content="{{ $blog->seo_desc }}">

@section('css')
    <link rel="stylesheet" href="{{ asset('css/single.css') }}">
@endsection
@section('content')
    <div class="site-cover site-cover-sm same-height overlay single-page"
        style="background-image: url('{{ asset('uploads/' . $blog->cover) }}');">
        <div class="container">
            <div class="row same-height justify-content-center">
                <div class="col-md-6">
                    <div class="post-entry text-center">
                        <h1 class="mb-4">
                            {{ $blog->title }}
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section">
        <div class="container-fluid">

            <div class="row blog-entries element-animate">

                <div class="col-12 main-content">

                    <div class="post-content-body">
                        {!! $blog->content !!}
                    </div>
                </div>

                <!-- END main-content -->

                <!-- END sidebar -->

            </div>
        </div>
    </section>


    <!-- Start posts-entry -->
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <div class="more-blogs">
                @foreach ($anotherBlogs as $item)
                    <div class="blog-card col-xl-3 col-lg-4 col-md-6 col-sm-6 h-100">
                        <div class="img-holder">
                            <img src="{{ asset('uploads/' . $item->image) }}" alt="{{ $item->translations[0]->seo_title }}">
                        </div>
                        <div class="statics-content">
                            <div class="text-holder">
                                <div class="text">
                                    <h3> {{ $item->translations[0]->title }} </h3>
                                    <p class="text-limit">
                                        {{ $item->translations[0]->short_content }}
                                    </p>
                                </div>
                            </div>
                            <div class="readmore mb-0">
                                <a class="btn-two" href="{{ route('blog.show', $item->translations[0]->slug) }}"><span
                                        class="icon-arrow"></span><span>@lang('site.know_more')</span></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End posts-entry -->
@endsection
