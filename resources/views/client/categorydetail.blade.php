<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Detail Service
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>
    <x-slot name="content">
        <div class="aon-admin-heading">
            <h4>Categories</h4>
        </div>

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
                            <div class="m-b10">
                                <h3>{{$data['nom']}}</h3>
                                <div class="sf-caty-text">
                                    <p>{{$data['description']}}</p>

                                    <div class="m-b10"><h3>Prix : {{$data['prix']}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @foreach($avis as $avi)
                        <div class="row">
                            <di class="col-md-3">
                                {{$avi->note}}
                                {{$avi->users_id}}
                            </di>
                            <di class="col-md-3">
                                {{$avi->commentaire}}
                            </di>
                            <di class="col-md-3">
                                {{$avi->created_at}}
                            </di>

                        </div>
                        @endforeach
                        <!--Category Detail Section End-->
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="aon-ow-bottom">
                            <a href="" data-toggle="modal" data-target="#add_comment" class="site-button aon-btn-signup m-l100">
                                <i class="fa fa-plus"></i> AJouter un commentaire
                            </a>
                        </div>
                    </div>

                </div>
                <div class="sf-bd-data-tb-head aon-mob-btn-marb">
                    <button class="admin-button m-l10" data-toggle="modal" data-target="#add_services" type="button">
                        <i class="fa fa-plus"></i>
                        Faire une reservation
                    </button>
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
                    <form action="{{url('reservation')}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="sf-md-padding">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Services: {{$data['nom']}}</label>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description du problème</label>

                                            <textarea type="text"
                                                      class="sf-select-box form-control sf-form-control bs-select-hidden form-control"
                                                      name="description"></textarea>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date</label>

                                            <input type="date"
                                                   class="sf-select-box form-control sf-form-control bs-select-hidden form-control"
                                                   name="date" data-live-search="true" title="Padding Time (Before)">

                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="admin-button" data-dismiss="modal">ANNULER</button>
                            <button type="submit" class="admin-button">VALIDER RESERVATION</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade content-admin-main" id="add_comment" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog model-w800" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel2">Faire une reservation</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{url("comment/${id}")}}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="sf-md-padding">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label id="des">Note</label>
                                            <input id="des" type="text" name="note"/>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Description</label>

                                            <textarea type="text"
                                                      class="sf-select-box form-control sf-form-control bs-select-hidden form-control"
                                                      name="description"></textarea>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="admin-button" data-dismiss="modal">ANNULER</button>
                            <button type="submit" class="admin-button">VALIDER RESERVATION</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </x-slot>
</x-client.maindashboard>
