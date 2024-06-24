@extends('welcome')

@section('title', 'Blog')

@section('content')
    @include('partials.blogBanner')
<div class="page-content">
    <!-- Blog Area Start -->
    <section class="blog p-40">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-3 col-md-6 order-xxl-0 order-1">
                    <div class="sec-title mb-30">
                        <h2 class="h-40 color-white bold">Latest Blogs</h2>
                    </div>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <img src="/media/blog/img-4.png" class="w-100" alt="">
                        <div class="content">
                            <div class="tag-time mb-12">
                                <span>News</span>
                                <p class="color-medium-gray lh-120">Jul 5, 2023 4:00 PM GMT</p>
                            </div>
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-16">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <img src="/media/blog/img-5.png" class="w-100" alt="">
                        <div class="content">
                            <div class="tag-time mb-12">
                                <span>News</span>
                                <p class="color-medium-gray lh-120">Jul 5, 2023 4:00 PM GMT</p>
                            </div>
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-16">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <div class="content">
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-12">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <p class="color-medium-gray lh-120 mb-16">Jul 5, 2023 4:00 PM GMT</p>
                            <div class="tag-time mb-16">
                                <span>News</span>
                                <span>Games</span>
                            </div>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2">
                        <div class="content">
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-12">Two New The Quintessential Quintuplets Side-Story Anime Illustrations Arrive Ahead of OVA Release This Friday</h4>
                            <p class="color-medium-gray lh-120 mb-16">Jul 5, 2023 4:00 PM GMT</p>
                            <div class="tag-time mb-16">
                                <span>News</span>
                                <span>Games</span>
                            </div>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xxl-6 col-12 order-xxl-1 order-0">
                    <div class="blog-list st-2">
                        <div class="sec-title mb-30">
                            <h2 class="h-40 color-white bold">Top Stories</h2>
                        </div>
                        <a href="{{url('/blog-detail')}}" class="blog-block mb-30">
                            <img src="/media/blog/img-2.png" alt="">
                            <div class="content">
                                <p class="sec color-white lh-120 mb-12">Jul 5, 2023 4:00 PM GMT</p>
                                <h2 class="h-24 bold color-white mb-16">hololive Indonesia Announces 3D Showcase for 2nd Generation Members</h2>
                                <p class="color-medium-gray sec mb-32">In 2028 schools will indeed sport fabulous gadgets, devices, and interfaces of learning.</p>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">3 min read</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                            <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">9K</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/blog-detail')}}" class="blog-block mb-30">
                            <img src="/media/blog/img-6.png" alt="">
                            <div class="content">
                                <p class="sec color-white lh-120 mb-12">Jul 5, 2023 4:00 PM GMT</p>
                                <h2 class="h-24 bold color-white mb-16">hololive Indonesia Announces 3D Showcase for 2nd Generation Members</h2>
                                <p class="color-medium-gray sec mb-32">In 2028 schools will indeed sport fabulous gadgets, devices, and interfaces of learning.</p>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">3 min read</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                            <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">9K</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/blog-detail')}}" class="blog-block mb-30 size-none">
                            <img src="/media/blog/img-3.png" alt="">
                            <div class="content">
                                <p class="sec color-white lh-120 mb-12">Jul 5, 2023 4:00 PM GMT</p>
                                <h2 class="h-24 bold color-white mb-16">hololive Indonesia Announces 3D Showcase for 2nd Generation Members</h2>
                                <p class="color-medium-gray sec mb-32">In 2028 schools will indeed sport fabulous gadgets, devices, and interfaces of learning.</p>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">3 min read</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                            <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">9K</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/blog-detail')}}" class="blog-block mb-30 size-none">
                            <img src="/media/blog/img-7.png" alt="">
                            <div class="content">
                                <p class="sec color-white lh-120 mb-12">Jul 5, 2023 4:00 PM GMT</p>
                                <h2 class="h-24 bold color-white mb-16">hololive Indonesia Announces 3D Showcase for 2nd Generation Members</h2>
                                <p class="color-medium-gray sec mb-32">In 2028 schools will indeed sport fabulous gadgets, devices, and interfaces of learning.</p>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">3 min read</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                            <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">9K</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="{{url('/blog-detail')}}" class="blog-block">
                            <img src="/media/blog/img-8.png" alt="">
                            <div class="content">
                                <p class="sec color-white lh-120 mb-12">Jul 5, 2023 4:00 PM GMT</p>
                                <h2 class="h-24 bold color-white mb-16">hololive Indonesia Announces 3D Showcase for 2nd Generation Members</h2>
                                <p class="color-medium-gray sec mb-32">In 2028 schools will indeed sport fabulous gadgets, devices, and interfaces of learning.</p>
                                <div class="author-detail">
                                    <div class="name-image">
                                        <img src="/media/author/profile-5.png" alt="">
                                        <p class="sec color-white lh-120">Naiska Haack</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                            <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">3 min read</p>
                                    </div>
                                    <div class="other-detail">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                            <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                        </svg>
                                        <p class="sec color-white lh-120">9K</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-3 col-md-6 order-xxl-2">
                    <div class="sec-title mb-30">
                        <h2 class="h-40 color-white bold">Features</h2>
                    </div>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <img src="/media/blog/img-4.png" class="w-100" alt="">
                        <div class="content">
                            <div class="tag-time mb-12">
                                <span>News</span>
                                <p class="color-medium-gray lh-120">Jul 5, 2023 4:00 PM GMT</p>
                            </div>
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-16">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <img src="/media/blog/img-9.png" class="w-100" alt="">
                        <div class="content">
                            <div class="tag-time mb-12">
                                <span>News</span>
                                <p class="color-medium-gray lh-120">Jul 5, 2023 4:00 PM GMT</p>
                            </div>
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-16">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2 mb-30">
                        <div class="content">
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-12">The Girl I Like Forgot Her Glasses Anime Comes Clear in Credit less Opening and Ending Videos</h4>
                            <p class="color-medium-gray lh-120 mb-16">Jul 5, 2023 4:00 PM GMT</p>
                            <div class="tag-time mb-16">
                                <span>News</span>
                                <span>Games</span>
                            </div>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="{{url('/blog-detail')}}" class="blog-block st-2">
                        <div class="content">
                            <h4 class="h-20 lh-140 font-primary bold color-white mb-12">Two New The Quintessential Quintuplets Side-Story Anime Illustrations Arrive Ahead of OVA Release This Friday</h4>
                            <p class="color-medium-gray lh-120 mb-16">Jul 5, 2023 4:00 PM GMT</p>
                            <div class="tag-time mb-16">
                                <span>News</span>
                                <span>Games</span>
                            </div>
                            <div class="author-detail">
                                <div class="name-image">
                                    <img src="/media/author/profile-5.png" alt="">
                                    <p class="sec color-white lh-120">Naiska Haack</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                        <path d="M8.5 1C4.64 1 1.5 4.14 1.5 8C1.5 11.86 4.64 15 8.5 15C12.36 15 15.5 11.86 15.5 8C15.5 4.14 12.36 1 8.5 1ZM8.5 14.3333C5.008 14.3333 2.16667 11.492 2.16667 8C2.16667 4.508 5.008 1.66667 8.5 1.66667C11.992 1.66667 14.8333 4.508 14.8333 8C14.8333 11.492 11.992 14.3333 8.5 14.3333ZM10.736 9.764C10.866 9.894 10.866 10.1054 10.736 10.2354C10.6707 10.3007 10.5853 10.3327 10.5 10.3327C10.4147 10.3327 10.3293 10.3 10.264 10.2354L8.264 8.23535C8.20133 8.17269 8.16667 8.08802 8.16667 7.99935V4.66602C8.16667 4.48202 8.316 4.33268 8.5 4.33268C8.684 4.33268 8.83333 4.48202 8.83333 4.66602V7.86133L10.736 9.764Z" fill="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">3 min read</p>
                                </div>
                                <div class="other-detail">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M14.0875 6.56743C14.8606 7.38081 14.8606 8.61658 14.0875 9.42996C12.7837 10.8018 10.5443 12.6654 8.00065 12.6654C5.45697 12.6654 3.21765 10.8018 1.91379 9.42997C1.14072 8.61658 1.14072 7.38081 1.91379 6.56743C3.21765 5.19559 5.45697 3.33203 8.00065 3.33203C10.5443 3.33203 12.7837 5.19559 14.0875 6.56743Z" stroke="#F8F8FF" />
                                        <path d="M10.0007 7.9987C10.0007 9.10327 9.10522 9.9987 8.00065 9.9987C6.89608 9.9987 6.00065 9.10327 6.00065 7.9987C6.00065 6.89413 6.89608 5.9987 8.00065 5.9987C9.10522 5.9987 10.0007 6.89413 10.0007 7.9987Z" stroke="#F8F8FF" />
                                    </svg>
                                    <p class="sec color-white lh-120">9K</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Area end -->

</div>
@endsection