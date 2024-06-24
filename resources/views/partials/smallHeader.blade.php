<header class="small-screen">
    <div class="container-fluid">
        <div class="mobile-menu">
            <div>
                <a class="navbar-brand" href="index.html"><img alt src="{{asset('/media/logo.png')}}"></a>
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
            </div>
        </div>
        <nav class="mobile-navar d-xl-none">
            <ul>
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="{{url('/listing')}}">Listing</a></li>
                <li class="has-children">Detail <span class="icon-arrow"></span>
                    <ul class="children">
                        <li><a href="anime-detail.html">Anime Detail</a></li>
                        <li><a href="{{url('/movie-detail')}}">Movie Detail</a></li>
                    </ul>
                </li>
                <li class="has-children">Pages <span class="icon-arrow"></span>
                    <ul class="children">
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./blog-detail.html">Blog Detail</a></li>
                        <li><a href="./404.html">404</a></li>
                        <li><a href="./coming-soon.html">Coming Soon</a></li>
                        <li><a href="./sign-up.html">Sign Up</a></li>
                        <li><a href="./login.html">Login</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>