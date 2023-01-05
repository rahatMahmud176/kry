<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box bg-soft-dark">
                <a href="{{ route('all-orders') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        {{-- <h2>KRY</h2> --}}
                        <img src="{{ asset('/') }}/customImage/headerImage-removebg-preview.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                    <img src="{{ asset('/') }}/customImage/headerImage-removebg-preview.png" style="width: 140px; height:auto" alt="" height="22">

                    </span>
                </a>

                <a href="{{ route('all-orders') }}" class="logo logo-light">
                    <span class="logo-sm">
                    <img src="{{ asset('/') }}/customImage/headerImage-removebg-preview.png" style="width: 140px; height:auto" alt="" height="22">

                    </span>
                    <span class="logo-lg">
                    <img src="{{ asset('/') }}/customImage/headerImage-removebg-preview.png" style="width: 140px; height:auto" alt="" height="22">

                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

           

             
        </div>

        <div class="d-flex">

             
            

            

            <div class="dropdown d-none d-lg-inline-block ml-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="bx bx-fullscreen"></i>
                </button>
            </div>

             

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ asset('/') }}customImage/admin-profile-pic.jpg"
                        alt="Header Avatar">
                    <span class="d-none d-xl-inline-block ml-1">{{ Session::get('adminName') }}</span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle mr-1"></i> My Wallet</a> 
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('admin-logout') }}"><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                </div>
            </div>

            <div class="dropdown d-inline-block">
               
            </div>

        </div>
    </div>
</header>