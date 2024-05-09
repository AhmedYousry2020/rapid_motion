
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rapid Motion</title>
    <meta name="description" content="Rapid Motion" />

    <!-- Favicon  -->
    <link rel="icon" href="assets/img/favicon.png" />

    <!-- Site font -->
    <link href="{{asset('assets/fonts/fonts.css')}}" rel="stylesheet" />

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendors/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/vendors/jos.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/vendors/menu.css')}}" />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />

    <!-- Development css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v6.4.2/css/all.css" rel="stylesheet">

    <!-- Production css -->
    <!-- <link rel="stylesheet" href="assets/css/style.min.css"> -->
</head>

<body>
    <div class="page-wrapper relative" style="background-color: white">
        <!--...::: Header Start :::... -->
        <header class="site-header site-header--absolute is--white py-3" id="sticky-menu">
            <div class="global-container">
                <div class="flex items-center justify-between gap-x-8">
                    <!-- Header Logo -->
                    <a href="/" class="">
                        <img src="{{asset('assets/img/2 rapid.png')}}" alt="AIMass"/>
                    </a>
                    <!-- Header Logo -->

                    <!-- Header Navigation -->
                    <div class="menu-block-wrapper">
                        <div class="menu-overlay"></div>
                        <nav class="menu-block" id="append-menu-header">
                            <div class="mobile-menu-head">
                                <div class="go-back">
                                    <img class="dropdown-icon" src="assets/img/icon-black-long-arrow-right.svg"
                                        alt="cheveron-right" width="16" height="16" />
                                </div>
                                <div class="current-menu-title"></div>
                                <div class="mobile-menu-close">&times;</div>
                            </div>
                            <ul class="site-menu-main">
                                <li class="nav-item nav-item-has-children">
                                    <a href="/" class="nav-link-item drop-trigger">Home
                                        </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/about-us" class="nav-link-item">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/services" class="nav-link-item drop-trigger">Services
                                        </a>

                                </li>
                                <li class="nav-item">
                                    <a href="/clients" class="nav-link-item drop-trigger">Clients
                                        </a>

                                </li>

                                <li class="nav-item">
                                    <a href="/contact" class="nav-link-item">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- Header Navigation -->

                    <!-- Header User Event -->
                    <div class="flex items-center gap-6">
                        <a href="/register"
                            class="button hidden rounded-[50px] border-black bg-black text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white lg:inline-block"><i class="fa-solid fa-plus"></i>Join Us</a>
                        <!-- Responsive Offcanvas Menu Button -->
                        <div class="block lg:hidden">
                            <button id="openBtn" class="hamburger-menu mobile-menu-trigger">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <!-- Header User Event -->
                </div>
            </div>
        </header>
        <!--...::: Header End :::... -->


@yield('content')

 <!--...::: Footer-3 Section Start :::... -->
 <footer id="section-footer-3">
    <div class="bg-black text-white">
        <!-- Section Spacer -->
        <div class="py-20 xl:py-[130px]">
            <!-- Footer Top -->
            <div>
                <!-- Section Container -->
                <div class="global-container">


                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Top -->

            <!-- Footer Bottom -->
            <div>
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Footer Widgets Block -->
                    <div
                        class="grid gap-x-10 gap-y-[60px] md:grid-cols-2 lg:flex lg:grid-cols-4 lg:justify-between lg:gap-x-20">
                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6 md:max-w-xs xl:max-w-[480px]">
                            <a href="index.html" class="inline-block"><img src="{{asset('assets/img/1 rapid.png')}}"
                                    alt="logo"  /></a>
                            <p>
                                Our mission is to provide comprehensive and professional solutions
