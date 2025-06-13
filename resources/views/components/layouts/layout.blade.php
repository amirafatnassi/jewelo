<!doctype html>
<html class="no-js" lang="en">

<head>
    <title>Crafto - The Multipurpose HTML5 Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="ThemeZaa">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- google fonts preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- bubblemorph add-on files -->
    <link rel='stylesheet' href="{{asset('revolution/revolution-addons/bubblemorph/css/revolution.addon.bubblemorph.css')}}" type='text/css' media='all' />
    <!-- slider revolution CSS files -->
    <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/layers.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/navigation.css')}}">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" href="{{ asset('css/vendors.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/icon.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css')}}" />
    <link rel="stylesheet" href="{{ asset('demos/jewellery-store/jewellery-store.css')}}" />

</head>

<body data-mobile-nav-style="classic">
    <!-- start header -->
    <header class="header-with-topbar">
        <!-- start header top bar -->
        <div class="header-top-bar top-bar-light bg-dark-gray disable-fixed md-border-bottom border-color-transparent-dark-very-light">
            <div class="container-fluid">
                <div class="row h-40px align-items-center m-0">
                    <div class="col-12 justify-content-center alt-font">
                        <div class="fs-13 text-white text-uppercase">Free shipping on all orders $50, don't miss discount.</div>
                        <a href="#" class="fs-13 fw-500 text-base-color text-base-color-hover text-uppercase ms-5px"><i class="feather icon-feather-bookmark icon-small align-middle"></i> <span class="text-decoration-line-bottom">Get offers</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header top bar -->
        <!-- start navigation -->
        <nav class="navbar navbar-expand-lg header-light bg-white disable-fixed">
            <div class="container-fluid">
                <div class="col-auto col-lg-5 menu-order position-static">
                    <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                        <span class="navbar-toggler-line"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav alt-font">
                            <li class="nav-item"><a href="demo-jewellery-store.html" class="nav-link">Home</a></li>
                            <li class="nav-item dropdown submenu">
                                <a href="{{url('shop')}}" class="nav-link">Shop</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink1" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink1">
                                    <div class="d-lg-flex mega-menu m-auto flex-column">
                                        <div class="row row-cols-1 row-cols-lg-5 mb-50px md-mb-20px">
                                            <div class="col md-mb-5px">
                                                <ul>
                                                    <li class="sub-title">Rings</li>
                                                    <li><a href="#">Engagement</a></li>
                                                    <li><a href="#">Gold rings</a></li>
                                                    <li><a href="#">Casual rings</a></li>
                                                    <li><a href="#">Silver rings</a></li>
                                                    <li><a href="#">Platinum rings</a></li>
                                                    <li><a href="#">Diamond rings</a></li>
                                                </ul>
                                            </div>
                                            <div class="col md-mb-5px">
                                                <ul>
                                                    <li class="sub-title">Earrings</li>
                                                    <li><a href="#">Jhumkas</a></li>
                                                    <li><a href="#">Barbells</a></li>
                                                    <li><a href="#">Hug hoops</a></li>
                                                    <li><a href="#">Tear drop</a></li>
                                                    <li><a href="#">Suidhaga</a></li>
                                                    <li><a href="#">Gemstone</a></li>
                                                </ul>
                                            </div>
                                            <div class="col md-mb-5px">
                                                <ul>
                                                    <li class="sub-title">Necklaces</li>
                                                    <li><a href="#">Bib necklece</a></li>
                                                    <li><a href="#">Collar necklece</a></li>
                                                    <li><a href="#">Rope necklece</a></li>
                                                    <li><a href="#">Locket necklece</a></li>
                                                    <li><a href="#">Chain necklece</a></li>
                                                    <li><a href="#">Opera nacklece</a></li>
                                                </ul>
                                            </div>
                                            <div class="col md-mb-5px">
                                                <ul>
                                                    <li class="sub-title">Pendants</li>
                                                    <li><a href="#">Alphabet</a></li>
                                                    <li><a href="#">Mangalsutra</a></li>
                                                    <li><a href="#">Religious</a></li>
                                                    <li><a href="#">Diamond</a></li>
                                                    <li><a href="#">Heart shaped</a></li>
                                                    <li><a href="#">Gemstone</a></li>
                                                </ul>
                                            </div>
                                            <div class="col">
                                                <ul>
                                                    <li class="sub-title">Breslet</li>
                                                    <li><a href="#">Caratlane chain</a></li>
                                                    <li><a href="#">Oval bracelets</a></li>
                                                    <li><a href="#">Pearl bracelets</a></li>
                                                    <li><a href="#">Charm bracelets</a></li>
                                                    <li><a href="#">Silver brcelets</a></li>
                                                    <li><a href="#">Tennis bracelets</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <a href="demo-jewellery-store-shop.html"><img src="https://placehold.co/580x160" class="border-radius-4px w-100" alt=""></a>
                                            </div>
                                            <div class="col">
                                                <a href="demo-jewellery-store-shop.html"><img src="https://placehold.co/580x160" class="border-radius-4px w-100" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown submenu">
                                <a href="{{url('categories')}}" class="nav-link">Categories</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <div class="dropdown-menu submenu-content" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="mega-menu m-auto">
                                        <div class="row md-m-0">
                                            <div class="col-12 col-lg-9">
                                                <div class="row row-cols-1 row-cols-lg-4 align-items-center justify-content-center">
                                                    <div class="col mb-20px md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Rings</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col mb-20px md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Bracelet</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col mb-20px md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Earrings</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col mb-20px md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Necklace</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Pendants</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Watches</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col md-mb-10px text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Necklace</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                    <div class="col text-start text-lg-center">
                                                        <a href="{{url('categories')}}" class="d-none d-lg-block">
                                                            <img src="https://placehold.co/190x140" class="border-radius-4px mb-5px" alt="">
                                                        </a>
                                                        <a href="{{url('categories')}}" class="btn btn-hover-animation fw-500 text-uppercase-inherit justify-content-center pt-0 pb-0 text-start text-lg-center">
                                                            <span>
                                                                <span class="btn-text text-dark-gray fs-17 flex-shrink-0">Chain</span>
                                                                <span class="btn-icon"><i class="fa-solid fa-arrow-right icon-very-small w-auto"></i></span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-4 d-none d-lg-flex">
                                                <div>
                                                    <a href="{{url('categories')}}"><img src="https://placehold.co/290x380" class="border-radius-4px" alt=""></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown simple-dropdown">
                                <a href="javascript:void(0);" class="nav-link">Pages</a>
                                <i class="fa-solid fa-angle-down dropdown-toggle" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                                    <li><a href="demo-jewellery-store-about.html">About</a></li>
                                    <li><a href="demo-jewellery-store-faq.html">Faq</a></li>
                                    <li><a href="demo-jewellery-store-wishlist.html">Wishlist</a></li>
                                    <li><a href="demo-jewellery-store-account.html">Account</a></li>
                                    <li><a href="demo-jewellery-store-cart.html">Cart</a></li>
                                    <li><a href="demo-jewellery-store-checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a href="{{url('blogs')}}" class="nav-link">Blog</a></li>
                            <li class="nav-item"><a href="{{url('contact')}}" class="nav-link">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 justify-content-end justify-content-lg-center">
                    <a class="navbar-brand" href="demo-jewellery-store.html">
                        <img src="{{ asset('images/demo-jewellery-store-logo-black.png')}}" data-at2x="images/demo-jewellery-store-logo-black@2x.png" alt="" class="default-logo">
                        <img src="{{ asset('images/demo-jewellery-store-logo-black.png')}}" data-at2x="images/demo-jewellery-store-logo-black@2x.png" alt="" class="alt-logo">
                        <img src="{{ asset('images/demo-jewellery-store-logo-black.png')}}" data-at2x="images/demo-jewellery-store-logo-black@2x.png" alt="" class="mobile-logo">
                    </a>
                </div>
                <div class="col-auto col-lg-5 justify-content-end ms-auto md-pe-0">
                    <div class="header-icon">
                        <div class="widget-text icon alt-font fw-500 d-none d-sm-flex">
                            <a href="demo-jewellery-store-wishlist.html">Wishlist</a>
                        </div>
                        <div class="header-account-icon icon alt-font">
                            <div class="header-account dropdown">
                                <a href="javascript:void(0);" class="fw-500">
                                    <i class="feather icon-feather-user d-inline-block d-sm-none fs-18"></i>
                                    <span class="d-none d-sm-inline-block">My account</span>
                                </a>
                                <ul class="account-item-list">
                                    <li class="account-item"><a href="#">Wishlist</a></li>
                                    <li class="account-item"><a href="#">Order history</a></li>
                                    <li class="account-item"><a href="#">Account details</a></li>
                                    <li class="account-item"><a href="#">Customer support</a></li>
                                    <li class="account-item"><a href="#">Logout</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-search-icon icon">
                            <a href="javascript:void(0)" class="search-form-icon header-search-form xs-ps-10px"><i class="feather icon-feather-search"></i></a>
                            <div class="search-form-wrapper">
                                <button title="Close" type="button" class="search-close alt-font">×</button>
                                <form id="search-form" role="search" method="get" class="search-form text-left" action="search-result.html">
                                    <div class="search-form-box">
                                        <h2 class="text-dark-gray text-center mb-5 alt-font fw-600 ls-minus-2px">What are you looking for?</h2>
                                        <input class="search-input alt-font" id="search-form-input5e219ef164995" placeholder="Enter your keywords..." name="s" value="" type="text" autocomplete="off">
                                        <button type="submit" class="search-button">
                                            <i class="feather icon-feather-search" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="header-cart-icon icon">
                            <div class="header-cart dropdown">
                                <a href="javascript:void(0);"><i class="feather icon-feather-shopping-bag"></i><span class="cart-count alt-font text-da">2</span></a>
                                <ul class="cart-item-list">
                                    <li class="cart-item align-items-center">
                                        <a href="javascript:void(0);" class="alt-font close">×</a>
                                        <div class="product-image">
                                            <a href="demo-jewellery-store-single-product.html"><img src="https://placehold.co/600x765" class="cart-thumb" alt=""></a>
                                        </div>
                                        <div class="product-detail alt-font">
                                            <a href="demo-jewellery-store-single-product.html">Delica Omtantur</a>
                                            <span class="item-ammount">$100.00</span>
                                        </div>
                                    </li>
                                    <li class="cart-item align-items-center">
                                        <a href="javascript:void(0);" class="alt-font close">×</a>
                                        <div class="product-image">
                                            <a href="demo-jewellery-store-single-product.html"><img src="https://placehold.co/600x765" class="cart-thumb" alt=""></a>
                                        </div>
                                        <div class="product-detail alt-font">
                                            <a href="demo-jewellery-store-single-product.html">Gianvito Rossi</a>
                                            <span class="item-ammount">$99.99</span>
                                        </div>
                                    </li>
                                    <li class="cart-total">
                                        <div class="alt-font mb-15px"><span class="w-50">Subtotal:</span><span class="w-50 text-end fw-600">$199.99</span></div>
                                        <a href="demo-jewellery-store-cart.html" class="btn btn-large btn-transparent-base-color border-color-extra-medium-gray btn-round-edge">View cart</a>
                                        <a href="demo-jewellery-store-checkout.html" class="btn btn-large btn-dark-gray btn-box-shadow btn-round-edge">Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->

    {{$slot}}

    <!-- start footer -->
    <footer class="footer-dark bg-seashell-white pb-0">
        <div class="container">
            <div class="row justify-content-center mb-4 sm-mb-35px">
                <!-- start footer column -->
                <div class="col-6 col-lg-3 last-paragraph-no-margin order-sm-1 md-mb-50px xs-mb-30px">
                    <a href="demo-jewellery-store.html" class="footer-logo d-inline-block mb-20px"><img src="{{ asset('images/demo-jewellery-store-logo-black.png')}}" alt=""></a>
                    <span class="lh-22 alt-font fw-500 text-dark-gray d-block w-80 lg-w-100 mb-15px">Please reach out to when you need support.</span>
                    <div class="fs-16 text-brown"><i class="feather icon-feather-phone-call icon-small me-10px xs-me-5px text-dark-gray"></i><a href="tel:11234567890">+1 1234567890</a></div>
                    <div class="fs-16"><i class="feather icon-feather-mail icon-small me-10px xs-me-5px text-dark-gray"></i><a href="mailto:info@domain.com">info@domain.com</a></div>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                    <span class="alt-font fw-500 text-dark-gray d-block mb-5px">Categories</span>
                    <ul class="fs-16">
                        @foreach($categories as $category)
                        <li><a href="{{url('products/category',$category->id)}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                    <span class="alt-font fw-500 text-dark-gray d-block mb-5px">Account</span>
                    <ul class="fs-16">
                        <li><a href="#">My profile</a></li>
                        <li><a href="demo-jewellery-store-cart.html">My order history</a></li>
                        <li><a href="#">My wish list</a></li>
                        <li><a href="#">Order tracking</a></li>
                        <li><a href="demo-jewellery-store-cart.html">Shopping cart</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-6 col-lg-2 col-sm-4 xs-mb-30px order-sm-3 order-lg-2">
                    <span class="alt-font fw-500 text-dark-gray d-block mb-5px">Information</span>
                    <ul class="fs-16">
                        <li><a href="demo-jewellery-store-about.html">About us</a></li>
                        <li><a href="{{url('contact')}}">Careers</a></li>
                        <li><a href="#">Events</a></li>
                        <li><a href="#">Articles</a></li>
                        <li><a href="{{url('contact')}}">Contact us</a></li>
                    </ul>
                </div>
                <!-- end footer column -->
                <!-- start footer column -->
                <div class="col-lg-3 col-sm-6 ps-30px sm-ps-15px md-mb-50px xs-mb-0 order-sm-2 order-lg-5 text-center text-sm-start">
                    <span class="alt-font fw-500 text-dark-gray d-block mb-10px">Connect with us</span>
                    <div class="elements-social social-icon-style-09">
                        <ul class="small-icon dark mb-20px">
                            <li><a class="facebook" href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                            <li><a class="instagram" href="http://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                            <li><a class="twitter" href="http://www.twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i><span></span></a></li>
                            <li><a class="dribbble" href="http://www.dribbble.com" target="_blank"><i class="fa-brands fa-dribbble"></i><span></span></a></li>
                        </ul>
                    </div>

                </div>
                <!-- end footer column -->
            </div>
            <div class="row justify-content-center align-items-center">
                <!-- start divider -->
                <div class="col-12">
                    <div class="divider-style-03 divider-style-03-01 border-color-transparent-dark-very-light"></div>
                </div>
                <!-- end divider -->
                <!-- start copyright -->
                <div class="col-md-6 pt-20px pb-20px sm-pt-0 fs-16 order-2 order-md-1 text-center text-md-start last-paragraph-no-margin">
                    <p>&copy; 2025 Developed by <a href="https://www.ehr-tech.com/" target="_blank" class="text-decoration-line-bottom text-dark-gray">EHR tech</a></p>
                </div>
                <!-- end copyright -->
                <!-- start footer menu -->
                <div class="col-md-6 pt-20px pb-20px sm-pb-10px fs-16 order-1 order-md-2 text-center text-md-end">
                    <ul class="footer-navbar xs-lh-normal">
                        <li><a href="#" class="nav-link">Terms and conditions</a></li>
                        <li><a href="#" class="nav-link">Privacy policy</a></li>
                    </ul>
                </div>
                <!-- end footer menu -->
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- start cookie message -->
    <div id="cookies-model" class="cookie-message bg-dark-gray border-radius-8px">
        <div class="cookie-description fs-14 text-white mb-20px lh-22">We use cookies to enhance your browsing experience, serve personalized ads or content, and analyze our traffic. By clicking "Allow cookies" you consent to our use of cookies. </div>
        <div class="cookie-btn">
            <a href="#" class="btn btn-transparent-white border-1 border-color-transparent-white-light btn-very-small btn-switch-text btn-rounded w-100 mb-15px" aria-label="btn">
                <span>
                    <span class="btn-double-text" data-text="Cookie policy">Cookie policy</span>
                </span>
            </a>
            <a href="#" class="btn btn-white btn-very-small btn-switch-text btn-box-shadow accept_cookies_btn btn-rounded w-100" data-accept-btn aria-label="text">
                <span>
                    <span class="btn-double-text" data-text="Allow cookies">Allow cookies</span>
                </span>
            </a>
        </div>
    </div>
    <!-- end cookie message -->
    <!-- start subscription popup -->
    <div id="subscribe-popup" class="mfp-hide subscribe-popup">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-md-10 bg-white">
                    <div class="row position-relative box-shadow-quadruple-large">
                        <div class="col-lg-6 cover-background md-h-400px xs-h-300px" style="background-image:url('{{ asset('images/banner.jpg') }}');"></div>
                        <div class="col-lg-6 newsletter-popup p-8 pt-10 pb-10 lg-p-5 md-p-6 xs-p-8 position-relative">
                            <h4 class="d-inline-block alt-font ls-minus-1px fw-600 text-dark-gray mb-15px">Subscribe to the latest updates!</h4>
                            <p>Subscribe to our newsletters and get the latest business updates.</p>
                            <div class="d-inline-block w-100 newsletter-style-05 position-relative mb-20px">
                                <form action="email-templates/subscribe-newsletter.php" method="post">
                                    <input class="input-medium w-100 border-radius-4px form-control required mb-15px" type="email" name="email" placeholder="Enter your email address" />
                                    <input type="hidden" name="redirect" value="">
                                    <button type="submit" class="btn btn-medium btn-round-edge btn-dark-gray btn-box-shadow w-100 submit">Subscribe now!</button>
                                    <div class="form-results border-radius-4px mt-10px lh-normal pt-10px pb-10px ps-15px pe-15px fs-16 w-100 text-center position-absolute z-index-1 d-none"></div>
                                </form>
                            </div>
                            <label for="newsletter-off" class="fs-15"><input class="w-auto me-10px position-relative top-1px p-0" type="checkbox" id="newsletter-off" name="newsletter-off">Don't show this popup again</label>
                        </div>
                        <button title="Close (Esc)" type="button" class="mfp-close text-dark-gray"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end subscription popup -->
    <!-- start scroll progress -->
    <div class="scroll-progress d-none d-xxl-block">
        <a href="#" class="scroll-top" aria-label="scroll">
            <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
        </a>
    </div>
    <!-- end scroll progress -->
    <!-- javascript libraries -->
    <script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/vendors.min.js')}}"></script>
    <!-- slider revolution core javaScript files -->
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- slider revolution extension scripts. ONLY NEEDED FOR LOCAL TESTING -->
    <script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>

    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
    <!-- Slider Revolution add on files -->
    <script type='text/javascript' src="{{asset('revolution/revolution-addons/bubblemorph/js/revolution.addon.bubblemorph.min.js')}}"></script>
    <!-- Slider's main "init" script -->
    <script type="text/javascript">
        var revapi263,
            tpj;
        (function() {
            if (!/loaded|interactive|complete/.test(document.readyState))
                document.addEventListener("DOMContentLoaded", onLoad);
            else
                onLoad();

            function onLoad() {
                if (tpj === undefined) {
                    tpj = jQuery;
                    if ("off" == "on")
                        tpj.noConflict();
                }
                if (tpj("#jewellery-store-slider").revolution == undefined) {
                    revslider_showDoubleJqueryError("#jewellery-store-slider");
                } else {
                    revapi263 = tpj("#jewellery-store-slider").show().revolution({
                        sliderType: "standard",
                        /* sets the Slider's default timeline */
                        delay: 9000,
                        /* options are 'auto', 'fullwidth' or 'fullscreen' */
                        sliderLayout: 'fullscreen',
                        /* RESPECT ASPECT RATIO */
                        autoHeight: 'off',
                        /* options that disable autoplay */
                        stopLoop: 'off',
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        navigation: {
                            keyboardNavigation: "on",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            touch: {
                                touchenabled: "on",
                                touchOnDesktop: "on",
                                swipe_threshold: 75,
                                swipe_min_touches: 1,
                                swipe_direction: "horizontal",
                                drag_block_vertical: true
                            },
                            arrows: {
                                enable: true,
                                style: 'uranus',
                                tmp: '',
                                rtl: false,
                                hide_onleave: false,
                                hide_onmobile: true,
                                hide_under: 767,
                                hide_over: 9999,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                left: {
                                    h_align: "right",
                                    v_align: "top",
                                    h_offset: 0,
                                    v_offset: 0,
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "bottom",
                                    h_offset: 0,
                                    v_offset: 0,
                                }
                            }
                        },
                        /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                        responsiveLevels: [1240, 1024, 768, 480],
                        /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                        gridwidth: [1220, 1024, 768, 480],
                        /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                        gridheight: [970, 970, 960, 720],
                        /* [DESKTOP, LAPTOP, TABLET, SMARTPHONE] */
                        visibilityLevels: [1240, 1024, 1024, 480],
                        /* Lazy Load options are "all", "smart", "single" and "none" */
                        lazyType: "smart",
                        spinner: "spinner0",
                        shadow: 0,
                        shuffle: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "nav, .header-top-bar",
                        fullScreenOffset: "-1",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        }
                    });
                }; /* END OF revapi call */
                BubbleMorphAddOn(jQuery, revapi263, false)
            };
        }()); /* END OF WRAPPING FUNCTION */
    </script>
    <script type="text/javascript" src="js/main.js"></script>
</body>

</html>
