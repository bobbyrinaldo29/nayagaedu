@extends('layouts.app')

@section('content')
    <!-- Banner slides -->
    <div class="banner-slides-wrapper arrow-nav-overflow" data-dots="true" data-nav="true">

        <div class="banner-slides-container owl-carousel owl-theme owl-dot-light-1">

            <!-- Slide item -->
            <div class="bg-image overflow-hidden" data-img-src="{{ asset('images/upload/section-banner-slide-02.jpg') }}">
                <div class="container d-flex flex-column">
                    <div class="row page-header-block-height align-items-center">

                        <div class="col-lg-6">
                            <div class="px-4 px-md-5 px-lg-4 pt-5 pt-lg-0">
                                <div class="d-none d-xl-block" data-height="150px"></div>
                                <img src="{{ asset('images/upload/phone-mockup-02.png') }}" alt="image"
                                    class="img-fluid mt-4 mt-md-5 mt-lg-0 add-animate slide-animate"
                                    data-animated="slideInUp">
                                <div class="d-none d-xl-block" data-height="60px"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="px-md-5 px-lg-0 py-5">
                                <div class="text-center px-lg-4">

                                    <div class="add-animate slide-animate" data-animated="fadeInDown">
                                        <h1 class="display-4 font-weight-800 text-white mb-3"><u>Be Educated</u><br>and
                                            let's
                                            other<br>
                                            Be Educated</h1>
                                    </div>

                                    <div class="px-3 mb-4 mb-md-5 mb-lg-0 add-animate slide-animate"
                                        data-animated="fadeInUp">
                                        <div class="row">

                                            <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0 col-xl-10 offset-xl-1">
                                                <button class="btn btn-lg btn-round btn-light shadow-none mb-0"
                                                    type="button">Daftar Sekarang</button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Slide item -->
            <div class="bg-image overflow-hidden" data-img-src="{{ asset('images/upload/section-banner-slide-06.jpg') }}">
                <div class="container d-flex flex-column">
                    <div class="row page-header-block-height">

                        <div class="col-lg-6 d-flex">
                            <div class="align-self-center w-100 px-md-5 pr-lg-0 pl-lg-3 ml-lg-n3 py-5 overflow-hidden">
                                <div class="pl-lg-4 pl-xl-5 text-center text-lg-left add-animate slide-animate"
                                    data-animated="fadeInRight">
                                    <h1 class="display-4 font-weight-800 text-white mb-3">Ada apa dengan<br>Trading Forex?
                                    </h1>
                                    <div class="lead-sm text-white-75 pb-2 pb-xl-3 mb-5">Mengupas apakah trading forex layak
                                        untuk di jadikan bisnis yang menguntungkan untuk anda . . . </div>
                                    <a href="#" class="btn btn-round btn-lg btn-dark-gray mx-2 ml-md-0 mr-md-3"><i
                                            class="fas fa-info"></i>Pelajari lebih lanjut</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 d-flex">
                            <div class="align-self-end w-100 px-5">
                                <div class="px-md-5 px-lg-4 px-xl-5 mt-md-4 mt-xl-0">
                                    <div class="d-none d-xl-block" data-height="120px"></div>
                                    <img src="{{ asset('images/upload/hand-holding-phone-01.png') }}" alt="image"
                                        class="img-fluid add-animate slide-animate" data-animated="slideInLeft">
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
        <div class="section bg-image py-5" data-img-src="{{ asset('images/upload/section-bg-shape-01.png') }}">
            <div class="container">

                <!-- Features section -->
                <div class="section py-5">
                    <div class="container">

                        <div class="row my-5">
                            <div class="col-lg-8 offset-lg-2">
                                <div class="text-center mt-3">

                                    <h2 class="h1 font-weight-800 line-height-sm mb-4">Apa itu Nayaga Edu?</h2>

                                    <div class="zz-separator zz-separator-wide ml-auto mr-auto mb-4" data-width="93px">
                                    </div>

                                    <div data-height="20px"></div>

                                    <div class="lead">
                                        Platform Edukasi yang membantu meningkatkan pengetahuan pada pasar keuangan Anda
                                        dapat
                                        mempelajari strategi cara mendapatkan keuntungan di pasar keuangan,mengelola
                                        resiko
                                        dengan lebih baik dan meningkatkan skill agar lebih percaya diri. Semua kendali
                                        ada di
                                        tangan anda!
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
                                    <p>Kehadiran platform digital membuat seluruh kegiatan bisa dilakukan dalam satu tempat.
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="text-center px-xl-5 pb-4 mb-5">
                                    <img src="{{ asset('images/svg/app-feature-icon-06.svg') }}" alt="icon"
                                        class="img-fluid mb-5 add-animate" data-width="68px" data-height="68px"
                                        data-animated="zoomIn">
                                    <h5 class="font-weight-700 mb-3">Webinar</h5>
                                    <p>Scelerisque lectus in tincidun bibendum erat iaculis in aenean nunc quam</p>
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-4">
                                <div class="text-center px-xl-5 pb-4 mb-5">
                                    <img src="{{ asset('images/svg/app-feature-icon-02.svg') }}" alt="icon"
                                        class="img-fluid mb-5 add-animate" data-width="68px" data-height="68px"
                                        data-animated="zoomIn">
                                    <h5 class="font-weight-700 mb-3">Workshop</h5>
                                    <p>Luctus justo fermentum tempus quisque risus euismod nec vestibulum nec</p>
                                </div>
                            </div>

                        </div>

                        <div class="d-none d-lg-block" data-height="15px"></div>

                    </div>
                </div>

                <div class="d-none d-xl-block" data-height="15px"></div>

            </div>
        </div>

        <!-- Highlight section -->
        <div class="section bg-image py-5" data-img-src="images/upload/app-landing-highlight-bg.jpg">
            <div class="container">

                <div class="row my-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center text-white-75 mt-3">

                            <h2 class="h1 font-weight-800 text-white line-height-sm mb-4">Menjadi Apa Saja yang Anda Mau
                                di Nayottama Digital Apps</h2>
                            <div class="zz-separator zz-separator-wide zz-separator-white ml-auto mr-auto mb-4"
                                data-width="93px"></div>

                        </div>
                    </div>
                </div>

                <div class="row align-items-lg-center mb-5">

                    <div class="col-md-6 col-lg-4 order-2 order-lg-1">
                        <div class="px-4 px-lg-0 pl-xl-4 pr-xl-5">

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <img src="{{ asset('images/svg/icon-user-1.svg') }}" alt="icon"
                                        class="mr-3 mr-lg-0 ml-lg-3 order-lg-2" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">Peserta Didik
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>Aenean sed mattis arcu rhoncus risus duis pretium purus eget cursus molestie</p>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-03.svg') }}" alt="icon"
                                        class="mr-3 mr-lg-0 ml-lg-3 order-lg-2" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">Mentor</h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>Magna nec semper magna quis malesuada dolor nullam ornare dictum magna</p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInLeft">
                                <div
                                    class="icon-title d-flex justify-content-start justify-content-lg-end align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-02.svg') }}" alt="icon"
                                        class="mr-3 mr-lg-0 ml-lg-3 order-lg-2" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white text-lg-right order-lg-1">Market Analis
                                    </h5>
                                </div>
                                <div class="text-white-75 text-lg-right">
                                    <p>Nam dolor sapien felis eu donec interdum neca placerat lacinia nullam enim</p>
                                </div>
                            </div>

                            <div class="d-lg-none" data-height="56px"></div>

                        </div>
                    </div>

                    <div class="col-lg-4 order-1 order-lg-2">
                        <div class="text-center px-4 pb-4 mb-5 pb-lg-0 mb-lg-0">
                            <img src="images/upload/phone-mockup-05.png" alt="image" class="img-fluid add-animate"
                                data-animated="fadeInUp">
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 order-3 order-lg-3">
                        <div class="px-4 px-lg-0 pl-xl-5 pr-xl-4">

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <img src="{{ asset('images/svg/icon-wireless-10.svg') }}" alt="icon"
                                        class="mr-3" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white">Signal Marker</h5>
                                </div>
                                <div class="text-white-75">
                                    <p>Vestibulum sem ipsum primis metus neca charetra justo sapien purus cursus</p>
                                </div>
                            </div>

                            <div class="icon-info-3 pb-2 mb-5 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-01.svg') }}" alt="icon"
                                        class="mr-3" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white">Creator</h5>
                                </div>
                                <div class="text-white-75">
                                    <p>Hendrerit volutpat in laoreet elementum luctus a consequat bibendum</p>
                                </div>
                            </div>

                            <div class="icon-info-3 add-animate" data-animated="fadeInRight">
                                <div class="icon-title d-flex justify-content-start align-items-center mb-3">
                                    <img src="{{ asset('images/svg/app-highlight-icon-04.svg') }}" alt="icon"
                                        class="mr-3" data-width="50px" data-height="50px">
                                    <h5 class="mb-0 font-weight-700 text-white">Marketing</h5>
                                </div>
                                <div class="text-white-75">
                                    <p>Morbi tristique ac cursus dignissim sapien nunc commodo orci vestibulum</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-none d-lg-block" data-height="20px"></div>
            </div>
        </div>

        <!-- Screenshot section -->
        <div class="section bg-light py-5 py-lg-0">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6">
                        <div class="my-5 my-xl-0 pr-xl-5">

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">Pasar Keuangan</h2>

                            <div class="zz-separator zz-separator-wide mb-4" data-width="93px"></div>

                            <div data-height="20px"></div>

                            <div class="lead mb-5">
                                <p>
                                    Memiliki angka liquiditas tinggi yang berarti memberi peluang bagi para pelaku pasar
                                    untuk mendapatkan keuntungan besar.
                                </p>
                            </div>

                            <a href="#" class="btn btn-round btn-lg btn-primary"><i class="fas fa-info"></i>Pelajari
                                Lebih Lanjut</a>

                        </div>
                    </div>

                    <div class="col-lg-6 mt-lg-n5 my-xl-n5">
                        <div class="px-4 mt-4 mb-5 mt-lg-0 my-xl-0">
                            <div class="carousel-component" data-carousel-gutter="20" data-autoplay="true"
                                data-dots="false" data-nav="true" data-carousel-col="1" data-carousel-col-sm="1"
                                data-carousel-col-md="2" data-carousel-col-lg="2" data-carousel-col-xl="2">
                                <div class="carousel-component-inner owl-carousel owl-theme">

                                    <div class="carousel-component-item">
                                        <div>
                                            <img src="images/upload/phone-screenshot-01.png" alt="image"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div>
                                            <img src="images/upload/phone-screenshot-02.png" alt="image"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div>
                                            <img src="images/upload/phone-screenshot-03.png" alt="image"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div>
                                            <img src="images/upload/phone-screenshot-04.png" alt="image"
                                                class="img-fluid">
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Plans and pricing section -->
        <div class="section bg-image py-5" data-img-src="images/upload/section-bg-shape-02.png">
            <div class="container">

                <div class="row mb-5 my-md-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center">

                            <h2 class="h1 font-weight-800 line-height-sm mb-4">Plans and Pricing</h2>

                            <div class="zz-separator zz-separator-wide ml-auto mr-auto mb-4" data-width="93px"></div>

                            <div data-height="20px"></div>

                            <div class="lead">
                                Fermentum tempus quisque vehicula sapien in laoreet finibus semper fuspendisse tristique
                                laoreet elit maecenas nisi auctor luctus
                            </div>

                            <div data-height="40px"></div>

                        </div>
                    </div>
                </div>

                <div class="row mb-5">

                    <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                        <div class="card card-price-table border-0 shadow-lg rounded-ultra text-center add-animate"
                            data-animated="fadeInLeft">
                            <div class="card-body">
                                <div class="card-price d-flex justify-content-center mt-3">
                                    <div class="currency align-self-start">$</div>
                                    <div class="price text-primary">3.000</div>
                                </div>
                                <h5 class="card-price-title text-uppercase"><i
                                        class="fas fa-paper-plane text-primary"></i>Basic</h5>
                                <ul class="card-price-list">
                                    <li>Free Nagita Apps</li>
                                    <li>Trade Community</li>
                                    <li>50:50</li>
                                </ul>
                                <a href="#" role="button" class="btn btn-primary btn-lg btn-round mb-4">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                        <div class="card card-price-table border-0 shadow-lg rounded-ultra text-center add-animate"
                            data-animated="fadeInRight">
                            <div class="card-body">
                                <div class="card-price d-flex justify-content-center mt-3">
                                    <div class="currency align-self-start">$</div>
                                    <div class="price text-primary">5.000</div>
                                </div>
                                <h5 class="card-price-title text-uppercase"><i
                                        class="fas fa-star text-primary"></i>Beginner</h5>
                                <ul class="card-price-list">
                                    <li>Free Nagita Apps</li>
                                    <li>Trade Community</li>
                                    <li>Basic Trade Education</li>
                                    <li>Free Copy Trade</li>
                                    <li>Manage Account</li>
                                    <li>70:30</li>
                                </ul>
                                <a href="#" role="button" class="btn btn-primary btn-lg btn-round mb-4">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                        <div class="card card-price-table border-0 shadow-lg rounded-ultra text-center add-animate"
                            data-animated="fadeInRight">
                            <div class="card-body">
                                <div class="card-price d-flex justify-content-center mt-3">
                                    <div class="currency align-self-start">$</div>
                                    <div class="price text-primary">15.000</div>
                                </div>
                                <h5 class="card-price-title text-uppercase"><i
                                        class="fas fa-gem text-primary"></i>Intermediate</h5>
                                <ul class="card-price-list">
                                    <li>Free Nagita Apps</li>
                                    <li>Trade Community</li>
                                    <li>Basic to Intermediate</li>
                                    <li>Free Trade Education</li>
                                    <li>Free Copy Trade manage account</li>
                                    <li>80:20</li>
                                </ul>
                                <a href="#" role="button" class="btn btn-primary btn-lg btn-round mb-4">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8 offset-md-2 col-lg-3 offset-lg-0">
                        <div class="card card-price-table border-0 shadow-lg rounded-ultra text-center text-white-75 bg-indigo add-animate"
                            data-animated="fadeInUp">
                            <div class="card-body">
                                <div class="card-price d-flex justify-content-center mt-3">
                                    <div class="currency align-self-start text-white-75">$</div>
                                    <div class="price text-white">20.000</div>
                                </div>
                                <h5 class="card-price-title text-uppercase text-white"><i
                                        class="fas fa-rocket text-white"></i>Expert</h5>
                                <ul class="card-price-list">
                                    <li>Free Nagita Apps</li>
                                    <li>Trade Community</li>
                                    <li>Basic to Intermediate</li>
                                    <li>Free Trade Education Copy</li>
                                    <li>Free Copy Trade manage account</li>
                                    <li>90:10</li>
                                </ul>
                                <a href="#" role="button"
                                    class="btn btn-secondary btn-lg btn-round btn-gray-shadow mb-4">Daftar Sekarang</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
