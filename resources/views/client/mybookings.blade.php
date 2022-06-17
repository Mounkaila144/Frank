<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Dashboard
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>

    <x-slot name="content">
        <div class="aon-admin-heading">
            <h4>MON PANIER</h4>
        </div>

        <div class="card aon-card">
            <div class="card-body aon-card-body">

                <div class="sf-bd-data-tb-head">
                    <button class="admin-button" data-toggle="modal" data-target="" type="button">
                        <i class="fa fa"></i>
                        Annuler reservation
                    </button>

                </div>

                <!-- Week Tabs-->
                <div class="sf-availability-times-tab m-b50">
                    <div class="sf-custom-tabs sf-custom-new">
                        <!--Tabs-->
                        <ul class="nav nav-tabs nav-table-cell">
                            <li><a data-toggle="tab" href="#Upcoming" class="active">En cours</a></li>
                            <li><a data-toggle="tab" href="#Past">Terminé</a></li>
                        </ul>
                        <!--Tabs Content-->
                        <div class="tab-content">

                            <!--Upcoming-->
                            <div id="Upcoming" class="tab-pane active">
                                <div class="sf-tabs-content">
                                    <div class="sf-bs-data-table">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered example-dt-table aon-booking-table" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <div class="checkbox sf-radio-checkbox">
                                                            <input id="th1_1" name="abc" value="five" type="radio">
                                                            <label for="th1_1">
                                                                            <span class="btn btn-danger btn-xs">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </span>
                                                            </label>
                                                        </div>

                                                    </th>
                                                    <th>Info Commande</th>
                                                    <th>prix</th>
                                                    <th>Etat</th>

                                                    @foreach($data as $i)
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox sf-radio-checkbox">
                                                            <input id="td2_2" name="abc" value="five" type="radio">
                                                            <label for="td2_2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="sf-booking-info-col">
                                                            <span class="sf-booking-refid"></span>


                                                            <div class="sf-booking-customer">
                                                                <ul class="customer-info">
                                                                    <li><strong><i class="fa fa-user"></i> Service</strong> </li>
                                                                    <li><strong><i class="fa fa-calendar-o"></i> Date</strong> {{$i->dateDebut}}</li>

                                                                </ul>
                                                            </div>

                                                           <!-- <button type="button" class="admin-button assignButton margin-r-10">
                                                                <i class="fa fa-user"></i>
                                                                Assign Now
                                                            </button> -->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="inner">
                                                            <h3>
                                                                <span class="sf-booking-payment-info" data-toggle="popover" data-container="body" data-placement="top" data-html="true" id="payinfo-1115" data-trigger="hover" data-original-title="" title="">xxx TND </span>

                                                            </h3>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="booking-status sf-booking-incomplete">{{$i->etat}}</span>
                                                    </td>

                                                </tr>

                                                </tbody>
                                                @endforeach

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Past-->
                            <div id="Past" class="tab-pane">
                                <div class="sf-tabs-content">
                                    <div class="sf-bs-data-table">
                                        <div class="table-responsive">
                                            <table  class="table table-striped table-bordered example-dt-table aon-booking-table" style="width:100%">
                                                <thead>
                                                <tr>
                                                    <th>
                                                        <div class="checkbox sf-radio-checkbox">
                                                            <input id="th1_1" name="abc" value="five" type="radio">
                                                            <label for="th1_1">
                                                                            <span class="btn btn-danger btn-xs">
                                                                                <i class="fa fa-trash-o"></i>
                                                                            </span>
                                                            </label>
                                                        </div>
                                                    </th>
                                                    <th>Info Commande</th>
                                                    <th>prix</th>
                                                    <th>Etat</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="checkbox sf-radio-checkbox">
                                                            <input id="td2_2" name="abc" value="five" type="radio">
                                                            <label for="td2_2"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="sf-booking-info-col">
                                                            <span class="sf-booking-refid">#1114</span>


                                                            <div class="sf-booking-customer">
                                                                <ul class="customer-info">
                                                                    <li><strong><i class="fa fa-user"></i> Catégories</strong> Automobile</li>
                                                                    <li><strong><i class="fa fa-user"></i> Customer Name</strong> </li>
                                                                    <li><strong><i class="fa fa-phone"></i> Customer Phone</strong> +52 81 1911 2887</li>
                                                                    <li><strong><i class="fa fa-calendar-o"></i> Date</strong> 2021-12-26</li>
                                                                    <li><strong><i class="fa fa-clock-o"></i> Time</strong> 13:25:00</li>
                                                                </ul>
                                                            </div>
                                                            <!-- <button type="button" class="admin-button assignButton margin-r-10">
                                                                 <i class="fa fa-user"></i>
                                                                 Assign Now
                                                             </button> -->
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="inner">
                                                            <h3>
                                                                <span class="sf-booking-payment-info" data-toggle="popover" data-container="body" data-placement="top" data-html="true" id="payinfo-1115" data-trigger="hover" data-original-title="" title="">85.00TND </span>
                                                                <span class="sf-payment-status">Paid</span>
                                                            </h3>

                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="booking-status sf-booking-incomplete">Incomplete</span>
                                                    </td>

                                                </tr>



                                                </tbody>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>



        </div>

        </div>

        </div>


        <!-- Modal add group-->

    </x-slot>

</x-client.maindashboard>
