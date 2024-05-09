@extends('layout.master')
@section('content')

<main class="main-wrapper relative overflow-hidden">
    <!--...::: Hero Section Start :::... -->
    <section id="hero-section">
        <!-- Section Spacer -->
        <div class="pt-28 lg:pt-40 xl:pt-[195px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Hero Content -->
                <div class="grid items-center gap-10 md:grid-cols-2 xl:grid-cols-[minmax(0,_1.3fr)_1fr]">
                    <!-- Section Content Block -->
                    <div>
                        <h2
                            class="font-raleway text-5xl md:text-6xl lg:text-7xl xl:text-[100px] xxl:text-[120px]">
                            The future of business</h2>
                    </div>
                    <!-- Section Content Block -->
                    <div class="jos flex flex-col gap-10 md:gap-[50px]">
                        <p class="text-lg font-semibold leading-[1.33] md:text-xl lg:text-2xl">
                            Rapid Motion Recruitment and Events Company commenced its operations since 2019 in the Saudi markets, right at the
                            heart of Riyadh. It embodies a unique vision in the realm of human resource management and event organization, offering
                            integrated and innovative solutions to meet our clients› needs.
                        </p>
                        <a href="/about-us"
                            class="button inline-block rounded-[50px] border-2 border-black bg-[#F6F6EB] text-black after:border-colorOrangyRed after:bg-colorOrangyRed hover:text-white">Explore
                            About Us</a>
                    </div>
                </div>
                <!-- Hero Content -->
            </div>
            <!-- Section Container -->
            <!-- Hero Image -->
            {{-- <div class="jos mx-auto mt-12 max-w-[1500px] px-5 md:mt-20" data-jos_animation="zoom">
                <img src="assets/img/th-3/hero-img.jpg" alt="hero-img" width="1500" height="700"
                    class="h-auto w-full" />
            </div> --}}
            <!-- Hero Image -->
            </div>
            <!-- Section Spacer -->
            </section>
            <section id="section-working-process">
                <div class="px-5 sm:px-[50px] pb-20 xl:pb-[150px] py-20 xl:py-[130px]">
                    <div class="relative z-[1] mx-auto max-w-full rounded-[20px] bg-black">
                        <div class="py-20 xl:py-[130px]">
                            <!-- Section Container -->
                            <div class="global-container">
                                <!-- Section Content Block -->
                                <div class="mx-auto mb-10 text-center md:mb-16 md:max-w-xl lg:mb-20 lg:max-w-3xl xl:max-w-[856px] jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                    <h2 class="font-clashDisplay text-4xl font-medium leading-[1.06] text-white sm:text-[44px] lg:text-[56px] xl:text-[75px]">
                                        Check user reviews using our AI chatbot
                                    </h2>
                                </div>
                                <!-- Section Content Block -->

                                <!-- Testimonial Carousel -->
                                <!-- Slider main container -->
                                <div class="swiper testimonial-slider relative z-[1] jos swiper-initialized swiper-horizontal swiper-backface-hidden" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                    <!-- Additional required wrapper -->
                                    <div class="swiper-wrapper" id="swiper-wrapper-c3b58ab610ecfc978" aria-live="polite">
                                        <!-- Slides -->
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 2" data-swiper-slide-index="0" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/1.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 text-2xl font-semibold font-medium text-white leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “SHIFT 22”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                      <a href="https://www.arabnews.com/NODE/2184481/SAUDI-ARABIAx" class="pro">https://www.arabnews.com/NODE/2184481/SAUDI-ARABIAx</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white ">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">USHERS, CLEANERS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/2.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5  text-2xl text-white font-semibold font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “SILENCE OF LIGHT”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                       <a href="https://www.balichwonderstudio.com/brand-experiences/" class="pro"> https://www.balichwonderstudio.com/brand-experiences/ </a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">HOSTESS ,USHERS, CLEANERS, SECURITY, TRAFFIC MARSHALS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/3.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5  text-2xl text-white font-semibold font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “DIRIYAH CONTEMPORARY
                                                        ART BIENNALE”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://biennale.org.sa/" class="pro" >https://biennale.org.sa/</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">Cleaners, Security, Ushers</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/5.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5  font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “ALULA WELLNESS FESTIVAL”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://www.experiencealula.com/EN/WHATS-ON/FESTIVALS/ALULA-W" class="pro" >https://www.experiencealula.com/EN/WHATS-ON/FESTIVALS/ALULA-W</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">HOSTESS ,USHERS, CLEANERS, SECURITY, TRAFFIC MARSHALS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/7.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “ALL DAY I DREAM
                                                        ”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://tickets.experiencealula.com/en/experiences/all-day-i-dream?groupAlias=concerts" class="pro" >https://tickets.experiencealula.com/en/experiences/all-day-i-dream?groupAlias=concerts</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">TRAFFIC MARSHALS, SECURITY,CLEANERS, USHERS, HOSTESS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/6.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “SAUDI GAMES OPENING
                                                        CEREMONY 2023”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://www.arabnews.com/node/2409621/amp" class="pro" >https://www.arabnews.com/node/2409621/amp</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">DRESSERS, SECURITY, CLEANERS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/8.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “RAMZEN FASHION SHOW - DIRIYAH
                                                        ”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://aeworld.com/fashion/saudi-brand-ramzen-hosts-an-exclusive-fashion-show-in-diriyah/" class="pro" >https://aeworld.com/fashion/saudi-brand-ramzen-hosts-an-exclusive-fashion-show-in-diriyah/</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">CLEANERS, RUNNERS, USHERS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/4.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “ALULA ON WHEELS
                                                        ”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://www.balichwonderstudio.com/brand-experiences/" class="pro" >https://www.balichwonderstudio.com/brand-experiences/</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">HOSTESS ,USHERS, CLEANERS, SECURITY, TRAFFIC MARSHALS</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="2 / 2" data-swiper-slide-index="1" style="width: 1300px;">
                                            <div class="flex flex-col gap-x-16 md:flex-row lg:gap-x-28 items-center xxl:items-baseline xl:gap-x-[134px]">
                                                <div class="h-auto w-[300px] self-center overflow-hidden rounded-[10px] lg:w-[375px] xl:h-[494px] xl:w-[526px]">
                                                    <img src="assets/img/th-1/portfolio slider\portfolio slider/9.jpg" alt="testimonial-img-1" width="526" height="494" class="h-full w-full object-cover" loading="lazy">
                                                </div>
                                                <div class="mt-[30px] flex-1 text-center md:text-left">
                                                    <div class="mb-5 font-semibold text-2xl text-white font-medium leading-[1.28] tracking-[1px] lg:mb-9 lg:text-[28px]">
                                                        “ALULA SKIES FESTIVAL
                                                        ”
                                                    </div>
                                                    <p class="mb-9 leading-[1.33] lg:mb-[50px] lg:text-lg xl:text-1xl text-white font-semibold">
                                                        <a href="https://www.factmagazines.com/saudi-arabia/alula/things-to-do-alula/everything-you-need-to-know-about-alula-skies-festival-2023" class="pro" >https://www.factmagazines.com/saudi-arabia/alula/things-to-do-alula/everything-you-need-to-know-about-alula-skies-festival-2023</a>
                                                    </p>

                                                    <div class="text-[21px] font-semibold leading-[1.42] text-white">
                                                        -STAFF:
                                                        <span class="mt-1 block text-lg font-normal leading-[1.66] text-white font-semibold">USHERS, TRAFFIC MARSHALS, CLEANERS, SECURITY</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- If we need navigation buttons -->
                                    <div class="testimonial-nav">
                                        <div class="testimonial-nav-prev testimonial-nav-dir" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-c3b58ab610ecfc978">
                                            <img src="assets/img/th-2/icon-black-long-arrow-left.svg" alt="icon-black-long-arrow-left" width="24" height="24">
                                            <img src="assets/img/th-2/icon-white-long-arrow-left.svg" alt="icon-white-long-arrow-left" width="24" height="24">
                                        </div>
                                        <div class="testimonial-nav-next testimonial-nav-dir" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-c3b58ab610ecfc978">
                                            <img src="assets/img/th-2/icon-black-long-arrow-right.svg" alt="icon-black-long-arrow-right" width="24" height="24">
                                            <img src="assets/img/th-2/icon-white-long-arrow-right.svg" alt="icon-white-long-arrow-right" width="24" height="24">
                                        </div>
                                    </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                                <!-- Testimonial Carousel -->
                            </div>
                            <!-- Section Container -->
                        </div>
                    </div>
                </div>
            </section>
                  <!--...::: Hero Section End :::... -->
              <!-- our services -->
              <section id="section-service">
                <!-- Section Spacer -->
                <div class="pb-20 xl:pb-[150px] py-20 xl:py-[130px]">
                    <!-- Section Container -->
                    <div class="global-container">
                        <!-- Section Content Block -->
                        <div class="mb-10 text-center lg:mb-16 xl:mb-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <div class="mx-auto max-w-md lg:max-w-xl xl:max-w-[950px]">
                                <h2>Our Services</h2>
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
                                    <a href="/services" class="hover:text-colorOrangyRed">
                                        Event Management
                                    </a>
                                </h3>
{{--
                                <p class="mb-12 duration-300 group-hover:text-white">
                                    Hospitality Management & Crew
                                </p> --}}

                                {{-- <a href="/services" class="relative inline-block h-[30px] w-[30px] duration-300">
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
                                    <a href="/services" class="hover:text-colorOrangyRed">
                                        Hospitality Management & Crew
                                    </a>
                                </h3>

                                {{-- <p class="mb-12 duration-300 group-hover:text-white">
                                    This is an excellent option for people &amp; small businesses
                                    who are starting out.
                                </p> --}}
{{--
                                <a href="/services" class="relative inline-block h-[30px] w-[30px] duration-300">
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
                                    <a href="/services" class="hover:text-colorOrangyRed">
                                        Cleaning solutions
                                    </a>
                                </h3>

                                {{-- <p class="mb-12 duration-300 group-hover:text-white">
                                    This is an excellent option for people &amp; small businesses
                                    who are starting out.
                                </p> --}}

                                {{-- <a href="/services" class="relative inline-block h-[30px] w-[30px] duration-300">
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
                                    <a href="/services" class="hover:text-colorOrangyRed">
                                        Event staffing and recruitment
                                    </a>
                                </h3>
{{--
                                <p class="mb-12 duration-300 group-hover:text-white">
                                    Computer vision services use AI to interpret and process
                                    visual information.
                                </p> --}}

                                {{-- <a href="/services" class="relative inline-block h-[30px] w-[30px] duration-300">
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
                                    <a href="/services" class="hover:text-colorOrangyRed">
                                        Traffic Management
                                    </a>
                                </h3>
{{--
                                <p class="mb-12 duration-300 group-hover:text-white">
                                    Computer vision services use AI to interpret and process
                                    visual information.
                                </p> --}}

                                {{-- <a href="/services" class="relative inline-block h-[30px] w-[30px] duration-300">
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
            <!-- end servcies -->
            <!-- about info -->
            <div class="py-20 xl:py-[130px]">
                <!-- Section Container -->
                <div class="global-container">
                    <div class="grid items-center gap-10 md:grid-cols-[minmax(0,_1fr)_1.3fr] lg:gap-[60px] xl:gap-x-[94px]">
                        <div class="jos" data-jos_animation="fade-left" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                            <div class="overflow-hidden rounded-[10px]">
                                <img src="assets/img/th-1/portfolio-img-3.jpg" alt="content-img-1" width="526" height="550" class="h-auto w-full" style="height: 600px; width:550px">
                            </div>
                        </div>
                        <div class="jos" data-jos_animation="fade-right" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                            <!-- Section Content Block -->
                            <div class="mb-6">
                                <h2 class="font-raleway text-4xl font-medium leading-[1.06] sm:text-[44px] lg:text-[56px] xl:text-[80px]">
                                    Who Are We?
                                </h2>
                            </div>
                            <!-- Section Content Block -->

                            <div class="">

                                <p class="mb-8 text-lg leading-[1.33] last:mb-0 lg:text-xl xl:text-2xl">
                                    <span class="font-semibold text-[#381FD1]" style="color: rgb(254 51 10 / var(--tw-text-opacity))">Our Vision:</span>
                                    In Rapid Motion, we aspire to be leaders in the field, transcending local
                                    boundaries to tap into international markets with recruitment and
                                    event organizatio n services that meet Saudi and global standards.
                                    We aim to exceed the expectations of diverse clientele through highquality
                                    and compliant services.
                                </p>
                                <p class="mb-8 text-lg leading-[1.33] last:mb-0 lg:text-xl xl:text-2xl">
                                    <span class="font-semibold text-[#381FD1]" style="color: rgb(254 51 10 / var(--tw-text-opacity))">Our Mission:</span>
                                    in the realms of recruitment and event organization. We strive to
                                    achieve our clients› goals by delivering high-quality services and
                                    maximum satisfaction. This is accomplished through a skilled and
                                    qualified team of human resources professionals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Section Container -->
            </div>
            <!-- end about info -->
            <section id="about-funfact-section">
                <!-- Section Container -->
                <div class="global-container">
                    <!-- Counter Scroll -->
                    <ul class="grid grid-cols-1 gap-5 gap-y-6 text-center sm:grid-cols-2  lg:grid-cols-3">
                        <!-- Counter Items -->
                        <li class="jos" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-[80px]" data-module="countup">
                                <span>2019</span>
                            </h3>
                            <span class="block text-lg font-normal text-black">Company
                                Established</span>
                        </li>
                        <!-- Counter Items -->
                        <!-- Counter Items -->
                        <li class="jos" data-jos_delay="0.2" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-4xl xl:text-[80px]" data-module="countup">
                                <span class="start-number" data-countup-number="95">20</span>+
                            </h3>
                            <span class="block text-lg font-normal text-black">Agencies Served</span>
                        </li>
                        <!-- Counter Items -->
                           <!-- Counter Items -->
                           <li class="jos" data-jos_delay="0.2" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-4xl xl:text-[80px]" data-module="countup">
                                <span>5</span>+
                            </h3>
                            <span class="block text-lg font-normal text-black">Clients</span>
                        </li>
                        <!-- Counter Items -->
                        <!-- Counter Items -->
                        <li class="jos" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-[80px]" data-module="countup">
                                <span class="start-number" data-countup-number="40">45</span>+
                            </h3>
                            <span class="block text-lg font-normal text-black">Events
                                Managed</span>
                        </li>
                        <!-- Counter Items -->
                        <!-- Counter Items -->
                        <li class="jos" data-jos_delay="0.4" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-[80px]" data-module="countup">
                                <span>2</span>M
                            </h3>
                            <span class="block text-lg font-normal text-black">Happy
                                Visitor</span>
                        </li>
                        <!-- Counter Items -->
                         <!-- Counter Items -->
                         <li class="jos" data-jos_delay="0.4" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h3 class="text-3xl text-colorOrangyRed md:text-6xl lg:text-7xl xl:text-[80px]" data-module="countup">
                                <span>3</span>X
                            </h3>
                            <span class="block text-lg font-normal text-black">
                                Growth
rate</span>
                        </li>
                        <!-- Counter Items -->
                    </ul>
                    <!-- Counter Scroll -->
                </div>
                <!-- Section Container -->
            </section>
            <!-- core value -->
            <section id="promo-section">
                <!-- Section Spacer -->
                <div class="pb-20 pt-20 xl:pb-[130px] xl:pt-[150px]">
                    <!-- Section Container -->
                    <div class="global-container">
                        <!-- Section Content Block -->
                        <div class="mx-auto mb-10 text-center md:mb-16 md:max-w-xl lg:mb-20 lg:max-w-3xl xl:max-w-[1000px] jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <h2 class="font-raleway text-4xl font-medium leading-[1.06] sm:text-[44px] lg:text-[56px] xl:text-[80px]">
                                Core Values
                            </h2>
                        </div>
                        <!-- Section Content Block -->

                        <!-- Promo List -->
                        <ul class="grid gap-x-6 gap-y-12 md:grid-cols-2 lg:grid-cols-3">
                            <!-- Promo Item -->
                            <li class="text-center md:text-left jos" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-1.svg" alt="icon-black-promo-1" width="60" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Quality
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    Quality is at the core of our work. We aim to provide
                                    outstanding services that surpass the expectations
                                    of our clients. We invest in training and technologies
                                    to maintain consistently high levels of quality.
                                </p>
                            </li>
                            <!-- Promo Item -->
                            <!-- Promo Item -->
                            <li class="text-center md:text-left jos" data-jos_delay="0.2" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-2.svg" alt="icon-black-promo-1" width="70" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Commitment to Timelines
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    We are committed to delivering services on
                                    time, recognizing the importance of adhering
                                    to timelines to ensure a smooth and reliable
                                    experience for our clients.
                                </p>
                            </li>
                            <!-- Promo Item -->
                            <!-- Promo Item -->
                            <li class="text-center md:text-left jos" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-3.svg" alt="icon-black-promo-1" width="67" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Professionalism
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    Professionalism characterizes all our
                                    interactions with clients and internal teams. We
                                    ensure the delivery of services at the highest
                                    levels of professionalism and etiquette.
                                </p>
                            </li>
                            <li class="text-center md:text-left jos" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-3.svg" alt="icon-black-promo-1" width="67" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Credibility
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    Building relationships based on credibility is a
                                    cornerstone of our approach. We commit to providing
                                    accurate and transparent information about our
                                    services and costs. Our goal is to earn the trust of our
                                    clients through fair and transparent dealings.
                                </p>
                            </li>
                            <li class="text-center md:text-left jos" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-3.svg" alt="icon-black-promo-1" width="67" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Competitive Pricing
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    We believe in offering services at competitive prices
                                    that are accessible to all without compromising
                                    quality. Striving for an optimal balance between
                                    real value and cost-effectiveness makes our
                                    services suitable for various client needs.
                                </p>
                            </li>
                            <li class="text-center md:text-left jos" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                {{-- <div class="mx-auto mb-[30px] inline-flex h-10 w-auto justify-center md:justify-normal xxl:h-[60px]">
                                    <img src="assets/img/th-3/icon-black-promo-3.svg" alt="icon-black-promo-1" width="67" height="60" class="h-full w-auto">
                                </div> --}}
                                <div class="mb-5 font-raleway text-2xl font-bold leading-[1.33] text-black xl:text-3xl" style="color: rgb(254 51 10 / var(--tw-text-opacity))">
                                    Innovation
                                </div>
                                <p class="text-lg leading-[1.42] xl:text-[21px]">
                                    Innovation is an integral part of our identity.
                                    We constantly strive to use the latest
                                    technologies and apply new methods to
                                    continuously improve our services.
                                </p>
                            </li>
                            <!-- Promo Item -->
                        </ul>
                        <!-- Promo List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Spacer -->
            </section>
            <!-- end core value -->


            <section class="faq-section">
                <!-- Section Spacer -->
                <div class="pb-20 xl:pb-[130px]">
                    <!-- Section Container -->
                    <div class="global-container">
                        <!-- Section Content Block -->
                        <div class="mb-10 text-center lg:mb-16 xl:mb-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <div class="mx-auto max-w-md lg:max-w-3xl xl:max-w-[950px]">

                            </div>
                        </div>
                        <!-- Section Content Block -->

                        <!-- Faq Wrapper -->
                        <div class="grid grid-cols-1 gap-x-10 gap-y-10 md:grid-cols-[minmax(0,_auto)_1fr] lg:grid-cols-[minmax(354px,_auto)_1fr] lg:gap-x-[86px]">
                            <div class="flex flex-col gap-y-6">
                                <button class="tab-button faq-button active" data-tab="general-questions">
                                    Human Resources
at the Company
                                </button>
                                <button class="tab-button faq-button" data-tab="about-the-company">
                                    Quality Management
                                </button>

                            </div>

                            <div>
                                <!-- Accordion-->
                                <ul class="accordion tab-content flex flex-col gap-y-6" id="general-questions">
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] active jos" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Precise Selection</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We meticulously select competencies and talents that
                                                align with our vision and values. We adopt specific and
                                                transparent recruitment processes to ensure the addition
                                                of outstanding individuals to our team.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Development and Training</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                Investing in the development of the team’s skills is
                                                crucial. We offer continuous training programs aimed at
                                                enhancing competencies and developing capabilities.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Work Environment</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We strive to create a positive and supportive work environment for
                                                creativity and innovation. We focus on interaction and collaboration
                                                among team members to achieve the company’s goals.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                 Employee Care
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We care about the well-being of our employees, providing incentives
                                                and benefits that encourage outstanding performance. We create
                                                optimal conditions to stimulate creativity and achieve a balance
                                                between work and personal life.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                 Performance Evaluation
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                employees and guiding them towards achieving their professional
goals. We provide constructive feedback and opportunities for
continuous development.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->


                                </ul>
                                <!-- Accordion-->
                                <!-- Accordion-->
                                <ul class="accordion tab-content flex flex-col gap-y-6 hidden" id="about-the-company">
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] active jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                Performance Evaluation
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We conduct periodic
                                                evaluations of the
                                                performance of company
                                                operations and activities
                                                to ensure compliance with
                                                established standards.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Standards Application</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We adhere to local and
international quality standards
that all our operations and
services must align with.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Process Improvement</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                improvement approach,
constantly seeking to enhance
processes according to the
best practices in the field of
quality management.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Quality Monitoring</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We implement meticulous
quality monitoring processes
to ensure an optimal balance
between efficiency and quality.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->



                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                Training and Continuous
Improvement
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We emphasize the importance
of training teams to enhance
understanding and commitment
to quality standards. We
encourage a culture of continuous
improvement and knowledge
exchange within the company.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                </ul>
                                <!-- Accordion-->
                                <!-- Accordion-->
                                <ul class="accordion tab-content flex flex-col gap-y-6 hidden" id="about-artificial-intelligence">
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] active jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Feedback and Data Analysis</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We collect customer feedback
                                                and analyze data to ensure
                                                meeting their expectations
                                                and continuously improving
                                                services.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Certifications
                                                and Documentation</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                We work towards obtaining
                                                necessary certifications and
                                                international documentation
                                                that reflects our commitment
                                                to the highest quality
                                                standards.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->

                                </ul>
                                <!-- Accordion-->
                                <!-- Accordion-->
                                <ul class="accordion tab-content flex flex-col gap-y-6 hidden" id="about-the-team">
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] active jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                How can businesses AI for competitive advantage?
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Can AI replace humans in the workforce?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>Is AI safe?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>What is the future of AI?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>What is Artificial Intelligence (AI)?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>What are the different types of AI?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>What are some practical applications of AI?</h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                    <!-- Accordion items -->
                                    <li class="accordion-item is-2 rounded-[10px] border-[1px] border-[#EAEDF0] bg-white px-7 py-[30px] jos jos-fade-up" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                        <div class="accordion-header flex items-center justify-between text-xl leading-[1.2] -tracking-[0.5px] lg:text-[28px]">
                                            <h5>
                                                What is the difference between AI and machine
                                                learning?
                                            </h5>
                                            <div class="accordion-icon">
                                                <img src="assets/img/plus.svg" alt="plus">
                                            </div>
                                        </div>
                                        <div class="accordion-content text-[#2C2C2C]">
                                            <p>
                                                AI refers to the simulation of human intelligence in
                                                machines, enabling them to perform tasks that
                                                typically require human intelligence, such as
                                                learning, reasoning, problem-solving, and
                                                decision-making.
                                            </p>
                                        </div>
                                    </li>
                                    <!-- Accordion items -->
                                </ul>
                                <!-- Accordion-->
                            </div>
                        </div>
                        <!-- Faq Wrapper -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Spacer -->
            </section>
            <!-- galary -->
            <section id="portfolio-section">
                <!-- Section Spacer -->
                <div class="pb-40 xl:pb-[220px]">
                    <!-- Section Container -->
                    <div class="global-container">
                        <!-- Section Content Block -->
                        <div class="mb-10 text-center lg:mb-16 xl:mb-20 jos" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                            <div class="mx-auto md:max-w-xs lg:max-w-xl xl:max-w-[746px]">
                                <h2>Our Galary</h2>
                            </div>
                        </div>
                        <!-- Section Content Block -->

                        <!-- Portfolio List -->
                        <ul class="col-1 gap-6 md:columns-2">
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos" data-jos_delay="0.1" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-1.jpg" alt="portfolio-img-1" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">


                                </a>
                            </li>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos jos-fade-up" data-jos_delay="0.2" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-2.jpg" alt="portfolio-img-2" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">


                                </a>
                            </li>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos jos-fade-up" data-jos_delay="0.3" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-3.jpg" alt="portfolio-img-3" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">


                                </a>
                            </li>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos" data-jos_delay="0.4" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="1" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-4.jpg" alt="portfolio-img-4" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">

                                </a>
                            </li>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos jos-fade-up" data-jos_delay="0.5" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-5.jpg" alt="portfolio-img-5" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">

                                </a>
                            </li>
                            <!-- Portfolio Item -->
                            <!-- Portfolio Item -->
                            <li class="group mb-10 flex flex-col gap-y-6 last:mb-0 jos jos-fade-up" data-jos_delay="0.6" data-jos_once="1" data-jos_animation="fade-up" data-jos_counter="0" data-jos_scrolldirection="down">
                                <a href="" class="block w-full overflow-hidden rounded-[10px] group-odd:h-80 group-even:h-96 lg:group-odd:h-[550px] lg:group-even:h-[750px]">
                                    <img src="assets/img/th-1/portfolio-img-6.jpg" alt="portfolio-img-6" width="636" height="550" class="h-full w-full scale-100 object-cover transition-all duration-300 group-hover:scale-105">
                                </a>
                                <a href="" class="flex items-center justify-between gap-x-6 text-xl font-bold leading-[1.4] hover:text-colorOrangyRed lg:gap-x-14 lg:text-2xl xl:gap-x-20 xl:text-3xl">

                                </a>
                            </li>
                            <!-- Portfolio Item -->
                        </ul>
                        <!-- Portfolio List -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Spacer -->
            </section>
            <!-- end galary -->
            {{-- <section id="cta-section">
                <div class="global-container">
                    <div class="rounded-[10px] bg-colorGreen px-5 py-[60px] md:py-20 xl:py-[100px]">
                        <div class="swiper brand-slider jos swiper-initialized swiper-horizontal swiper-backface-hidden" data-jos_animation="fade" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper" id="swiper-wrapper-a7b2167c9bd322a9" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-843px, 0px, 0px); transition-delay: 0ms;">
                                <!-- Slides -->
                                <div class="" role="group"  >
                                    <img src="assets/img/th-1/2.png" alt="brand-1" width="180" height="38" class="max-w-full">
                                </div>
                                <div class="" role="group"  >
                                    <img src="assets/img/th-1/4.png" alt="brand-2" width="183" height="35" class="max-w-full">
                                </div>
                                <div class="" >
                                    <img src="assets/img/th-1/5.png" alt="brand-3" width="172" height="35" class="max-w-full">
                                </div>

                            </div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    </div>
                </div>
            </section> --}}
            <section class="faq-section">
                <!-- Section Spacer -->
                <div class="pb-20 xl:pb-[130px]">
                <div class="global-container">
                    <div class="swiper brand-slider jos swiper-initialized swiper-horizontal swiper-backface-hidden" data-jos_animation="fade" data-jos_once="1" data-jos_counter="1" data-jos_scrolldirection="down">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper" id="swiper-wrapper-e74d24a991e4a028" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-1405px, 0px, 0px); transition-delay: 0ms;">
                            <!-- Slides -->
                            <div class="swiper-slide" role="group" aria-label="1 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-1.png" alt="brand-1" width="180" height="38" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="2 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-2.png" alt="brand-2" width="183" height="35" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="3 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-3.png" alt="brand-3" width="172" height="35" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="4 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-4.png" alt="brand-4" width="175" height="30" class="max-w-full">
                            </div>
                            <div class="swiper-slide swiper-slide-prev" role="group" aria-label="5 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-5.png" alt="brand-5" width="168" height="36" class="max-w-full">
                            </div>
                            <div class="swiper-slide swiper-slide-active" role="group" aria-label="6 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-1.png" alt="brand-1" width="180" height="38" class="max-w-full">
                            </div>
                            <div class="swiper-slide swiper-slide-next" role="group" aria-label="7 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-2.png" alt="brand-2" width="183" height="35" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="8 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-3.png" alt="brand-3" width="172" height="35" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="9 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-4.png" alt="brand-4" width="175" height="30" class="max-w-full">
                            </div>
                            <div class="swiper-slide" role="group" aria-label="10 / 10" style="width: 176px; margin-right: 105px;">
                                <img src="assets/img/th-1/team-member-img-5.png" alt="brand-5" width="168" height="36" class="max-w-full">
                            </div>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
                </div>
            </section>

@endsection
