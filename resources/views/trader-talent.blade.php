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
                    <div class="col-lg-8 offset-lg-2">
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

        <div class="section">
            <div class="container-fluid p-0">
                <div class="row no-gutters">

                    <div class="carousel-component col-lg-6" data-carousel-gutter="20" data-autoplay="true"
                        data-dots="false" data-nav="true" data-carousel-col="1" data-carousel-col-sm="1"
                        data-carousel-col-md="1" data-carousel-col-lg="1" data-carousel-col-xl="1">
                        <div class="carousel-component-inner owl-carousel owl-theme">

                            <div class="carousel-component-item">
                                <div>
                                    <img src="../../../assets/images/upload/phone-screenshot-01.png" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                            <div class="carousel-component-item">
                                <div>
                                    <img src="../../../assets/images/upload/phone-screenshot-02.png" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                            <div class="carousel-component-item">
                                <div>
                                    <img src="../../../assets/images/upload/phone-screenshot-03.png" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                            <div class="carousel-component-item">
                                <div>
                                    <img src="../../../assets/images/upload/phone-screenshot-04.png" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- <div class="col-lg-6 bg-image" data-img-src="../../../assets/images/upload/startup-benefits-img-01.jpg">
                        <div class="d-lg-none" data-height="70vw"></div>
                    </div> --}}

                    <div class="col-lg-6 bg-light">
                        <div class="py-5">
                            <div class="row no-gutters">
                                <div class="col-md-10 offset-md-1 px-4">

                                    <div data-height="7vw"></div>

                                    <h5 class="font-weight-400 mb-3">We Prepare Startups For Accelerators</h5>

                                    <h2 class="h1 font-weight-800 mb-4">Drive More Customers</h2>

                                    <div class="lead-sm mb-5">
                                        Curabitur ipsum nulla pellentesque vitae in dolor condimentum sapien aptent taciti
                                        ornare malesuada sociosqu himenaeos conubia litora torquent nostra consequa
                                    </div>

                                    <div data-height="10px"></div>

                                    <a href="#" class="btn btn-lg btn-round btn-primary mb-0"><i
                                            class="fas fa-long-arrow-alt-right"></i>Get started now</a>

                                    <div data-height="7vw"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
