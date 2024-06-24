<header class="small-screen">
    <div class="container-fluid">
        <div class="mobile-menu">
            <div>
                <a class="navbar-brand" href="{{url('/')}}"><img alt src="{{asset('/media/logo.png')}}"></a>
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>
        <nav class="mobile-navar d-xl-none">
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="anime-listing.html">Listing</a></li>
                <li class="has-children">Detail <span class="icon-arrow"></span>
                    <ul class="children">
                        <li><a href="anime-detail.html">Anime Detail</a></li>
                        <li><a href="movie-detail.html">Movie Detail</a></li>
                    </ul>
                </li>
                <li class="has-children">Pages <span class="icon-arrow"></span>
                    <ul class="children">
                        <li><a href="{{url('/blog')}}">Blog</a></li>
                        <li><a href="{{url('/blog-detail')}}">Blog Detail</a></li>
                        <li><a href="./404.html">404</a></li>
                        <li><a href="{{url('/coming-soon')}}">Coming Soon</a></li>
                        <li><a href="{{url('/signup')}}">Sign Up</a></li>
                        <li><a href="{{url('/login')}}">Login</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>