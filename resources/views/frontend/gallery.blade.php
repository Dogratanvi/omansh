@extends('frontend.layouts.app')

@section('content')
<div class="sub-banner-section women-banner">
    <div class="image-overlay">
        <!-- SUB BANNER SECTION -->
        <section class="banner-section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-section-content">
                            <div>
                                <h1 data-aos="fade-up">Gallery</h1>
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-8 col-xl-8 col-xs-12 col-sm-12 col-12">
                                        <p data-aos="fade-right">Snapshots of Inspiration</p>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <span class="sub_home_span"><a href="{{ route('frontend.index') }}">Home
                                        </a></span><i class="fa-solid fa-angles-right" aria-hidden="true"></i> <span
                                        class="sub_home_span"><a>Gallery
                                        </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <figure class="banner_left_top_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_top_shape.png') }}" alt="banner_left_top_shape"
                        class="img-fluid">
                </figure>
                <figure class="banner_left_bottom_shape left_shape mb-0">
                    <img src="{{ asset('images/banner_left_bottom_shape.png') }}" alt="banner_left_bottom_shape"
                        class="img-fluid">
                </figure>
                <figure class="banner_right_top_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_top_shape.png') }}" alt="banner_right_top_shape"
                        class="img-fluid">
                </figure>
                <figure class="banner_right_bottom_shape right_shape mb-0">
                    <img src="{{ asset('images/banner_right_bottom_shape.png') }}" alt="banner_right_bottom_shape"
                        class="img-fluid">
                </figure>
            </div>
        </section>
    </div>
</div>





<section id="gallery " class="py-5 mb-5 aboutus_content service-gallary">
    <div class="container">
        <h2 class="text-start text-lg-center text-xl-center text-md-center text-xs-start text-sm-start">
            Gallery</h2>
        <div class="women-health">
            <div class="row">
                @csrf
                @foreach ($galleryImages as $gallery)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ $gallery }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ $gallery }}" alt="gallery">
                        </a>
                    </div>
                </div>
                @endforeach
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-1.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-1.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-2.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-2.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-3.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-3.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-4.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-4.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-5.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-5.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-6.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-6.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-7.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-7.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-8.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-8.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-9.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-9.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
                 <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 my-xl-3 my-lg-3 my-md-3 my-sm-3 my-2 innertext">
                    <div class="women_box border-0 rounded-0">
                        <a class="thumbnail border-0 " href="#" data-image-id="" data-toggle="modal" data-title=""
                            data-image="{{ asset('images/gallery-10.jpg') }}" data-target="#image-gallery">
                            <img class="img-thumbnail px-0 border-0" class="card-img-top rounded-top myImg px-0"
                                src="{{ asset('images/gallery-10.jpg') }}" alt="gallery">
                        </a>
                    </div>
                </div>
            </div>
            <div class="btn_wrapper d-flex justify-content-center mt-5">
                <a href="#" id="loadMor" class="text-decoration-none get_started_btn"> Load More </a>
            </div>


            <!-- End row -->
        </div><!-- End image gallery -->
    </div><!-- End container -->
</section>
<!-- gallary -->


<div class="modal fade modalDialogBox galleryModal" id="image-gallery" tabindex="-1" role="dialog"
    aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog galleryDialog">
        <div class="modal-content galleryModal-content">
            <div class="modal-header p-0">
                <h4 class="modal-title" id="image-gallery-title"></h4>
                <button type="button" class="close m-0 pb-0 pt-0 pe-0 border-0 bg-transparent"
                    data-dismiss="modal"><span aria-hidden="true" class="text-dark"><i class="fas fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body p-0">
                <img id="image-gallery-image" class="img-responsive border-0 rounded-0" src="">
            </div>
            <div class="modal-footer justify-content-center border-0">
                <button type="button" class="btn btn-secondary float-left bg-transparent border-0 py-0 shadow-none"
                    id="show-previous-image"><i class="fas fa-caret-left"></i>
                </button>
                <button type="button" id="show-next-image"
                    class="btn btn-secondary float-right bg-transparent border-0 py-0 shadow-none"><i
                        class="fas fa-caret-right"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<figure class="blog_posts_left_shape left_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_left_shape.png" alt="left-shape" class="img-fluid">
</figure>
<figure class="blog_posts_right_shape right_shape mb-0">
    <img src="https://omansh.org/images/blog_posts_right_shape.png" alt="right-shape" class="img-fluid">
</figure>
@endsection