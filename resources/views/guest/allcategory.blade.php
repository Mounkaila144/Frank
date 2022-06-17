<x-guest.main>

    <x-slot name="title">
       Toutes les categories
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>


    <x-slot name="content">
        <body>

        <div class="page-wraper">
            <!-- Content -->
            <div class="page-content">

                <!-- Banner Area -->
                <div class="aon-page-benner-area2">

                    <div class="aon-banner-large2-title">
                        Vous ne trouvez toujours pas ce que vous cherchez? voici toutes les catégories
                    </div>

                </div>
                <!-- Banner Area End -->


                <!-- Categories -->
                <section class="bg-white aon-categories-area2">

                    <div class="container">
                        <!--Title Section Start-->
                        <div class="section-head">
                            <div class="row">
                                <!-- COLUMNS LEFT -->
                                <div class="col-lg-6 col-md-12">
                                    <span class="aon-sub-title">    Toutes les categories</span>

                                </div>
                                <!-- COLUMNS RIGHT -->

                            </div>
                        </div>
                        <!--Title Section End-->

                        <div class="section-content">
                            <div class="aon-categories-area2-section">
                                <div class="row justify-content-center">
                                    <!-- COLUMNS 2 -->
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
                                    </div>
                                </div>


                            </div>
                        </div>

                    </div>
                </section>








            </div>



            <!-- Content END-->
        </div>
        <!-- Login Sign Up Modal -->

        </body>
        <x-guest.login-modal></x-guest.login-modal>
    </x-slot>

</x-guest.main>
