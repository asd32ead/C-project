@extends('layouts.app')

@section('title', 'Media Center')
@section('description', 'Explore our media gallery showcasing our latest events, projects and achievements')

@section('content')
@php
$mediaItems = [
    [
        'image' => asset('assets/images/media/gallery/1.jpg'),
        'title' => 'Palm Capital',
        'description' => 'Palm Capital project launching'
    ],
    [
        'image' => asset('assets/images/media/gallery/2.jpg'),
        'title' => 'Palm Capital Construction',
        'description' => 'Check Palm Capital latest construction updates'
    ],
    [
        'image' => asset('assets/images/media/gallery/3.jpg'),
        'title' => 'Palm East',
        'description' => 'Palm East launching event'
    ],
    [
        'image' => asset('assets/images/media/gallery/4.jpg'),
        'title' => 'Palm Island',
        'description' => ' Palm Island project launching'
    ],
    [
        'image' => asset('assets/images/media/gallery/5.jpg'),
        'title' => 'Press Conference',
        'description' => ' Press Conference'
    ],
    [
        'image' => asset('assets/images/media/gallery/6.jpg'),
        'title' => 'Palm Capital',
        'description' => 'Construction Update January 2025'
    ],
];
@endphp

<x-media.banner />
<x-media.gallery :mediaItems="$mediaItems" />

@endsection
