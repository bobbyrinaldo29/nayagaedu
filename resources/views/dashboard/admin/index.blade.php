@extends('dashboard.layouts.app')

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
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
                                                    <p class="mb-1">Saldo Komisi</p>
                                                    <h4 class="mb-0">Rp 12,000,000.00</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-6 col-lg-6 col-sm-6">
                            <div class="widget-stat card bg-primary">
                                <div class="card-body p-4">
                                    <div class="media">
                                        <span class="me-3">
                                            <i class="fas fa-users"></i>
                                        </span>
                                        <div class="media-body text-white text-end">
                                            <p class="mb-1">Paket Anda</p>
                                            <h3 class="text-white">VIP</h3>
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
