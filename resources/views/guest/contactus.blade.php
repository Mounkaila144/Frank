<x-guest.main>

    <x-slot name="title">
        Contact Us
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>

<x-slot name="content">
    <!-- LOADING AREA START ===== -->

    <div class="loading-area">

        <div class="loading-box"></div>

        <div class="loading-pic">

            <div class="windows8">

                <div class="wBall" id="wBall_1">

                    <div class="wInnerBall"></div>

                </div>

                <div class="wBall" id="wBall_2">

                    <div class="wInnerBall"></div>

                </div>

                <div class="wBall" id="wBall_3">

                    <div class="wInnerBall"></div>

                </div>

                <div class="wBall" id="wBall_4">

                    <div class="wInnerBall"></div>

                </div>

                <div class="wBall" id="wBall_5">

                    <div class="wInnerBall"></div>

                </div>

            </div>

        </div>

    </div>

    <!-- LOADING AREA  END ====== -->

    <div class="page-wraper">





        <!-- Content -->

        <div class="page-content">

            <!--Banner-->

            <div class="aon-page-benner-area">

                <div class="aon-page-banner-row" style="background-image: url(guest/images/banner/job-banner.jpg)">

                    <div class="sf-overlay-main" style="opacity:0.8; background-color:#022279;"></div>

                    <div class="sf-banner-heading-wrap">

                        <div class="sf-banner-heading-area">

                            <div class="sf-banner-heading-large">Contactez Nous</div>

                            <div class="sf-banner-breadcrumbs-nav">

                                <ul class="list-inline">

                                    <li><a href="{{route('guest.home')}}"> Acceuil </a></li>

                                    <li>Contactez nous</li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <!--Banner-->



            <!-- Contact Us-->

            <div class="aon-contact-area">

                <div class="container">

                    <!--Title Section Start-->

                    <div class="section-head text-center">

                        <h2 class="sf-title">Information</h2>

                        <p>Contactez nous en utilisant les informations ci-dessous</p>

                    </div>

                    <!--Title Section End-->



                    <div class="section-content">



                        <div class="sf-contact-info-wrap">

                            <div class="row">



                                <!-- COLUMNS 1 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="guest/images/contact-us/1.png" alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Addresse postale</h4>

                                            <p>Nabeul 8000</p>

                                        </div>

                                    </div>

                                </div>

                                <!-- COLUMNS 2 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="guest/images/contact-us/2.png" alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Email</h4>

                                            <p>info@Ijrili.com</p><p>support@Ijrili.com</p>

                                        </div>

                                    </div>

                                </div>

                                <!-- COLUMNS 3 -->

                                <div class="col-lg-4 col-md-6">

                                    <div class="sf-contact-info-box">

                                        <div class="sf-contact-icon">

                                            <span><img src="guest/images/contact-us/3.png" alt=""></span>

                                        </div>

                                        <div class="sf-contact-info">

                                            <h4 class="sf-title">Numéro de téléphone</h4>

                                            <p>58671049</p>

                                            <p>24324555</p>

                                        </div>

                                    </div>

                                </div>



                            </div>

                        </div>



                        <div class="sf-contact-form-wrap">

                            <!--Contact Information-->

                            <div class="sf-contact-form">

                                <div class="sf-con-form-title text-center">

                                    <h2 class="m-b30">Infos Contact</h2>

                                </div>

                                <form class="contact-form" method="post">

                                    <div class="row">



                                        <!-- COLUMNS 1 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="fullname" placeholder="Nom" class="form-control" required>

                                            </div>

                                        </div>



                                        <!-- COLUMNS 2 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="email" placeholder="Email" class="form-control" required>

                                            </div>

                                        </div>

                                        <!-- COLUMNS 3 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="phone" placeholder="Téléphone" class="form-control">

                                            </div>

                                        </div>

                                        <!-- COLUMNS 4 -->

                                        <div class="col-md-6">

                                            <div class="form-group">

                                                <input type="text" name="subject" placeholder="Sujet" class="form-control" required>

                                            </div>

                                        </div>



                                        <!-- COLUMNS 5 -->

                                        <div class="col-md-12">

                                            <div class="form-group">

                                                <textarea name="message" placeholder="Message" class="form-control" required></textarea>

                                            </div>

                                        </div>



                                        <div class="col-md-12">

                                            <div class="g-recaptcha" data-sitekey="6LfcCr0eAAAAAN2P-3cJJC1StgxbUWvwELbMVjnp"></div>

                                        </div>





                                    </div>

                                    <div class="sf-contact-submit-btn">

                                        <button class="site-button" type="submit">Envoyer</button>

                                    </div>

                                </form>

                            </div>

                            <!--Contact Information End-->

                        </div>

                    </div>



                </div>

            </div>



            <!-- Contact Us-->

            <div class="section-full sf-contact-map-area">

                <div class="container">



                    <div class="sf-map-social-block text-center">

                        <h2>Une plateforme de confiance</h2>

                        <ul class="sf-con-social">

                            <li><a href="#" class="sf-fb"><img src="guest/images/contact-us/facebook.png" alt="">Facebook</a></li>

                            <li><a href="#" class="sf-twitter"><img src="guest/images/contact-us/twitter.png" alt="">Twitter</a></li>

                            <li><a href="#" class="sf-pinterest"><img src="guest/images/contact-us/pinterest.png" alt="">Pinterest</a></li>

                        </ul>



                        <div class="sf-con-social-pic">

                            <span class="img-pos-1"><img src="guest/images/contact-us/img1.png" alt=""></span>

                            <span class="img-pos-2"><img src="guest/images/contact-us/img2.png" alt=""></span>

                            <span class="img-pos-3"><img src="guest/images/contact-us/img3.png" alt=""></span>

                            <span class="img-pos-4"><img src="guest/images/contact-us/r-img1.png" alt=""></span>

                            <span class="img-pos-5"><img src="guest/images/contact-us/r-img2.png" alt=""></span>

                            <span class="img-pos-6"><img src="guest/images/contact-us/r-img3.png" alt=""></span>

                        </div>

                    </div>



                </div>



            </div>



        </div>

        <!-- Content END-->

        <!-- FOOTER START -->



        <!-- BUTTON TOP START -->

        <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>



    </div>






    <!-- Login Sign Up Modal -->
    <x-guest.login-modal></x-guest.login-modal>
</x-slot>


</x-guest.main>
