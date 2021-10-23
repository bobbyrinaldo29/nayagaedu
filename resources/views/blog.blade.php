@extends('layouts.app')

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
                                Blog
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
                                <div class="card card-blog-entry border-0 plain-card mb-0">
                                    <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                        <a href="#">
                                            <div class="hover-transition">
                                                <div class="hover-down">
                                                    <i class="fas fa-link fa-2x hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="img-fluid"
                                                    src="images/upload/blog-thumbnail-26.jpg" alt="Blog">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="category-btn">
                                            <a href="#" class="btn btn-round btn-sm btn-primary mr-1">Vacation</a>
                                            <a href="#" class="btn btn-round btn-sm btn-rose">Photography</a>
                                        </div>
                                        <h5 class="card-title font-weight-700 mt-3">
                                            <a href="#" class="text-dark-gray">Maecenas Rhoncus Purus</a>
                                        </h5>
                                        <ul class="meta-entry">
                                            <li class="meta-entry-item">
                                                <a href="#">14 Sep 2020</a>
                                            </li>
                                            <li class="meta-entry-item">
                                                <a href="#">John Davis</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Fusce sem massa, congue vitae neque in, rhoncus
                                            viverra erat. Aliquam dui odio, posuere in sit lobortis amet consequat eu
                                            dolor varius eget velit vitae diam efficitur fermentum. Morbi quis placerat
                                            dolor mollis bibendum dui etiam vehicula semper</p>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="meta-item float-left mb-2">
                                            <a href="#"><i class="far fa-list-alt text-black-50"></i>Read more</a>
                                        </div>
                                        <div class="meta-item float-right mb-2">
                                            <a href="#"><i class="far fa-comment-dots text-black-50"></i>Comments 9</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog item -->
                            <div class="blog-entry">
                                <div class="card card-blog-entry border-0 plain-card mb-0">
                                    <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                        <a href="#">
                                            <div class="hover-transition">
                                                <div class="hover-down">
                                                    <i class="fas fa-link fa-2x hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="img-fluid"
                                                    src="images/upload/blog-thumbnail-27.jpg" alt="Blog">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="category-btn">
                                            <a href="#" class="btn btn-round btn-sm btn-primary mr-1">Vacation</a>
                                            <a href="#" class="btn btn-round btn-sm btn-success">Lifestyle</a>
                                        </div>
                                        <h5 class="card-title font-weight-700 mt-3">
                                            <a href="#" class="text-dark-gray">Cursus Quam Elementum</a>
                                        </h5>
                                        <ul class="meta-entry">
                                            <li class="meta-entry-item">
                                                <a href="#">14 Sep 2020</a>
                                            </li>
                                            <li class="meta-entry-item">
                                                <a href="#">John Davis</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Euismod iaculis ac dolor eget pharetra justo.
                                            Phasellus tortor ante, facilisis cursus a metus, gravida neque. Mauris
                                            porttitor, neque nec aliquam laoreet diam ipsum rutrum velit nec iaculis est
                                            massa vitae nibh commodo eleifend vestibulum</p>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="meta-item float-left mb-2">
                                            <a href="#"><i class="far fa-list-alt text-black-50"></i>Read more</a>
                                        </div>
                                        <div class="meta-item float-right mb-2">
                                            <a href="#"><i class="far fa-comment-dots text-black-50"></i>Comments 7</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog item -->
                            <div class="blog-entry">
                                <div class="card card-blog-entry border-0 plain-card mb-0">
                                    <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                        <a href="#">
                                            <div class="hover-transition">
                                                <div class="hover-down">
                                                    <i class="fas fa-link fa-2x hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="img-fluid"
                                                    src="images/upload/blog-thumbnail-28.jpg" alt="Blog">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="category-btn">
                                            <a href="#" class="btn btn-round btn-sm btn-primary mr-1">Vacation</a>
                                            <a href="#" class="btn btn-round btn-sm btn-success">Lifestyle</a>
                                        </div>
                                        <h5 class="card-title font-weight-700 mt-3">
                                            <a href="#" class="text-dark-gray">Donec Festibulum Elit Ante</a>
                                        </h5>
                                        <ul class="meta-entry">
                                            <li class="meta-entry-item">
                                                <a href="#">14 Sep 2020</a>
                                            </li>
                                            <li class="meta-entry-item">
                                                <a href="#">John Davis</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Ullamcorper lobortis dui aenean dictum nec at nunc
                                            quis convallis ut sapien arcu, porta a dapibus lacinia ut justo. Nam
                                            consequat mattis interdum cras aliquet condimentum ligula vitae convallis
                                            fusce sapien lectus malesuada consequa</p>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="meta-item float-left mb-2">
                                            <a href="#"><i class="far fa-list-alt text-black-50"></i>Read more</a>
                                        </div>
                                        <div class="meta-item float-right mb-2">
                                            <a href="#"><i class="far fa-comment-dots text-black-50"></i>Comments
                                                10</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Blog item -->
                            <div class="blog-entry">
                                <div class="card card-blog-entry border-0 plain-card mb-0">
                                    <div class="card-blog-img hover-item hover-scale hover-uncaption">
                                        <a href="#">
                                            <div class="hover-transition">
                                                <div class="hover-down">
                                                    <i class="fas fa-link fa-2x hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="img-fluid"
                                                    src="images/upload/blog-thumbnail-36.jpg" alt="Blog">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="category-btn">
                                            <a href="#" class="btn btn-round btn-sm btn-primary mr-1">Vacation</a>
                                            <a href="#" class="btn btn-round btn-sm btn-rose">Photography</a>
                                        </div>
                                        <h5 class="card-title font-weight-700 mt-3">
                                            <a href="#" class="text-dark-gray">Mauris Sem Porttitor Massa</a>
                                        </h5>
                                        <ul class="meta-entry">
                                            <li class="meta-entry-item">
                                                <a href="#">14 Sep 2020</a>
                                            </li>
                                            <li class="meta-entry-item">
                                                <a href="#">John Davis</a>
                                            </li>
                                        </ul>
                                        <p class="card-text">Aenean sem mattis arcu in rhoncus risus duis pretium,
                                            purus eget cursus molestie magna nunc pulvinar magna, quis malesuada sapien
                                            erat at mi. Nullam ornare dictum magna, quis dignissim felis posuere donec
                                            interdum placerat lacinia</p>
                                    </div>
                                    <div class="card-footer border-0 bg-transparent">
                                        <div class="meta-item float-left mb-2">
                                            <a href="#"><i class="far fa-list-alt text-black-50"></i>Read more</a>
                                        </div>
                                        <div class="meta-item float-right mb-2">
                                            <a href="#"><i class="far fa-comment-dots text-black-50"></i>Comments
                                                12</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Pagination -->
                        <nav class="pt-5 mt-3" aria-label="page navigation">
                            <ul class="pagination pagination-round justify-content-center">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1<span
                                            class="sr-only">(current)</span></a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>

                <!-- Sidebar section -->
                <div class="col-lg-4">
                    <div class="sidebar pl-xl-3">

                        <!-- Widget banner -->
                        <div class="widget">
                            <a href="#">
                                <img src="images/upload/widget-banner-01.jpg" alt="image"
                                    class="img-fluid rounded-lg shadow-sm">
                            </a>
                        </div>

                        <!-- Widget recent news -->
                        <div class="widget">

                            <h5 class="widget-title section-title-3 font-weight-700 text-left">Recent News</h5>

                            <ul class="recent-blogs">

                                <li class="pb-4 mb-3">
                                    <div class="media">
                                        <div class="hover-item hover-uncaption mr-4 rounded-circle shadow">
                                            <a href="#">
                                                <div class="hover-transition rounded-circle">
                                                    <div class="hover-down">
                                                        <i class="fas fa-link fa-lg hover-icon"></i>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img src="images/upload/latest-news-01.jpg" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="blog-title font-italic mb-1">
                                                <a href="#">Mauris porttitor neque</a>
                                            </h6>
                                            <ul class="meta-entry mb-3">
                                                <li class="meta-entry-item">
                                                    <a href="#">27 Sep 2020</a>
                                                </li>
                                                <li class="meta-entry-item">
                                                    <a href="#">John Davis</a>
                                                </li>
                                            </ul>
                                            <p class="mb-0">Aliquam aptent nec sociosqu litora semper
                                                malesuada</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="pb-4 mb-3">
                                    <div class="media">
                                        <div class="hover-item hover-uncaption mr-4 rounded-circle shadow">
                                            <a href="#">
                                                <div class="hover-transition rounded-circle">
                                                    <div class="hover-down">
                                                        <i class="fas fa-link fa-lg hover-icon"></i>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img src="images/upload/latest-news-02.jpg" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="blog-title font-italic mb-1">
                                                <a href="#">Sapien pharetra justo</a>
                                            </h6>
                                            <ul class="meta-entry mb-3">
                                                <li class="meta-entry-item">
                                                    <a href="#">19 Sep 2020</a>
                                                </li>
                                                <li class="meta-entry-item">
                                                    <a href="#">John Davis</a>
                                                </li>
                                            </ul>
                                            <p class="mb-0">Nunc tincidunt aliquet dolor cursus auctor
                                                consequa</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="pb-4 mb-3">
                                    <div class="media">
                                        <div class="hover-item hover-uncaption mr-4 rounded-circle shadow">
                                            <a href="#">
                                                <div class="hover-transition rounded-circle">
                                                    <div class="hover-down">
                                                        <i class="fas fa-link fa-lg hover-icon"></i>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img src="images/upload/latest-news-03.jpg" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="blog-title font-italic mb-1">
                                                <a href="#">Praesent dolor ornare</a>
                                            </h6>
                                            <ul class="meta-entry mb-3">
                                                <li class="meta-entry-item">
                                                    <a href="#">14 Sep 2020</a>
                                                </li>
                                                <li class="meta-entry-item">
                                                    <a href="#">John Davis</a>
                                                </li>
                                            </ul>
                                            <p class="mb-0">Curabitur enim dolor ac sapien aliquam varius
                                                molestie</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="media">
                                        <div class="hover-item hover-uncaption mr-4 rounded-circle shadow">
                                            <a href="#">
                                                <div class="hover-transition rounded-circle">
                                                    <div class="hover-down">
                                                        <i class="fas fa-link fa-lg hover-icon"></i>
                                                    </div>
                                                </div>
                                                <figure>
                                                    <img src="images/upload/latest-news-04.jpg" alt="image">
                                                </figure>
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="blog-title font-italic mb-1">
                                                <a href="#">Donec nec elementum</a>
                                            </h6>
                                            <ul class="meta-entry mb-3">
                                                <li class="meta-entry-item">
                                                    <a href="#">14 Sep 2020</a>
                                                </li>
                                                <li class="meta-entry-item">
                                                    <a href="#">John Davis</a>
                                                </li>
                                            </ul>
                                            <p class="mb-0">Aenean sem mattis arcu rhoncus risus duis pretium
                                                nam</p>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                        <!-- Widget contact box -->
                        <div class="widget">
                            <div class="contact-box h-100 px-4 py-5 text-white-75 rounded-lg shadow-sm bg-image"
                                data-img-src="images/upload/contact-box-bg-04.jpg">
                                <div class="px-xl-3">

                                    <h5 class="section-title-3 title-light-1 font-weight-700 text-left mb-5">Get in
                                        Touch</h5>

                                    <div class="row contact-info-list">

                                        <div class="col-12 contact-info-item">
                                            <div class="icon-info-1">
                                                <div class="icon-element text-white pt-1">
                                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                                </div>
                                                <div class="icon-info-text pl-2">
                                                    <h6 class="mb-1 font-weight-700 text-white">Address</h6>
                                                    <p class="mb-0">2763 Finwood Road<br>New Brunswick, NJ
                                                        08901</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 contact-info-item">
                                            <div class="icon-info-1">
                                                <div class="icon-element text-white pt-1">
                                                    <i class="fas fa-mobile-alt fa-2x"></i>
                                                </div>
                                                <div class="icon-info-text pl-2">
                                                    <h6 class="mb-1 font-weight-700 text-white">Phone</h6>
                                                    <p class="mb-0">+1 732 418 2837<br>+1 415 584 5290</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 contact-info-item">
                                            <div class="icon-info-1">
                                                <div class="icon-element text-white pt-1">
                                                    <i class="fas fa-paper-plane fa-2x"></i>
                                                </div>
                                                <div class="icon-info-text pl-2">
                                                    <h6 class="mb-1 font-weight-700 text-white">Email</h6>
                                                    <a href="mailto:contact@yourdomain.com"
                                                        class="text-white-75">contact@domain.com</a>
                                                    <a href="mailto:info@yourdomain.com"
                                                        class="text-white-75">info@domain.com</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!-- Widget categories -->
                        <div class="widget">

                            <h5 class="widget-title section-title-3 font-weight-700 text-left">Categories</h5>

                            <ul class="list-unstyled mb-0">

                                <li class="mb-3">
                                    <a href="#" class="text-dark-gray">Mauris Pulvinar Sem Posuere</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                                <li class="mb-3">
                                    <a href="#" class="text-dark-gray">Neca Congue Cursus Lacus</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                                <li class="mb-3">
                                    <a href="#" class="text-dark-gray">Cursus Semper In Consequa</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                                <li class="mb-3">
                                    <a href="#" class="text-dark-gray">Malesuada Sapien Phasellus</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                                <li class="mb-3">
                                    <a href="#" class="text-dark-gray">Convallis Fusce Malesuada</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                                <li>
                                    <a href="#" class="text-dark-gray">Molestie Aliquam Maecenas</a>
                                    <span class="badge badge-pill badge-light shadow-sm ml-2">120</span>
                                </li>

                            </ul>

                        </div>

                        <!-- Widget gallery feed -->
                        <div class="widget">

                            <h5 class="widget-title section-title-3 font-weight-700 text-left">Gallery Feed</h5>

                            <div class="row widget-gallery-feed">
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-07.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-07.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-08.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-08.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-09.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-09.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-10.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-10.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-11.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-11.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-12.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-12.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-13.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-13.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-14.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-14.jpg" alt="image">
                                            </figure>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-4 gallery-feed-item">
                                    <div class="hover-item hover-uncaption rounded-lg shadow-sm">
                                        <a href="images/upload/widget-gallery-feed-lightbox-15.jpg"
                                            data-fancybox="gallery-feed">
                                            <div class="hover-transition">
                                                <div class="hover-down p-0">
                                                    <i class="far fa-eye fa-lg hover-icon"></i>
                                                </div>
                                            </div>
                                            <figure>
                                                <img class="w-100"
                                                    src="images/upload/widget-gallery-feed-15.jpg" alt="image">
                                            </figure>
                                        </a>
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
