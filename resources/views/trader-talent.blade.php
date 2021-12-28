@extends('layouts.app', ['title' => 'Trader Talent'])

@section('content')

    <!-- Page title -->
    <div class="w-100">

        <div class="d-flex flex-column w-100">
            <div class="page-title d-flex align-items-center bg-image py-5"
                data-img-src="{{ asset('images/upload/mega-menu-trader-talent.jpg') }}">
                <div class="container page-title-container">
                    <div class="row py-5">
                        <div class="col text-center">

                            <h1 class="display-3 font-weight-800 text-white text-uppercase mt-4 mb-1">
                                Trader Talent
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content -->
    <div class="main-content py-0">

        <!-- trader -->
        <div class="section py-0">
            <div class="container">

                <div class="row my-5">
                    <div class="col-lg-12">
                        <div class="text-center mt-3">

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">About Trader Talent</h2>

                            <div class="zz-separator zz-separator-wide ml-auto mr-auto mb-4" data-width="93px">
                            </div>

                            <div data-height="20px"></div>

                            <div class="lead">
                                The Forex Overseas League and Nayaga education center Academy founders set out to create The
                                Trader Talent after trading and reviewing other funding platforms and finding that we can
                                provide a solution that is exactly what the community needs. We will share our daily trading
                                education and exemplifying our passion for this industry. Each team member brings reputable
                                experience in the funding space which allows us to offer products that are unique and built
                                entirely around helping each individual trader succeed for the long haul.
                            </div>

                            <div data-height="40px"></div>

                        </div>
                    </div>
                </div>

                <div class="d-none d-lg-block" data-height="15px"></div>

            </div>
        </div>
        <div class="row no-gutters">

        <div class="section">
            <div class="container-fluid px-5">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div id="carouselIndicatorsCircle"
                            class="carousel slide gallery-slides arrow-nav-overflow rounded-xl shadow-lg mb-5"
                            data-ride="carousel">
                            <ol class="carousel-indicators carousel-indicator-circle">
                                <li data-target="#carouselIndicatorsCircle" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselIndicatorsCircle" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a href="{{ asset('images/upload/certificate-1.jpg') }}" data-fancybox="benefits-gallery" data-caption="Certificate Example">
                                        <div class="gallery-slides-hover"></div>
                                        <img class="d-block w-100" width="50"
                                            src="{{ asset('images/upload/certificate-1.jpg') }}" alt="First slide">
                                    </a>
                                </div>
                                <div class="carousel-item">
                                    <a href="{{ asset('images/upload/certificate-2.jpg') }}" data-fancybox="benefits-gallery" data-caption="Certificate Example">
                                        <div class="gallery-slides-hover"></div>
                                        <img class="d-block w-100" width="50"
                                            src="{{ asset('images/upload/certificate-2.jpg') }}" alt="Second slide">
                                    </a>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselIndicatorsCircle" role="button"
                                data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselIndicatorsCircle" role="button"
                                data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                    {{-- <div class="carousel-component col-lg-6 p-2" data-carousel-gutter="20" data-autoplay="true"
                        data-dots="false" data-nav="true" data-carousel-col="1" data-carousel-col-sm="1"
                        data-carousel-col-md="1" data-carousel-col-lg="1" data-carousel-col-xl="1">
                        <div class="carousel-component-inner owl-carousel owl-theme">

                            <div class="carousel-component-item">
                                <div>
                                    <img src="{{ asset('images/upload/certificate-1.jpg') }}" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                            <div class="carousel-component-item">
                                <div>
                                    <img src="{{ asset('images/upload/certificate-2.jpg') }}" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div> --}}

                    <div class="col-lg-6">
                        <div class="pl-5 py-5">
                            <div class="col-md-12 px-4 d-flex align-items-center">
                                
                                <div class="lead-sm mb-5">
                                <h2 class="h1 font-weight-800 mb-4">Certificate Of Achievement</h2>

                                    Nayaga Education Center is col-md-12 offset-md-1 mr-5-md-12 offset-md-1 mr-5gned to build a
                                    comprehensive set of skills that help you assess the opportunities and risks
                                    encountered in international business. Upon completion of our trainings, you will be
                                    equipped with the knowledge and credentials needed to succeed in a globally
                                    competitive marketplace.
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
