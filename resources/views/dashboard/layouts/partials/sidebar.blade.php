<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            &nbsp;
            @if (Auth::user()->role == 2)
                {{-- ADMIN SIDEBAR --}}
                <li><a href="{{ route('dashboard') }}" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="#" class="" aria-expanded="false">
                        <i class="fas fa-user-check"></i>
                        <span class="nav-text">Member</span>
                    </a>
                </li>
            @else
                {{-- USER SIDEBAR --}}
                <li><a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="#" class="" aria-expanded="false">
                        <i class="fas fa-user-check"></i>
                        <span class="nav-text">Member</span>
                    </a>
                </li>
            @endif

            <div class="copyright">
                <p><strong>Nayaga Edu</strong> © 2021. All Rights Reserved.</p>
            </div>
    </div>
</div>
