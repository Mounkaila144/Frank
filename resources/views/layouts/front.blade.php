<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('front.template.head')
<body>

@include('front.template.loading')

  <div class="page-wraper">
    @include('front.template.navbar')
    <div class="page-content"
    @yield('content')
    </div>
    @include('front.template.footer')
    <button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>


    @include('front.template.script')

</body>
</html>
