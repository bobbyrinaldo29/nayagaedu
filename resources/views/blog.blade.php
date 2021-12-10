@extends('layouts.app', ['title' => 'Market View'])

@section('content')

    <!-- Page title -->
    <div class="w-100">

        <div class="d-flex flex-column w-100">
            <div class="page-title d-flex align-items-center bg-image py-5"
                data-img-src="{{ asset('images/upload/mega-menu-service-03.jpg') }}">
                <div class="container page-title-container">
                    <div class="row py-5">
                        <div class="col text-center">
                            <h1 class="display-3 font-weight-800 text-white mt-4 mb-1">
                                Forex
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

    <!-- Content -->
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
                                @foreach ($articleList as $item)
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

                        {{ $articleList->links('layouts.partials.pagination') }}

                    </div>
                </div>
                @include('layouts.partials.sidebarWidget')
            </div>
        </div>
    </div>
@endsection
