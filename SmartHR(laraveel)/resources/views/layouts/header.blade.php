<div class="header">
    <div class="main-header">

        <div class="header-left">
            <a href="index.html" class="logo">
                <img src="{{ asset('img/logo.svg') }}" alt="Logo">
            </a>
            <a href="index.html" class="dark-logo">
                <img src="{{ asset('img/logo-white.svg') }}" alt="Logo">
            </a>
        </div>

        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <div class="header-user">
            <div class="nav user-menu nav-list">

                <div class="me-auto d-flex align-items-center" id="header-search">
                    <a id="toggle_btn" href="javascript:void(0);" class="btn btn-menubar me-1">
                        <i class="ti ti-arrow-bar-to-left"></i>
                    </a>
                    <!-- Search -->
                    <div class="input-group input-group-flat d-inline-flex me-1">
                        <span class="input-icon-addon">
                            <i class="ti ti-search"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Search in HRMS">
                        <span class="input-group-text">
                            <kbd>CTRL + / </kbd>
                        </span>
                    </div>
                    <!-- /Search -->
                </div>

                <div class="d-flex align-items-center">
                    <div class="me-1">
                        <a href="#" class="btn btn-menubar btnFullscreen">
                            <i class="ti ti-maximize"></i>
                        </a>
                    </div>
                    <div class="dropdown profile-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle d-flex align-items-center"
                            data-bs-toggle="dropdown">
                            <span class="avatar avatar-sm online">
                                <img src="{{ asset('img/logo-small.svg') }}" alt="Img"
                                    class="img-fluid rounded-circle">
                            </span>
                        </a>
                        <div class="dropdown-menu shadow-none">
                            <div class="card mb-0">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar avatar-lg me-2 avatar-rounded">
                                            <img src="{{ asset('img/logo-small.svg') }}" alt="img">
                                        </span>
                                        <div>
                                            <h5 class="mb-0">{{ auth()->user()->name }}</h5>
                                            <p class="fs-12 fw-medium mb-0">{{ auth()->user()->email }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="#">
                                        <i class="ti ti-user-circle me-1"></i>My Profile
                                    </a>
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="#">
                                        <i class="ti ti-settings me-1"></i>Settings
                                    </a>

                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="#">
                                        <i class="ti ti-circle-arrow-up me-1"></i>My Account
                                    </a>
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2" href="#">
                                        <i class="ti ti-question-mark me-1"></i>Knowledge Base
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <a class="dropdown-item d-inline-flex align-items-center p-0 py-2"
									onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                        href="{{ route('logout') }}">
                                        <i class="ti ti-login me-2"></i>Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="profile-settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>

</div>
