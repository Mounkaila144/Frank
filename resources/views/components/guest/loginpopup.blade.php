<x-guest.login :route='"login"' id="login-signup-model">



    <x-slot name="login">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="aon-inputicon-box">
                        <input class="form-control sf-form-control" type="email"   name="email"
                                                :value="old('email')" placeholder="Email" required autofocus>
                        <i class="aon-input-icon fa fa-envelope-o"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="aon-inputicon-box">
                        <input class="form-control sf-form-control" name="password"
                               type="password" placeholder="Password" required autofocus>
                        <i class="aon-input-icon fa fa-lock"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group d-flex aon-login-option justify-content-between">
                    <div class="aon-login-opleft">
                        <div class="checkbox sf-radio-checkbox">
                            <input id="td2_2" name="abc" value="five" type="checkbox">
                            <label for="td2_2">Keep me logged</label>
                        </div>
                    </div>
                    @php
                        if(Route::currentRouteName() == 'admin.login') {
                              $route = route('admin.password.request');
                            } else{
                               $route =  route('password.request');
                            }
                    @endphp
                    <div class="aon-login-opright">
                        <a href="{{$route}}">Forget Password</a>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <button id="but" type="submit" class="site-button w-100">Submit <i
                        class="feather-arrow-right" ></i></button>
            </div>

        </div>
    </x-slot>
    <x-slot name="register">
        <!--Sign up Form-->
        <div id="Past" class="tab-pane">
            <div class="sf-tabs-content">
                <form class="aon-login-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="First_Name" type="text" placeholder="Nom">
                                    <i class="aon-input-icon fa fa-user"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="company_name" type="text" placeholder="Prénom">
                                    <i class="aon-input-icon fa fa-user"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="Phone" type="text" placeholder="Téléphone">
                                    <i class="aon-input-icon fa fa-phone"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="email" type="text" placeholder="Email">
                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="email" type="text" placeholder="Adresse">
                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="mot de passe">
                                    <i class="aon-input-icon fa fa-lock"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="aon-inputicon-box">
                                    <input class="form-control sf-form-control" name="password" type="password" placeholder="Confirmer mot de passe">
                                    <i class="aon-input-icon fa fa-lock"></i>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <button type="submit" class="site-button w-100">Submit <i class="feather-arrow-right"></i> </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </x-slot>

</x-guest.login>
