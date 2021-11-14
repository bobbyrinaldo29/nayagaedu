@extends('dashboard.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card bg-primary">
                                <div class="card-body tryal row">
                                    <div class="col-xl-7 col-sm-6">
                                        <h2>You don't have a package yet</h2>
                                        <span>Find the package you want at Nayaga Edu</span>
                                        <a href="{{ route('package') }}" class="btn btn-rounded  fs-18 font-w500">Choose Package</a>
                                    </div>
                                    <div class="col-xl-5 col-sm-6">
                                        <img src="{{ asset('images/upload/chart.png') }}" alt="" class="sd-shape">
                                    </div>
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
                                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-dollar-sign">
                                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                                    </svg>
                                                </span>
                                                <div class="media-body">
                                                    <p class="mb-1">Commission Balance</p>
                                                    <h4 class="mb-0">Rp {{ Auth::user()->balance }}</h4>
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
                                                    <i class="fas fa-users"></i>
                                                </span>
                                                <div class="media-body text-end">
                                                    <p class="mb-1">Your Package</p>
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
