@extends('layout.master')
@section('content')

<main class="main-wrapper relative overflow-hidden">
    <!--...::: Breadcrumb Section Start :::... -->
    <section id="section-breadcrumb">
        <!-- Section Spacer -->
        <div class="breadcrumb-wrapper">
            <!-- Section Container -->
            <div class="global-container">
                <div class="breadcrumb-block">
                    <h1 class="breadcrumb-title">Our Services</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html">Home</a></li>
                        <li>Our Services</li>
                    </ul>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Breadcrumb Section End :::... -->

    <!--...::: Service Section Start :::... -->
    <section id="section-service">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 text-center lg:mb-16 xl:mb-20">
                    <div class="mx-auto max-w-md lg:max-w-xl xl:max-w-[950px]">
                        <h2>Our Services</h2>
                        <p>Rapid Motion offers a range of exceptional services to create distinctive and
                            competitive experiences in various occasions and events. Let’s take a look</p>
                    </div>
                </div>
                <!-- Section Content Block -->
       <!-- Service List -->
       <ul class="grid grid-cols-1 gap-[2px] overflow-hidden rounded-[10px] border-2 border-black bg-black sm:grid-cols-2 lg:grid-cols-4 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
        <!-- Service Item -->
        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
            <div class="relative mb-9 h-[70px] w-[70px]">
                <img src="assets/img/th-1/service-icon-black-1.svg" alt="service-icon-black-1" width="70" height="70">
                <img src="assets/img/th-1/service-icon-orange-1.svg" alt="service-icon-orange-1" width="70" height="70" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </div>
            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                <a href="service-details.html" class="hover:text-colorOrangyRed">
                    Event Management
                </a>
            </h3>
{{--
            <p class="mb-12 duration-300 group-hover:text-white">
                Hospitality Management & Crew
            </p> --}}

            {{-- <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                <img src="assets/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30">
                <img src="assets/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </a> --}}
        </li>
        <!-- Service Item -->
        <!-- Service Item -->
        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
            <div class="relative mb-9 h-[70px] w-[70px]">
                <img src="assets/img/th-1/service-icon-black-2.svg" alt="service-icon-black-2" width="70" height="70">
                <img src="assets/img/th-1/service-icon-orange-2.svg" alt="service-icon-orange-1" width="70" height="70" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </div>
            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                <a href="service-details.html" class="hover:text-colorOrangyRed">
                    Hospitality Management & Crew
                </a>
            </h3>

            {{-- <p class="mb-12 duration-300 group-hover:text-white">
                This is an excellent option for people &amp; small businesses
                who are starting out.
            </p> --}}
{{--
            <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                <img src="assets/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30">
                <img src="assets/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </a> --}}
            <!-- Features Item -->
            <!-- Features Item -->
        </li>
        <!-- Service Item -->
        <!-- Service Item -->
        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
            <div class="relative mb-9 h-[70px] w-[70px]">
                <img src="assets/img/th-1/service-icon-black-3.svg" alt="service-icon-black-3" width="70" height="70">
                <img src="assets/img/th-1/service-icon-orange-3.svg" alt="service-icon-orange-3" width="70" height="70" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </div>
            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                <a href="service-details.html" class="hover:text-colorOrangyRed">
                    Cleaning solutions
                </a>
            </h3>

            {{-- <p class="mb-12 duration-300 group-hover:text-white">
                This is an excellent option for people &amp; small businesses
                who are starting out.
            </p> --}}

            {{-- <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                <img src="assets/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30">
                <img src="assets/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </a> --}}
        </li>
        <!-- Service Item -->
                                   <!-- Service Item -->
        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
            <div class="relative mb-9 h-[70px] w-[70px]">
                <img src="assets/img/th-1/service-icon-black-8.svg" alt="service-icon-black-8" width="70" height="70">
                <img src="assets/img/th-1/service-icon-orange-8.svg" alt="service-icon-orange-8" width="70" height="70" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </div>
            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                <a href="service-details.html" class="hover:text-colorOrangyRed">
                    Event staffing and recruitment
                </a>
            </h3>
{{--
            <p class="mb-12 duration-300 group-hover:text-white">
                Computer vision services use AI to interpret and process
                visual information.
            </p> --}}

            {{-- <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                <img src="assets/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30">
                <img src="assets/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </a> --}}
        </li>
        <li class="group bg-white p-[30px] transition-all duration-300 ease-in-out hover:bg-black">
            <div class="relative mb-9 h-[70px] w-[70px]">
                <img src="assets/img/th-1/service-icon-black-6.svg" alt="service-icon-black-8" width="70" height="70">
                <img src="assets/img/th-1/service-icon-orange-6.svg" alt="service-icon-orange-8" width="70" height="70" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </div>
            <h3 class="mb-4 block text-xl leading-tight -tracking-[0.5px] group-hover:text-white xl:text-2xl xxl:text-[28px]">
                <a href="service-details.html" class="hover:text-colorOrangyRed">
                    Traffic Management
                </a>
            </h3>
{{--
            <p class="mb-12 duration-300 group-hover:text-white">
                Computer vision services use AI to interpret and process
                visual information.
            </p> --}}

            {{-- <a href="service-details.html" class="relative inline-block h-[30px] w-[30px] duration-300">
                <img src="assets/img/th-1/arrow-right-black.svg" alt="arrow-right-black" width="30" height="30">
                <img src="assets/img/th-1/arrow-right-orange.svg" alt="arrow-right-black" width="30" height="30" class="absolute left-0 top-0 h-full w-full opacity-0 transition-all duration-300 ease-linear group-hover:opacity-100">
            </a> --}}
        </li>
        <!-- Service Item -->
    </ul>
    <!-- Service List -->
</div>
<!-- Section Container -->
</div>
<!-- Section Spacer -->
</section>
<!--...::: Service Section End :::... -->
<section id="content-section-2">
    <!-- Section Spacer -->
    <div class="pb-20 xl:pb-[150px]">
        <!-- Section Container -->
        <div class="global-container">
            <!-- Section Content Block -->
            <div class="mb-10 text-center lg:mb-16 xl:mb-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                <div class="mx-auto md:max-w-xl lg:max-w-4xl xl:max-w-[950px]">
                    <h2>Other Services</h2>
                </div>
            </div>
            <!-- Section Content Block -->
            <div class="grid grid-cols-1 items-center gap-12 md:grid-cols-[minmax(0,_1fr)_1.2fr] xl:gap-28 xxl:gap-32">
                <!-- Content Left Block -->
                <div class="order-2 overflow-hidden rounded-md md:order-1 jos" data-jos_animation="fade-left" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                    <img src="assets/img/th-1/content-image-4.jpg" alt="content-image-4" width="529" height="500" class="h-auto w-full">
                </div>
                <!-- Content Left Block -->
                <!-- Content Right Block -->
                <div class="order-1 md:order-2 jos" data-jos_animation="fade-right" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                    <ul class="flex flex-col gap-y-6">
                        <li>
                            <h5 class="mb-[10px]">1. Security services</h5>
                            {{-- <p class="mb-7 last:mb-0">
                                Businesses use AI data analysis to gain competitive
                                advantages, optimize operations, &amp; make data-driven
                                decisions. This includes industries such as retail,
                                finance, manufacturing.
                            </p> --}}
                        </li>
                        <li>
                            <h5 class="mb-[10px]">
                                2. Logistics Solutions
                            </h5>
                            {{-- <p class="mb-7 last:mb-0">
                                Data scientists and analysts leverage AI tools and
                                algorithms to extract actionable insights from large
                                datasets. They alsouse AI for predictive modeling,
                                anomaly detection, and data visualization.
                            </p> --}}
                        </li>
                        <li>
                            <h5 class="mb-[10px]">
                                3. Event Catering
                            </h5>
                            {{-- <p class="mb-7 last:mb-0">
                                Government agencies use AI data analysis for various
                                purposes, including public policy development, law
                                enforcement, urban planning, and disaster.
                            </p> --}}
                        </li>
                        <li>
                            <h5 class="mb-[10px]">
                                3. Traffic Management Solutions

                            </h5>
                            {{-- <p class="mb-7 last:mb-0">
                                Government agencies use AI data analysis for various
                                purposes, including public policy development, law
                                enforcement, urban planning, and disaster.
                            </p> --}}
                        </li>
                    </ul>
                </div>
                <!-- Content Right Block -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
<section id="about-conact">
    <!-- Section Spacer -->
    <div class="bg-white pb-40 pt-20 xl:pb-[200px] xl:pt-[130px]">
        <!-- Section Container -->
        <div class="global-container">
            <div class="grid grid-cols-1 items-center gap-14 md:grid-cols-[minmax(0,_1fr)_1.4fr] ">
                <!-- Content Left Block -->
                <div class="order-2 overflow-hidden rounded-[20px] md:order-1 jos" data-jos_animation="fade-left" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                    <img src="assets/img/th-1/about-contact-img.jpg" alt="about-contact-img" width="526" height="550" class="h-auto w-full">
                </div>
                <!-- Content Left Block -->
                <!-- Content Right Block -->
                <div class="order-1 md:order-2 jos" data-jos_animation="fade-down" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">

                    <!-- Section Content Block -->
                    <div class="mb-8 max-w-sm md:max-w-max lg:mb-16 xl:mb-6">
                        <h2 class="text-black">
                            We always want to connect our clients
                        </h2>
                    </div>
                    <!-- Section Content Block -->
                    <div class="text-left text-lg leading-[1.4] text-black lg:text-[21px]">

                    </div>

                    <ul class="mt-10 flex flex-col gap-6 font-dmSans text-[30px] tracking-[1.33] lg:mt-14 lg:gap-y-3 xl:mt-[70px]">
                        <li class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                            Website:
                            <a href="https://www.rapidmotionsa.com/" class="text-black hover:text-colorOrangyRed">https://www.rapidmotionsa.com/</a>
                        </li>
                        <li class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                            Email:
                            <a href="mailto:yourmail@mail.com" class="text-black hover:text-colorOrangyRed">management@rapidmotionsa.com</a>
                        </li>
                        <li class="flex flex-col gap-x-2 leading-tight text-colorOrangyRed lg:flex-row lg:leading-normal">
                            Phone:
                            <a href="tel:+1234567890" class="text-black hover:text-colorOrangyRed">(+966)
                                534917678</a>
                        </li>
                    </ul>
                </div>
                <!-- Content Right Block -->
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
@endsection
