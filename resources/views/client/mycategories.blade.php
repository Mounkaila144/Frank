<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Dashboard
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>
    <x-slot name="content">
        <div class="aon-admin-heading">
            <h4>Categories</h4>
        </div>

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
                                        <h4 class="aon-tilte"><a href="{{URL::to('mes_services/'.$i->id) }}">{{$i->nom}}</a></h4>
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




        <!-- Modal add services-->
        <div class="modal fade content-admin-main" id="add_services" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog model-w800" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Faire une reservation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="sf-md-padding">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Catégories</label>
                                        <select class="selectpicker" multiple data-live-search="true" title="Choisissez une catégorie">
                                            <option>Laoundry</option>
                                            <option>Cab Services</option>
                                            <option>Car Dealer</option>
                                            <option>Event Organizer</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Services</label>
                                        <select class="selectpicker" multiple data-live-search="true" title="Choisissez un service">
                                            <option>Laoundry</option>
                                            <option>Cab Services</option>
                                            <option>Car Dealer</option>
                                            <option>Event Organizer</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Date</label>

                                        <input type="date" class="sf-select-box form-control sf-form-control bs-select-hidden form-control" name="before_padding_time" data-live-search="true" title="Padding Time (Before)">

                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Heure</label>
                                        <select class="sf-select-box form-control sf-form-control bs-select-hidden form-control" name="after_padding_time" data-live-search="true" title=""><option class="bs-title-option" value=""></option>
                                            <option value=""></option>
                                            <option value="5">5 Mins</option><option value="10">10 Mins</option><option value="15">15 Mins</option><option value="20">20 Mins</option><option value="25">25 Mins</option><option value="30">30 Mins</option><option value="35">35 Mins</option><option value="40">40 Mins</option><option value="45">45 Mins</option><option value="50">50 Mins</option><option value="55">55 Mins</option><option value="60">1 Hr</option><option value="75">1 Hr 15 Mins</option><option value="90">1 Hr 30 Mins</option><option value="105">1 Hr 45 Mins</option><option value="120">2 Hrs</option><option value="150">2 Hrs 30 Mins</option><option value="180">3 Hrs</option><option value="210">3 Hr 30 Mins</option><option value="240">4 Hrs</option>
                                        </select>
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="admin-button" data-dismiss="modal">ANNULER</button>
                        <button type="button" class="admin-button">VALIDER RESERVATION</button>
                    </div>
    </x-slot>
</x-client.maindashboard>
