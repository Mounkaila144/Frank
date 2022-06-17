<header id="header-admin-wrap" class="header-admin-fixed">

    <!-- Header Start -->
    <div id="header-admin">
        <div class="container">

            <!-- Left Side Content -->
            <div class="header-left">

                <div class="my-account-logo">
                    <a href="{{route('client.dashboard')}}"><img src="guest/images/logo.png" alt=""></a>
                </div>


            </div>
            <!-- Left Side Content End -->

            <!-- Right Side Content -->
            <div class="header-right">

                <div class="header-menu">
                    <!-- NAV Toggle Button -->
                    <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-bar-first"></span>
                        <span class="icon-bar icon-bar-two"></span>
                        <span class="icon-bar icon-bar-three"></span>
                    </button>

                    <!-- MAIN Vav -->



                <ul class="header-widget-wrap">

                    <li class="header-widget has-toltip">
                        <div class="aon-admin-messange sf-toogle-btn">
                            <i class="feather-globe"></i>
                            <span class="header-toltip">Language</span>
                        </div>
                        <div class="ws-toggle-popup popup-tabs-wrap-section popup-curra-lang">
                            <ul class="popup-curra-lang-list">
                                <li>English</li>
                                <li>Francais</li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-widget">
                        <div class="aon-admin-messange sf-toogle-btn">
                            <span class="feather-user-pic"><img src=" " alt=""/></span>
                        </div>
                        <div class="ws-toggle-popup popup-tabs-wrap-section user-welcome-area">
                            <ul class="user-welcome-list">
                                <li><strong>Welcome , <span class="site-text-primary">frank</span></strong></li>

                                <li><a href="{{route('client.profile')}}"><i class="feather-settings"></i> Profile</a></li>
                                <li><a  href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="feather-log-out"></i> Log Out</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                </li>
                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
            <!-- Right Side Content End -->

        </div>
    </div>
    <!-- Header End -->

</header>
