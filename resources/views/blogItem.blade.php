@extends('layouts.app', ['title' => 'Market View'])

@section('content')

<style>
    .carouselList { height:200px;}

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

                            <!-- Share this -->
                            <div class="d-flex align-items-center justify-content-start mb-5">

                                <span class="badge badge-pill badge-light">Share This</span>

                                <div class="d-flex ml-2">
                                    <a href="#" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-dark" data-width="40px"
                                        data-height="40px"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-dark" data-width="40px"
                                        data-height="40px"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-dark" data-width="40px"
                                        data-height="40px"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-dark" data-width="40px"
                                        data-height="40px"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="#" target="_blank"
                                        class="d-flex align-items-center justify-content-center text-dark" data-width="40px"
                                        data-height="40px"><i class="fas fa-paper-plane"></i></a>
                                </div>

                            </div>

                            <!-- Related news -->
                            <div class="row align-items-center pt-5 mb-5">

                                <div class="col-md-6 mb-3 mb-md-0">
                                    <h4 class="section-title-3 text-left font-weight-700 mb-md-0">Related News</h4>
                                </div>

                                <div class="col-md-6">
                                    <div class="text-md-right">
                                        <a href="#" class="btn btn-round btn-primary mb-0">View all news</a>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-component mb-5" data-carousel-gutter="30" data-autoplay="true"
                                data-dots="true" data-nav="false" data-carousel-col="1" data-carousel-col-sm="1"
                                data-carousel-col-md="2" data-carousel-col-lg="2" data-carousel-col-xl="2">
                                <div class="carousel-component-inner owl-carousel owl-theme">

                                    @foreach ($articleList as $itemArticle)
                                        <div class="carousel-component-item">
                                            <div class="card card-blog-entry border-0 plain-card mb-3">
                                                <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                    <a href="#">
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
                                                        <a href="#"
                                                            class="btn btn-round btn-sm btn-primary">{{ $itemArticle->category }}</a>
                                                    </div>
                                                    <h5 class="font-weight-700 mt-3">
                                                        <a href="#" class="text-dark-gray">{{ $itemArticle->title }}</a>
                                                    </h5>
                                                    <ul class="meta-entry">
                                                        <li class="meta-entry-item">
                                                            <a href="#">{{ $itemArticle->created_at }}</a>
                                                        </li>
                                                        <li class="meta-entry-item">
                                                            <a href="#">{{ $itemArticle->editor }}</a>
                                                        </li>
                                                    </ul>
                                                    <p class="card-text">
                                                        {!! Str::limit($item->content, 100, $end = '...') !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    {{-- <div class="carousel-component-item">
                                        <div class="card card-blog-entry border-0 plain-card mb-3">
                                            <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                <a href="#">
                                                    <div class="hover-transition">
                                                        <div class="hover-down">
                                                            <i class="fas fa-link fa-2x hover-icon"></i>
                                                        </div>
                                                    </div>
                                                    <figure>
                                                        <img class="img-fluid"
                                                            src="../../assets/images/upload/blog-thumbnail-11.jpg"
                                                            alt="Blog">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="category-btn">
                                                    <a href="#" class="btn btn-round btn-sm btn-secondary">Lifestyle</a>
                                                </div>
                                                <h5 class="font-weight-700 mt-3">
                                                    <a href="#" class="text-dark-gray">Cras Dignissim Turpis</a>
                                                </h5>
                                                <ul class="meta-entry">
                                                    <li class="meta-entry-item">
                                                        <a href="#">14 Sep 2020</a>
                                                    </li>
                                                    <li class="meta-entry-item">
                                                        <a href="#">John Davis</a>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Ornare ipsum eu nam tristique cursus tempus aenean
                                                    in dolor rhoncus</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div class="card card-blog-entry border-0 plain-card mb-3">
                                            <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                <a href="#">
                                                    <div class="hover-transition">
                                                        <div class="hover-down">
                                                            <i class="fas fa-link fa-2x hover-icon"></i>
                                                        </div>
                                                    </div>
                                                    <figure>
                                                        <img class="img-fluid"
                                                            src="../../assets/images/upload/blog-thumbnail-12.jpg"
                                                            alt="Blog">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="category-btn">
                                                    <a href="#" class="btn btn-round btn-sm btn-rose">Photography</a>
                                                </div>
                                                <h5 class="font-weight-700 mt-3">
                                                    <a href="#" class="text-dark-gray">Ornare Sem Malesuada</a>
                                                </h5>
                                                <ul class="meta-entry">
                                                    <li class="meta-entry-item">
                                                        <a href="#">14 Sep 2020</a>
                                                    </li>
                                                    <li class="meta-entry-item">
                                                        <a href="#">John Davis</a>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Mollis euismod est in amet risus malesuada
                                                    suspendisse odio vulputate</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div class="card card-blog-entry border-0 plain-card mb-3">
                                            <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                <a href="#">
                                                    <div class="hover-transition">
                                                        <div class="hover-down">
                                                            <i class="fas fa-link fa-2x hover-icon"></i>
                                                        </div>
                                                    </div>
                                                    <figure>
                                                        <img class="img-fluid"
                                                            src="../../assets/images/upload/blog-thumbnail-13.jpg"
                                                            alt="Blog">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="category-btn">
                                                    <a href="#" class="btn btn-round btn-sm btn-rose">Photography</a>
                                                </div>
                                                <h5 class="font-weight-700 mt-3">
                                                    <a href="#" class="text-dark-gray">Nam Interdum Turpis</a>
                                                </h5>
                                                <ul class="meta-entry">
                                                    <li class="meta-entry-item">
                                                        <a href="#">14 Sep 2020</a>
                                                    </li>
                                                    <li class="meta-entry-item">
                                                        <a href="#">John Davis</a>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Facilisis libero volutpa molestie curabitur
                                                    rutrum accumsan amet sollicitudin</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="carousel-component-item">
                                        <div class="card card-blog-entry border-0 plain-card mb-3">
                                            <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                                <a href="#">
                                                    <div class="hover-transition">
                                                        <div class="hover-down">
                                                            <i class="fas fa-link fa-2x hover-icon"></i>
                                                        </div>
                                                    </div>
                                                    <figure>
                                                        <img class="img-fluid"
                                                            src="../../assets/images/upload/blog-thumbnail-14.jpg"
                                                            alt="Blog">
                                                    </figure>
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="category-btn">
                                                    <a href="#" class="btn btn-round btn-sm btn-primary">Vacation</a>
                                                </div>
                                                <h5 class="font-weight-700 mt-3">
                                                    <a href="#" class="text-dark-gray">Nulla Bibendum Quam</a>
                                                </h5>
                                                <ul class="meta-entry">
                                                    <li class="meta-entry-item">
                                                        <a href="#">14 Sep 2020</a>
                                                    </li>
                                                    <li class="meta-entry-item">
                                                        <a href="#">John Davis</a>
                                                    </li>
                                                </ul>
                                                <p class="card-text">Vivamus egestas sit posuere rhoncus vestibulum
                                                    hendrerit nec sapien massa</p>
                                            </div>
                                        </div>
                                    </div> --}}

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

    {{-- <!-- Content -->
    <div class="main-content pb-0">

        <div class="container">
            <div class="row pt-3 pb-5 mt-4 mb-5">

                <!-- Content section -->
                <div class="col-lg-8">
                    <div class="pr-xl-3 pb-5 pb-lg-0 mb-5 mb-lg-0">

                        <!-- Blog list -->
                        <div class="blog-container blog-vertical">

                            <!-- Blog item -->
                            <div class="blog-entry">
                                @foreach ($articleItem as $item)
                                    <div class="card card-blog-entry border-0 plain-card mb-4">
                                        <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                            <a href="#">
                                                <div class="hover-transition">
                                                    <div class="hover-down">
                                                        <i class="fas fa-link fa-2x hover-icon"></i>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img class="img-fluid" src="images/articles/{{ $item->image }}"
                                                        alt="Blog">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="category-btn">
                                                <a href="#"
                                                    class="btn btn-round btn-sm btn-primary mr-1">{{ $item->category }}</a>
                                            </div>
                                            <h5 class="card-title font-weight-700 mt-3">
                                                <a href="#" class="text-dark-gray">{{ $item->title }}</a>
                                            </h5>
                                            <ul class="meta-entry">
                                                <li class="meta-entry-item">
                                                    <span>{{ $item->created_at }}</span>
                                                </li>
                                                <li class="meta-entry-item">
                                                    <span>{{ $item->editor }}</span>
                                                </li>
                                            </ul>
                                            <p class="card-text">
                                                {!! Str::limit($item->content, 800, $end = '...') !!}
                                            </p>
                                        </div>
                                        <div class="card-footer border-0 bg-transparent">
                                            <div class="meta-item float-left mb-2">
                                                <a href="#"><i class="far fa-list-alt text-black-50"></i>Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        

                    </div>
                </div>
                @include('layouts.partials.sidebarWidget')
            </div>
        </div>
    </div> --}}
@endsection
