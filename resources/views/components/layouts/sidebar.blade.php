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
             <li>
                 <a href="{{ route('products.index', array_merge(request()->query(), ['color_id' => $color->id])) }}">
                     <span
                         class="color-circle"
                         style="background-color: {{ $color->hex }}; display:inline-block; width:20px; height:20px; border-radius:50%; margin-right:8px;">
                     </span>
                     {{ $color->name }}
                 </a>
                 <span class="item-qty">{{ $colorCounts[$color->id] ?? 0 }}</span>
             </li>
             @endforeach
         </ul>
     </div>
     <div class="mb-30px">
         <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Price</span>
         <ul class="shop-filter price-filter fs-17">
             <li><a href="{{ route('products.index', ['price_min' => 0, 'price_max' => 25]) }}">
                     <span class="product-cb product-category-cb"></span>Under $25
                 </a><span class="item-qty">{{ $counts['under_25'] ?? 0 }}</span></li>

             <li><a href="{{ route('products.index', ['price_min' => 25, 'price_max' => 50]) }}">
                     <span class="product-cb product-category-cb"></span>$25 to $50
                 </a><span class="item-qty">{{ $counts['25_to_50'] ?? 0 }}</span></li>

             <li><a href="{{ route('products.index', ['price_min' => 50, 'price_max' => 100]) }}">
                     <span class="product-cb product-category-cb"></span>$50 to $100
                 </a><span class="item-qty">{{ $counts['50_to_100'] ?? 0 }}</span></li>

             <li><a href="{{ route('products.index', ['price_min' => 100, 'price_max' => 200]) }}">
                     <span class="product-cb product-category-cb"></span>$100 to $200
                 </a><span class="item-qty">{{ $counts['100_to_200'] ?? 0 }}</span></li>

             <li><a href="{{ route('products.index', ['price_min' => 200]) }}">
                     <span class="product-cb product-category-cb"></span>$200 & Above
                 </a><span class="item-qty">{{ $counts['above_200'] ?? 0 }}</span></li>
         </ul>

     </div>
     <div class="mb-30px">
         <span class="alt-font fw-500 fs-19 text-dark-gray d-block mb-10px">Metal and stone</span>
         <ul class="shop-filter fabric-filter fs-17">
             @foreach ( $metals as $metal )
             <li>
                 <a href="{{ route('products.index', array_merge(request()->except('page'), ['metal_id' => $metal->id])) }}">
                     <span class="product-cb product-fabric-cb">
                         <img src="{{ asset('images/demo-jewellery-store-product-listing-metal-03.jpg') }}" alt="{{ $metal->name }}" />
                     </span>
                     {{ $metal->name }}
                 </a>
                 <span class="item-qty">{{ $metalCounts[$metal->id] ?? 0 }}</span>
             </li>
             @endforeach
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
                     <div class="shop-filter new-arrivals">
                         @foreach ($newProducts as $product)
                         <div class="d-flex align-items-center mb-20px">
                             <figure class="mb-0">
                                 <a href="{{url('products',$product->id)}}">
                                     <img class="border-radius-4px w-80px"  src="{{ asset('images/products/'.$product->image) }}" alt="">
                                 </a>
                             </figure>
                             <div class="col ps-25px">
                                 <a href="{{url('products',$product->id)}}" class="text-dark-gray alt-font fw-500">{{$product->name}}</a>
                                 <div class="fs-15 lh-normal"><del class="me-5px">${{$product->old_price}}</del>${{$product->price}}</div>
                             </div>
                         </div>
                         @endforeach
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
         </div>
     </div>
 </div>
