<section class="relative overflow-hidden bg-neutral-900">
    <!-- Background -->
    <div class="absolute inset-0 w-full h-full">
        <img src="{{ asset('assets/images/partners/bg/pt-bg.png') }}" 
             alt="Background" 
             class="w-full h-full object-cover opacity-40">
    </div>

    <!-- Content -->
    <div class="relative z-10 py-6 md:py-8">
        <div class="container mx-auto px-4">
            <!-- Title -->
            <h2 class="text-xl md:text-2xl text-center text-white mb-4" data-scroll>
                Our Partners
            </h2>

            <!-- Partners Slider -->
            <div class="max-w-7xl mx-auto pt-4">
                <div class="swiper partners-swiper">
                    <div class="swiper-wrapper">
                        @foreach(glob(public_path('assets/images/partners/*.png')) as $path)
                            <div class="swiper-slide flex items-center justify-center">
<img src="{{ asset('assets/images/partners/' . basename($path)) }}" 
     alt="Partner Logo" 
     class="h-16 md:h-20 lg:h-24 object-contain opacity-80 hover:opacity-100 transition"
     loading="lazy"
     decoding="async">                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
