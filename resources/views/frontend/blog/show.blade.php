@extends('frontend.layouts.app')

@section('content')
<!-- banner-section -->
<div class="single-blog-page sub-banner-section blog-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section d-flex align-items-center h-100">
            <div class="container">
                <div class="row d-flex align-items-center h-100">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <h1 data-aos="fade-up" class="text-start"> {{ $blogs->title }}</h1>
                            <div class="row">

                               
                            </div>
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
<section class="blog-posts single-post">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9">
                <div id="blog" class="single-post01">
                    <div class="post-item">
                        <div class="post-item-wrap">
                            <div class="post-image" data-aos="fade-up">
                                
                                    <img alt="pregency-affect.png" src="{{asset($blogs->featured_image)}}">
                               
                                <!--post-image-->
                            </div>
                            <div class="btn_wrapper pt-4">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home</a> </span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span"><a
                                        class="ps-2 pe-2" href="{{ route('frontend.blog.index') }}">Blog</a></span><i
                                    class="fa-solid fa-angles-right" aria-hidden="true"></i><span class="sub_span">
                                    {{ $blogs->title }}
                                </span>
                            </div>
                            <div class="post-meta pt-3">
                                    <span class="post-meta-date color01"><i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($blogs->created_at)) }}</span>
                                    <!-- <span class="post-meta-comments "><a href=""><i class="fa fa-comments-o"></i>33
                                            Comments</a></span> -->
                                    <span class="post-meta-category"><i class="fa fa-tag"></i>Yoga</span>
                                            <span class="post-meta-category"><i class="fa-solid fa-eye"></i>343</span>
                                    <div class="post-meta-share float-right">
                                        <ul class="list-unstyled m-0">
                                            <li class="d-inline-block align-top"><a href="#">
                                                    <i class="fab fa-facebook-square"></i>
                                                </a></li>
                                            <li class="d-inline-block align-top"><a href="#">
                                                    <i class="fab fa-twitter-square"></i>
                                                </a></li>
                                            <li class="d-inline-block align-top"><a href="#">
                                                    <i class="fab fa-instagram"></i>
                                                </a></li>
                                            <li class="d-inline-block align-top"><a href="#">
                                                    <i class="fas fa-envelope-square"></i>
                                                </a></li>
                                        </ul>
                                        <!--post-meta-share-->
                                    </div>
                            <div class="post-item-description">
                                <h2 class="single-post-heading font_weight_600">{{ $blogs->title}}</h2>
                                <div>{!!$blogs->content!!}
                              

                                </div>
                                    <!--post-meta-->
                                </div>
                         
                                    <!--post-item-description-->
                            </div>

                            <div class="post-navigation">
                                <a href="#" class="post-prev">
                                    <div class="post-prev-title"><span>Previous Post</span></div>
                                </a>
                                <a href="#" class="post-next">
                                    <div class="post-next-title"><span>Next Post</span></div>
                                </a>
                                <!--post-navigation-->
                            </div>
                            <div class="comments" id="comments">
                                <div class="comment_number text-uppercase font_weight_600">
                                    Comments <span>(2)</span>
                                    <!--comment_number-->
                                </div>
                                <div class="comment-list">
                                    @include('frontend.block.comments', ['comments' => $blogs->comments, 'blog_id' => $blogs->id])
                                </div>
                                <hr />
                                <h4>Add comment</h4>
                                <form method="post" action="{{ url('store'SS) }}">
                                    @csrf
                                    <div class="form-group">
                                        <textarea class="form-control" name="body"></textarea>
                                        <input type="hidden" name="post_id" value="{{ $blog->id }}" />
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success" value="Add Comment" />
                                    </div>
                                </form>
                                <!--comments-->
                            </div>
                          
                            <!--post-item-wrap-->
                        </div>
                        <!--post-item-->
                    </div>
                    <!--single-post01-->
                </div>
                <!--col-->
            </div>
            <div class="sidebar sticky-sidebar col-lg-3">
                <div class="theiaStickySidebar">
                    <div class="widget widget-newsletter">
                        <form id="widget-search-form-sidebar" class="form-inline">
                            <div class="input-group">
                                <input type="text" aria-required="true" name="q" class="form-control widget-search-form"
                                    placeholder="Search for pages...">
                                <div class="input-group-append">
                                    <span class="input-group-btn">
                                        <button type="submit" id="widget-widget-search-form-button" class="btn"><i
                                                class="fa fa-search"></i></button>
                                    </span>
                                    <!--input-group-append-->
                                </div>
                                <!--input-group-->
                            </div>
                            <!--form-inline-->
                        </form>
                        <!--widget-->
                    </div>
                    <div class="widget">
                        <div class="tabs">
                            <ul class="nav nav-tabs" id="tabs-posts" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#popular"
                                        role="tab" aria-controls="popular" aria-selected="true">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#featured" role="tab"
                                        aria-controls="featured" aria-selected="false">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#recent" role="tab"
                                        aria-controls="recent" aria-selected="false">Recent</a>
                                </li>
                                <!--nav-tabs-->
                            </ul>
                            <div class="tab-content" id="tabs-posts-content">
                                <div class="tab-pane fade show active" id="popular" role="tabpanel">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">

                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">A true story, that never been told!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 6m ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Technology</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <!--post-thumbnail-list-->
                                    </div>
                                    <!--tab-pane-->
                                </div>
                                <div class="tab-pane fade" id="featured" role="tabpanel">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">New costs and rise of the economy!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <!--post-thumbnail-list-->
                                    </div>
                                    <!--tab-pane-->
                                </div>
                                <div class="tab-pane fade" id="recent" role="tabpanel">
                                    <div class="post-thumbnail-list">
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">The most happiest time of the day!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">New costs and rise of the economy!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 11h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <div class="post-thumbnail-entry">
                                            <img data-aos="fade-up" alt="pregency-affect.png"
                                                src="{{ asset('img/pregnency-affect.webp') }}">
                                            <div class="post-thumbnail-content">
                                                <a href="#">Beautiful nature, and rare feathers!</a>
                                                <span class="post-date"><i class="far fa-clock"></i> 24h ago</span>
                                                <span class="post-category"><i class="fa fa-tag"></i> Lifestyle</span>
                                                <!--post-thumbnail-content-->
                                            </div>
                                            <!--post-thumbnail-entry-->
                                        </div>
                                        <!--post-thumbnail-list-->
                                    </div>
                                    <!--tab-pane-->
                                </div>
                                <!--tab-content-->
                            </div>
                            <!--tabs-->
                        </div>
                        <!--widget-->
                    </div>
                    <!-- <div class="widget widget-categories">
                        <div class="widget-title font_weight_600">Categories</div>
                        <ul>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(2)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(10)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(7)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(9)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(2)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(10)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(7)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(3)</span>
                            </li>
                            <li class="cat-item">
                                <a href="#">Coupons</a>
                                <span class="cat-count-span">(9)</span>
                            </li>
                        </ul>
                    </div> -->

                    <div class="widget widget-tags">
                        <h4 class="widget-title font_weight_600">Tags</h4>
                        <div class="tags">
                            <a href="#">WOMEN HEALTH</a>
                            <a href="#">YOGA</a>
                            <a href="#">PHYSIOTHERAPY</a>
                            
                            <!--tags-->
                        </div>
                        <!--widget-->
                    </div>
                    <!--theiaStickySidebar-->
                </div>
                <!--sidebar-->
            </div>
            <!--row-->
        </div>
    </div>
    <!--container-->
</section>
<!-- SUBSCRIBE SECTION -->

@endsection