<!DOCTYPE html>
<html class="no-js" lang="fr">
<!--begin::Head-->
<x-guest.head>

    <x-slot name="title">
        {{$title}}
    </x-slot>
    <x-slot name="cssSlot">
        {{$cssSlot}}
    </x-slot>
</x-guest.head>

<body>
<x-guest.landing-area></x-guest.landing-area>
<div class="page-wraper">
    <x-guest.header></x-guest.header>

    <div class="page-content">
        {{$content}}
    </div>

    <x-guest.footer></x-guest.footer>

</div>

<x-guest.js>

</x-guest.js>
</body>
<!--end::Body-->
</html>
