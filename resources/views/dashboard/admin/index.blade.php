@extends('dashboard.layouts.app', ['title' => 'Dashboard'])

@section('content')
    <div class="content-body">
        <!-- row -->
        <div class="container-fluid">
            <div class="row">
                <div>
                    <h4 class="fs-20 mb-2 font-w600">Overview</h4>
                </div>
                <hr class="mb-4">
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="me-3 bgl-primary text-primary">
                                                    <i class="fas fa-users"></i>
                                                </span>
                                                <div class="media-body">
                                                    <p class="mb-1">Total Member</p>
                                                    <h4 class="mb-0">{{ $userCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="me-3 bgl-primary text-primary">
                                                    <i class="fas fa-file-invoice"></i>
                                                </span>
                                                <div class="media-body">
                                                    <p class="mb-1">Total Transaction</p>
                                                    <h4 class="mb-0">{{ $userCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="me-3 bgl-primary text-primary">
                                                    <i class="fas fa-money-bill-wave"></i>
                                                </span>
                                                <div class="media-body">
                                                    <p class="mb-1">Total Commission</p>
                                                    <h4 class="mb-0">{{ $userCount }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h4 class="fs-20 mb-2 font-w600">Status</h4>
                </div>
                <hr class="mb-4">
            </div>
        </div>
    </div>

@endsection
