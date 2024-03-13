@extends('layouts.main')
@section('title')
    @lang('site.axiom')
@endsection
@section('content')
    <!--Main Slider-->
    <!-- start of hero -->
    <section class="hero-slider hero-style">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('images/slides/slide01.jpg') }}">
                        <div class="container overlay-saiko">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>
                                    @lang('site.hero.slide_one.h2')
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>
                                    @lang('site.hero.slide_one.p')
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="#contact" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i>
                                    @lang('site.hero.get_info')
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->

                <div class="swiper-slide ">
                    <div class="slide-inner slide-bg-image" data-background="{{ asset('images/slides/slide03.jpg') }}">
                        <div class="container overlay-saiko">
                            <div data-swiper-parallax="300" class="slide-title">
                                <h2>
                                    @lang('site.hero.slide_two.h2')
                                </h2>
                            </div>
                            <div data-swiper-parallax="400" class="slide-text">
                                <p>
                                    @lang('site.hero.slide_two.p')
                                </p>
                            </div>
                            <div class="clearfix"></div>
                            <div data-swiper-parallax="500" class="slide-btns">

                                <a href="#contact" class="theme-btn-s3"><i class="fas fa-chevron-circle-right"></i>
                                    @lang('site.hero.get_info')
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- end slide-inner -->
                </div>
                <!-- end swiper-slide -->
            </div>
            <!-- end swiper-wrapper -->

            <!-- swipper controls -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- end of hero slider -->
    <!--End Main Slider-->

    <!--Start Call To Action area-->
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="callto-action">
                        <ul>
                            <li class="single-box wow fadeInUp" data-wow-delay="300ms">
                                <div class="top">
                                    <div class="icon-holder icon ">
                                        <img class="float-right" src="{{ asset('images/icon/maintenance (1).png') }}"
                                            alt="">
                                    </div>
                                    <div class="title-holder">
                                        <h3> @lang('site.call_to_action.card_one.h3') </h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>
                                        @lang('site.call_to_action.card_one.p')
                                    </p>
                                    <a class="btn-two" href="#contact"><span class="icon-arrow"></span>@lang('site.know_more')</a>
                                </div>
                            </li>
                            <li class="single-box wow fadeInUp" data-wow-delay="600ms">
                                <div class="top">
                                    <div class="icon-holder icon ">
                                        <img class="float-right" src="{{ asset('images/icon/oil-rig.png') }}"
                                            alt="">
                                    </div>
                                    <div class="title-holder">
                                        <h3>@lang('site.call_to_action.card_two.h3')</h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>
                                        @lang('site.call_to_action.card_two.p')
                                    </p>
                                    <a class="btn-two" href="#contact"><span
                                            class="icon-arrow"></span>@lang('site.know_more')</a>
                                </div>
                            </li>
                            <li class="single-box wow fadeInUp" data-wow-delay="900ms">
                                <div class="top">
                                    <div class="icon-holder icon ">
                                        <img class="float-right" src="{{ asset('images/icon/consultant.png') }}"
                                            alt="">
                                    </div>
                                    <div class="title-holder">
                                        <h3>
                                            @lang('site.call_to_action.card_three.h3')
                                        </h3>
                                    </div>
                                </div>
                                <div class="text-holder">
                                    <p>
                                        @lang('site.call_to_action.card_three.p')
                                    </p>
                                    <a class="btn-two" href="#contact"><span
                                            class="icon-arrow"></span>@lang('site.know_more')</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action Area-->

    <!--Start services style1 area-->
    <section id="services" class="services-style1-area">
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
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="services-carousel owl-carousel owl-theme">
                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/off.png') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/scaffolding.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_one.h3') </h3>
                                        <p class="text-limit">
                                            @lang('site.services.slides.slide_one.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/scaffolding.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_one.h3') </h3>
                                        <p>
                                            @lang('site.services.slides.slide_one.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/cycle.png') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/oil-industry.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>@lang('site.services.slides.slide_two.h3')</h3>
                                        <p class="text-limit">
                                            @lang('site.services.slides.slide_two.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/oil-industry.png') }}" alt="">

                                    </div>
                                    <div class="text">
                                        <h3>@lang('site.services.slides.slide_two.h3')</h3>
                                        <p>
                                            @lang('site.services.slides.slide_two.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/tubular inspection.jpeg') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/tubular.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_three.h3') </h3>
                                        <p class="text-limit ">
                                            @lang('site.services.slides.slide_three.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/tubular.png') }}" alt="">

                                    </div>
                                    <div class="text">
                                        <h3>@lang('site.services.slides.slide_three.h3')</h3>
                                        <p>
                                            @lang('site.services.slides.slide_three.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/main.jpeg') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/maintenance (1).png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_four.h3') </h3>
                                        <p class="text-limit">
                                            @lang('site.services.slides.slide_four.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/maintenance (1).png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>@lang('site.services.slides.slide_four.h3')</h3>
                                        <p>
                                            @lang('site.services.slides.slide_four.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/rig.jpeg') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/oil-rig.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_five.h3') </h3>
                                        <p class="text-limit">
                                            @lang('site.services.slides.slide_five.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/oil-rig.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            @lang('site.services.slides.slide_five.h3')
                                        </h3>
                                        <p>
                                            @lang('site.services.slides.slide_five.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Start single solution style1-->
                        <div class="single-solution-style1">
                            <div class="img-holder">
                                <img src="{{ asset('images/home/team-axiom.jpeg') }}" alt="Awesome Image">
                            </div>
                            <div class="statics-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/consultant.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3>
                                            @lang('site.services.slides.slide_six.h3')
                                        </h3>
                                        <p class="text-limit">
                                            @lang('site.services.slides.slide_six.p')
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay-content">
                                <div class="text-holder">
                                    <div class="icon">
                                        <img src="{{ asset('images/icon/consultant.png') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <h3> @lang('site.services.slides.slide_six.h3') </h3>
                                        <p>
                                            @lang('site.services.slides.slide_six.p_overlay')
                                        </p>
                                        <div class="readmore">
                                            <a class="btn-two" href="#contact"><span
                                                    class="icon-arrow"></span>@lang('site.know_more')</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End services style1 area-->
    <div id="why-choose-us" class="sec-title text-center">
        <div class="title">@lang('site.why_choose_us.title')</div>
        <div class="inner">
            <div class="border1"></div>
            <span>@lang('site.why_choose_us.we_provide')</span>
            <div class="border2"></div>
        </div>

    </div>
    <!--Start About area-->
    <section id="about-us" class="about-area">
        <div class="container content-box">
            <div class="row">

                <div class="col-xl-5 col-lg-5">
                    <div class="about-video-holder">
                        <div class="video-holder">
                            <img src="{{ asset('images/home/team-axiom.jpeg') }}" alt="Awesome Video Gallery">
                            <div class="overlay-gallery">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7 col-lg-7">
                    <div class="about-text-holder">

                        <div class="inner-content">
                            <h3>
                                @lang('site.why_choose_us.h3')
                            </h3>
                            <p>
                                @lang('site.why_choose_us.p')
                                <br>
                                <br>
                                @lang('site.why_choose_us.name')
                            </p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="featured-items">
                        <div class="featured-carousel owl-carousel owl-theme">
                            <!--Start Single Featured Item-->
                            <div class="single-featured-item text-center">
                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-clock-1"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>@lang('site.features.feature_one.title')</h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="box">
                                            <div class="inner-content">
                                                <h3>@lang('site.features.feature_one.title')</h3>
                                                <p>
                                                    @lang('site.features.feature_one.p')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-atom"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>@lang('site.features.feature_two.title')</h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="box">
                                            <div class="inner-content">
                                                <h3>@lang('site.features.feature_two.title')</h3>
                                                <p>@lang('site.features.feature_two.p')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Featured Item-->

                            <!--Start Single Featured Item-->
                            <div class="single-featured-item text-center">
                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-worker"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>@lang('site.features.feature_three.title')</h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="box">
                                            <div class="inner-content">
                                                <h3>@lang('site.features.feature_three.title')</h3>
                                                <p>
                                                    @lang('site.features.feature_three.p')
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-box">
                                    <div class="icon-holder">
                                        <span class="icon-business-and-finance"></span>
                                    </div>
                                    <div class="title-holder">
                                        <h3>@lang('site.features.feature_four.title')</h3>
                                    </div>
                                    <div class="overlay-content">
                                        <div class="box">
                                            <div class="inner-content">
                                                <h3>@lang('site.features.feature_four.title')</h3>
                                                <p>@lang('site.features.feature_four.p')</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Single Featured Item-->

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--End About area-->


    <!-- WHY US 1 -->

    <div class="row sa-shadow">
        <div style="padding-right: 0; min-height: 300px;" class="col-sm-6 whyus1 ">
        </div>
        <div class="col-sm-6 padding-why ">
            <div class="text-center">
                <h2 class="d-rtl">
                    <span class="number"> 01.</span>
                    <span class="text-number">
                        @lang('site.numbers.one.title')
                    </span>
                </h2>
                <p class="pt-3">
                    @lang('site.numbers.one.p')
                </p>
            </div>
            <div class="pt-3 text-center">
                <h2 class="d-rtl">
                    <span class="number"> 02.</span>
                    <span class="text-number">
                        @lang('site.numbers.two.title')
                    </span>
                </h2>
                <p class="pt-3">
                    @lang('site.numbers.two.p')
                </p>
            </div>
        </div>
    </div>

    <!--why us -->



    <div class="row sa-shadow">
        <div class="col-sm-6 order-lg-1 order-2 padding-why ">
            <div class="text-center">
                <h2 class="d-rtl">
                    <span class="number"> 03.</span>
                    <span class="text-number">
                        @lang('site.numbers.three.title')
                    </span>
                </h2>
                <p class="pt-3">
                    @lang('site.numbers.three.p')
                </p>
            </div>
            <div class="text-center">
                <h2 class="d-rtl">
                    <span class="number"> 04.</span>
                    <span class="text-number">
                        @lang('site.numbers.four.title')
                    </span>
                </h2>
                <p class="pt-3">
                    @lang('site.numbers.four.p')
                </p>
            </div>
        </div>
        <div style="padding-right: 0; min-height: 300px;" class="col-sm-6 order-lg-2 order-1 whyus ">
        </div>
    </div>
    <!--Start fact counter area-->
    <section class="fact-counter-area" style="background-image: url({{ asset('images/slides/post-cover.jpg') }});">
        <div class="container">
            <div class="row">
                <!--Start single fact counter-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-fact-counter text-center wow fadeInUp" data-wow-delay="300ms">
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="9500" data-speed="5000"
                                    data-refresh-interval="50">9500+</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('site.analytics.projects.title')</h3>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('images/icon/project-management (1).png') }}" alt="">
                            </div>
                        </div>
                        <div class="overlay-text">
                            <h1>
                                <span class="timer" data-from="1" data-to="9500" data-speed="500"
                                    data-refresh-interval="50">9500+</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('site.analytics.projects.title')</h3>
                            </div>
                            <div class="text">
                                <p>@lang('site.analytics.projects.p')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single fact counter-->
                <!--Start single fact counter-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-fact-counter text-center wow fadeInUp" data-wow-delay="600ms">
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="378" data-speed="5000"
                                    data-refresh-interval="50">378</span>
                            </h1>
                            <div class="title">
                                <h3>
                                    @lang('site.analytics.clients.title')</h3>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('images/icon/costumer.png') }}" alt="">
                            </div>
                        </div>
                        <div class="overlay-text">
                            <h1>
                                <span class="timer" data-from="1" data-to="378" data-speed="5000"
                                    data-refresh-interval="50">378</span>
                            </h1>
                            <div class="title">
                                <h3>
                                    @lang('site.analytics.clients.title')
                                </h3>
                            </div>
                            <div class="text">
                                <p>@lang('site.analytics.clients.p')</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single fact counter-->
                <!--Start single fact counter-->
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="single-fact-counter text-center wow fadeInUp" data-wow-delay="900ms">
                        <div class="count-box">
                            <h1>
                                <span class="timer" data-from="1" data-to="165" data-speed="5000"
                                    data-refresh-interval="50">165</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('site.analytics.engineers.title')</h3>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('images/icon/worker.png') }}" alt="">
                            </div>
                        </div>
                        <div class="overlay-text">
                            <h1>
                                <span class="timer" data-from="1" data-to="165" data-speed="5000"
                                    data-refresh-interval="50">165</span>
                            </h1>
                            <div class="title">
                                <h3>@lang('site.analytics.engineers.title')</h3>
                            </div>
                            <div class="text">
                                <p>
                                    @lang('site.analytics.engineers.p')
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End single fact counter-->
            </div>
        </div>
    </section>
    <!--End fact counter area-->
    <!--Start Map Quote area-->
    <section id="contact" class="map-quote-area">
        <div class="google-map-box">

            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3456.7015243575033!2d31.252605215076038!3d29.959262829546674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458476d83dcd259%3A0x289aa29d56352bb9!2z2KfZhNmG2YrZhCDZhNmE2LXZhNioIE5pbGUgc3RlZWw!5e0!3m2!1sen!2seg!4v1670854548605!5m2!1sen!2seg"
                width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container quote-content clearfix">
            <div class="view-map">
                <a href="contact.html">@lang('site.view_in_map')</a>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content clearfix">
                        <div class="contact-box">
                            <h3>@lang('site.form.quick_contact')</h3>
                            <ul>
                                <li>
                                    <span>@lang('site.form.address_word')</span>
                                    <p>@lang('site.form.address')</p>
                                </li>
                                <li>
                                    <span>@lang('site.form.phone')</span>
                                    <p>0227542566</p>
                                </li>
                                <li>
                                    <span>@lang('site.form.email')</span>
                                    <p>info@Axiomeg.com</p>
                                </li>
                            </ul>
                        </div>

                        <div class="quote">
                            <div class="title">
                                <h3>@lang('site.form.free_quote')</h3>
                                <p>@lang('site.form.p')</p>
                            </div>


                            <form action="https://formsubmit.io/send/44419b8a-ab67-4b94-b6ec-52c8e15d9c66" method="POST"
                                class="quote-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="name" value=""
                                                placeholder="@lang('site.form.name')" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <input type="text" name="phone" value=""
                                                placeholder="@lang('site.form.phone_number')" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <select name="services" class="selectmenu">
                                                <option name="service" selected="selected">
                                                    @lang('site.form.select_solution')
                                                </option>
                                                <option>Maintainance Services</option>
                                                <option>Offshore Scaffolding</option>
                                                <option>LP/NG Techniques</option>
                                                <option>Drilling Tubular inspection</option>
                                                <option>Rig inspections with radiations</option>
                                                <option> Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-box">
                                            <button class="btn-one" type="submit">@lang('site.form.submit_button')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Map Quote area-->

    <!--Start Brand area-->
    <section class="brand-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> @lang('site.clients.title') </div>
                <div class="inner">
                    <div class="border1"></div>
                    <span> @lang('site.clients.p') </span>
                    <div class="border2"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="brand">
                        <!--Start single item-->
                        <li class="single-item">
                            <a href="#"><img src="{{ asset('images/brand/1.png') }}"
                                    alt="Awesome Brand Image"></a>
                            <div class="title">
                                <h3></h3>
                            </div>
                        </li>
                        <!--End single item-->
                        <!--Start single item-->
                        <li class="single-item">
                            <a href="#"><img src="{{ asset('images/brand/2.png') }}"
                                    alt="Awesome Brand Image"></a>
                            <div class="title">
                                <h3></h3>
                            </div>
                        </li>
                        <!--End single item-->
                        <!--Start single item-->
                        <li class="single-item">
                            <a href="#"><img src="{{ asset('images/brand/3.png') }}"
                                    alt="Awesome Brand Image"></a>
                            <div class="title">
                                <h3></h3>
                            </div>
                        </li>
                        <!--End single item-->
                        <!--Start single item-->
                        <li class="single-item">
                            <a href="#"><img src="{{ asset('images/brand/4.png') }}"
                                    alt="Awesome Brand Image"></a>
                            <div class="title">
                                <h3></h3>
                            </div>
                        </li>
                        <!--End single item-->
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Brand area-->
@endsection
