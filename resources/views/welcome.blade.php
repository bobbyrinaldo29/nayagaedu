@extends('layouts.app', ['title' => 'Home'])

@section('content')
    <!-- Banner slides -->
    <div class="banner-slides-wrapper arrow-nav-overflow" data-dots="true" data-nav="true">

        <div class="banner-slides-container owl-carousel owl-theme owl-dot-light-1">

            <!-- Slide item -->
            <div class="d-flex flex-column">
                <div class="page-header-block-height d-flex align-items-center bg-image"
                    data-img-src="{{ asset('images/upload/banner-01.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 text-center text-lg-left py-5">
                                <div class="px-md-5 pr-xl-0 py-5 overflow-hidden">
                                    <h2 class="h3 font-weight-300 text-white add-animate slide-animate"
                                        data-animated="fadeInLeft">Be educated and</h2>
                                    <h1 class="display-4 font-weight-800 text-white mb-3 add-animate slide-animate"
                                        data-animated="fadeInRight">Let other's<br>Be educated</h1>
                                    <div class="lead-sm text-white-75 pb-3 mb-5 add-animate slide-animate"
                                        data-animated="fadeInLeft">Nayaga Edu is a trusted place to learn forex trading
                                        since 2019</div>
                                    <div class="add-animate slide-animate" data-animated="fadeIn">
                                        <a href="#" class="btn btn-lg btn-round btn-primary btn-gray-shadow mx-2 ml-lg-0"><i
                                                class="fas fa-info"></i>Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide item -->
            <div class="d-flex flex-column">
                <div class="page-header-block-height d-flex align-items-center bg-image"
                    data-img-src="{{ asset('images/upload/banner-02.jpg') }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6 text-center text-lg-left py-5">
                                <div class="px-md-5 pr-xl-0 py-5 overflow-hidden">
                                    <h1 class="display-4 font-weight-800 text-white mb-3 add-animate slide-animate"
                                        data-animated="fadeInRight">What is Forex Trading?</h1>
                                    <div class="lead-sm text-white-75 pb-3 mb-5 add-animate slide-animate"
                                        data-animated="fadeInLeft">Exploring whether forex trading is worthy of being a
                                        profitable business for you...</div>
                                    <div class="add-animate slide-animate" data-animated="fadeIn">
                                        <a href="#" class="btn btn-lg btn-round btn-primary btn-gray-shadow mx-2 ml-lg-0"><i
                                                class="fas fa-info"></i>Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation -->
        <div class="carousel-custom-nav carousel-nav-lg d-none d-lg-block">
            <a class="carousel-control-prev" href="#" data-width="9%">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#" data-width="9%">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>

    <!-- Content -->
    <div class="main-content py-0">

        <!-- Overview section -->
        <div class="section bg-image py-5" data-img-src="{{ asset('images/upload/section-bg-shape-04.png') }}">
            <div class="container">

                <!-- Features section -->
                <div class="section py-0">
                    <div class="container">

                        <div class="row my-5">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="text-center mt-3">

                                    <h2 class="h1 font-weight-800 line-height-sm mb-4">What is Nayaga Edu?</h2>

                                    <div class="zz-separator zz-separator-wide ml-auto mr-auto mb-4" data-width="93px">
                                    </div>

                                    <div data-height="20px"></div>

                                    <div class="lead">
                                        Educational platform that helps increase knowledge on financial markets You can
                                        learn strategies on how to profit in financial markets, manage risk better and
                                        improve skills to be more confident. All control is in your hands!
                                    </div>

                                    <div data-height="40px"></div>

                                </div>
                            </div>
                        </div>

                        <div class="row mb-lg-4">

                            <div class="col-md-6 col-lg-4">
                                <div class="text-center px-xl-5 pb-4 mb-5">
                                    <img src="{{ asset('images/svg/app-feature-icon-04.svg') }}" alt="icon"
                                        class="img-fluid mb-5 add-animate" data-width="68px" data-height="68px"
                                        data-animated="zoomIn">
                                    <h5 class="font-weight-700 mb-3">Digital Platform</h5>
                                    <p>The presence of a digital platform makes all activities can be done in one place.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="text-center px-xl-5 pb-4 mb-5">
                                    <img src="{{ asset('images/svg/app-feature-icon-06.svg') }}" alt="icon"
                                        class="img-fluid mb-5 add-animate" data-width="68px" data-height="68px"
                                        data-animated="zoomIn">
                                    <h5 class="font-weight-700 mb-3">Webinars</h5>
                                    <p>Trading education services from basic to expert through animated videos, meetings and
                                        HD quality webinars.</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="text-center px-xl-5 pb-4 mb-5">
                                    <img src="{{ asset('images/svg/app-feature-icon-02.svg') }}" alt="icon"
                                        class="img-fluid mb-5 add-animate" data-width="68px" data-height="68px"
                                        data-animated="zoomIn">
                                    <h5 class="font-weight-700 mb-3">Workshop</h5>
                                    <p>Provides facilities for unlimited internal trader communication and discussions with
                                        members of the Trader community.</p>
                                </div>
                            </div>

                        </div>

                        <div class="d-none d-lg-block" data-height="15px"></div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Highlight section -->
        <div class="section bg-light py-5">
            <div class="container">
                <div class="row align-items-center py-5">

                    <div class="col-lg-6 order-2 order-lg-1 overflow-hidden py-3">
                        <div class="pr-lg-5 add-animate" data-animated="fadeInLeft">

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">Financial Market</h2>

                            <div class="zz-separator zz-separator-wide mb-4" data-width="93px"></div>

                            <div data-height="20px"></div>

                            <div class="lead mb-5">
                                Having high liquidity numbers means providing opportunities for market participants to
                                earn big profits.
                            </div>

                            <a href="#" class="btn btn-round btn-lg btn-primary"><i class="fas fa-info"></i>Learn
                                More</a>

                        </div>
                    </div>

                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="px-3 pb-4 mb-5 px-md-5 px-lg-0 pb-lg-0 mb-lg-0">
                            <img src="{{ asset('images/upload/smartphone-users-01.png') }}" alt="image"
                                class="img-fluid add-animate" data-animated="fadeInRight">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Highlight section -->
        <div class="section bg-image py-5" data-img-src="images/upload/app-landing-highlight-bg.jpg">
            <div class="container">

                <div class="row my-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center text-white-75 mt-3">

                            <h2 class="h1 font-weight-800 text-white line-height-sm mb-4">Be What You Want at Nayottama
                                Digital Apps</h2>
                            <div class="zz-separator zz-separator-wide zz-separator-white ml-auto mr-auto mb-2"
                                data-width="93px"></div>
                        </div>
                    </div>
                </div>
                <h5 class="text-center text-white-75">Coming Soon</h5>

                <div class="row align-items-lg-center mb-5">

                    <div class="col-md-6 col-lg-4 order-2 order-lg-1">
                        <div class="px-4 px-lg-0 pl-xl-4 pr-xl-5">
                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-02.svg') }}" alt="icon"
                                        class="mr-3 mr-lg-0 ml-lg-3 order-lg-2" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">Course Challenge
                                    </h5>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <img src="{{ asset('images/svg/icon-user-1.svg') }}" alt="icon"
                                        class="mr-3 mr-lg-0 ml-lg-3 order-lg-2" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">Access The Course
                                    </h5>
                                </div>
                            </div>

                            <div class="d-lg-none" data-height="56px"></div>

                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="text-center px-4 pb-4 mb-5 pb-lg-0 mb-lg-0">
                            <img src="images/upload/Apple-iPhone-11-Pro-Max-2.png" alt="image" class="img-fluid add-animate"
                                data-animated="fadeInUp">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 order-3 order-lg-3">
                        <div class="px-4 px-lg-0 pl-xl-5 pr-xl-4">

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <img src="{{ asset('images/svg/icon-wireless-10.svg') }}" alt="icon"
                                        class="mr-3" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white">Communication Platform For Financial Team
                                    </h5>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-04.svg') }}" alt="icon"
                                        class="mr-3" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white">Meet Other Trader</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block" data-height="20px"></div>
            </div>
        </div>

        <!-- Plans and pricing section -->
        <div class="section bg-image py-5" data-img-src="images/upload/section-bg-shape-03.png">
            <div class="container">

                <div class="row mb-5 my-md-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center">

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">Market View</h2>

                            <div class="zz-separator zz-separator-wide ml-auto mr-auto mb-4" data-width="93px"></div>

                            <div data-height="40px"></div>

                        </div>
                    </div>
                </div>

                <div class="row mb-5 mx-auto">
                    <iframe
                        src="https://www.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&pairs=1,3,2,4,7,5,8,6,9,10,49,11"
                        width="100%" height="550px" frameborder="0" allowtransparency="false" marginwidth="0"
                        marginheight="0"></iframe>
                    <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;">Powered by <a
                            href="https://www.investing.com?utm_source=WMT&amp;utm_medium=referral&amp;utm_campaign=LIVE_CURRENCY_X_RATES&amp;utm_content=Footer%20Link"
                            target="_blank" rel="nofollow">Investing.com</a></div>
                </div>
            </div>
        </div>
    </div>

@endsection
