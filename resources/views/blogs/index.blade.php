<x-layouts.layout>

    <!-- start page title -->
    <section class="half-section top-space-margin cover-background" style="background-image: url('{{asset('images/background-jewelo.jpg')}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-very-small-screen">
                        <div class="mt-auto">
                            <h1 class="fw-500 text-light-gray alt-font mb-0 ls-minus-2px">Latest blog</h1>
                        </div>
                        <div class="fs-16 fw-500 alt-font text-light-gray justify-content-center breadcrumb breadcrumb-style-01 mt-auto">
                            <ul>
                                <li><a href="demo-jewellery-store.html" class="text-light-gray text-medium-gray-hover">Home</a></li>
                                <li>Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="blog-modern blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-2col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @foreach ($blogs as $blog)
                        <!-- start blog item -->
                        <li class="grid-item mb-50px md-mb-20px">
                            <div class="box-hover text-center">
                                <figure class="mb-0 position-relative">
                                    <div class="blog-image position-relative overflow-hidden">
                                        <a href="{{url('blogs/show',$blog->id)}}"><img src="{{asset('images/blog/'.$blog->image)}}" alt="" style="height: 315px; object-fit: cover;"/></a>
                                    </div>
                                    <figcaption class="post-content-wrapper">
                                        <div class="position-relative bg-dark-gray post-content p-25px z-index-2 lh-initial">
                                            <div class="hover-text">
                                                <a href="{{url('blogs/show'.$blog->id)}}" class="text-base-color text-base-color-hover fs-14 text-uppercase fw-500 mb-10px d-inline-block">{{$blog->category}}</a>
                                            </div>
                                            <a href="{{url('blogs/show',$blog->id)}}" class="fs-20 alt-font text-white card-title d-inline-block mb-0">{{ Str::limit($blog->excerpt, 120) }}</a>
                                            <div class="box-overlay bg-dark-gray z-index-minus-1"></div>
                                        </div>
                                        <div class="fs-17 alt-font lh-initial bg-base-color text-dark-gray p-15px"><span class="d-inline-block">By <a href="{{url('blogs/show'.$blog->id)}}" class="text-dark-gray">{{$blog->author->name}}</a></span><span class="separator d-inline-block fs-14">|</span><a href="#" class="text-dark-gray">{{ $blog->published_at->format('d M Y') }}</a></div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <!-- end blog item -->
                        @endforeach
                    </ul>
                    <div class="row">
                        <div class="col-12 mt-5 d-flex justify-content-center">
                            <!-- start pagination -->
                            <ul class="pagination pagination-style-01 fs-13 mb-0" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                                <li class="page-item"><a class="page-link" href="#">01</a></li>
                                <li class="page-item active"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                                <li class="page-item"><a class="page-link" href="#">04</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                            </ul>
                            <!-- end pagination -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <x-layouts.insta />
</x-layouts.layout>
