<!-- Login Sign Up Modal -->
@extends('layouts.app')

@section('content')
<div class="modal fade" id="login-signup-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <button type="button" class="close aon-login-close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
            <div class="modal-body">

                <div class="sf-custom-tabs sf-custom-new aon-logon-sign-area p-3">

                    <!--Tabs-->
                    <ul class="nav nav-tabs nav-table-cell">
                        <li><a data-toggle="tab" href="#Upcoming" class="active">Connexion</a></li>
                        <li><a data-toggle="tab" href="#Past">S'inscrire</a></li>
                    </ul>
                    <!--Tabs Content-->
                    <div class="tab-content">

                        <!--Login Form-->

                        <div id="Upcoming" class="tab-pane active">
                            <div class="sf-tabs-content">
                                <form  class="aon-login-form"  method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus
                                                           type="email" placeholder="email" >
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control  @error('password') is-invalid @enderror" name="password" name="password" required autocomplete="current-password"
                                                           type="password" placeholder="Password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group d-flex aon-login-option justify-content-between">
                                                <div class="aon-login-opleft">
                                                    <div class="checkbox sf-radio-checkbox">
                                                        <input id="td2_2" name="abc" value="five" type="checkbox">
                                                        <label for="td2_2">Restez connecté</label>
                                                    </div>
                                                </div>
                                                <div class="aon-login-opright">
                                                    @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}">Mot de passe oublié</a>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Submit <i
                                                    class="feather-arrow-right"></i></button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--Sign up Form-->
                        <div id="Past" class="tab-pane">
                            <div class="sf-tabs-content">
                                <form class="aon-login-form" method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control  @error('name') is-invalid @enderror" name="name"
                                                           type="text" placeholder="Nom" required autocomplete="name" autofocus>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                    @error('nom')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('prenom') is-invalid @enderror" name="prenom"
                                                           type="text" placeholder="prenom" required autocomplete="prenom" autofocus>
                                                    <i class="aon-input-icon fa fa-user"></i>
                                                    @error('prenom')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('phone') is-invalid @enderror" name="telephone"
                                                           type="text" placeholder="Phone" required autocomplete="telephone" autofocus>
                                                    <i class="aon-input-icon fa fa-phone"></i>

                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('email') is-invalid @enderror" name="email"
                                                           type="email" placeholder="Email" required autocomplete="email" >
                                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                                    @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('addresse') is-invalid @enderror" name="adresse"
                                                           type="text" placeholder="Addresse" required autocomplete="adresse" autofocus>
                                                    <i class="aon-input-icon fa fa-envelope-o"></i>
                                                    @error('addresse')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control @error('password') is-invalid @enderror" name="password"
                                                           type="password" placeholder="mot de passe" required autocomplete="new-password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="aon-inputicon-box">
                                                    <input class="form-control sf-form-control" name="password_confirmation"
                                                           type="password" placeholder="Confirmer mot de passe" required autocomplete="new-password">
                                                    <i class="aon-input-icon fa fa-lock"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <button type="submit" class="site-button w-100">Submit <i
                                                    class="feather-arrow-right"></i></button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
@endsection
<!-- Login Sign Up Modal -->
