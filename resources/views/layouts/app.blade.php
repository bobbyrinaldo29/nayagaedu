<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header')

<!-- Navigation menu -->
<div class="navik-header header-shadow header-transparent navik-mega-menu mega-menu-fullwidth">
    <div class="container">
        <div class="navik-header-container">

            <!--Logo-->
            <div class="logo" data-mobile-logo="{{ asset('images/svg/logo.svg') }}"
                data-sticky-logo="{{ asset('images/svg/logo.svg') }}" width="10px">
                <a href="#"><img src="{{ asset('images/svg/logo-white.svg') }}" alt="logo" /></a>
            </div>

            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>

            <!--Navigation menu-->
            <nav class="navik-menu menu-hover-reset menu-caret submenu-top-border submenu-scale">
                <ul>
                    <li class="{{ request()->is('/') ? 'current-menu' : '' }}"><a href="/">Home</a></li>
                    <li><a href="#">Market View</a>
                        <ul>
                            @foreach ($categoryList as $item)
                                <li><a href="/{{ Str::lower($item->name) }}">{{ $item->name }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="{{ request()->is('trader-talent') ? 'current-menu' : '' }}"><a
                            href="{{ route('trader-talent') }}">Trader Talent</a></li>
                    <li class="{{ request()->is('about') ? 'current-menu' : '' }}"><a
                            href="{{ route('about') }}">About Us</a></li>
                    <li class="{{ request()->is('contact') ? 'current-menu' : '' }}"><a
                            href="{{ route('contact') }}">Contact</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                    @endif
                </ul>
            </nav>

        </div>
    </div>
</div>

<body>
    <!-- Preloader -->
    <div class="preloader-container">
        <div class="preloader-wrapper">
            <div class="preloader-border"></div>
            <div class="preloader-line-mask">
                <div class="preloader-line"></div>
            </div>
        </div>
    </div>

    @yield('content')

    <!-- Footer -->
    <div class="w-100 bg-viridian-500 text-white-50">

        <div class="py-5">
            <div class="container">
                <div class="row py-5">

                    <div class="col-lg-4 mb-5 mb-lg-0">

                        <div class="widget">

                            <img class="img-fluid d-block mb-4" src="{{ asset('images/logo-white.png') }}" alt="logo"
                                data-width="150px">

                            <div data-height="5px"></div>
                            <p>Disclaimer!</p>
                            <p>The money market has very high potential and risk, be careful before you make a
                                transaction on the money market. PT Nayotama Arya Ganesha does not sell investment
                                programs and is not responsible for all investment programs on behalf of the company.
                            </p>

                        </div>

                        <div class="widget">

                            <h6 class="widget-title text-white text-uppercase font-weight-700 mb-4">Follow Us</h6>

                            <div class="d-flex ml-n2">
                                <a href="#" target="_blank"
                                    class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                                    data-width="36px" data-height="36px"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"
                                    class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                                    data-width="36px" data-height="36px"><i class="fab fa-twitter"></i></a>
                                <a href="#" target="_blank"
                                    class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                                    data-width="36px" data-height="36px"><i class="fab fa-linkedin-in"></i></a>
                                <a href="#" target="_blank"
                                    class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                                    data-width="36px" data-height="36px"><i class="fab fa-instagram"></i></a>
                                <a href="#" target="_blank"
                                    class="d-flex align-items-center justify-content-center text-white-25 text-hover-primary"
                                    data-width="36px" data-height="36px"><i class="fab fa-vimeo-v"></i></a>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="widget">

                            <h6 class="widget-title text-white text-uppercase font-weight-700">Office</h6>

                            <ul class="custom-list fa-ul mb-0 ml-4">
                                <li class="mb-3">
                                    <span class="fa-li"><i
                                            class="fas fa-map-marker-alt text-primary"></i></span>
                                    Office Client Regus Business Centre Indonesia. 9th Floor Wisma Monex, Jl. Asia
                                    Afrika
                                    133-137
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-phone-alt text-primary"></i></span>
                                    (+87) 847-292-4353
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-envelope text-primary"></i></span>
                                    admin@nayagaedu.com
                                </li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="widget">

                            <h6 class="widget-title text-white text-uppercase font-weight-700">Legality</h6>

                            <ul class="custom-list fa-ul mb-0 ml-4">
                                <li class="mb-3">
                                    <span class="fa-li"><i
                                            class="fas fa-file-contract text-primary"></i></span>
                                    SK MENKUMHAM : AHU-0037895.AH.01.01.TAHUN 2019
                                </li>
                                <li class="mb-3">
                                    <span class="fa-li"><i class="fas fa-id-card text-primary"></i></span>
                                    NPWP : 92.423.836.3-423.000
                                </li>
                                <li>
                                    <span class="fa-li"><i class="fas fa-building text-primary"></i></span>
                                    NIB : 9120402830164
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom py-4">
            <div class="container footer-bottom-container">
                <div class="row py-3">

                    <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                        <small>Copyright @ <a href="https://nayagaedu.com/">Nayaga Edu</a>. All Rights
                            Reserved.</small>
                    </div>

                    <div class="col-lg-6 text-center text-lg-right">
                        <a href="#" data-toggle="modal" data-target="#modalInfoTerm"
                            class="text-white-50 text-hover-primary mr-4">Terms & Conditions</a>
                        <a href="#" data-toggle="modal" data-target="#riskDisclosure"
                            class="text-white-50 text-hover-primary">Risk Disclosure</a>
                    </div>


                </div>
            </div>
        </div>

    </div>
    @include('dashboard.users.components.termCondition')
    @include('dashboard.users.components.riskDisclosure')

    <!-- Go to top -->
    <div class="go-to-top">
        <a href="#" class="rounded-circle"><i class="fas fa-chevron-up"></i></a>
    </div>

    @include('layouts.partials.js')

</body>

</html>
