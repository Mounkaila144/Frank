<x-guest.main>

    <x-slot name="title">
        Ijrili
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>


    <x-slot name="content">

        <section class="aon-banner-wrap">

            <!--Left Section-->
            <div class="aon-banner-outer sf-overlay-wrapper">
                <div class="aon-banner-pic">
                    <div class="aon-curve-area"></div>
                    <div class="aon-overlay-main" style="opacity:0.85; background-color:#022278;"></div>
                    <img src="guest/images/banner/bnr-pic.jpg" width="1919" height="976" alt="">
                </div>
                <div class="aon-banner-text">
                    <div class="container">
                        <div class="aon-bnr-write">
                            <h2 class="text-top-line">Contactez <span class="text-secondry"> Des Experts</span>  </h2>
                            <h2 class="text-bot-line">Pour Un Travail Bien Fait</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Section-->


        </section>

<!-- Categories -->
        <section class="bg-white aon-categories-area2">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <!-- COLUMNS LEFT -->
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">catégories</span>
                            <h2 class="sf-title">Catégories Populaires</h2>
                        </div>
                        <!-- COLUMNS RIGHT -->

                    </div>
                </div>
                <!--Title Section End-->

                <div class="section-content">
                    <div class="aon-categories-area2-section">
                        <div class="row justify-content-center">

                        @foreach($data as $i)
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate mba-bdr-15">
                                    <div class="aon-categories-area2-iconbox aon-icon-effect">
                                        <div class="aon-cate-area2-icon">
                                            <span>
                                                <i class="aon-icon"><img src="{{asset('storage/'.$i->image)}}" alt=""></i>
                                            </span>
                                        </div>
                                        <div class="aon-cate-area2-content">
                                            <h4 class="aon-tilte"><a href="{{URL::to('service/'.$i->id) }}">{{$i->nom}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div></div>
        </section>

        <!-- How it Work -->
        <section class="bg-white aon-how-service-area sf-curve-pos">
            <div class="container">

                <div class="section-content">
                    <div class="row">
                        <!--Title Section Start-->
                        <div class="col-lg-4 col-md-12">
                            <span class="aon-sub-title">Etapes</span>
                            <h2 class="sf-title">Comment Fonctionne Ijrili</h2>
                        </div>
                        <!--Title Section End-->

                        <div class="col-lg-8 col-md-12">
                            <!-- Steps Block Start-->
                            <div class="aon-step-blocks">
                                <div class="row">
                                    <!-- COLUMNS 1 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section step-position-1 aon-icon-effect">
                                            <div class="aon-step-icon aon-icon-box">
                                                    <span>
                                                        <i class="aon-icon"><img src="guest/images/step-icon/1.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Choix Du Service</h4>
                                                <p>Choisissez et commander le service dont vous avez besoin</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 2 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section step-position-2 aon-icon-effect">
                                            <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="guest/images/step-icon/2.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Indiquez votre localisation</h4>
                                                <p>Renseignez votre adresse</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 3 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section  step-position-3  aon-icon-effect">
                                            <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="guest/images/step-icon/3.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Travail Bien fait</h4>
                                                <p>Cela nous permets de mettre a votre disposition le meilleur professionel pour l'accomplissement de la tache</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Steps Block End-->
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- How it Work END -->




        <!-- Why Choose us -->
        <div class="aon-whycoose-area sf-curve-pos">
            <div class="container-fluid">
                <div class="sf-whycoose-section">
                    <div class="row sf-w-choose-bg-outer d-flex flex-wrap a-b-none">
                        <!-- Left Section -->
                        <div class="col-md-7 margin-b-50 sf-w-choose-left-cell">
                            <div class="sf-w-choose-info-left">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <div class="row">
                                        <div class="col-md-12  margin-b-50">
                                            <span class="aon-sub-title">POURQUOI IJRILI</span>
                                            <h2 class="sf-title">QUALITE DE SERVICE</h2>
                                        </div>
                                    </div>
                                </div>
                                <!--Title Section End-->

                                <!-- COLUMNS 1 -->
                                <div class="sf-w-choose margin-b-20">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="guest/images/whychoose/1.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Service de  qualité</h4>
                                        <p>Nos techniciens sont sélectionnés et testés par Ijrili pour vous offrir la meilleure prestation.</p>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="sf-w-choose margin-b-20">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="guest/images/whychoose/2.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Transparence de prix</h4>
                                        <p> Nous vous proposons une grille tarifaire selon votre besoin en réparation / installation.</p>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="sf-w-choose">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="guest/images/whychoose/3.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Garantie assuré</h4>
                                        <p>Ijrili vous offre une garantie sur les interventions et un service de suivi à la hauteur de vos attentes.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Section -->
                        <div class="col-md-5 sf-w-choose-bg-wrap sf-w-choose-right-cell">
                            <div class="sf-w-choose-bg" style="background-image: url(guest/images/background/bg1.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose us END -->






                <!-- Statics -->
                <div class="site-bg-primary aon-statics-area sf-curve-pos">
                    <div class="container">

                        <div class="section-content">
                            <div class="row d-flex flex-wrap align-items-center a-b-none">
                                <div class="col-lg-6 col-md-12">
                                    <!--Title Section Start-->
                                    <div class="section-head">
                                        <span class="aon-sub-title">Statistiques</span>
                                        <h2 class="sf-title">Des Professionnels de qualités pour un travail de qualité</h2>
                                        <p>Ijrili mets a votre disposition les meilleurs techniciens dans divers domaines pour vous aider dans vos pannes quotidienne</p>
                                    </div>
                                    <!--Title Section End-->
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <!--Statics-blocks Section Start-->
                                    <div class="aon-statics-blocks">
                                        <div class="row">
                                            <!--Block 1-->
                                            <div class="col-lg-6 m-b30 aon-static-position-1">
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-blue">
                                                        <div class="aon-company-static-num counter aon-icon">36</div>
                                                        <div class="aon-company-static-name">Techniciens</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--Block 2-->
                                            <div class="col-lg-6 m-b30 aon-static-position-2">
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-green">
                                                        <div class="aon-company-static-num counter aon-icon">89</div>
                                                        <div class="aon-company-static-name">Clients</div>
                                                    </div>
                                                </div>
                                                <div class="media-bg-animate media-statics aon-icon-effect">
                                                    <div class="aon-static-section aon-t-skyblue">
                                                        <div class="aon-company-static-num counter aon-icon">59</div>
                                                        <div class="aon-company-static-name">Catégories</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Statics-blocks Section End-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Provider END -->



        <x-guest.login-modal></x-guest.login-modal>
    </x-slot>

</x-guest.main>

