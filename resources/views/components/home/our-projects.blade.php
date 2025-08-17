@php
$projects = [
    [
        'title' => 'Palm Capital',
        'description' => 'Palm Capital is a residential compound spanning 18 acres, distinguished by its natural palm tree surroundings that provide both privacy and aesthetic appeal.',
        'Addres' => 'Al Shorouk City',
        'image' => asset('assets/images/allprojects/projects/1.jpg'),
        'link' => '#'
    ],
    [
        'title' => 'Palm Island',
        'description' => 'Palm Island is a residential compound directly on Suez road, spanning 12 acres. It features six blocks of modern, spacious apartments.',
        'Addres' => 'Al Shorouk City',
        'image' => asset('assets/images/allprojects/projects/2.png'),
        'link' => '#'
    ],
    [
        'title' => 'Palm Hub',
        'description' => 'Palm Hub is an expansive and uniquely designed commercial destination, occupying an impressive 8,000m². Modern mall with three floors.',
        'Addres' => 'Al Shorouk City',
        'image' => asset('assets/images/allprojects/projects/3.jpg'),
        'link' => '#'
    ],
    [
        'title' => 'Palm Square',
        'description' => 'Palm Square is an expansive commercial destination, occupying 10,000m² across ground and two floors. Located on Suez Road.',
        'Addres' => 'Al Shorouk City',
        'image' => asset('assets/images/allprojects/projects/4.jpg'),
        'link' => '#'
    ],
    [
        'title' => 'Palm East',
        'description' => 'Palm East is a high-end residential development in New Cairo, spanning 12 acres. Located near 90th North and Mohamed Nagui axis.',
        'Addres' => 'New Cairo',
        'image' => asset('assets/images/allprojects/projects/5.jpeg'),
        'link' => '#'
    ],
    [
        'title' => 'Palm District',
        'description' => 'Coming Soon',
        'Addres' => 'New Cairo',
        'image' => asset('assets/images/allprojects/projects/6.jpg'),
        'link' => '#'
    ]
];
@endphp

<section class="py-24">
    <!-- Title -->
    <div class="container mx-auto px-4 mb-16">
        <h2 class="section-title" data-aos="fade-up" data-aos-duration="800">
            Our Projects
        </h2>
    </div>
    
    <!-- Swiper -->
    <div class="swiper projects-swiper overflow-visible max-w-[1400px] mx-auto px-4" 
         data-aos="fade-up" 
         data-aos-delay="100" 
         data-aos-duration="1000"
         data-swiper-autoplay="3000"
         data-swiper-loop="true"
         data-swiper-speed="1000"
         data-swiper-lazy="true"
         data-swiper-lazy-preloader-class="swiper-lazy-preloader"
         data-swiper-observer="true"
         data-swiper-observer-parents="true">
        
        <div class="swiper-wrapper">
            
            @foreach($projects as $project)
            <div class="swiper-slide p-2">
                <div class="project-card">
                    <div class="project-image-wrapper">
<img src="{{ $project['image'] }}" 
     alt="{{ $project['title'] }}" 
     class="project-image"
     loading="lazy"
     decoding="async"
     width="400"
     height="300"
     sizes="(max-width: 640px) 100vw, (max-width: 1024px) 50vw, 33vw">

                        <div class="project-overlay"></div>
                        <div class="project-location-badge">
                            <img src="{{ asset('assets/images/allprojects/projects/icons/lt.svg') }}" 
                                 alt="Location" 
                                 width="20" 
                                 height="20">
                            <span class="text-sm font-semibold">{{ $project['Addres'] }}</span>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">{{ $project['title'] }}</h3>
                            <p class="project-description">{{ $project['description'] }}</p>
                        </div>
                    </div>
                    <div class="p-4 flex justify-center">
                        <a href="{{ $project['link'] }}" class="explore-button">
                            <span>Explore</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>