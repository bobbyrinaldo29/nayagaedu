@extends('layouts.app', ['title' => 'About Us'])

@section('content')

    <!-- Page title -->
    <div class="w-100">

        <div class="d-flex flex-column w-100">
            <div class="page-title d-flex align-items-center bg-image py-5"
                data-img-src="{{ asset('images/upload/team.jpg') }}">
                <div class="container page-title-container">
                    <div class="row py-5">
                        <div class="col text-center">

                            <h1 class="display-3 font-weight-800 text-white text-uppercase mt-4 mb-1">
                                About Us
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Content -->
    <div class="main-content py-0">

        <!-- Overview section -->
        <div class="section py-5">
            <div class="container">

                <div class="row my-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center mt-4">
                            <h2 class="h1 section-title-3 font-weight-800 text-uppercase mb-0">About Nayaga Edu</h2>
                            <div data-height="10px"></div>
                        </div>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="px-4 px-lg-0 pb-4">
                            <p>Since 2019, Nayaga Edu has been a reliable location to study forex trading. The company,
                                which is based in Bandung, specialized in currency trading education (Forex) and gold (Gold)
                                at a very low cost.</p>
                            <p>Traders will have an involved and enjoyable trading experience with professional mentors in
                                this program. Participants will discover their own trading style and strategy using learning
                                approaches created in this manner.</p>
                            <p>The candidate should be able to design a trading system that suits him by the end of the
                                program. Nayaga Edu's guidance includes a lot of perks that benefit participants
                                considerably.</p>
                            <p>Nayaga Edu's guidance will be ideal for newcomers to the trading sector. Nayaga Edu offers
                                education at many levels of experience, expertise, and interests through this program.
                                Beginning with basic classes and progressing to advanced classes under the direction of
                                professional master Nayaga edu.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Vision Mission and Goal section -->
        <div class="section">
            <div class="container-fluid p-0">
                <div class="row no-gutters">

                    <!-- Grid item image -->
                    <div class="col-md-6 col-lg-4 bg-image order-md-1"
                        data-img-src="{{ asset('images/upload/vision.jpg') }}">
                        <img class="w-100 d-md-none" src="{{ asset('images/upload/vision.jpg') }}" alt="image">
                    </div>

                    <!-- Grid item info -->
                    <div class="col-md-6 col-lg-4 bg-dark text-white-50 order-md-2 arrow-overflow-container">
                        <div class="px-4 py-5 p-md-5">
                            <div class="px-xl-2 py-xl-4">

                                <svg class="arrow-overflow-up d-md-none" fill="#1c2833" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="3 10.2 34 18" width="34px" height="18px">
                                    <path d="M20,10.2l-17,18h34L20,10.2z" />
                                </svg>

                                <svg class="arrow-overflow-left d-none d-md-block" fill="#1c2833"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="9.4 3.8 18 34" width="18px" height="34px">
                                    <path d="M27.4,3.8l-18,17l18,17V3.8z" />
                                </svg>

                                <h2 class="h1 font-weight-800 text-uppercase mb-4">
                                    <a class="text-white">Vision</a>
                                </h2>

                                <div class="pb-5">
                                    <p>Becoming a Competent and Trusted Technology Education Company</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Grid item image -->
                    <div class="col-md-6 col-lg-4 bg-image order-md-4 order-lg-5"
                        data-img-src="{{ asset('images/upload/mission.jpg') }}">
                        <img class="w-100 d-md-none" src="{{ asset('images/upload/mission.jpg') }}" alt="image">
                    </div>

                    <!-- Grid item info -->
                    <div class="col-md-6 col-lg-4 bg-primary text-white order-md-3 order-lg-4 arrow-overflow-container">
                        <div class="px-4 py-5 p-md-5">
                            <div class="px-xl-2 py-xl-4">

                                <svg class="arrow-overflow-up d-md-none" fill="#2196f3" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="3 10.2 34 18" width="34px" height="18px">
                                    <path d="M20,10.2l-17,18h34L20,10.2z" />
                                </svg>

                                <svg class="arrow-overflow-right d-none d-md-block" fill="#2196f3"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="12.6 3.8 18 34" width="18px" height="34px">
                                    <path d="M12.6,3.8v34l18-17L12.6,3.8z" />
                                </svg>

                                <h2 class="h1 font-weight-800 text-uppercase mb-4">
                                    <a class="text-white">Mission</a>
                                </h2>

                                <div class="pb-5">
                                    <p>To become an education company based on internet and information technology. provide
                                        up-to-date and sustainable educational products and services, oriented to client
                                        expectations</p>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Grid item image -->
                    <div class="col-md-6 col-lg-4 bg-image order-md-5 order-lg-3"
                        data-img-src="{{ asset('images/upload/document-01.jpg') }}">
                        <img class="w-100 d-md-none" src="{{ asset('images/upload/document.jpg') }}" alt="image">
                    </div>

                    <!-- Grid item info -->
                    <div class="col-md-6 col-lg-4 bg-secondary text-white order-md-6 arrow-overflow-container">
                        <div class="px-4 py-5 p-md-5">
                            <div class="px-xl-2 py-xl-4">

                                <svg class="arrow-overflow-up d-md-none d-lg-block" fill="#0196D0"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="3 10.2 34 18" width="34px" height="18px">
                                    <path d="M20,10.2l-17,18h34L20,10.2z" />
                                </svg>

                                <svg class="arrow-overflow-left d-none d-md-block d-lg-none" fill="#0196D0"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="9.4 3.8 18 34" width="18px" height="34px">
                                    <path d="M27.4,3.8l-18,17l18,17V3.8z" />
                                </svg>

                                <h2 class="h1 font-weight-800 text-uppercase mb-4">
                                    <a class="text-white">Legality</a>
                                </h2>

                                <div class="pb-5">
                                    <p>SK MENKUMHAM : AHU-0037895.AH.01.01.TAHUN 2019</p>
                                    <p>NPWP : 92.423.836.3-423.000</p>
                                    <p>NIB : 9120402830164</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Testimonials section -->
        <div class="section bg-image py-5" data-img-src="{{ asset('images/upload/app-landing-reviews-bg.jpg') }}">
            <div class="container">
                <div class="row my-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="text-center py-3 mb-5">

                            <h2 class="h1 section-title-3 title-light-1 font-weight-800 text-uppercase mb-4">Testimoni</h2>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section bg-light pb-5">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="carousel-component mt-up100" data-carousel-gutter="30" data-autoplay="true"
                            data-dots="true" data-nav="false" data-carousel-col="1" data-carousel-col-sm="1"
                            data-carousel-col-md="2" data-carousel-col-lg="3" data-carousel-col-xl="3">
                            <div class="carousel-component-inner owl-carousel owl-theme">


                                <div class="col-md-12 offset-md-2 col-lg-12 offset-lg-0">
                                    <div class="card h-100 border-0 shadow rounded-xl text-center px-4 py-5 p-xl-5 my-4">
                                        <div class="card-body d-flex flex-column">
                                            <div class="testimonial-3">
                                                <div class="testimonial-quote-icon text-primary">
                                                    <i class="far fa-comment-dots fa-2x"></i>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <h6 class="text-reset font-weight-500 line-height-md mb-0">Berangkat
                                                        dari
                                                        ketidaktahuan sama sekali di
                                                        dunia trading forex, Alhamdulillah, Setelah bergabung di komunitas
                                                        saya
                                                        sudah mendapatkan keuntungan yang lumayan besar bagi saya. Terima
                                                        kasih.
                                                    </h6>
                                                </div>
                                                <div class="tesimonial-name font-weight-700 text-uppercase">
                                                    H Khaerudin
                                                    <span>PNS</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 offset-md-2 col-lg-12 offset-lg-0">
                                    <div class="card h-100 border-0 shadow rounded-xl text-center px-4 py-5 p-xl-5 my-4">
                                        <div class="card-body d-flex flex-column">
                                            <div class="testimonial-3">
                                                <div class="testimonial-quote-icon text-primary">
                                                    <i class="far fa-comment-dots fa-2x"></i>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <h6 class="text-reset font-weight-500 line-height-md mb-0">
                                                        Terima kasih atas support EA dan edukasinya sangat membantu saya
                                                        untuk mendapatkan profit yang konsisten. EA ini sangat bekerja
                                                        dengan baik.
                                                    </h6>
                                                </div>
                                                <div class="tesimonial-name font-weight-700 text-uppercase">
                                                    Rizal Anwar
                                                    <span>Trader</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 offset-md-2 col-lg-12 offset-lg-0">
                                    <div class="card h-100 border-0 shadow rounded-xl text-center px-4 py-5 p-xl-5 my-4">
                                        <div class="card-body d-flex flex-column">
                                            <div class="testimonial-3">
                                                <div class="testimonial-quote-icon text-primary">
                                                    <i class="far fa-comment-dots fa-2x"></i>
                                                </div>
                                                <div class="testimonial-quote">
                                                    <h6 class="text-reset font-weight-500 line-height-md mb-0">
                                                        Sangat membantu sekali, pada saat saya sibuk melakukan rutinitas
                                                        seperti biasa, robot terus menumbuhkan keuntungan dalam akun mt4
                                                        saya. semoga semakin besar dan bermanfaat bagi banyak orang.
                                                    </h6>
                                                </div>
                                                <div class="tesimonial-name font-weight-700 text-uppercase">
                                                    Yusuf
                                                    <span>Wiraswasta</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
