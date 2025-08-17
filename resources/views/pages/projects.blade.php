@extends('layouts.app')

@section('title', 'Our Projects ')
@section('description', 'Explore portfolio of residential and commercial projects')

@section('content')
@php
$projects = [
    'residential' => [
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
    ],
    'commercial' => [
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
    ],
];
@endphp

<x-projects.banner/>
<x-projects.residential :projects="$projects" />
<x-projects.commercial :projects="$projects" />
@endsection