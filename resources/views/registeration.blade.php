@extends('layout.master')
@section('content')

<section id="signup-section">
    <!-- Section Spacer -->
    <div class="py-40 pt-36 xl:pb-[200px] xl:pt-[180px]">
        <!-- Section Container -->
        <div class="global-container">
            <div class="mx-auto max-w-[910px] text-center">
                <h1 class="mb-[50px]">Join Us Now</h1>
                <div class="block rounded-lg bg-white px-[30px] py-[50px] text-left shadow-[0_4px_60px_0_rgba(0,0,0,0.1)] sm:px-10">
                    <!-- Sign Up Form -->
                    <form action="#" method="post" class="flex flex-col gap-y-5">
                        <!-- Form Group -->
                        <div class="grid grid-cols-1 gap-6">
                            <!-- Form Single Input -->
                            <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-name" class="text-lg font-bold leading-[1.6]">Enter your
                                    Full Name</label>
                                <input type="text" name="signup-name" id="signup-name" placeholder="Adam Smith" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                            <!-- Form Single Input -->
                            <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    Year of Birth</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="1993" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                             <!-- Form Single Input -->
                             <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    Height (cm)</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="192" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                             <!-- Form Single Input -->
                             <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    Weight (kg)</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="70" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                             <!-- Form Single Input -->
                             <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    Phone Number</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="074464646464" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                             <!-- Form Single Input -->
                             <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    ID\Iqama Number</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="0888888888" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                               <!-- Form Single Input -->
                               <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    Nationality</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="saudi" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                               <!-- Form Single Input -->
                               <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    City of Residence</label>
                                <input type="text" name="signup-email" id="signup-email" placeholder="" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
 <!-- Form Single Input -->
                               <!-- Form Single Input -->
                               <div class="flex flex-col gap-y-[10px]">
                                <label for="signup-email" class="text-lg font-bold leading-[1.6]">
                                    File</label>
                                <input type="file" name="signup-email" id="signup-email" placeholder="saudi" class="rounded-[10px] border border-gray-300 bg-white px-6 py-[18px] font-bold text-black outline-none transition-all placeholder:text-slate-500 focus:border-colorOrangyRed" required="">
                            </div>
                            <!-- Form Single Input -->
                            <!-- Form Single Input -->
                            <div class="flex gap-x-8 gap-y-[10px]">
                                <input type="checkbox" class="relative appearance-none after:absolute after:left-0 after:top-[6px] after:h-4 after:w-4 after:rounded-[3px] after:border after:border-[#7F8995] after:bg-white after:text-white after:transition-all after:delay-300 checked:after:border-colorOrangyRed checked:after:bg-colorOrangyRed checked:after:bg-[url(../img/th-1/icon-white-checkmark-filled.svg)]" name="signup-check" id="signup-check" required="">
                                <label for="signup-check" class="text-base leading-[1.6]">I have read and
                                    accept the
                                    <a href="#" class="font-bold hover:text-colorOrangyRed">Terms &amp;
                                        Conditions</a>
                                    and
                                    <a href="#" class="font-bold hover:text-colorOrangyRed">Privacy
                                        Policy</a></label>
                            </div>
                            <!-- Form Single Input -->
                        </div>
                        <button type="submit" class="button mt-7 block rounded-[50px] border-2 border-black bg-black py-4 text-white after:bg-colorOrangyRed hover:border-colorOrangyRed hover:text-white">
                           Save
                        </button>
                        <!-- Form Group -->
                    </form>
                    <!-- Sign Up Form -->



                </div>
            </div>
        </div>
        <!-- Section Container -->
    </div>
    <!-- Section Spacer -->
</section>
@endsection
