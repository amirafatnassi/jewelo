﻿<x-layouts.layout>

    <!-- start page title -->
    <section class="half-section top-space-margin cover-background" style="background-image: url('{{asset('images/background-jewelo.jpg')}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-very-small-screen" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div class="mt-auto">
                            <h1 class="fw-500 text-light-gray alt-font mb-0 ls-minus-2px">Categories</h1>
                        </div>
                        <div class="fs-16 fw-500 alt-font text-light-gray justify-content-center breadcrumb breadcrumb-style-01 mt-auto">
                            <ul>
                                <li><a href="{{url('products/index')}}" class="text-light-gray text-medium-gray-hover">Home</a></li>
                                <li>Categories</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="portfolio-wrapper shop-category-02 grid-loading shop-grid grid grid-3col xxl-grid-3col md-grid-2col sm-grid-1col xs-grid-1col gutter-extra-large text-center" data-anime='{"el": "childs", "translateY": [0, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @foreach ($categories as $category )
                        <!-- start categories item -->
                        <li class="grid-item">
                            <div class="category-box bg-dark-gray">
                                <div class="category-image">
                                    <img src="{{asset('images/categories/'.$category->image)}}" style="width:600px; height:477px; object-fit:cover;" alt="">
                                </div>
                                <div class="category-title absolute-middle-left">
                                    <h3 class="text-white alt-font fw-600 mb-0 text-shadow-large">{{$category->name}}</h3>
                                </div>
                                <div class="category-hover-content d-flex flex-column align-items-center justify-content-center bg-base-color p-40px lg-p-25px">
                                    <h3 class="title text-dark-gray alt-font fw-600 position-relative z-index-1 ls-minus-1px">{{$category->name}}<span class="absolute-middle-center text-light-orange z-index-minus-1 fs-150 opacity-6">{{ Str::substr($category->name, 0, 1) }}</span></h3>
                                    <a class="fs-14 fw-500 text-dark-gray text-uppercase position-absolute z-index-1 bottom-25px ls-05px" href="{{url('products/category/'.$category->id)}}">View collection</a>
                                </div>
                            </div>
                        </li>
                        <!-- end categories item -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <x-layouts.insta />
</x-layouts.layout>
