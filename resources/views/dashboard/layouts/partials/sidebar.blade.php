<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            &nbsp;
            @if (Auth::user()->role == 2)
                {{-- USER SIDEBAR --}}
                <li><a href="{{ route('dashboard') }}" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a href="{{ route('package') }}" class="" aria-expanded="false">
                        <i class="fas fa-user-check"></i>
                        <span class="nav-text">Package</span>
                    </a>
                </li>
                <li><a href="{{ route('history') }}" class="" aria-expanded="false">
                        <i class="fas fa-history"></i>
                        <span class="nav-text">History</span>
                    </a>
                </li>
            @else
                {{-- ADMIN SIDEBAR --}}
                <li><a href="{{ route('admin.dashboard') }}" class="" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a class="has-arrow " href="javascript:void()" aria-expanded="true">
                        <i class="fas fa-user-cog"></i>
                        <span class="nav-text">Settings</span>
                    </a>
                    <ul aria-expanded="true">
                        <li><a href="{{ route('admin.bankName') }}">Bank Status</a></li>
                        <li><a href="{{ route('admin.package') }}">Package Status</a></li>
                    </ul>

                </li>
            @endif

            <div class="copyright">
                <p><strong>Disclaimer!</strong></p>
                <p>The money market has very high potential and risk, be careful before you make a
                    transaction on the money market. PT Nayotama Arya Ganesha does not sell investment
                    programs and is not responsible for all investment programs on behalf of the company.</p>
            </div>
    </div>
</div>
