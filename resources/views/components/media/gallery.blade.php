<!-- Media Gallery -->
<section class="py-16 md:py-20">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
            @foreach($mediaItems as $item)
            <div class="media-card group" data-aos="fade-up" data-aos-duration="600">
                <div class="relative overflow-hidden rounded-xl shadow-lg aspect-[4/3]">
                    <img 
                        src="{{ $item['image'] }}"
                        alt="{{ $item['title'] }}"
                        class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                        loading="lazy"
                        width="800"
                        height="600">
                    
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <div class="absolute bottom-0 left-0 right-0 p-6">
                            <h3 class="text-white text-lg font-semibold mb-2">{{ $item['title'] }}</h3>
                            <p class="text-white/90 text-sm line-clamp-2">{{ $item['description'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
