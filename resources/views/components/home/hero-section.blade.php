<section class="relative h-screen overflow-hidden">
    <div class="swiper hero-swiper h-full">
        <div class="swiper-wrapper">
@foreach(['1-img.jpg', 'img-2.jpeg', 'img-3.png'] as $index => $slide)
    <div class="swiper-slide">
        <div class="relative h-full">
            <div class="absolute inset-0 bg-gradient-to-b from-black/50 via-transparent to-black/50 z-10"></div>

            <img src="{{ asset('assets/images/hero/' . $slide) }}" 
                 alt="Hero slide {{ $index + 1 }}" 
                 class="absolute inset-0 w-full h-full object-cover"
                 width="1920" height="1080"
                 {{ $index === 0 ? 'fetchpriority=high' : 'loading=lazy' }}
                 decoding="async">

            <!-- Hero Container -->
            <div class="absolute inset-x-0 top-[30%] mx-auto z-20 flex flex-col items-center justify-center space-y-8 px-4">
                <!-- Logo/Slogan -->
                <img src="{{ asset('assets/images/hero/slogan.png') }}" 
                     alt="Slogan"
                     width="600" height="200"
                     {{ $index === 0 ? 'fetchpriority=high' : 'loading=lazy' }}
                     decoding="async"
                     class="h-[15vh] sm:h-[16vh] lg:h-[18vh] object-contain mx-auto transition-all duration-500">

                <!-- Download Button -->
                <a href="#" class="btn-hero">
                    Download Brochure
                </a>
            </div>
        </div>
    </div>
@endforeach

        </div>
        
        <!--  Pagination  -->
        <div class="swiper-pagination [&>span.swiper-pagination-bullet-active]:bg-[#ff6b00]">
           
</section>
