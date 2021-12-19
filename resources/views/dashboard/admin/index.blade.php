@extends('dashboard.layouts.app', ['title' => 'Dashboard'])

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
                                    <a href="{{ route('articles.index') }}">
                                        <div class="widget-stat card">
                                            <div class="card-body  p-4">
                                                <div class="media ai-icon">
                                                    <span class="me-3 bgl-primary text-primary">
                                                        <i class="fas fa-newspaper"></i>
                                                    </span>
                                                    <div class="media-body">
                                                        <p class="mb-1">Published Post</p>
                                                        <h4 class="mb-0">{{ $articleCount }} Post</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
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
                                                    <p class="mb-1">Draft Post</p>
                                                    <h4 class="mb-0">{{ $draftArticleCount }} Post</h4>
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
                                                    <p class="mb-1">Total Commissions</p>
                                                    <h4 class="mb-0"></h4>
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
                                                    <p class="mb-1">Total Transaction Members</p>
                                                    <h4 class="mb-0"></h4>
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
