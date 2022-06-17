<!-- Login Sign Up Modal -->
@props(["homeUrl"=>"/","method"=>"POST","route", "validation" => "", "cardTitle" => "", "cardDescription" => ""])

<div  id="login-signup-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-body">

                <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                    <!--Tabs-->
                    <ul class="nav nav-tabs nav-table-cell">

                        <li><a data-toggle="tab" href="#Past">Sign up</a></li>
                    </ul>
                    <!--Tabs Content-->
                    <div class="tab-content">



                        <!--Sign up Form-->
                        <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                {{$validation}}
                                <form class="aon-login-form"  method="{{$method}}" action="{{route("register")}}>
                                   @csrf
                                    {{$register}}
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Login Sign Up Modal -->
