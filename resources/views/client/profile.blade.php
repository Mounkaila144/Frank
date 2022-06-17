<x-client.maindashboard>
    <x-slot name="title">
        Ijrili | Profile
    </x-slot>
    <x-slot name="cssSlot">
    </x-slot>

    <x-slot name="content">




                <div class="aon-provi-tabs   ">
                    <div class="aon-provi-left">
                        <ul class="aon-provi-links">
                            <li><a href="#aon-about-panel">Infos personelles</a></li>
                            <li><a href="#aon-contact-panel">Contact</a></li>
                            <li><a href="#aon-adress-panel">Adresse</a></li>

                            <li><a href="#aon-socialMedia-panel">Réseau Sociaux</a></li>
                            <li><a href="#aon-passUpdate-panel">Mot de passe</a></li>


                        </ul>
                    </div>

                </div>


                <div class="aon-admin-heading">
                    <h4>Modifier Profil</h4>
                </div>

                <div class="card aon-card">
                    <div class="card-header aon-card-header"><h4><i class="fa fa-user"></i> Moi</h4></div>
                    <div class="card-body aon-card-body">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="aon-staff-avtar">
                                    <div class="aon-staff-avtar-header">
                                        <div class="aon-pro-avtar-pic ">
                                            <img src="guest/images/pic-large.jpg" alt="">
                                            <button class="admin-button has-toltip">
                                                <i class="fa fa-camera"></i>
                                                <span class="header-toltip">Upload Avtar</span>
                                                <input type="file" name="avtar">
                                            </button>
                                        </div>
                                        <div class="aon-pro-cover-wrap">
                                            <div class="aon-pro-cover-pic">
                                                <img src="guest/images/banner/job-banner.jpg" alt="">
                                            </div>
                                            <div class="admin-button-upload">
                                                <span>Upload Cover Image</span>
                                                <input type="file" name="avtar">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aon-staff-avtar-footer">
                                        <h4 class="aon-staff-avtar-title">Upload Your Avatar</h4>
                                        <ul>
                                            <li>Min width and height: <span>600 x 600 px</span></li>
                                            <li>Max Upload Size: <span>512MB</span></li>
                                            <li>Extensions: <span>JPEG,PNG,GIF,PNG</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom d'utilisateur</label>
                                            <div class="aon-inputicon-box">
                                                <input class="form-control sf-form-control" name="company_name" type="text">
                                                <i class="aon-input-icon fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <div class="aon-inputicon-box">
                                                <input class="form-control sf-form-control" name="company_name" type="text">
                                                <i class="aon-input-icon fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Prenom</label>
                                            <div class="aon-inputicon-box">
                                                <input class="form-control sf-form-control" name="company_name" type="text">
                                                <i class="aon-input-icon fa fa-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 breck-w1400">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <div class="aon-inputicon-box">

                                                <div class="radio-inline-box sf-radio-check-row">

                                                    <div class="checkbox sf-radio-checkbox sf-radio-check-2 sf-raChe-6">
                                                        <input id="any111" name="abc" value="five" type="radio">
                                                        <label for="any111">Masculin</label>
                                                    </div>
                                                    <div class="checkbox sf-radio-checkbox sf-radio-check-2 sf-raChe-6">
                                                        <input id="body111" name="abc" value="five" type="radio">
                                                        <label for="body111">Féminin</label>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card aon-card" id="aon-contact-panel">
                    <div class="card-header aon-card-header"><h4><i class="fa fa-envelope"></i> Contact Detail</h4></div>
                    <div class="card-body aon-card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mobile</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Alt. Mobile</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-mobile"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Adresse e-mail</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Skype</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-skype"></i>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="card aon-card" id="aon-adress-panel">
                    <div class="card-header aon-card-header"><h4><i class="fa fa-address-card"></i> Address</h4></div>
                    <div class="card-body aon-card-body">
                        <div class="row">
                            <div class="col-md-12">

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-globe"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ville</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Gouvernorat</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Code Postal</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>




                        </div>
                    </div>
                </div>







                <div class="card aon-card" id="aon-passUpdate-panel">
                    <div class="card-header aon-card-header"><h4><i class="fa fa-lock"></i> Password Update</h4></div>
                    <div class="card-body aon-card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Repeat Password</label>
                                    <div class="aon-inputicon-box">
                                        <input class="form-control sf-form-control" name="company_name" type="text">
                                        <i class="aon-input-icon fa fa-lock"></i>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <p>Enter same password in both fields. Use an uppercase letter and a number for stronger password.</p>
                    </div>
                </div>





    </x-slot>

</x-client.maindashboard>
