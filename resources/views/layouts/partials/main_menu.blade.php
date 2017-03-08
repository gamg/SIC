<ul class="main-menu">
    <li>
        <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
    </li>
    @if(Auth::check())
        <li>
            <a href="{{route('crawler.expensive')}}">
                <i class="fa fa-chevron-circle-right"></i> Expensive Products</a>
        </li>
        <li>
            <a href="{{route('crawler.cheapest')}}">
                <i class="fa fa-chevron-circle-right"></i> Cheapest Products</a>
        </li>
    @endif
</ul>