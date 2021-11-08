<!DOCTYPE html>
<html lang="en">

@include('layouts.partials.header', ['title' => 'Login'])

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

    <!-- Content -->
    <div class="container-fluid">
        <div class="row min-vh-100">

            <div class="col-lg-4 bg-image order-2 order-lg-1"
                data-img-src="{{ asset('images/upload/mega-menu-service-02.jpg') }}">
                <div class="row h-100 align-content-between">

                    <div class="col-12 d-none d-lg-block">
                        <div class="px-3 py-4 p-xl-4">
                            <a href="/"><img src="{{ asset('images/logo-white.png') }}" alt="logo"
                                    data-width="146px"></a>
                        </div>
                    </div>

                    <div class="col-12 pt-5 mt-4 pt-lg-0 mt-lg-0">
                        <div class="px-3 px-xl-4">
                            <blockquote class="blockquote-2 blockquote-light-2 border-left mb-5 mb-lg-0">
                                <script type="text/javascript" src="https://www.brainyquote.com/link/quotebr.js"></script>
                            </blockquote>
                        </div>
                    </div>

                    <div class="col-12 pt-lg-3">
                        <div class="text-white-75 px-3 py-4 p-xl-4 mt-lg-1">
                            <small>Copyright @ <a href="https://nayagaedu.com/"
                                    class="text-light font-weight-600">Nayagaedu</a>. All
                                Rights Reserved.</small>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-8 order-1 order-lg-2">
                <div class="row h-100 align-content-between">

                    <div class="col-12">
                        <div class="row align-items-center py-4 mb-4 mb-lg-0">

                            <div class="col-6 col-lg-12">
                                <div class="text-right px-3 px-xl-4 mt-xl-2">
                                    <a href="/" class="text-dark font-weight-600 text-uppercase"><i
                                            class="fas fa-angle-left mr-2"></i>Back to homepage</a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="container">
                            <div class="row mb-5">
                                <div class="col-md-8 offset-md-2 col-xl-6 offset-xl-3">
                                    <div class="p-lg-4 mb-4 mb-xl-5">

                                        <div class="mb-4 text-center">
                                            <img src="{{ asset('images/svg/login-03.svg') }}" alt="Login"
                                                data-width="64px" data-height="64px">
                                        </div>

                                        <div class="pb-1"></div>

                                        <h3 class="section-title-4 text-center font-weight-800 mb-4">
                                            User Login
                                            <div class="title-divider-round"></div>
                                        </h3>
                                        @error('email')
                                            <div class="alert alert-warning alert-icon alert-dismissible fade show mb-5"
                                                role="alert">
                                                <i class="far fa-question-circle"></i>
                                                <strong>{{ $message }}</a>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                            </div>
                                        @enderror
                                        @error('password')
                                            <div class="alert alert-warning alert-icon alert-dismissible fade show mb-5"
                                                role="alert">
                                                <i class="far fa-question-circle"></i>
                                                <strong>{{ $message }}</a>
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                            </div>
                                        @enderror
                                        @if (Session::has('success'))
                                            <div class="alert alert-success alert-icon alert-dismissible fade show mb-5"
                                                role="alert">
                                                <i class="far fa-check-circle"></i>
                                                <strong>{{ Session::get('success') }}
                                                    <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                        <span aria-hidden="true"></span>
                                                    </button>
                                            </div>
                                        @endif

                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <div class="input-group input-group-lg input-group-round mb-4">
                                                <label class="text-uppercase px-3">Email</label>
                                                <div class="input-group-inner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-icon"><i
                                                                class="far fa-user"></i></span>
                                                    </div>
                                                    <input id="email" type="email"
                                                        class="form-control form-control-lg @error('email') is-invalid @enderror"
                                                        name="email" value="{{ old('email') }}" required
                                                        autocomplete="email" autofocus placeholder="Email">
                                                    <div class="input-focus-bg"></div>
                                                </div>
                                            </div>

                                            <div class="input-group input-group-lg input-group-round mb-4">
                                                <div class="d-flex w-100 justify-content-between">
                                                    <label class="text-uppercase px-3">Password</label>
                                                </div>
                                                <div class="input-group-inner">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text input-group-icon"><i
                                                                class="far fa-eye-slash"></i></span>
                                                    </div>
                                                    <input id="password" type="password"
                                                        class="form-control form-control-lg @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password" placeholder="Password">
                                                    <div class="input-focus-bg"></div>
                                                </div>
                                            </div>

                                            <div data-height="5px"></div>

                                            <button type="submit"
                                                class="btn btn-lg btn-round btn-primary btn-block mb-0"><i
                                                    class="fas fa-sign-in-alt"></i>Sign In</button>

                                            &nbsp;
                                            <label class="w-100 text-center py-2 mb-0">
                                                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
                                            </label>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12"></div>

                </div>
            </div>

        </div>
    </div>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    @include('layouts.partials.js')
