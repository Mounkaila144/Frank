<nav id="sidebar-admin-wraper">
    <div class="pro-my-account-wrap">
        COMPTE CLIENT
    </div>
    <div class="admin-nav">
        <ul class="">

            <li>
                <a href="{{route('client.my_categories')}}"><i class="fa fa-cogs"></i><span class="admin-nav-text">Categories</span></a>
            </li>
            <li>
                <a href="{{route('client.my_bookings')}}"><i class="fa fa-calendar"></i><span class="admin-nav-text">Panier</span></a>
            </li>

            <li>
                <a href="{{route('client.update_identity')}}"><i class="fa fa-id-card-o"></i><span class="admin-nav-text">Identité </span></a>
            </li>

        </ul>
    </div>
</nav>
