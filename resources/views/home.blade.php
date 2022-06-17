@extends('layouts.front')

@section('content')
        <!-- BANNER SECTION START -->
        <section class="aon-banner-wrap">

            <!--Left Section-->
            <div class="aon-banner-outer sf-overlay-wrapper">
                <div class="aon-banner-pic">
                    <div class="aon-curve-area"></div>
                    <div class="aon-overlay-main" style="opacity:0.85; background-color:#022278;"></div>
                    <img src="images/banner/bnr-pic.jpg" width="1919" height="976" alt="">
                </div>
                <div class="aon-banner-text">
                    <div class="container">
                        <div class="aon-bnr-write">
                            <h2 class="text-top-line">Hire <span class="text-secondry">Experts</span> & </h2>
                            <h2 class="text-bot-line">Get Your Job Done</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!--Right Section-->
            <div class="aon-find-bar aon-findBar-vertical">
                <div class="container">
                    <!-- Search Form start-->
                    <div class="search-form ">
                        <form class="clearfix search-providers" method="get">

                            <div class="aon-searchbar-table">

                                <div class="aon-searchbar-left">
                                    <ul class="clearfix sf-searchfileds-count-5">
                                        <li>
                                            <label>Keyword</label>
                                            <input type="text" value="" placeholder="Enter Keyword" id="keyword" name="keyword" class="form-control sf-form-control">
                                            <span class="sf-search-icon"><img src="images/search-bar/keyword.png" alt=""/></span>
                                        </li>

                                        <li>
                                            <label>Category</label>
                                            <select id="categorysrh" name="catid" class="form-control sf-form-control aon-categories-select sf-select-box" title="Select Category">
                                                <option class="bs-title-option" value="">Select a Category</option>
                                                <option value="17" data-content="<img class='childcat-img' width='50' height='auto' src=images/cat-thum/cat-1.jpg>
                                      <span class='childcat'>Cab Service</span>">Cab Service
                                                </option>
                                                <option value="30" data-content="<img class='childcat-img' width='50' height='auto' src=images/cat-thum/cat-2.jpg>
                                      <span class='childcat'>Car Dealers</span>">Car Dealers
                                                </option>
                                                <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src=images/cat-thum/cat-3.jpg>
                                      <span class='childcat'>Food & Drink</span>">Food & Drink
                                                </option>
                                                <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src=images/cat-thum/cat-4.jpg>
                                      <span class='childcat'>Plumber</span>">Plumber
                                                </option>
                                                <option value="19" data-content="<img class='childcat-img' width='50' height='auto' src=images/cat-thum/cat-5.jpg>
                                      <span class='childcat'>Electrician</span>">Electrician
                                                </option>
                                            </select>
                                            <span class="sf-search-icon"><img src="images/search-bar/maintenance.png" alt=""/></span>
                                        </li>
                                        <li>
                                            <label>Country</label>
                                            <select class="sf-select-box form-control sf-form-control bs-select-hidden" data-live-search="true" name="country" id="country" title="Country" data-header="Select a Country">
                                                <option class="bs-title-option" value="">Select Country</option>
                                                <option value="">Select Country</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="United States">United States</option>
                                            </select>
                                            <span class="sf-search-icon"><img src="images/search-bar/globe.png" alt=""/></span>
                                        </li>
                                        <li>
                                            <label>City</label>
                                            <select class="sf-select-box form-control sf-form-control bs-select-hidden" data-live-search="true" name="city" id="city" title="City" data-header="Select a City">
                                                <option class="bs-title-option" value="">Select City</option>
                                                <option value="">Select City</option>
                                                <option value="">London</option>
                                                <option value="">Japan</option>
                                                <option value="">US</option>
                                            </select>
                                            <span class="sf-search-icon"><img src="images/search-bar/city.png" alt=""/></span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="aon-searchbar-right">
                                    <button type="button" class="site-button"><i class="fa fa-search"></i> Find Provider</button>
                                </div>

                            </div>

                        </form>
                    </div>
                    <!-- Search Form End-->
                </div>
            </div>

        </section>
        <!-- BANNER SECTION END -->

        <!-- Services Finder categories -->
        <section class="bg-white aon-categories-area sf-curve-pos">
            <div class="container">

                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">categories</span>
                            <h2 class="aon-title">Popular Categories</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->

                <div class="section-content">
                    <div class="owl-carousel categories-carousel-owl aon-owl-arrow">
                        <!-- COLUMNS 1 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/1.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Food & Drink</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/2.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Plumber</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/3.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Cleaning Services</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="figure" href="categories-detail.html"><img src="images/popular-categories/4.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Yoga Classes</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/5.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Salon & Spa</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/6.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Gym</h4>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="item">
                            <div class="aon-cat-item">
                                <div class="aon-cat-pic media-bg-animate shine-hover">
                                    <a class="shine-box" href="categories-detail.html"><img src="images/popular-categories/7.jpg" alt=""></a>
                                </div>
                                <h4 class="aon-cat-title">Transport</h4>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Services Finder categories END -->

        <!-- How it Work -->
        <section class="bg-white aon-how-service-area sf-curve-pos">
            <div class="container">

                <div class="section-content">
                    <div class="row">
                        <!--Title Section Start-->
                        <div class="col-lg-4 col-md-12">
                            <span class="aon-sub-title">Steps</span>
                            <h2 class="sf-title">How Service Finder Works</h2>
                        </div>
                        <!--Title Section End-->

                        <div class="col-lg-8 col-md-12">
                            <!-- Steps Block Start-->
                            <div class="aon-step-blocks">
                                <div class="row">
                                    <!-- COLUMNS 1 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section step-position-1 aon-icon-effect">
                                            <div class="aon-step-icon aon-icon-box">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/1.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Describe Your Task</h4>
                                                <p>This helps us determine which Taskers are abest job.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 2 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section step-position-2 aon-icon-effect">
                                            <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/2.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Choose a Tasker</h4>
                                                <p>This helps us determine which Taskers are abest job.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- COLUMNS 3 -->
                                    <div class="col-md-4 col-sm-4 m-b30">
                                        <div class="aon-step-section  step-position-3  aon-icon-effect">
                                            <div class="aon-step-icon">
                                                    <span>
                                                        <i class="aon-icon"><img src="images/step-icon/3.png" alt=""></i>
                                                    </span>
                                            </div>
                                            <div class="aon-step-info">
                                                <h4 class="aon-title">Live Smarter</h4>
                                                <p>This helps us determine which Taskers are abest job.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Steps Block End-->
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- How it Work END -->

        <!-- Featued Vender -->
        <section class="site-bg-gray aon-feature-provider-area sf-curve-pos">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">Vendor</span>
                            <h2 class="sf-title">Featured Providers</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->

                <div class="section-content">
                    <div class="row">
                        <div class="owl-carousel aon-featurd-provider-carousel aon-owl-arrow">

                            <!-- COLUMNS 1 -->
                            <div class="item">
                                <div class="aon-ow-provider-wrap">
                                    <div class="aon-ow-provider shine-hover">

                                        <div class="aon-ow-top">
                                            <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                            <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                            <div class="aon-ow-info">
                                                <h4 class="aon-title"><a href="profile-full.html"> Edward Luise</a></h4>
                                                <span>Queens, United States</span>
                                            </div>
                                        </div>
                                        <div class="aon-ow-mid">
                                            <div class="aon-ow-media media-bg-animate">
                                                <a href="profile-full.html" class="shine-box"><img src="images/providers/1.jpg" alt=""></a>
                                            </div>
                                            <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                            <div class="aon-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aon-ow-bottom">
                                        <a href="profile-full.html">Request A Quote</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="item">
                                <div class="aon-ow-provider-wrap">
                                    <div class="aon-ow-provider shine-hover">

                                        <div class="aon-ow-top">
                                            <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                            <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                            <div class="aon-ow-info">
                                                <h4 class="aon-title"><a href="profile-full.html">Javier Bardem</a></h4>
                                                <span>Queens, United States</span>
                                            </div>
                                        </div>
                                        <div class="aon-ow-mid">
                                            <div class="aon-ow-media media-bg-animate">
                                                <a href="profile-full.html" class="shine-box"><img src="images/providers/2.jpg" alt=""></a>
                                            </div>
                                            <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                            <div class="aon-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aon-ow-bottom">
                                        <a href="profile-full.html">Request A Quote</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="item">
                                <div class="aon-ow-provider-wrap">
                                    <div class="aon-ow-provider shine-hover">

                                        <div class="aon-ow-top">
                                            <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                            <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                            <div class="aon-ow-info">
                                                <h4 class="aon-title"><a href="profile-full.html">Mila Kunis</a></h4>
                                                <span>Queens, United States</span>
                                            </div>
                                        </div>
                                        <div class="aon-ow-mid">
                                            <div class="aon-ow-media media-bg-animate">
                                                <a class="shine-box" href="profile-full.html"><img src="images/providers/3.jpg" alt=""></a>
                                            </div>
                                            <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                            <div class="aon-ow-pro-rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star text-gray"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aon-ow-bottom">
                                        <a href="profile-full.html">Request A Quote</a>
                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="item">
                                <div class="item">
                                    <div class="aon-ow-provider-wrap">
                                        <div class="aon-ow-provider shine-hover">

                                            <div class="aon-ow-top">
                                                <div class="aon-pro-check"><span><i class="fa fa-check"></i></span></div>
                                                <div class="aon-pro-favorite"><a href="#"><i class="fa fa-heart-o"></i></a></div>
                                                <div class="aon-ow-info">
                                                    <h4 class="aon-title"><a href="profile-full.html">Edward Luise</a></h4>
                                                    <span>Queens, United States</span>
                                                </div>
                                            </div>
                                            <div class="aon-ow-mid">
                                                <div class="aon-ow-media media-bg-animate">
                                                    <a href="profile-full.html" class="shine-box"><img src="images/providers/4.jpg" alt=""></a>
                                                </div>
                                                <p>Through our expertise, technological knowledge, global presence and bespoke.</p>
                                                <div class="aon-ow-pro-rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star text-gray"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="aon-ow-bottom">
                                            <a href="profile-full.html">Request A Quote</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Featued Vender -->

        <!-- Statics -->
        <div class="site-bg-primary aon-statics-area sf-curve-pos">
            <div class="container">

                <div class="section-content">
                    <div class="row d-flex flex-wrap align-items-center a-b-none">
                        <div class="col-lg-6 col-md-12">
                            <!--Title Section Start-->
                            <div class="section-head">
                                <span class="aon-sub-title">Statics</span>
                                <h2 class="sf-title">Trusted by thousands of people all over the world</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. </p>
                            </div>
                            <!--Title Section End-->
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <!--Statics-blocks Section Start-->
                            <div class="aon-statics-blocks">
                                <div class="row">
                                    <!--Block 1-->
                                    <div class="col-lg-6 m-b30 aon-static-position-1">
                                        <div class="media-bg-animate media-statics aon-icon-effect">
                                            <div class="aon-static-section aon-t-blue">
                                                <div class="aon-company-static-num counter aon-icon">36</div>
                                                <div class="aon-company-static-name">Providers</div>
                                            </div>
                                        </div>
                                        <div class="media-bg-animate media-statics aon-icon-effect">
                                            <div class="aon-static-section aon-t-yellow">
                                                <div class="aon-company-static-num counter aon-icon">108</div>
                                                <div class="aon-company-static-name">Jobs</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Block 2-->
                                    <div class="col-lg-6 m-b30 aon-static-position-2">
                                        <div class="media-bg-animate media-statics aon-icon-effect">
                                            <div class="aon-static-section aon-t-green">
                                                <div class="aon-company-static-num counter aon-icon">89</div>
                                                <div class="aon-company-static-name">Customer</div>
                                            </div>
                                        </div>
                                        <div class="media-bg-animate media-statics aon-icon-effect">
                                            <div class="aon-static-section aon-t-skyblue">
                                                <div class="aon-company-static-num counter aon-icon">59</div>
                                                <div class="aon-company-static-name">Categories</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--Statics-blocks Section End-->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Provider END -->

        <!-- Latest Blog -->
        <div class="aon-news-section-wrap sf-curve-pos">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">News</span>
                            <h2 class="sf-title">Recent News Articles</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->

                <div class="section-content">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-md-4">
                            <div class="media-bg-animate">
                                <div class="aon-blog-section-1 shine-hover">
                                    <div class="aon-post-media shine-box">
                                        <a href="blog-detail.html"><img src="images/blog/latest-blog1/1.jpg" alt=""></a>
                                    </div>
                                    <div class="aon-post-meta">
                                        <ul>
                                            <li class="aon-post-category">Latest</li>
                                            <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                        </ul>
                                    </div>
                                    <div class="aon-post-info">
                                        <h4 class="aon-post-title"><a href="blog-detail.html">Helping Companies in their Green.</a></h4>
                                        <div class="aon-post-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-4">
                            <div class="media-bg-animate">
                                <div class="aon-blog-section-1 shine-hover">

                                    <div class="aon-post-media shine-box">
                                        <a href="blog-detail.html"><img src="images/blog/latest-blog1/2.jpg" alt=""></a>
                                    </div>

                                    <div class="aon-post-meta">
                                        <ul>
                                            <li class="aon-post-category">Latest</li>
                                            <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                        </ul>
                                    </div>

                                    <div class="aon-post-info">
                                        <h4 class="aon-post-title"><a href="blog-detail.html">There are two thing is very important.</a></h4>
                                        <div class="aon-post-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-4">
                            <div class="media-bg-animate">
                                <div class="aon-blog-section-1  shine-hover">
                                    <div class="aon-post-media shine-box">
                                        <a href="blog-detail.html"><img src="images/blog/latest-blog1/3.jpg" alt=""></a>
                                    </div>
                                    <div class="aon-post-meta">
                                        <ul>
                                            <li class="aon-post-category">Latest</li>
                                            <li class="aon-post-author"><a href="blog-detail.html">By |<span>Admin</span></a> </li>
                                        </ul>
                                    </div>
                                    <div class="aon-post-info">
                                        <h4 class="aon-post-title"><a href="blog-detail.html">Officia deserunt mollit anim id labrum.</a></h4>
                                        <div class="aon-post-text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Blog END -->

        <!-- Why Choose us -->
        <div class="aon-whycoose-area sf-curve-pos">
            <div class="container-fluid">
                <div class="sf-whycoose-section">
                    <div class="row sf-w-choose-bg-outer d-flex flex-wrap a-b-none">
                        <!-- Left Section -->
                        <div class="col-md-7 margin-b-50 sf-w-choose-left-cell">
                            <div class="sf-w-choose-info-left">
                                <!--Title Section Start-->
                                <div class="section-head">
                                    <div class="row">
                                        <div class="col-md-12  margin-b-50">
                                            <span class="aon-sub-title">Choose</span>
                                            <h2 class="sf-title">Why Choose us</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                </div>
                                <!--Title Section End-->

                                <!-- COLUMNS 1 -->
                                <div class="sf-w-choose margin-b-20">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="images/whychoose/1.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Meet new customers</h4>
                                        <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="sf-w-choose margin-b-20">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="images/whychoose/2.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Grow your revenue</h4>
                                        <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="sf-w-choose">
                                    <div class="sf-w-choose-icon">
                                            <span>
                                                <img src="images/whychoose/3.png" alt="">
                                            </span>
                                    </div>
                                    <div class="sf-w-choose-info">
                                        <h4 class="sf-title">Build your online reputation</h4>
                                        <p>Suspendisse tincidunt rutrum ante. Vestibulum elementum ipsum sit amet turpis elementum lobortis.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right Section -->
                        <div class="col-md-5 sf-w-choose-bg-wrap sf-w-choose-right-cell">
                            <div class="sf-w-choose-bg" style="background-image: url(images/background/bg1.jpg);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Choose us END -->

        <!-- Jobs Section -->
        <div class="aon-recent-post-area sf-curve-pos">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">Jobs</span>
                            <h2 class="sf-title">Recently Posted Jobs</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->


                <div class="section-content">
                    <div class="sf-blog-section-1-wrap">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="job-detail.html" class="sf-jobs-media"><img src="images/jobs/1.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="job-detail.html">Account Executive Required</a></h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="job-detail.html" class="sf-jobs-media"><img src="images/jobs/2.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="job-detail.html">Project Manager Required</a></h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="job-detail.html" class="sf-jobs-media"><img src="images/jobs/3.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="job-detail.html">Electrician Required in Brooklyn</a></h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="job-detail.html" class="sf-jobs-media"><img src="images/jobs/4.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="job-detail.html">Librarian Required in Brooklyn</a></h4>

                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 5 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="javascript:void(0);" class="sf-jobs-media"><img src="images/jobs/5.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="javascript:void(0);">Nursing Assistant Required</a></h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- COLUMNS 6 -->
                            <div class="col-lg-4 col-md-6">
                                <div class="media-bg-animate">
                                    <div class="sf-jobs-section">

                                        <div class="sf-jobs-head">
                                            <a href="javascript:void(0);" class="sf-jobs-media"><img src="images/jobs/6.jpg" alt=""></a>
                                            <span class="sf-jobs-position">Freelance</span>
                                        </div>

                                        <div class="sf-jobs-info">
                                            <div class="sf-job-company">Blue Hills Pvt.LTD</div>
                                            <h4 class="sf-title"><a href="javascript:void(0);">President of Sales Required</a></h4>
                                            <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod temp incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse</p>
                                        </div>

                                        <div class="sf-jobs-footer">
                                            <div class="sf-job-location"><i class="fa fa-map-marker"></i>London</div>
                                            <div class="sf-jobs-cost"><span>$25</span>/hour</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Jobs Section END -->

        <!-- Pricing Plan Section -->
        <div class="aon-pricing-area sf-curve-pos">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="aon-sub-title">Pricing</span>
                            <h2 class="aon-title">Our Pricing Plans</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->

                <div class="section-content">
                    <!--Pricing Table Button-->
                    <div class="sf-priceing-tb-control">
                        <span>Bill Monthly</span>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                        <span>Bill Yearly</span>
                    </div>
                    <!--Pricing Table Button-->

                    <div class="sf-pricing-section-outer">
                        <div class="row no-gutter">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-3">
                                <div class="sf-pricing-section">

                                    <div class="sf-price-tb-info">
                                        <div class="sf-price-plan-name">Intro</div>
                                        <div class="sf-price-plan-discount">Save 20%</div>
                                    </div>

                                    <div class="sf-price-tb-list">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Booking</li>
                                            <li><i class="fa fa-check"></i> Own Cover Image</li>
                                            <li class="disable"><i class="fa fa-check"></i> Multiple Categories</li>
                                            <li class="disable"><i class="fa fa-check"></i> Apply for Job</li>
                                            <li class="disable"><i class="fa fa-check"></i> Job Alerts</li>
                                            <li class="disable"><i class="fa fa-check"></i> Google Calendar</li>
                                            <li class="disable"><i class="fa fa-check"></i> Crop Profile Image</li>
                                        </ul>
                                    </div>

                                    <div class="sf-price-tb-plan">
                                        <div class="sf-price-plan-cost">$<span>29</span>/month</div>
                                    </div>
                                    <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-3">
                                <div class="sf-pricing-section">

                                    <div class="sf-price-tb-info">
                                        <div class="sf-price-plan-name">Base</div>
                                        <div class="sf-price-plan-discount">Save 20%</div>
                                    </div>

                                    <div class="sf-price-tb-list">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Booking</li>
                                            <li><i class="fa fa-check"></i> Own Cover Image</li>
                                            <li><i class="fa fa-check"></i> Multiple Categories</li>
                                            <li><i class="fa fa-check"></i> Apply for Job</li>
                                            <li><i class="fa fa-check"></i> Job Alerts</li>
                                            <li class="disable"><i class="fa fa-check"></i> Google Calendar</li>
                                            <li class="disable"><i class="fa fa-check"></i> Crop Profile Image</li>
                                        </ul>
                                    </div>

                                    <div class="sf-price-tb-plan">
                                        <div class="sf-price-plan-cost">$<span>39</span>/month</div>
                                    </div>
                                    <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                </div>
                            </div>
                            <!-- COLUMNS 3 -->
                            <div class="col-md-3">
                                <div class="sf-pricing-section sf-pricing-active">

                                    <div class="sf-price-tb-info">
                                        <div class="sf-price-plan-name">Pro</div>
                                        <div class="sf-price-plan-discount">Save 20%</div>
                                    </div>

                                    <div class="sf-price-tb-list">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Booking</li>
                                            <li><i class="fa fa-check"></i> Own Cover Image</li>
                                            <li><i class="fa fa-check"></i> Multiple Categories</li>
                                            <li><i class="fa fa-check"></i> Apply for Job</li>
                                            <li><i class="fa fa-check"></i> Job Alerts</li>
                                            <li><i class="fa fa-check"></i> Google Calendar</li>
                                            <li><i class="fa fa-check"></i> Crop Profile Image</li>
                                        </ul>
                                    </div>

                                    <div class="sf-price-tb-plan">
                                        <div class="sf-price-plan-cost">$<span>49</span>/month</div>
                                    </div>
                                    <a href="contact-us.html" class="sf-choose-plan-btn">Try 1 Month</a>
                                </div>
                            </div>
                            <!-- COLUMNS 4 -->
                            <div class="col-md-3">
                                <div class="sf-pricing-section">

                                    <div class="sf-price-tb-info">
                                        <div class="sf-price-plan-name">Enterprise</div>
                                        <div class="sf-price-plan-discount">Save 20%</div>
                                    </div>

                                    <div class="sf-price-tb-list">
                                        <ul>
                                            <li><i class="fa fa-check"></i> Booking</li>
                                            <li><i class="fa fa-check"></i> Own Cover Image</li>
                                            <li><i class="fa fa-check"></i> Multiple Categories</li>
                                            <li><i class="fa fa-check"></i> Apply for Job</li>
                                            <li><i class="fa fa-check"></i> Job Alerts</li>
                                            <li><i class="fa fa-check"></i> Google Calendar</li>
                                            <li><i class="fa fa-check"></i> Crop Profile Image</li>
                                        </ul>
                                    </div>

                                    <div class="sf-price-tb-plan">
                                        <div class="sf-price-plan-cost">$<span>89</span>/month</div>
                                    </div>
                                    <a href="contact-us.html" class="sf-choose-plan-btn">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Pricing Plan Section END -->

        <!-- Testimonial Section -->
        <div class="aon-testmonials-area sf-curve-pos">
            <div class="container">
                <!--Title Section Start-->
                <div class="section-head">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <span class="sf-sub-title">Testimonial</span>
                            <h2 class="sf-title">What People Say</h2>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do usmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
                <!--Title Section End-->


                <div class="section-content">
                    <!--testimonial top-->
                    <div class="slider-vertical-wrap">
                        <!-- THUMBNAILS -->
                        <div class="slick-testimonials-thumbnails">
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-user">
                                    <div class="sf-testimonial-media"><img src="images/testimonials/pic1.jpg" alt=""></div>
                                    <div class="sf-testimonial-user-detail">
                                        <div class="sf-testi-user-name">Mark, Homestay </div>
                                        <div class="sf-testi-user-position">Sales Manager</div>
                                    </div>

                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-user">
                                    <div class="sf-testimonial-media"><img src="images/testimonials/pic1.jpg" alt=""></div>
                                    <div class="sf-testimonial-user-detail">
                                        <div class="sf-testi-user-name">Mark, Homestay </div>
                                        <div class="sf-testi-user-position">Sales Manager</div>
                                    </div>

                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-user">
                                    <div class="sf-testimonial-media"><img src="images/testimonials/pic2.jpg" alt=""></div>
                                    <div class="sf-testimonial-user-detail">
                                        <div class="sf-testi-user-name">Mark, Homestay </div>
                                        <div class="sf-testi-user-position">Sales Manager</div>
                                    </div>

                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-user">
                                    <div class="sf-testimonial-media"><img src="images/testimonials/pic3.jpg" alt=""></div>
                                    <div class="sf-testimonial-user-detail">
                                        <div class="sf-testi-user-name">Mark, Homestay </div>
                                        <div class="sf-testi-user-position">Sales Manager</div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- MAIN SLIDES -->
                        <div class="slick-testimonials-carousel">
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-info text-center">
                                    <div class="sf-testimonial-title">It was a great experience</div>
                                    <div class="sf-ow-pro-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-gray"></span>
                                    </div>
                                    <div class="sf-testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
                                    </div>
                                    <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-info text-center">
                                    <div class="sf-testimonial-title">It was a great experience</div>
                                    <div class="sf-ow-pro-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-gray"></span>
                                    </div>
                                    <div class="sf-testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
                                    </div>
                                    <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-info text-center">
                                    <div class="sf-testimonial-title">It was a great experience</div>
                                    <div class="sf-ow-pro-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-gray"></span>
                                    </div>
                                    <div class="sf-testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
                                    </div>
                                    <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                </div>
                            </div>
                            <!-- COLUMNS 1 -->
                            <div class="slick-item">
                                <div class="sf-testimonial-info text-center">
                                    <div class="sf-testimonial-title">It was a great experience</div>
                                    <div class="sf-ow-pro-rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star text-gray"></span>
                                    </div>
                                    <div class="sf-testimonial-text">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesettin</p>
                                    </div>
                                    <div class="sf-testimonial-quote"><i class="fa fa-quote-left"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Testimonial Section END -->
@endsection
