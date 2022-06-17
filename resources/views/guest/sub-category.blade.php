<x-guest.main>

    <x-slot name="title">
        All categories
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>


    <x-slot name="content">
        <body>

        <div class="page-wraper">
            <!-- Content -->
            <div class="section-content">
                <div class="aon-categories-area2-section">
                    <div class="row justify-content-center">
                        <!-- COLUMNS 1 -->
                        @foreach($data as $i)
                        <div class="col-lg-4 col-md-6">
                            <div class="media-bg-animate mba-bdr-15">
                                <div class="aon-categories-area2-iconbox aon-icon-effect">
                                    <div class="aon-cate-area2-icon">
                                            <span>
                                                <i class="aon-icon"><img src="{{asset('storage/'.$i->image)}}"  alt=""></i>
                                            </span>
                                    </div>
                                    <div class="aon-cate-area2-content">
                                        <h4 class="aon-tilte"><a href="{{URL::to('service-detail/'.$i->id) }}">{{$i->nom}}</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>




            <!-- Content END-->
        </div>
        <!-- Login Sign Up Modal -->
        <x-guest.login-modal></x-guest.login-modal>
        </body>
    </x-slot>
</x-guest.main>
