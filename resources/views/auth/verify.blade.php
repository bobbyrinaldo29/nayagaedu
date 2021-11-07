@include('layouts.partials.header')

<!-- Content -->
<div class="container-fluid">
    <div class="row min-vh-100 align-content-between">

        <div class="col-12">
            <div class="row align-items-center py-4">

                <div class="col-md-6">
                    <div class="text-center text-md-left px-4 mb-4 mb-md-0">
                        <a href="/"><img src="{{ asset('/images/nayaga-logo.png') }}" alt="logo" width="146px"></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 col-lg-6 offset-lg-3">
                        <div class="px-xl-4">
                            <div class="bg-white rounded-ultra shadow-lg px-4 py-5 p-md-5">

                                <div class="mb-4 text-center">
                                    <img src="{{ asset('/images/svg/login-03.svg') }}" alt="Password reset"
                                        data-width="64px" data-height="64px">
                                </div>

                                <div class="pb-1"></div>

                                <h3 class="section-title-4 text-center font-weight-800 mb-4">
                                    Verify Your Email Address
                                    <div class="title-divider-round"></div>
                                </h3>
                                @if (session('resent'))
                                    <div class="alert alert-success alert-icon alert-dismissible fade show mb-5"
                                        role="alert">
                                        <i class="far fa-check-circle"></i>
                                        <strong>Success!</strong>
                                        A fresh verification link has been sent to your email address.
                                        <button type="button" class="close" data-dismiss="alert"
                                            aria-label="Close">
                                            <span aria-hidden="true"></span>
                                        </button>
                                    </div>
                                @endif

                                <h6 class="text-center py-2 mb-0">
                                    {{ __('Before proceeding, please check your email for a verification link.') }}
                                    {{ __('If you did not receive the email') }},
                                </h6>
                                &nbsp;
                                <form class="d-inline" method="POST"
                                    action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-lg btn-round btn-primary btn-block"><i
                                            class="fas fa-paper-plane"></i>click here to request another</button>.
                                </form>

                                <label class="w-100 text-center py-2 mb-0">
                                    <small>Copyright @ <a href="https://nayagaedu.com/">nayagaedu.com</a>. All Rights
                                        Reserved.</small>
                                </label>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 pt-md-3">
            <div class="text-center text-white-75 p-4 mt-md-1">
                <small>Copyright @ <a href="#" class="text-light font-weight-600">yourdomain.com</a>. All Rights
                    Reserved.</small>
            </div>
        </div>

    </div>
</div>

@include('layouts.partials.js')

{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
