﻿<x-layouts.layout>

    <!-- start page title -->
    <section class="half-section top-space-margin cover-background" style="background-image: url('{{asset('images/background-jewelo.jpg')}}')">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-8 text-center position-relative page-title-extra-large">
                    <div class="d-flex flex-column extra-very-small-screen" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                        <div class="mt-auto">
                            <h1 class="fw-500 text-light-gray alt-font mb-0 ls-minus-2px">About us</h1>
                        </div>
                        <div class="fs-16 fw-500 alt-font text-light-gray justify-content-center breadcrumb breadcrumb-style-01 mt-auto">
                            <ul>
                                <li><a href="demo-jewellery-store.html" class="text-light-gray text-medium-gray-hover">Home</a></li>
                                <li>About us</li>
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
            <div class="row mb-6 lg-mb-15 md-mb-25 sm-mb-25px justify-content-end">
                <div class="col-md-6" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <h4 class="alt-font ls-minus-1px fw-500 text-dark-gray mb-20px">The great thing about costume jewellery there's something.</h4>
                    <p class="w-80 lg-w-90 md-w-100">Lorem ipsum is simply dummy text of the printing and typesetting industry. Lorem ipsum has been the industry's standard dummy text ever since the when an unknown printer took standard.</p>
                </div>
                <div class="col-md-6">
                    <div class="overflow-hidden position-relative">
                        <div class="w-100" data-anime='{ "effect": "slide", "direction": "tb", "color": "#f8dcce", "duration": 1000, "delay": 0 }'>
                            <img src="{{asset('images/insta1.jpg')}}" alt="" class="w-100 border-radius-6px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row overlap-section align-items-end">
                <div class="col-lg-9 col-md-8 position-relative sm-mb-25px">
                    <div class="overflow-hidden position-relative">
                        <div class="w-100" data-anime='{ "effect": "slide", "direction": "tb", "color": "#f8dcce", "duration": 1000, "delay": 0 }'>
                            <video autoplay muted loop playsinline style="width: 100%; height: auto;">
                                <source src="{{ asset('videos/ring.mp4') }}" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center text-md-end pb-60px pe-30px sm-pe-15px sm-pb-0" data-anime='{ "scale": [0.7, 1], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <span class="fs-20 fw-500 ls-minus-05px text-dark-gray d-block">Crafting quality since</span>
                    <span class="fs-80 fw-600 lh-75 alt-font ls-minus-4px text-dark-gray">2007</span>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="bg-gradient-very-light-gray">
        <div class="container">
            <div class="row justify-content-center mb-5 xs-mb-8">
                <div class="col-xl-5 col-lg-6 col-md-8 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [-15, 0], "opacity": [0,1], "duration": 500, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <h3 class="fw-500 ls-minus-1px text-dark-gray mb-10px">Why choose us?</h3>
                    <p class="w-90 xs-w-100 mx-auto">Discover timeless elegance with our expertly handcrafted jewelry, made from the finest materials. Trusted for quality, authenticity, and exceptional service. Shop with confidence—where beauty meets lasting value.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center mb-5 md-mb-8" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 500, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div class="feature-box bg-white text-center border-radius-6px p-16 md-p-13 box-shadow-extra-large box-shadow-extra-large-hover">
                        <div class="feature-box-icon">
                            <i class="ti-truck icon-large text-dark-gray mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-20 fw-500 alt-font d-inline-block text-dark-gray mb-5px">Free shipping</span>
                            <p>Lorem ipsum is simply dummy text printing.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all md-mb-30px">
                    <div class="feature-box bg-white text-center border-radius-6px p-16 md-p-13 box-shadow-extra-large box-shadow-extra-large-hover">
                        <div class="feature-box-icon">
                            <i class="ti-headphone icon-large text-dark-gray mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-20 fw-500 alt-font d-inline-block text-dark-gray mb-5px">Online support</span>
                            <p>Lorem ipsum is simply dummy text printing.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all xs-mb-30px">
                    <div class="feature-box bg-white text-center border-radius-6px p-16 md-p-13 box-shadow-extra-large box-shadow-extra-large-hover">
                        <div class="feature-box-icon">
                            <i class="ti-reload icon-large text-dark-gray mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-20 fw-500 alt-font d-inline-block text-dark-gray mb-5px">30 Days return</span>
                            <p>Lorem ipsum is simply dummy text printing.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
                <!-- start features box item -->
                <div class="col icon-with-text-style-04 transition-inner-all">
                    <div class="feature-box bg-white text-center border-radius-6px p-16 md-p-13 box-shadow-extra-large box-shadow-extra-large-hover">
                        <div class="feature-box-icon">
                            <i class="ti-credit-card icon-large text-dark-gray mb-20px"></i>
                        </div>
                        <div class="feature-box-content last-paragraph-no-margin">
                            <span class="fs-20 fw-500 alt-font d-inline-block text-dark-gray mb-5px">Secure payment</span>
                            <p>Lorem ipsum is simply dummy text printing.</p>
                        </div>
                        <div class="feature-box-overlay bg-white"></div>
                    </div>
                </div>
                <!-- end features box item -->
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center last-paragraph-no-margin" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="fs-12 fw-500 lh-32 alt-font text-white text-uppercase bg-dark-gray d-inline-block border-radius-30px ps-20px pe-20px me-10px sm-m-5px align-middle">trust</div>
                    <div class="fs-24 fw-500 ls-minus-05px alt-font text-dark-gray d-inline-block align-middle">Genuine <span class="text-decoration-line-bottom">10000+ customer</span> trusting our products.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="py-0">
        <div class="container">
            <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 500, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-md-6 sm-mb-30px text-end">
                    <img src="{{asset('images/insta2.jpg')}}" class="border-radius-6px" alt="">
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 text-center text-md-start">
                    <div class="swiper slider-one-slide text-slider-style-01 magic-cursor" data-slider-options='{ "slidesPerView": 1, "loop": true, "pagination": { "el": ".slider-one-slide-pagination", "clickable": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
                        <div class="swiper-wrapper mb-10px">
                            <!-- start text slider item -->
                            <div class="swiper-slide last-paragraph-no-margin">
                                <div class="alt-font text-dark-gray mb-5px fs-20">World class designers</div>
                                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">Exclusive design</h3>
                                <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim veniam. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <div class="alt-font text-dark-gray mb-5px fs-20">100% secure method</div>
                                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">Secure payment</h3>
                                <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim veniam. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                            </div>
                            <!-- end text slider item -->
                            <!-- start text slider item -->
                            <div class="swiper-slide">
                                <div class="alt-font text-dark-gray mb-5px fs-20">24/7 support center</div>
                                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-15px">Online support</h3>
                                <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet consectetur adipiscing elit do eiusmod tempor incididunt ut labore et dolore magna ut enim veniam. Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
                            </div>
                            <!-- end text slider item -->
                        </div>
                        <div class="d-flex justify-content-center justify-content-md-start">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white"><i class="fa-solid fa-arrow-left icon-small text-dark-gray"></i></div>
                            <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-1 border-color-extra-medium-gray bg-white"><i class="fa-solid fa-arrow-right icon-small text-dark-gray"></i></div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container">
            <div class="row justify-content-center mb-5 xs-mb-8">
                <div class="col-xl-5 col-lg-6 col-md-8 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 300, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <h3 class="fw-500 ls-minus-1px text-dark-gray mb-10px">Our amazing team</h3>
                    <p class="w-90 xs-w-100 mx-auto">Lorem ipsum dolor amet consectetur adipiscing dictum placerat diam in vestibulum vivamus in eros.</p>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateY": [-15, 0], "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 500, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-35px">
                    <div class="position-relative mb-25px last-paragraph-no-margin">
                        <img src="{{asset('images/team/avatar1.jpg')}}" class="border-radius-6px" alt="" style="width: 300px; height: 265px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;"/>
                        <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-gray-light-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="http://www.dribbble.com/" target="_blank" class="text-white"><i class="fa-brands fa-dribbble"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.instagram.com" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fs-19 alt-font fw-500 text-dark-gray">Jeremy dupont</div>
                    <span class="lh-26 d-block alt-font">Founder & Creative Director</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 md-mb-35px">
                    <div class="position-relative mb-25px last-paragraph-no-margin">
                        <img src="{{asset('images/team/avatar2.jpg')}}" class="border-radius-6px" alt="" style="width: 300px; height: 265px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;"/>
                        <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-gray-light-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="http://www.dribbble.com/" target="_blank" class="text-white"><i class="fa-brands fa-dribbble"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.instagram.com" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fs-19 alt-font fw-500 text-dark-gray">Lina dover</div>
                    <span class="lh-26 d-block alt-font">Master Jeweler</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05 xs-mb-35px">
                    <div class="position-relative mb-25px last-paragraph-no-margin">
                        <img src="{{asset('images/team/avatar3.jpg')}}" class="border-radius-6px" alt="" style="width: 300px; height: 265px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;" />
                        <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-gray-light-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="http://www.dribbble.com/" target="_blank" class="text-white"><i class="fa-brands fa-dribbble"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.instagram.com" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fs-19 alt-font fw-500 text-dark-gray">Amir taylor</div>
                    <span class="lh-26 d-block alt-font">Gemstone Specialist</span>
                </div>
                <!-- end team member item -->
                <!-- start team member item -->
                <div class="col text-center team-style-05">
                    <div class="position-relative mb-25px last-paragraph-no-margin">
                        <img src="{{asset('images/team/avatar4.jpg')}}" class="border-radius-6px" alt="" style="width: 300px; height: 265px; object-fit: cover; border-radius: 8px; display: block; margin: 0 auto;"/>
                        <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center p-40px lg-p-20px team-content bg-gradient-gray-light-dark-transparent">
                            <div class="social-icon fs-19">
                                <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="http://www.dribbble.com/" target="_blank" class="text-white"><i class="fa-brands fa-dribbble"></i></a>
                                <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                                <a href="http://www.instagram.com" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="fs-19 alt-font fw-500 text-dark-gray">Nora parker</div>
                    <span class="lh-26 d-block alt-font">Customer Experience Manager</span>
                </div>
                <!-- end team member item -->
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- start section -->
    <section>
        <div class="container">
            <div class="row position-relative clients-style-08">
                <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 4000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-pingdom-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-paypal-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-walmart-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-amazon-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-logitech-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-pingdom-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-paypal-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="#"><img src="images/logo-walmart-dark-gray.svg" class="h-40px xs-h-30px" alt="" /></a>
                        </div>
                        <!-- end client item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <x-layouts.insta />

</x-layouts.layout>
