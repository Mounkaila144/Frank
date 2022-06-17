<header class="site-header header-style-2 mobile-sider-drawer-menu header-full-width">
    <div class="sticky-header main-bar-wraper  navbar-expand-lg">
        <div class="main-bar">

            <div class="container clearfix">
                <!--Logo section start-->
                <div class="logo-header">
                    <div class="logo-header-inner logo-header-one">
                        <a href="{{ route('guest.home') }}">
                            <img src="{{asset('guest/images/logo.png')}}" alt="">
                        </a>
                    </div>
                </div>
                <!--Logo section End-->

                <!-- NAV Toggle Button -->
                <button id="mobile-side-drawer" data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggler collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-bar-first"></span>
                    <span class="icon-bar icon-bar-two"></span>
                    <span class="icon-bar icon-bar-three"></span>
                </button>

                <!-- MAIN Vav -->
                <div class="nav-animation header-nav navbar-collapse collapse d-flex justify-content-start">


                    <ul class=" nav navbar-nav">



                        <li class="has-child current-menu-item"><a href="{{ route('guest.home') }}">Acceuil</a></li>




                                <li><a href="{{ route('guest.allcategory') }}">Catégories</a></li>








                        <li><a href="{{ route('guest.aboutus') }}">A propos</a></li>
                        <li><a href="{{ route('guest.contactus') }}">Contactez nous</a></li>
                        <li><a href="{{ route('guest.search') }}"></a></li>


                    </ul>

                </div>

                <!-- Header Right Section-->
                <div class="extra-nav header-2-nav">
                    <div class="extra-cell">
                        <!--Login-->

                        <button type="button" class="site-button aon-btn-login" data-toggle="modal" data-target="#login-signup-model">
                            <i class="fa fa-user"></i> Login
                        </button>


                        <!--Sign up-->

                        <!--Sign up-->
                <!--      <button type="button" class="site-button aon-btn-signup m-l20">
                            <i ></i> EN
                      </button>-->
                    </div>

                </div>
            </div>

        </div>
    </div>
</header>
<!-- HEADER END -->
