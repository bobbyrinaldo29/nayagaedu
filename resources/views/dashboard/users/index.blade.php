@extends('dashboard.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body p-4">
                            <div class="bootstrap-carousel">
                                <div data-bs-ride="carousel" class="carousel slide" id="carouselExampleCaptions">
                                    <div class="carousel-indicators">
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                            class="active" aria-current="true" aria-label="Slide 1"></button>
                                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                            aria-label="Slide 2"></button>
                                    </div>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100"
                                                src="{{ asset('/images/upload/pricing-plan-img-01.png') }}" alt="">
                                            @if (Auth::user()->package)
                                                <a href="{{ route('package') }}">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Upgrade Package</h5>
                                                        <p>Upgrade your package for more feature</p>
                                                    </div>
                                                </a>
                                            @else
                                                <a href="{{ route('package') }}">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h5>Register Package</h5>
                                                        <p>Register your package to activate</p>
                                                    </div>
                                                </a>
                                            @endif
                                        </div>
                                        <div class="carousel-item">
                                            <img alt="" class="d-block w-100"
                                                src="{{ asset('/images/upload/pricing-plan-img-02.png') }}">
                                            <a href="{{ route('profile') }}">
                                                <div class="carousel-caption d-none d-md-block">
                                                    <h5>Update Profile</h5>
                                                    <p>Click here to update your profile</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="me-3 bgl-primary text-primary">
                                                    <i class="fas fa-users"></i>
                                                </span>
                                                <div class="media-body text-end">
                                                    <p class="mb-1">Your Package</p>
                                                    <h4 class="mb-0">{{ Auth::user()->package }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="me-3 bgl-primary text-primary">
                                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-dollar-sign">
                                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="media-body text-end">
                                                    <p class="mb-1">Commission Balance</p>
                                                    <h4 class="mb-0">Rp {{ Auth::user()->balance }}</h4>
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
