@props(["cssSlot" => '', 'title' => ''])
<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content=""/>
<meta name="author" content=""/>
<meta name="robots" content=""/>
<meta name="description" content=""/>

<!-- FAVICONS ICON -->
<link rel="icon" href="{{asset("guest/images/favicon.html")}}" type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="{{asset("guest/images/favicon.png")}}"/>

<!-- PAGE TITLE HERE -->
<title>{{$title}}</title>

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">


<!-- BOOTSTRAP STYLE SHEET -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/bootstrap.min.css")}}">
<!-- Bootstrap toggle -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/bootstrap4-toggle.min.css")}}">
<!-- Bootstrap seclect -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/bootstrap-select.min.css")}}"/>
<!-- Price Range Slider -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/bootstrap-slider.min.css")}}"/>
<!-- Bootstrap data table -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/dataTables.bootstrap4.min.css")}}">
<!-- Dropzone -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/dropzone.css")}}">
<!-- Fonts -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/font.css")}}"/>
<!-- Feather icon -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/feather.css")}}"/>
<!-- Fontawesome -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/font-awesome.min.css")}}"/>
<!-- Lc light box popup -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/lc_lightbox.css")}}"/>
<!-- Magnific Popup -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/magnific-popup.min.css")}}">
<!-- Custom Scrollbar -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/m-custom-scrollbar.min.css")}}"/>
<!-- Owl Carousel -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/owl.carousel.min.css")}}">
<!-- Slick Carousel -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/slick.min.css")}}">
<!-- Slick Theme -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/slick-theme.css")}}">
<!-- Main STyle Sheet -->
<link rel="stylesheet" type="text/css" href="{{asset("guest/css/style.css")}}">
{{$cssSlot}}
