<x-layouts.layout>

    <!-- start section -->
    <section class="top-space-margin border-top border-color-extra-medium-gray pt-20px pb-20px ps-35px pe-35px lg-ps-25px lg-pe-25px md-ps-15px md-pe-15px sm-ps-0 sm-pe-0">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 breadcrumb breadcrumb-style-01 fs-15 alt-font">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('products')}}">Shop</a></li>
                        <li>{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pt-60px md-pt-30px pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 pe-50px md-pe-15px md-mb-40px">
                    <div class="row overflow-hidden position-relative">
                        <div class="col-12 col-lg-10 position-relative order-lg-2 product-image ps-30px md-ps-15px">
                            <div class="swiper product-image-slider" data-slider-options='{ "spaceBetween": 10, "loop": true, "autoplay": { "delay": 2000, "disableOnInteraction": false }, "watchOverflow": true, "navigation": { "nextEl": ".slider-product-next", "prevEl": ".slider-product-prev" }, "thumbs": { "swiper": { "el": ".product-image-thumb", "slidesPerView": "auto", "spaceBetween": 15, "direction": "vertical", "navigation": { "nextEl": ".swiper-thumb-next", "prevEl": ".swiper-thumb-prev" } } } }' data-thumb-slider-md-direction="horizontal">
                                <div class="swiper-wrapper">
                                    <!-- start slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- end slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                    <!-- end slider item -->
                                    <div class="swiper-slide gallery-box">
                                        <a href="https://placehold.co/600x765" data-group="lightbox-gallery" title="Diamond gold bangle">
                                            <img class="w-100" src="https://placehold.co/600x765" alt="">
                                        </a>
                                    </div>
                                    <!-- end slider item -->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 product-info">
                    <span class="fw-500 text-dark-gray d-block">{{$product->category->name}}</span>
                    <h5 class="alt-font text-dark-gray fw-600 mb-10px">{{$product->name}}</h5>
                    <div class="d-block d-sm-flex align-items-center mb-20px">
                        <div class="me-10px xs-me-0">
                            <a href="#tab" class="section-link ls-minus-1px icon-small">
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                                <i class="bi bi-star-fill text-golden-yellow"></i>
                            </a>
                        </div>
                        <a href="#tab" class="me-25px text-dark-gray fw-500 section-link xs-me-0">165 Reviews</a>
                        <div><span class="text-dark-gray fw-500">ID: </span>{{$product->id}}</div>
                    </div>
                    <div class="product-price mb-10px">
                        <span class="text-dark-gray fs-28 xs-fs-24 fw-600 ls-minus-1px"><del class="text-medium-gray me-10px fw-400">${{$product->old_price}}</del>${{$product->price}}</span>
                    </div>
                    <p>{{$product->description}}</p>
                    <div class="d-flex align-items-center mb-20px">
                        <label class="text-dark-gray alt-font me-15px fw-500">Color</label>
                        <ul class="shop-color mb-0">
                            <li>
                                <input class="d-none" type="radio" id="color-1" name="color" checked="">
                                <label for="color-1"><span style="background-color: {{$product->color->hex}}"></span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center mb-35px">
                        <label class="text-dark-gray me-15px fw-500">Size</label>
                        <ul class="shop-size mb-0">
                            <li>
                                <input class="d-none" type="radio" id="size-1" name="size" checked="">
                                <label for="size-1"><span>6</span></label>
                            </li>
                            <li>
                                <input class="d-none" type="radio" id="size-2" name="size" checked="">
                                <label for="size-2"><span>7</span></label>
                            </li>
                            <li>
                                <input class="d-none" type="radio" id="size-3" name="size" checked="">
                                <label for="size-3"><span>8</span></label>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center flex-column flex-sm-row mb-20px position-relative">
                        <div class="quantity me-15px xs-mb-15px order-1">
                            <button type="button" class="qty-minus">-</button>
                            <input class="qty-text" type="text" id="1" value="1" />
                            <button type="button" class="qty-plus">+</button>
                        </div>
                        <a href="demo-jewellery-store-cart.html" class="btn btn-cart btn-extra-large btn-switch-text btn-box-shadow btn-none-transform btn-dark-gray left-icon border-radius-5px me-15px xs-me-0 order-3 order-sm-2">
                            <span>
                                <span><i class="feather icon-feather-shopping-bag"></i></span>
                                <span class="btn-double-text ls-0px flex-shrink-0" data-text="Add to cart">Add to cart</span>
                            </span>
                        </a>
                        <a href="#" class="wishlist d-flex align-items-center justify-content-center border border-radius-5px border-color-extra-medium-gray order-2 order-sm-3">
                            <i class="feather icon-feather-heart icon-small text-dark-gray"></i>
                        </a>
                    </div>
                    <div class="row mb-20px">
                        <div class="col-auto icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="feather icon-feather-repeat align-middle text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <a href="#" class="alt-font fw-500 text-dark-gray d-block">Compare</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="feather icon-feather-mail align-middle text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <a href="#" class="alt-font fw-500 text-dark-gray d-block">Ask a question</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="feather icon-feather-share-2 align-middle text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <a href="#" class="alt-font fw-500 text-dark-gray d-block">Share</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-20px h-1px w-100 bg-extra-medium-gray d-block"></div>
                    <div class="row mb-15px">
                        <div class="col-12 icon-with-text-style-08">
                            <div class="feature-box feature-box-left-icon d-inline-flex align-middle">
                                <div class="feature-box-icon me-10px">
                                    <i class="feather icon-feather-truck top-8px position-relative align-middle text-dark-gray"></i>
                                </div>
                                <div class="feature-box-content">
                                    <span><span class="alt-font text-dark-gray fw-500">Estimated delivery:</span> 1-7 days</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="w-100 d-block"><span class="text-dark-gray alt-font fw-500">Category:</span> <a href="#">{{$product->category->name}}</a></div>
                        <div><span class="text-dark-gray alt-font fw-500">Metal: </span><a href="#">{{$product->metal->name}}</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start section -->
    <section>
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-xl-5 col-lg-6 col-md-8 text-center last-paragraph-no-margin">
                    <h3 class="fw-500 ls-minus-1px text-dark-gray mb-10px">You may also like</h3>
                    <p>Lorem ipsum dolor amet consectetur adipiscing dictum placerat diam in vestibulum vivamus in eros.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="shop-modern shop-wrapper grid grid-4col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center">
                        <li class="grid-sizer"></li>
                        @foreach($relatedProducts as $p)
                        <!-- start shop item -->
                        <li class="grid-item">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-25px">
                                    <a href="demo-jewellery-store-single-product.html">
                                        <img src="https://placehold.co/600x765" alt="">
                                        <span class="lable new">New</span>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a href="demo-jewellery-store-single-product.html" class="alt-font btn btn-small btn-box-shadow btn-dark-gray btn-round-edge left-icon add-to-cart">
                                            <i class="feather icon-feather-shopping-bag"></i><span class="quick-view-text button-text">Add to cart</span>
                                        </a>
                                    </div>
                                    <div class="shop-hover d-flex justify-content-center">
                                        <ul>
                                            <li>
                                                <a href="#" class="bg-white w-40px h-40px text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px box-shadow-large" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="feather icon-feather-heart fs-16"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" class="bg-white w-40px h-40px text-dark-gray d-flex align-items-center justify-content-center rounded-circle ms-5px me-5px box-shadow-large" data-bs-toggle="tooltip" data-bs-placement="left" title="Quick shop"><i class="feather icon-feather-eye fs-16"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="shop-footer text-center">
                                    <a href="demo-jewellery-store-single-product.html" class="text-dark-gray fs-19 fw-500">{{$p->name}}</a>
                                    <div class="price"><del>${{$p->old_price}}</del>{{$p->price}}</div>
                                </div>
                            </div>
                        </li>
                        <!-- end shop item -->
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <x-layouts.insta />

</x-layouts.layout>
