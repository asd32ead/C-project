@extends('layouts.app')

@section('title', 'Careers')
@section('description', 'Join our team page')

@section('content')
@php
$positions = [
    [
        'title' => 'Senior Property Consultant',
        'requirements' => [
            'Provide expert guidance on property buying, selling, and leasing.',
            'Analyze market trends and identify high-value investment opportunities.',
            'Conducted property viewings, facilitated negotiations, and closed deals.',
            'Maintain strong relationships with clients and a network of industry contacts.',
            'Offer personalized service and support to clients post-transaction.',
            'Achieve sales targets and contribute to the growth of the business.'
        ]
    ],
];
@endphp

<x-careers.banner />
<x-careers.positions :positions="$positions" />

@endsection
