<x-layouts.layout>

    <!-- start page title -->
    <section class="half-section top-space-margin cover-background" style="background-image: url('{{asset('images/background-jewelo.jpg')}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-very-small-screen" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div class="mt-auto">
                            <h1 class="fw-500 text-light-gray alt-font mb-0 ls-minus-2px">Shop collection</h1>
                        </div>
                        <div class="fs-16 fw-500 alt-font text-dark-gray justify-content-center breadcrumb breadcrumb-style-01 mt-auto">
                            <ul>
                                <li><a href="demo-jewellery-store.html" class="text-dark-gray text-medium-gray-hover">Home</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end page title -->
    <!-- start section -->
    <section class="ps-6 pe-6 lg-ps-3 lg-pe-3 sm-ps-0 sm-pe-0">
        <div class="container-fluid">
            <div class="row flex-row-reverse">
                <div class="col-xxl-10 col-lg-9 ps-5 md-ps-15px md-mb-60px">
                    <div class="toolbar-wrapper border-bottom border-color-extra-medium-gray d-flex flex-column flex-md-row align-items-center w-100 mb-40px md-mb-30px pb-15px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":50, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <div class="sm-mb-10px">
                            <a href="#" class="me-10px"><img src="images/shop-two-column.svg" class="opacity-5" alt="" /></a>
                            <a href="#" class="me-10px"><img src="images/shop-three-column.svg" class="opacity-5" alt="" /></a>
                            <a href="#" class="me-10px"><img src="images/shop-four-column.svg" class="opacity-5" alt="" /></a>
                            <a href="#"><img src="images/shop-list.svg" class="opacity-5" alt="" /></a>
                        </div>
                        <div class="ms-20px sm-ms-0">
                            Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of {{ $products->total() }} results
                        </div>
                        <div class="mx-auto me-md-0">
                            <select class="fs-18 form-select border-0 background-position-right" aria-label="Default sorting">
                                <option selected>Default sorting</option>
                                <option value="1">Sort by popularity</option>
                                <option value="2">Sort by average rating</option>
                                <option value="3">Sort by latest</option>
                                <option value="4">Sort by price: low to high</option>
                                <option value="5">Sort by price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <ul class="shop-modern shop-wrapper grid-loading grid grid-4col xxl-grid-4col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large text-center" data-anime='{ "el": "childs", "translateY": [15, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <li class="grid-sizer"></li>
                        @foreach($products as $product)
                        <!-- start shop item -->
                        <li class="grid-item">
                            <div class="shop-box mb-10px">
                                <div class="shop-image mb-6">
                                    <a href="demo-jewellery-store-single-product.html">
                                        <img src="{{ asset('images/products/'.$product->image) }}" alt="" style="width: 400px; height: 465px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;">
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
                                    <a href="demo-jewellery-store-single-product.html" class="text-dark-gray fs-19 fw-500">{{$product->name}}</a>
                                    <div class="price">{{$product->price}}</div>
                                </div>
                            </div>
                        </li>
                        <!-- end shop item -->
                        @endforeach
                    </ul>
                    <div class="w-100 d-flex mt-4 justify-content-center" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                        <ul class="pagination pagination-style-01 fs-14 fw-500 mb-0">
                            {{-- Previous Page Link --}}
                            <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                                <a class="page-link" href="{{ $products->previousPageUrl() }}">
                                    <i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i>
                                </a>
                            </li>

                            {{-- Page Number Links --}}
                            @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                            <li class="page-item {{ $products->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                            @endforeach

                            {{-- Next Page Link --}}
                            <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                                <a class="page-link" href="{{ $products->nextPageUrl() }}">
                                    <i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <div class="col-xxl-2 col-lg-3 shop-sidebar">
                    <div class="mb-30px">
                        <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Categories</span>
                        <ul class="shop-filter category-filter fs-17">
                            @foreach ($categories as $categorie)
                            <li><a href="#"><span class="product-cb product-category-cb"></span>{{$categorie->name}}</a><span class="item-qty">{{$categorie->products->count()}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-30px">
                        <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Color</span>
                        <ul class="shop-filter color-filter fs-17">
                            @foreach ($colors as $color)
                            <li><a href="#"><span class="product-cb product-color-cb" style="background-color: {{ $color->hex }};"></span>{{$color->name}}</a><span class="item-qty">{{$color->products->count()}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="mb-30px">
                        <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Price</span>
                        <ul class="shop-filter price-filter fs-17">
                            <li><a href="#"><span class="product-cb product-category-cb"></span>Under $25</a><span class="item-qty">08</span></li>
                            <li><a href="#"><span class="product-cb product-category-cb"></span>$25 to $50</a><span class="item-qty">05</span></li>
                            <li><a href="#"><span class="product-cb product-category-cb"></span>$50 to $100</a><span class="item-qty">25</span></li>
                            <li><a href="#"><span class="product-cb product-category-cb"></span>$100 to $200</a><span class="item-qty">18</span></li>
                            <li><a href="#"><span class="product-cb product-category-cb"></span>$200 & Above</a><span class="item-qty">36</span></li>
                        </ul>
                    </div>
                    <div class="mb-30px">
                        <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Metal and stone</span>
                        <ul class="shop-filter fabric-filter fs-17">
                            <li><a href="#"><span class="product-cb product-fabric-cb"><img src="images/demo-jewellery-store-product-listing-metal-02.jpg" alt="" /></span>Rose gold</a><span class="item-qty">08</span></li>
                            <li><a href="#"><span class="product-cb product-fabric-cb"><img src="images/demo-jewellery-store-product-listing-metal-03.jpg" alt="" /></span>Platinum</a><span class="item-qty">08</span></li>
                            <li><a href="#"><span class="product-cb product-fabric-cb"><img src="images/demo-jewellery-store-product-listing-metal-01.jpg" alt="" /></span>Yellow gold</a><span class="item-qty">20</span></li>
                            <li><a href="#"><span class="product-cb product-fabric-cb"><img src="images/demo-jewellery-store-product-listing-metal-03.jpg" alt="" /></span>Silver</a><span class="item-qty">07</span></li>
                        </ul>
                    </div>
                    <div class="mb-30px">
                        <div class="d-flex align-items-center mb-20px">
                            <span class="alt-font fw-500 fs-19 text-dark-gray">New arrivals</span>
                            <div class="d-flex ms-auto">
                                <!-- start slider navigation -->
                                <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-08 me-5px"><i class="fa-solid fa-arrow-left text-dark-gray"></i></div>
                                <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-08 ms-5px"><i class="fa-solid fa-arrow-right text-dark-gray"></i></div>
                                <!-- end slider navigation -->
                            </div>
                        </div>
                        <div class="swiper slider-one-slide" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                            <div class="swiper-wrapper">
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="shop-filter new-arribals">
                                        <div class="d-flex align-items-center mb-20px">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Diamond ring</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$30.00</del>$23.00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-20px">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Geometric ring</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$50.00</del>$43.00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Suserrer earring</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$20.00</del>$15.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                                <!-- start text slider item -->
                                <div class="swiper-slide">
                                    <div class="shop-filter new-arribals">
                                        <div class="d-flex align-items-center mb-20px">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Twister bangle</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$15.00</del>$10.00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-20px">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Zebra earrings</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$35.00</del>$30.00</div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <figure class="mb-0">
                                                <a href="demo-jewellery-store-single-product.html">
                                                    <img class="border-radius-4px w-80px" src="https://placehold.co/600x765" alt="">
                                                </a>
                                            </figure>
                                            <div class="col ps-25px">
                                                <a href="demo-jewellery-store-single-product.html" class="text-dark-gray alt-font fw-500">Silver earrings</a>
                                                <div class="fs-15 lh-normal"><del class="me-5px">$20.00</del>$15.00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end text slider item -->
                            </div>
                            <!-- start slider navigation -->
                        </div>
                    </div>
                    <div>
                        <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Tags</span>
                        <div class="shop-filter tag-cloud">
                            <a href="#">earrings</a>
                            <a href="#">bracelets</a>
                            <a href="#">necklace</a>
                            <a href="#">chains</a>
                            <a href="#">ring</a>
                            <a href="#">kundan</a>
                            <a href="#">casual</a>
                            <a href="#">meenakari</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <x-layouts.insta />

</x-layouts.layout>
