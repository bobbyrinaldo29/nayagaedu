@extends('layouts.app', ['title' => 'Kontak Kami'])

@section('content')
    <!-- Page title -->
    <div class="d-flex flex-column w-100">
        <div class="page-title d-flex align-items-center bg-image py-5"
            data-img-src="{{ asset('images/upload/mobile-phone-03.jpg') }}">
            <div class="container page-title-container">
                <div class="row py-5">
                    <div class="col text-center">
                        <h1 class="display-3 font-weight-800 text-white mb-0">
                            Kontak Kami
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-content py-0">

        <!-- Blockquote section -->
        <div class="section bg-indigo py-5">
            <div class="container">
                <div class="row my-4">
                    <div class="col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <blockquote class="blockquote blockquote-light-2 text-center mb-0">
                            <p class="mb-0">Jika kamu tidak menemukan sebuah cara untuk menghasilkan uang ketika
                                kamu sedang tidur, kamu akan bekerja sampai kamu meninggal.</p>
                            <footer class="blockquote-footer">Warren Buffet</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

        <div class="section py-5 pb-lg-0">
            <div class="container">
                <div class="row pt-4 my-5 mb-lg-0">

                    <!-- Contact info -->
                    <div class="col-lg-10 offset-lg-1 col-xl-6 offset-xl-0">
                        <div class="pr-lg-5">

                            <div class="d-none d-xl-block" data-height="64px"></div>

                            <h3 class="section-title-4 text-left font-weight-700 mb-4">
                                Informasi Kontak
                                <div class="title-divider-round"></div>
                            </h3>

                            <div class="lead-sm pt-2 pb-3 mb-5">
                                Hubungi kami kapan saja, Kami selalu siap untuk membantu Anda.
                            </div>

                            <div class="row">

                                <div class="col-md-6 mb-5">
                                    <div class="icon-info-1">
                                        <div class="icon-element">
                                            <img src="{{ asset('images/svg/contact-icon-19.svg') }}" alt="icon"
                                                class="img-fluid add-animate" data-animated="zoomIn" data-width="46px"
                                                data-height="46px">
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-2">Lokasi</h5>
                                            <p>Office Client Resus Business Centre Indonesia. 9th Floor Wisma Monex, Jl.
                                                Asia Afrika
                                                133-137</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <div class="icon-info-1">
                                        <div class="icon-element">
                                            <img src="{{ asset('images/svg/contact-icon-20.svg') }}" alt="icon"
                                                class="img-fluid add-animate" data-animated="zoomIn" data-width="46px"
                                                data-height="46px">
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-2">Email</h5>
                                            <p>
                                                <a href="mailto:admin@nayagaedu.com"
                                                    class="text-reset">admin@nayagaedu.com</a><br>
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <div class="icon-info-1">
                                        <div class="icon-element">
                                            <img src="{{ asset('images/svg/contact-icon-21.svg') }}" alt="icon"
                                                class="img-fluid add-animate" data-animated="zoomIn" data-width="46px"
                                                data-height="46px">
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-2">Telepon</h5>
                                            <p>(+87) 847-292-4353</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb-5">
                                    <div class="icon-info-1">
                                        <div class="icon-element">
                                            <img src="{{ asset('images/svg/contact-icon-22.svg') }}" alt="icon"
                                                class="img-fluid add-animate" data-animated="zoomIn" data-width="46px"
                                                data-height="46px">
                                        </div>
                                        <div class="icon-info-text pl-3">
                                            <h5 class="font-weight-700 mb-2">Website</h5>
                                            <p><a href="#" class="text-reset">https://nayagaedu.com/</a></p>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Contact form box -->
                    <div class="col-lg-10 offset-lg-1 col-xl-6 offset-xl-0">
                        <div class="bg-white position-relative overflow-hidden z-index-1 rounded-xl shadow-lg ml-xl-5">

                            <div class="px-4 py-5 p-md-5">

                                <h3 class="section-title-4 text-left font-weight-700 my-3">
                                    Kami akan menghubungi Anda kembali!
                                    <div class="title-divider-round"></div>
                                </h3>

                                <form class="pt-4">
                                    <div class="form-row">

                                        <div class="form-group col-md-6 pb-3 mb-3">
                                            <div class="pr-md-1">
                                                <input type="text" class="form-control form-round form-control-lg"
                                                    placeholder="Nama *" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 pb-3 mb-3">
                                            <div class="pl-md-1">
                                                <input type="email" class="form-control form-round form-control-lg"
                                                    placeholder="Email *" required>
                                            </div>
                                        </div>

                                        <div class="form-group col-12 pb-3 mb-3">
                                            <input type="text" class="form-control form-round form-control-lg"
                                                placeholder="Subject *" required>
                                        </div>

                                        <div class="form-group col-12 mb-5">
                                            <textarea class="form-control form-round form-control-lg py-3" rows="7"
                                                placeholder="Pertanyaan Anda *" required></textarea>
                                        </div>

                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-round btn-lg btn-indigo">Kirim</button>
                                        </div>

                                    </div>
                                </form>

                            </div>

                            <div class="bg-indigo px-4 px-md-5 py-4">

                                <div data-height="3px"></div>

                                <div class="text-center">
                                    <a href="#" class="btn btn-round btn-sm btn-icon-only btn-outline-light mx-1 my-2"><i
                                            class="fab fa-facebook-f"></i></a>
                                    <a href="#" class="btn btn-round btn-sm btn-icon-only btn-outline-light mx-1 my-2"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="#" class="btn btn-round btn-sm btn-icon-only btn-outline-light mx-1 my-2"><i
                                            class="fab fa-pinterest-p"></i></a>
                                    <a href="#" class="btn btn-round btn-sm btn-icon-only btn-outline-light mx-1 my-2"><i
                                            class="fab fa-linkedin-in"></i></a>
                                    <a href="#" class="btn btn-round btn-sm btn-icon-only btn-outline-light mx-1 my-2"><i
                                            class="fab fa-instagram"></i></a>
                                </div>

                                <div data-height="3px"></div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Google map section -->
        <div class="section">
            <div class="container-fluid px-0">
                <div class="row map-wrapper no-gutters align-items-center mt-lg-up100">

                    <div class="col-12 map-container">
                        <iframe src="https://maps.google.com/maps?q=-6.9219409,107.6138817&hl=id&z=14&amp;output=embed"
                            width="100%" height="100%"></iframe>
                    </div>

                    <div class="col-12 bg-indigo">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-lg-4 col-xl-3">
                                    <div class="map-info-box bg-indigo text-white-75 rounded-lg px-3 py-4 p-lg-4">
                                        <div class="py-2 p-lg-2">

                                            <h5 class="text-white font-weight-700 mb-3">Alamat Kantor</h5>
                                            <div class="divider-1 divider-light-2"></div>

                                            <div class="row contact-info-list mb-2">
                                                <div class="col contact-info-item">
                                                    <div class="icon-info-1">
                                                        <div class="icon-element text-white pt-1" data-width="30px">
                                                            <i class="fas fa-map-marker-alt fa-lg"></i>
                                                        </div>
                                                        <div class="icon-info-text pl-2">
                                                            <div class="pb-2">
                                                                <p>Office Client Resus Business Centre Indonesia. 9th Floor
                                                                    Wisma Monex, Jl. Asia Afrika
                                                                    133-137</p>
                                                            </div>
                                                            <a href="https://www.google.com/maps/dir//-6.9219409,107.6138817/@-6.9219409,107.611693,17z/data=!4m2!4m1!3e0?hl=id"
                                                                target="_blank"
                                                                class="btn btn-sm btn-round btn-secondary btn-gray-shadow d-inline-block mb-0 text-decoration-none">Dapatkan
                                                                Rute</a>
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
        </div>
    </div>
@endsection
