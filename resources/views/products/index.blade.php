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
                        <div class="fs-16 fw-500 alt-font text-light-gray justify-content-center breadcrumb breadcrumb-style-01 mt-auto">
                            <ul>
                                <li><a href="demo-jewellery-store.html" class="text-light-gray text-medium-gray-hover">Home</a></li>
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
                                    <a href="{{url('products',$product->id)}}">
                                        <img src="{{ asset('images/products/'.$product->image) }}" alt="" style="width: 400px; height: 465px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;">
                                        <span class="lable new mr-1">{{$product->category->name}}</span>
                                        <span class="lable new mr-1">{{$product->metal->name}}</span>
                                        <span class="lable new mr-1">{{$product->color->name}}</span>
                                    </a>
                                    <div class="shop-buttons-wrap">
                                        <a href="{{url('products',$product->id)}}" class="alt-font btn btn-small btn-box-shadow btn-dark-gray btn-round-edge left-icon add-to-cart">
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
                                    <a href="{{url('products',$product->id)}}" class="text-dark-gray fs-19 fw-500">{{$product->name}}</a>
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
                <x-layouts.sidebar />

            </div>
        </div>
    </section>
    <!-- end section -->
    <x-layouts.insta />

</x-layouts.layout>
