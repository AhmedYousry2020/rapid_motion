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
                    <h1 class="breadcrumb-title">Portfolio Single</h1>
                    <ul class="breadcrumb-nav">
                        <li><a href="/">Home</a></li>
                        <li>Portfolio Single</li>
                    </ul>
                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Breadcrumb Section End :::... -->

    <!--...::: Portfolio Details Section Start :::... -->
    <section id="portfolio-detial-section">
        <!-- Section Spacer -->
        <div class="pb-20 xl:pb-[150px]">
            <!-- Section Container -->
            <div class="global-container">
                <!-- Section Content Block -->
                <div class="jos mb-10 lg:mb-16 xl:mb-20">
                    <div class="md:max-w-xs lg:max-w-xl xl:max-w-[846px]">
                        <h2>{{$data['name']}}</h2>
                    </div>
                </div>
                <!-- Section Content Block -->

                <div class="jos h-80 w-full overflow-hidden rounded-[10px] lg:h-[550px]" data-jos_animation="zoom">
                    <img src="{{asset('assets/img/portfolio/'.$data["image"]["1"])}}" alt="portfolio-main-img" width="1296" height="550" class="h-full w-full object-cover" />
                </div>
                <!-- Portfolio Info List -->
                <ul class="mt-[55px] grid grid-cols-1 justify-between gap-x-16 gap-y-6 sm:grid-cols-2 sm:gap-y-8 lg:flex">
                    <li class="jos flex flex-col gap-y-2 sm:gap-y-4" data-jos_delay="0.1">
                        <span class="text-[21px] font-semibold leading-[1.4] text-[#7F8995]">Client:</span>
                        <div class="text-2xl font-bold leading-[1.4] -tracking-[1px] md:text-[30px]">
                           {{$data['clients']}}                       </div>
                    </li>

                </ul>
                <!-- Portfolio Info List -->

                <!-- Horizontal Separator -->
                <div class="my-10 h-[1px] w-full bg-[#EAEDF0] lg:my-20"></div>
                <!-- Horizontal Separator -->

                <div class="flex flex-col gap-y-10 lg:gap-y-20">
                    <!-- Content Block -->
                    <div class="grid grid-cols-1 items-center gap-[30px] lg:grid-cols-2">
                        <!-- Content Left Block -->
                        <div class="jos order-2 overflow-hidden rounded-md lg:order-1" data-jos_animation="fade-right">
                            <img src="{{asset('assets/img/portfolio/'.$data["image"]["2"])}}" alt="content-image-6" width="636" height="400" class="h-auto w-full" />
                        </div>
                        <!-- Content Left Block -->
                        <div class="jos order-2 overflow-hidden rounded-md lg:order-1" data-jos_animation="fade-right">
                            <img src="{{asset('assets/img/portfolio/'.$data["image"]["3"])}}" alt="content-image-6" width="636" height="400" class="h-auto w-full" />
                        </div>
                    </div>
                    <!-- Content Block -->

                </div>
            </div>
            <!-- Section Container -->
        </div>
        <!-- Section Spacer -->
    </section>
    <!--...::: Portfolio Details Section End :::... -->


@endsection
