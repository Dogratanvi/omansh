
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
                             <div>
                            <h1 data-aos="fade-up">Blog</h1>
                            <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                            <p class="text-center" data-aos="fade-right">Dive into our treasure trove of wellness
                                wisdom, where each post illuminates pathways to a healthier, more vibrant life.</p>    </div>
                        </div>
                            <div class="btn_wrapper">
                                <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home</a> </span><i class="fa-solid fa-angles-right"
                                    aria-hidden="true"></i><span class="sub_span">Blog</span>
                            </div>
                        </div>
                         </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape" class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape" class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="banner_right_top_shape" class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="banner_right_bottom_shape" class="img-fluid">
                </figure>
            </div>
    </div>
    </section>
</div>
<!-- MAIN SECTION -->
<!--End Slider Section-->
<section class="blog-posts  main-blog">
    <div class="container">
        <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
            <div id="blog" class="blogs three-column col-xl-12">
                <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 col-xs-12 mt-3">
                        <div class="float-left w-100 post-item border mb-4">
                            <div class="post-item-wrap position-relative">
                                <div class="post-image">
                                    <a href="{{ route('frontend.blog.show',  ['id' => $blog->id, 'slug' => $blog->slug]) }}">
                                        <img alt="pregency-affect.png" src=" {{asset($blog->featured_image)}}">
                                    </a>
                                    <span class="post-meta-category">
                                        <a href="">{{$blog->category}}</a>
                                    </span>
                                    <!--post-image-->
                                </div>
                                <div class="post-item-description">
                                    <span class="post-meta-date">
                                        <i class="fa fa-calendar-o"></i>{{ date('M d, Y', strtotime($blog->updated_at)) }}</span>
                                 
                                    <h2 class="text-dark">
                                        <a class="text-dark" href="{{ route('frontend.blog.show',  ['id' => $blog->id, 'slug' => $blog->slug]) }}">{{ $blog->title}}
                                        </a>
                                    </h2>
                                    <p>{{ $blog->intro}}</p>
                                    <a href="{{ route('frontend.blog.show',  ['id' => $blog->id, 'slug' => $blog->slug]) }}" class="item-link">Read More <i
                                            class="fa fa-arrow-right"></i></a>
                                    <!--post-item-description-->
                                </div>
                                <!--post-item-wrap-->
                            </div>
                            <!--post-item-->
                        </div>
                        <!--col-->
                    </div>
                    @endforeach
                </div>
                <!--blog-->
            </div>
            <!--row-->
        </div>
        <!--container-->
    </div>
</section>
<figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>


@endsection

