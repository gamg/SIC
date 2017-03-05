<div class="profile-menu">
    <a href="">
        <div class="profile-pic">
            <img src="{{asset('img/profile-pics/'.Auth::user()->avatar)}}" alt="">
        </div>

        <div class="profile-info">
            Malinda Hollaway | Click here for more

            <i class="zmdi zmdi-arrow-drop-down"></i>
        </div>
    </a>

    <ul class="main-menu">
        <li>
            <a href="{{route('profiles.index')}}"><i class="fa fa-user"></i> My Profile</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-list"></i> Wish List</a>
        </li>
        @if(Auth::user()->type == 1)
            <li>
                <a href="#"><i class="fa fa-dashboard"></i> Go to Dashboard</a>
            </li>
        @endif
        <li>
            <a href="#"><i class="fa fa-close"></i> Logout</a>
        </li>
    </ul>
</div>