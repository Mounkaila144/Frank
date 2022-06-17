<x-guest.main>
    <x-slot name="title">
        Ijrili
    </x-slot>

    <x-slot name="cssSlot">
    </x-slot>

    <x-slot name="content">

        <!-- Content -->
        <div class="page-content">

            <div class="section-content sf-allCaty-info-wrap">
                <div class="container">
                    <!--Category Detail Section Start-->
                    <div class="row">
                        <!--Category Detail Left-->

                        <div class="col-md-6">
                            <div class="">
                       <img src="{{asset('storage/'.$data['image'])}}">
                            </div>

                        </div>

                        <!--Category Detail Right-->
                        <div class="col-md-6">
                            <div class="sf-caty-info">
                                <div class="m-b10"><h3>{{$data['nom']}}</h3>
                                <div class="sf-caty-text">
                                  <p>{{$data['description']}}</p>

                                    <div class="m-b10"><h3>Prix : {{$data['prix']}}</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Category Detail Section End-->
                </div>
            </div>
                        </div>
                    </div>

                </div>
            </div>





        <!-- Content END-->
        <x-guest.login-modal></x-guest.login-modal>
    </x-slot>

</x-guest.main>
