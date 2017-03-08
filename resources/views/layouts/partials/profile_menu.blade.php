<div class="profile-menu">
    <a href="">
        <div class="profile-pic">
            <img src="{{asset('img/profile-pics/'.Auth::user()->avatar)}}" alt="">
        </div>

        <div class="profile-info">
            <strong>¡ {{Auth::user()->name}} CLICK HERE !</strong>

            <i class="fa fa-arrow-down"></i>
        </div>
    </a>

    <ul class="main-menu">
        <li>
            <a href="{{route('profiles.index')}}"><i class="fa fa-user"></i> My Profile</a>
        </li>
        <li>
            <a href="{{route('wishlist.index')}}"><i class="fa fa-list"></i> Wishlist</a>
        </li>
        <li>
            <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="fa fa-close"></i> Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</div>