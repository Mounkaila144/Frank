<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Mes services
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>

    <x-slot name="content">
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
                                            <h4 class="aon-tilte"><a href="{{URL::to('mes_services_detail/'.$i->id) }}">{{$i->nom}}</a></h4>
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
    </x-slot>
</x-client.maindashboard>
