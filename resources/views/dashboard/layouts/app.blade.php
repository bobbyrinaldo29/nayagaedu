<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.partials.head')

<body>
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="main-wrapper">
        @include('dashboard.layouts.partials.navbar')
        @include('dashboard.layouts.partials.sidebar')

        @yield('content')
        
        @include('dashboard.layouts.partials.footer')
    </div>

    @include('dashboard.layouts.partials.js')

</body>
