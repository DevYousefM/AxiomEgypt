@extends('layouts.main')
@section('title')
    @lang('site.services.title')
@endsection

@section('content')
    <!--Start services style1 area-->
    <section id="services" class="blogs pt-3">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> @lang('site.services.title') </div>
                <div class="inner">
                    <div class="border1"></div>
                    <span> @lang('site.services.solution') </span>
                    <div class="border2"></div>
                </div>
                <p>
                    @lang('site.services.p')
                </p>
            </div>
            <div class="blog-cards">
                @foreach ($services as $item)
                    @foreach ($item->translations as $t)
                        @if ($t->locale == app()->getLocale())
                            <div class="blog-card col-xl-3 col-lg-4 col-md-6 col-sm-6">

                                <div class="img-holder">
                                    <img src="{{ asset('uploads/' . $item->image) }}" alt="{{ $t->seo_title }}">
                                </div>
                                <div class="statics-content">
                                    <div class="text-holder">
                                        <div class="text">
                                            <h3 class="mb-1">{{ $t->name }}</h3>
                                        </div>
                                    </div>
                                    <div class="readmore mt-0">
                                        <a class="btn-two" href="{{ route('services.show', $t->slug) }}"><span
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
