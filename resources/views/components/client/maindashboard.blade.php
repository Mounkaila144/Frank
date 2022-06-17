<x-guest.head>
    <x-slot name="title">
       {{$title}}
    </x-slot>
    <x-slot name="cssSlot">
        {{$cssSlot}}
    </x-slot>
</x-guest.head>
<x-guest.landing-area></x-guest.landing-area>
<div class="page-wraper">

    <x-client.header></x-client.header>

    <x-client.sidebarholder></x-client.sidebarholder>
</div>
<div class="page-content">
    <div id="content">

        <div class="content-admin-main">

            <div class="admin-top-area d-flex flex-wrap justify-content-between m-b30 align-items-center">

                <div class="admin-left-area">
                    <a class="nav-btn-admin d-flex justify-content-between align-items-center" id="sidebarCollapse">
                        <span class="nav-btn-text">Menu</span>
                        <span class="fa fa-reorder"></span>
                    </a>
                </div>


                <div class="admin-right-area">
                    <div class="pro-pic-info-wrap d-flex">
                        <div class="pro-pic-box">
                            <img src=" alt=" "/>
                        </div>
                        <div class="pro-pic-info">
                            <strong> </strong>

                        </div>

                    </div>
                </div>
            </div>

    {{$content}}
</div>
    </div>
</div>






<x-guest.js></x-guest.js>
