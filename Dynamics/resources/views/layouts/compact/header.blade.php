    <div class="main-header">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>

        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="d-flex align-items-center">
            <!-- Mega menu -->
        </div>

        <div style="margin: auto"></div>

        <div class="header-part-right">
            <!-- Full screen toggle -->
            <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
            <a href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"
                class="fas fa-sign-out-alt header-icon d-none d-sm-inline-block"></a>
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            <!-- Grid menu Dropdown -->

            <!-- Notificaiton -->
            <div class="dropdown">
                <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-primary">!</span>
                    <i class="i-Bell text-muted header-icon"></i>
                </div>
                <!-- Notification dropdown -->
                <div class="dropdown-menu dropdown-menu-right notification-dropdown rtl-ps-none"
                    aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>Aucun message</span>
                                <span class="badge badge-pill badge-primary ml-1 mr-1">Notif</span>
                                <span class="flex-grow-1"></span>
                                <!--span class="text-small text-muted ml-auto">10 sec ago</span-->
                            </p>
                            <p class="text-small text-muted m-0">Vous n'avez aucun message</p>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Notificaiton End -->

            <!-- User avatar dropdown -->
            <div class="dropdown">
                <div class="user col align-self-end">
                    <!--img src="{{ asset('assets/images/faces/1.jpg') }}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"-->

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <i class="i-Lock-User mr-1"></i> Timothy Carlson
                        </div>
                        <a class="dropdown-item">Account settings</a>
                        <a class="dropdown-item">Billing history</a>
                        <a class="dropdown-item" href="{{ route('signIn') }}">Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- header top menu end -->