in the realms of recruitment and event organization. We strive to
achieve our clients› goals by delivering high-quality services and
maximum satisfaction. This is accomplished through a skilled and
qualified team of human resources professionals.
                            </p>

                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <h4 class="text-[21px] font-semibold capitalize text-white">
                                Primary Pages
                            </h4>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="/"
                                        class="transition-all duration-300 ease-linear hover:text-colorOrangyRed">Home</a>
                                </li>
                                <li>
                                    <a href="/about"
                                        class="transition-all duration-300 ease-linear hover:text-colorOrangyRed">About
                                        Us</a>
                                </li>
                                <li>
                                    <a href="/services"
                                        class="transition-all duration-300 ease-linear hover:text-colorOrangyRed">Services</a>
                                </li>

                                <li>
                                    <a href="/contact"
                                        class="transition-all duration-300 ease-linear hover:text-colorOrangyRed">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <h4 class="text-[21px] font-semibold capitalize text-white">
                                Join Us!
                            </h4>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[10px] capitalize">
                                <li>
                                    <a href="/register"
                                        class="transition-all duration-300 ease-linear hover:text-colorOrangyRed">Start Your Journey?</a>
                                </li>


                            </ul>
                        </div>
                        <!-- Footer Widget Item -->

                        <!-- Footer Widget Item -->
                        <div class="flex flex-col gap-y-6">
                            <!-- Footer Title -->
                            <h4 class="text-[21px] font-semibold capitalize text-white">
                                Socials
                            </h4>
                            <!-- Footer Title -->

                            <!-- Footer Navbar -->
                            <ul class="flex flex-col gap-y-[15px] capitalize">
                                <li>
                                    <a href="http://www.facebook.com" class="group flex items-center gap-x-3">
                                        <div
                                            class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-colorViolet">
                                            <img src="{{asset('assets/img/th-1/facebook-icon-white.svg')}}"
                                                alt="facebook-icon-white" width="14" height="14" />
                                        </div>
                                        <span class="inline-block flex-1">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.twitter.com" class="group flex items-center gap-x-3">
                                        <div
                                            class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-colorViolet">
                                            <img src="{{asset('assets/img/th-1/twitter-icon-white.svg')}}"
                                                alt="twitter-icon-white" width="14" height="14" />
                                        </div>
                                        <span class="inline-block flex-1">Twitter</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.instagram.com" class="group flex items-center gap-x-3">
                                        <div
                                            class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-colorViolet">
                                            <img src="{{asset('assets/img/th-1/instagram-icon-white.svg')}}"
                                                alt="instagram-icon-white" width="14" height="14" />
                                        </div>
                                        <span class="inline-block flex-1">Instagram</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="http://www.linkedin.com" class="group flex items-center gap-x-3">
                                        <div
                                            class="flex h-[30px] w-[30px] items-center justify-center rounded-[50%] bg-white bg-opacity-10 transition-all duration-300 group-hover:bg-colorViolet">
                                            <img src="{{asset('assets/img/th-1/linkedin-icon-white.svg')}}"
                                                alt="linkedin-icon-white" width="14" height="14" />
                                        </div>
                                        <span class="inline-block flex-1">Linkedin</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Footer Widget Item -->
                    </div>
                    <!-- Footer Widgets Block -->
                </div>
                <!-- Section Container -->
            </div>
            <!-- Footer Bottom -->
        </div>
        <!-- Section Spacer -->
    </div>
</footer>
<!--...::: Footer-3 Section End :::... -->

<!-- Vertical Line -->
<div class="absolute left-0 top-0 -z-[1] flex h-full w-full justify-evenly">
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
    <div class="h-full w-[1px] bg-[#EDEDE0]"></div>
</div>
<!-- Vertical Line -->
</div>

<!--Vendor js-->
<script src="{{asset('assets/js/vendors/counterup.js')}}" type="module"></script>
<script src="{{asset('assets/js/vendors/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/fslightbox.js')}}"></script>
<script src="{{asset('assets/js/vendors/jos.min.js')}}"></script>
<script src="{{asset('assets/js/vendors/menu.js')}}"></script>

<!-- Main js -->
<script src="{{asset('assets/js/main.js')}}"></script>
</body>

</html>
