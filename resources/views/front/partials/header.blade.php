<div class="container">
    <!-- Logo -->
    {{--<div class="logo"> <a href="index.html"><img class="img-responsive" src="images/logo-light.png" alt="" ></a> </div>--}}
    <!-- Navigation -->
    <nav class="navbar">
        <!-- NAV -->
        <ul class="nav ownmenu">
            <li class="active"> <a href="{{url('/')}}">Home </a> </li>
            <li> <a href="">Our Works</a>
                <ul class="dropdown animated-3s fadeIn">
                    <li> <a href="{{url('music')}}">Music</a></li>
                    <li> <a href="{{url('blog')}}">News</a></li>
                    <li> <a href="{{url('media')}}">Media</a></li>
                    {{--<li> <a href="music_01.html">Music</a></li>--}}
                    {{--<li> <a href="search-page(artists).html">Artists</a></li>--}}
                </ul>
            </li>
            <li> <a href="{{url('about')}}">About</a> </li>
            <li> <a href="{{url('artists')}}">Artists </a> </li>
            <li> <a href="{{url('blog')}}">Blog </a> </li>
            <li> <a href="{{url('signup')}}"> Sign Up</a> </li>
        </ul>
    </nav>
</div>
