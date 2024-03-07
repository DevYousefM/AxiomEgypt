@extends('layouts.main')
@section('title')
    {{ $service->name }}
@endsection
<meta name="description" content="{{ $service->seo_desc }}">
<meta property="og:title" content="{{ $service->seo_title }}">
<meta property="og:description" content="{{ $service->seo_desc }}">

@section('content')
    <!--Start services style1 area-->
    <section id="services" class="blogs pt-3">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> {{ $service->name }} </div>
                <div class="inner">
                    <div class="border1"></div>
                    <span> @lang('site.services.take_a_look') </span>
                    <div class="border2"></div>
                    <p>
                        {{ $service->desc }}
                    </p>
                </div>
            </div>
            <div class="blog-cards">
                @foreach ($service->articles as $item)
                    @foreach ($item->translations as $t)
                        @if ($t->locale == app()->getLocale())
                            <div class="blog-card col-xl-3 col-lg-4 col-md-6 col-sm-6">

                                <div class="img-holder">
                                    <img src="{{ asset('uploads/' . $item->image) }}" alt="{{ $t->seo_title }}">
                                </div>
                                <div class="statics-content">
                                    <div class="text-holder">
                                        <div class="text">
                                            <h3 class="mb-2">{{ $t->title }}</h3>
                                            <p class="text-limit">
                                                {{ $t->short_content }}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="readmore mb-0">
                                        <a class="btn-two" href="{{ route('article.show', $t->slug) }}"><span
                                                class="icon-arrow"></span><span>@lang('site.know_more')</span></a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
@endsection
