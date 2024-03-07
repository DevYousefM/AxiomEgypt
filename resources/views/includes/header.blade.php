<header class="header" id="header">
    <nav class="navbar container">
        <a href="{{ route('homepage') }}" class="brand">
            <img class="logo-img" src="/images/home/logo middle2.webp" alt="">
        </a>
        <div class="menu" id="menu">
            <ul class="menu-inner">
                <li class="menu-item"><a href="{{ route('services') }}">@lang('site.header.services')</a></li>
                <li class="menu-item"><a href="{{ route('homepage') }}#why-choose-us">@lang('site.header.why_us') </a></li>
                <li class="menu-item"><a href="{{ route('homepage') }}#about-us"> @lang('site.header.about_us') </a></li>
                <li class="menu-item"><a href="{{ route('homepage') }}#contact"> @lang('site.header.contact') </a></li>
                <li class="menu-item"><a href="{{ route('blog') }}">@lang('site.header.blog')</a></li>
                <li class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="languageDropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ LaravelLocalization::getCurrentLocaleNative() }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="languageDropdown">
                        @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>

            </ul>
        </div>
        <div class="burger" id="burger">
            <span class="burger-line"></span>
            <span class="burger-line"></span>
            <span class="burger-line"></span>
        </div>
    </nav>
</header>
