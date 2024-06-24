@extends('welcome')

@section('title', 'Blog Detail')

@section('content')
<div class="page-content">
    <!-- Blog Area Start -->
    <section class="blog blog-detail p-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-6 col-xl-6  offset-xxl-1 mb-xl-0 mb-24">
                    <div class="blog-block">
                        <div class="content before-none">
                            <div class="tag-time mb-20">
                                <span>News</span>
                                <p class="color-medium-gray lh-120">Jul 5, 2023 4:00 PM GMT</p>
                            </div>
                            <h2 class="h-30 bold color-white mb-12">5 Things You Need to Know Before PSYCHO- PASS: <br> Providence</h2>
                            <p class="text mb-20 ">The movie will be released on July 14th!</p>
                            <div class="author-detail mb-32">
                                <div class="name-image">
                                    <img src="/media/author/profile-6.png" alt="">
                                    <p class="sec color-primary lh-120">Julio Vélez</p>
                                </div>
                            </div>
                            <div class="line"></div>
                            <img src="/media/blog/img-10.png" class="mb-24 br-0" alt="">
                            <p class="sec color-white mb-30">We are just a few days away from the anticipated release of PSYCHO-PASS: Providence in theaters <br>
                                worldwide, courtesy of Sony Pictures and Crunchyroll. So what do you need to know before you <br>
                                decide to buy a ticket and go to your nearest theater to enjoy this anime film? Let us help you out a
                                <br> bit.
                            </p>
                            <h4 class="h-24 bold color-white mb-16">A Long, Solid Story</h4>
                            <img src="/media/blog/img-11.png" class="mb-16" alt="">
                            <p class="sec color-white mb-30">
                                We are talking about three anime seasons and six movies along with a respectable number of light <br>
                                novels,video games and manga adaptations of PSYCHO-PASS. Many look at it as a hybrid of <br> Minority Report
                                and Blade Runner with the perfect dose of action, intrigue, and philosophical <br> themes that’ll keep you on your
                                toes as you explore a world where technology can figure out who’s <br> more likely to commit a crime. In
                                PSYCHO-PASS: Providence, the story starts when an attack on a <br> ship off the coast of Japan signals the start
                                of a string of terrorist attacks across the country by <br> paramilitary forces known as the “Peacebreakers.” It's up
                                to inspector Akane Tsunemori and her <br> team of latent criminals (including Shinya Kogami) to solve the mystery
                                behind the attacks.
                            </p>
                            <h4 class="h-24 bold color-white mb-20">Notable Series Talent Returning for the Movie</h4>
                            <img src="/media/blog/img-12.png" class="mb-16" alt="">
                            <p class="sec color-white mb-30">
                                It’s so exciting to know that key voice actors like Tomokazu Seki (who voices Shinya Kogami) and <br> Kana We
                                are talking about three anime seasons and six movies along with a respectable number <br> of light novels,video
                                games and manga adaptations of PSYCHO-PASS. Many look at it as a hybrid <br> of Minority Report and Blade
                                Runner with the perfect dose of action, intrigue, and philosophical <br> themes that’ll keep you on your toes as
                                you explore a world where technology can figure out who’s <br> more likely to commit a crime. In PSYCHO-
                                PASS: Providence, the story starts when an attack on a <br> ship off the coast of Japan signals the start of a
                                string of terrorist attacks across the country by <br> paramilitary forces known as the “Peacebreakers.” It's up to
                                inspector Akane Tsunemori and her <br> team of latent criminals (including Shinya Kogami) to solve the mystery
                                behind the attacks.
                            </p>
                            <div class="tag-time">
                                <span>Movies</span>
                                <span>Features</span>
                                <span>2023</span>
                                <span>PSYCHO-PASS: Providence</span>
                                <span>PSYCHO-PASS</span>
                            </div>
                            <div class="line st-2"></div>
                            <h5 class="h-20 bold color-white mb-20">1 Comment</h5>
                            <div class="author-detail  mb-30">
                                <div class="name-image">
                                    <img src="/media/author/profile-7.png" alt="">
                                    <p class="sec color-white">BernardBarrows <span>1 hour ago</span></p>
                                </div>
                            </div>
                            <form action="{{url('/blog-detail')}}">
                                <textarea name="comment" id="comment" class="form-control mb-30" placeholder="Your Comment"></textarea>
                                <button type="submit" class="cus-btn primary">reply</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-6">
                    <div class="recent-block">
                        <div class="sec-title mb-30">
                            <h2 class="h-40 color-white bold">Related Articles</h2>
                        </div>
                        <a href="{{url('/blog-detail')}}" class="article">
                            <img src="/media/blog/img-13.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line"></div>
                        <a href="{{url('/blog-detail')}}" class="article">
                            <img src="/media/blog/img-14.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line"></div>
                        <a href="{{url('/blog-detail')}}" class="article">
                            <img src="/media/blog/img-15.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line"></div>
                        <a href="{{url('/blog-detail')}}" class="article">
                            <img src="/media/blog/img-16.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line"></div>
                        <a href="{{url('/blog-detail')}}" class="article ">
                            <img src="/media/blog/img-17.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line"></div>
                        <a href="{{url('/blog-detail')}}" class="article">
                            <img src="/media/blog/img-18.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="line responsive-none "></div>
                        <a href="{{url('/blog-detail')}}" class="article responsive-none mb-50">
                            <img src="/media/blog/img-19.png" alt="">
                            <div class="content">
                                <p class="color-medium-gray lh-120 mb-1">Jul 5, 2023 4:00 PM GMT</p>
                                <h4 class="h-20 color-white bold mb-30">5 Things You Need to Know Before PSYCHO-PASS: Providence</h4>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="responsive-none">
                            <div class="sec-title mb-30">
                                <h2 class="h-40 color-white bold">Related Articles</h2>
                            </div>
                            <div class="article">
                                <img src="/media/blog/img-21.png" alt="">
                                <div class="content">
                                    <h4 class="h-20 color-white bold mb-30">Psycho-Pass: Sinners of the System</h4>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="cus-btn primary space">
                                        <i class="far fa-play"></i> Play
                                    </a>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="article">
                                <img src="/media/blog/img-22.png" alt="">
                                <div class="content">
                                    <h4 class="h-20 color-white bold mb-30">Psycho-Pass: Sinners of the System</h4>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="cus-btn primary space">
                                        <i class="far fa-play"></i> Play
                                    </a>
                                </div>
                            </div>
                            <div class="line"></div>
                            <div class="article">
                                <img src="/media/blog/img-20.png" alt="">
                                <div class="content">
                                    <h4 class="h-20 color-white bold mb-30">Psycho-Pass: Sinners of the System</h4>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#videoModal" class="cus-btn primary space">
                                        <i class="far fa-play"></i> Play
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area end -->

</div>
@endsection