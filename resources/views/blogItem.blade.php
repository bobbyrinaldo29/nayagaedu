@extends('layouts.app', ['title' => 'Market View'])

@section('content')

    <style>
        .carouselList {
            height: 200px;
        }

        .carouselList img {
            width: 100%;
            height: 100% !important;
            object-fit: cover;
        }

    </style>

    <!-- Page title -->
    <div class="w-100">

        <div class="d-flex flex-column w-100">
            <div class="page-title d-flex align-items-center bg-image py-5"
                data-img-src="{{ asset('images/upload/mega-menu-service-03.jpg') }}">
                <div class="container page-title-container">
                    <div class="row py-5">
                        <div class="col text-center">
                            <h1 class="display-3 font-weight-800 text-white mt-4 mb-1">
                                {{ Str::ucfirst($category) }}
                            </h1>
                            <div class="lead text-white-75">
                                Read Our Latest Articles, News & Updates
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @foreach ($articleItem as $item)
        <!-- Content -->
        <div class="main-content">
            <div class="container">
                <div class="row pt-3 pb-5 mt-4">

                    <!-- Content section -->
                    <div class="col-lg-8">
                        <div class="pr-xl-3 pb-5 pb-lg-0 mb-5 mb-lg-0">

                            <!-- Slider images -->
                            <div class="card-blog-img hover-item hover-scale hover-uncaption mb-4">
                                <a href="{{ asset('images/articles/') . '/' . $item->image }}">
                                    <div class="hover-transition">
                                        <div class="hover-down">
                                            <i class="fas fa-link fa-2x hover-icon"></i>
                                        </div>
                                    </div>
                                    <figure>
                                        <img class="img-fluid"
                                            src="{{ asset('images/articles/') . '/' . $item->image }}" alt="Blog">
                                    </figure>
                                </a>
                            </div>

                            <!-- Blog title -->
                            <h3 class="font-weight-700">{{ $item->title }}</h3>

                            <!-- Blog meta -->
                            <ul class="meta-entry mb-5">
                                <li class="meta-entry-item">
                                    <a href="#">{{ $item->created_at }}</a>
                                </li>
                                <li class="meta-entry-item">
                                    <a href="#">{{ $item->editor }}</a>
                                </li>
                            </ul>

                            <!-- Text content -->
                            <div class="mb-5">
                                {!! $item->content !!}
                            </div>

                            <!-- Related news -->
                            <div class="row align-items-center pt-5 mb-5">

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h4 class="section-title-3 text-left font-weight-700 mb-md-0">Related News</h4>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-md-right">
                                        <a href="{{ route('blog', strtolower($item->category)) }}"
                                            class="btn btn-round btn-primary mb-0">View all news</a>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-component mb-5" data-carousel-gutter="30" data-autoplay="true"
                                data-dots="true" data-nav="false" data-carousel-col="1" data-carousel-col-sm="1"
                                data-carousel-col-md="2" data-carousel-col-lg="2" data-carousel-col-xl="2">
                                <div class="carousel-component-inner owl-carousel owl-theme">

                                    @foreach ($allArticle as $itemArticle)
                                        <div class="carousel-component-item">
                                            <div class="card card-blog-entry border-0 plain-card mb-3">
                                                <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                    <a
                                                        href="{{ route('blogID', ['category' => strtolower($item->category), 'id' => $item->id]) }}">
                                                        <div class="hover-transition">
                                                            <div class="hover-down">
                                                                <i class="fas fa-link fa-2x hover-icon"></i>
                                                            </div>
                                                        </div>
                                                        <figure class="carouselList">
                                                            <img class="img-fluid"
                                                                src="{{ asset('images/articles/') . '/' . $itemArticle->image }}"
                                                                alt="Blog">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="category-btn">
                                                        @if ($itemArticle->category == "Forex")
                                                            <a href="{{ route('blog', strtolower($item->category)) }}"
                                                                class="btn btn-round btn-sm btn-secondary">{{ $itemArticle->category }}</a>
                                                        @elseif ($itemArticle->category == "Cryptocurrency")
                                                            <a href="{{ route('blog', strtolower($item->category)) }}"
                                                                class="btn btn-round btn-sm btn-rose">{{ $itemArticle->category }}</a>
                                                        @else
                                                            <a href="{{ route('blog', strtolower($item->category)) }}"
                                                                class="btn btn-round btn-sm btn-secondary">{{ $itemArticle->category }}</a>
                                                        @endif
                                                    </div>
                                                    <h5 class="font-weight-700 mt-3">
                                                        <a href="{{ route('blogID', ['category' => strtolower($item->category), 'id' => $item->id]) }}"
                                                            class="text-dark-gray">{{ $itemArticle->title }}</a>
                                                    </h5>
                                                    <ul class="meta-entry">
                                                        <li class="meta-entry-item">
                                                            <span>{{ $itemArticle->created_at }}</span>
                                                        </li>
                                                        <li class="meta-entry-item">
                                                            <span>{{ $itemArticle->editor }}</span>
                                                        </li>
                                                    </ul>
                                                    <p class="card-text">
                                                        {!! Str::limit($item->content, 100, $end = '...') !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                        </div>
                    </div>
    @endforeach

    <!-- Sidebar section -->
    @include('layouts.partials.sidebarWidget')

    </div>
    </div>
    </div>
@endsection
