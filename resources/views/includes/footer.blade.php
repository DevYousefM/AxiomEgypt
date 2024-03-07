<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-4 col-xs-12">

                <div class="single_footer">
                    <img class="footer-img" src="{{ asset('images/home/logo-footer.png') }}" alt="">
                    <div>
                        <p>
                            @lang('site.footer.bio')
                        </p>
                    </div>
                </div>
            </div><!--- END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 m-70">
                <div class="single_footer single_footer_address">
                    <h4> @lang('site.footer.sections.title') </h4>
                    <ul>
                        <li><a href="{{ route('services') }}"> @lang('site.footer.sections.services') </a></li>
                        <li><a href="{{ route('homepage') }}#why-choose-us"> @lang('site.footer.sections.why_us') </a></li>
                        <li><a href="{{ route('homepage') }}#about-us"> @lang('site.footer.sections.about_us') </a></li>
                        <li><a href="{{ route('homepage') }}#contact"> @lang('site.footer.sections.contact') </a></li>
                    </ul>
                </div>
            </div><!--- END COL -->
            <div class="col-md-4 col-sm-4 col-xs-12 m-70 ">
                <div class="single_footer single_footer_address">
                    <h4> @lang('site.footer.join_us.title') </h4>
                    <p>
                        @lang('site.footer.join_us.p')
                    </p>
                </div>
                <div class="social_profile">
                    <ul>
                        <li><a href="https://www.facebook.com/axiomegypt1/"><svg xmlns="http://www.w3.org/2000/svg"
                                    x="0px" y="0px" width="48" height="48" viewBox="0 0 48 48"
                                    style=" fill:#000000;">
                                    <linearGradient id="Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1" x1="9.993"
                                        x2="40.615" y1="9.993" y2="40.615" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#2aa4f4"></stop>
                                        <stop offset="1" stop-color="#007ad9"></stop>
                                    </linearGradient>
                                    <path fill="url(#Ld6sqrtcxMyckEl6xeDdMa_uLWV5A9vXIPu_gr1)"
                                        d="M24,4C12.954,4,4,12.954,4,24s8.954,20,20,20s20-8.954,20-20S35.046,4,24,4z">
                                    </path>
                                    <path fill="#fff"
                                        d="M26.707,29.301h5.176l0.813-5.258h-5.989v-2.874c0-2.184,0.714-4.121,2.757-4.121h3.283V12.46 c-0.577-0.078-1.797-0.248-4.102-0.248c-4.814,0-7.636,2.542-7.636,8.334v3.498H16.06v5.258h4.948v14.452 C21.988,43.9,22.981,44,24,44c0.921,0,1.82-0.084,2.707-0.204V29.301z">
                                    </path>
                                </svg></a></li>
                        <li><a href="https://www.youtube.com/channel/UCFykSCdLnJAq6UDBb8IF2Tw"><svg
                                    xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                    viewBox="0 0 48 48" style=" fill:#000000;">
                                    <linearGradient id="_osn9zIN2f6RhTsY8WhY4a_5MQ0gPAYYx7a_gr1" x1="10.341"
                                        x2="40.798" y1="8.312" y2="38.769" gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#2aa4f4"></stop>
                                        <stop offset="1" stop-color="#007ad9"></stop>
                                    </linearGradient>
                                    <path fill="url(#_osn9zIN2f6RhTsY8WhY4a_5MQ0gPAYYx7a_gr1)"
                                        d="M46.105,11.02c-1.551,0.687-3.219,1.145-4.979,1.362c1.789-1.062,3.166-2.756,3.812-4.758	c-1.674,0.981-3.529,1.702-5.502,2.082C37.86,8.036,35.612,7,33.122,7c-4.783,0-8.661,3.843-8.661,8.582	c0,0.671,0.079,1.324,0.226,1.958c-7.196-0.361-13.579-3.782-17.849-8.974c-0.75,1.269-1.172,2.754-1.172,4.322	c0,2.979,1.525,5.602,3.851,7.147c-1.42-0.043-2.756-0.438-3.926-1.072c0,0.026,0,0.064,0,0.101c0,4.163,2.986,7.63,6.944,8.419	c-0.723,0.198-1.488,0.308-2.276,0.308c-0.559,0-1.104-0.063-1.632-0.158c1.102,3.402,4.299,5.889,8.087,5.963	c-2.964,2.298-6.697,3.674-10.756,3.674c-0.701,0-1.387-0.04-2.065-0.122C7.73,39.577,12.283,41,17.171,41	c15.927,0,24.641-13.079,24.641-24.426c0-0.372-0.012-0.742-0.029-1.108C43.483,14.265,44.948,12.751,46.105,11.02">
                                    </path>
                                </svg></a></li>
                        <li><a href="https://www.youtube.com/channel/UCFykSCdLnJAq6UDBb8IF2Tw">

                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="48" height="48"
                                    viewBox="0 0 48 48">
                                    <path fill="#FF3D00"
                                        d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                                    </path>
                                    <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                </svg>

                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-xs-12">
            <p class="copyright"> @lang('site.footer.copyright') </p>
        </div><!--- END COL -->
    </div><!--- END ROW -->
</div>
