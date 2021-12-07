<div class="nav-header">
    <a href="/" class="brand-logo">
        <img src="{{ asset('images/svg/logo-image.svg') }}" alt="logo" width="70px">
        <div class="brand-title">
            <img src="{{ asset('images/svg/logo-text.svg') }}" alt="logo" width="70px">
        </div>
    </a>
    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
</div>

<div class="header border-bottom">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="dashboard_bar">
                        Hi, {{ Auth::user()->firstname ?: Auth::user()->username }}
                    </div>
                </div>
                <ul class="navbar-nav header-right">

                    @if (Auth::user()->role == 2)
                        <span class="d-flex align-items-center" style="font-size: 15px">Referral: </span>
                        <li class="nav-item d-flex align-items-center">
                            <div class="input-group">
                                <input type="text" class="form-control" value="{{ Auth::user()->username }}"
                                    id="myInput" readonly>
                                <button class="btn btn-primary" onclick="myFunction()"><i
                                        class="far fa-copy"></i><span id="referralCode"> Copy</span></button>
                            </div>
                        </li>
                    @else
                        <span class="d-flex align-items-center" style="font-size: 15px"><strong>Admin
                                Account!</strong></span>
                    @endif

                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
                            <img src="{{ asset('images/user.png') }}" alt="user" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            @if (Auth::user()->role == 2)
                                <a href="{{ route('profile') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary"
                                        width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>
                                    <span class="ms-2">Profile </span>
                                </a>
                            @endif

                            @if (Route::has('login'))
                                @auth
                                    <a href="{{ route('logout') }}" class="dropdown-item ai-icon"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger"
                                            width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                            <polyline points="16 17 21 12 16 7"></polyline>
                                            <line x1="21" y1="12" x2="9" y2="12"></line>
                                        </svg>
                                        <span class="ms-2">Logout </span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                @endauth
                            @endif

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
