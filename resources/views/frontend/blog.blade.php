@extends('frontend.layouts.app')

@section('content')

<!-- banner-section -->
<div class="sub-banner-section blog-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up">Blog</h1>
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p class="text-center" data-aos="fade-right">Dive into our treasure trove of wellness
                                wisdom, where each post illuminates pathways to a healthier, more vibrant life.</p>    </div>
                        </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span">Home </span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span">Blog</span>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="" class="img-fluid">
                </figure>
            </div>
    </div>
    </section>
</div>
<!-- MAIN SECTION -->
<!--End Slider Section-->
<section class="blog-posts">
    <div class="container">
        <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div id="blog" class="three-column col-xl-12">
                <div class="row">
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date">
                                        <i class="fa fa-calendar-o"></i>Jan 21, 2024</span>
                                    <span class="post-meta-comments">
                                        <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                    </span>
                                    <h2>
                                        <a href="#">How does pregnancy affect my pelvic floor
                                        </a>
                                    </h2>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book..</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <span class="post-meta-category"><a href="">Technology</a></span>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <h2><a href="#">Simplicity, a post with slider gallery</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                        commodo dolor porta feugiat.</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date">
                                        <i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments">
                                        <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                    </span>
                                    <h2><a href="#">Standard post with a single image </a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                        commodo dolor porta feugiat.</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments">
                                        <a href=""><i class="fa fa-comments-o"></i>33 Comments</a>
                                    </span>
                                    <h2>
                                        <a href="#">Self Hosted HTML5 Audio (mp3) with image cover</a>
                                    </h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                        commodo dolor porta feugiat.</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <h2><a href="#">This is a example post with Vimeo video</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                        commodo dolor porta feugiat.</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                        </div>
                        <!--col-->
                    </div>
                    <div class="col-xl-4 col-lg-4">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="#">
                                        <img alt="pregency-affect.png" src="{{ asset('img/pregnency-affect.webp') }}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">Lifestyle</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="float-left w-100 post-item-description">
                                    <span class="post-meta-date"><i class="fa fa-calendar-o"></i>Jan 21, 2017</span>
                                    <span class="post-meta-comments"><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span>
                                    <h2><a href="#">This is a example post with YouTube</a></h2>
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus
                                        commodo dolor porta feugiat.</p>
                                    <a href="single-post.html" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                </div>
                <!--blog-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
</section>



@endsection