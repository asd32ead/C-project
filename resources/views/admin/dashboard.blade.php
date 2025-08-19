@extends('admin.layouts.app')

@section('title', 'لوحة التحكم الرئيسية')
@section('page-title', 'لوحة التحكم الرئيسية')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    <!-- Stats Cards -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                <i class="fas fa-building text-2xl"></i>
            </div>
            <div class="mr-4">
                <p class="text-sm font-medium text-gray-600">المشاريع</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['projects'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-100 text-green-600">
                <i class="fas fa-images text-2xl"></i>
            </div>
            <div class="mr-4">
                <p class="text-sm font-medium text-gray-600">المحتوى الإعلامي</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['media'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                <i class="fas fa-envelope text-2xl"></i>
            </div>
            <div class="mr-4">
                <p class="text-sm font-medium text-gray-600">رسائل جديدة</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['contacts'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                <i class="fas fa-briefcase text-2xl"></i>
            </div>
            <div class="mr-4">
                <p class="text-sm font-medium text-gray-600">طلبات توظيف جديدة</p>
                <p class="text-2xl font-semibold text-gray-900">{{ $stats['careers'] }}</p>
            </div>
        </div>
    </div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Recent Contacts -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b">
            <h3 class="text-lg font-semibold">أحدث رسائل التواصل</h3>
        </div>
        <div class="p-6">
            @forelse($recentContacts as $contact)
                <div class="flex items-center justify-between py-3 border-b last:border-b-0">
                    <div>
                        <p class="font-medium">{{ $contact->first_name }} {{ $contact->last_name }}</p>
                        <p class="text-sm text-gray-600">{{ $contact->email }}</p>
                        <p class="text-xs text-gray-500">{{ $contact->created_at->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('admin.contacts.show', $contact) }}" 
                       class="text-blue-600 hover:text-blue-800">
                        عرض
                    </a>
                </div>
            @empty
                <p class="text-gray-500">لا توجد رسائل جديدة</p>
            @endforelse
        </div>
    </div>

    <!-- Recent Career Applications -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b">
            <h3 class="text-lg font-semibold">أحدث طلبات التوظيف</h3>
        </div>
        <div class="p-6">
            @forelse($recentCareers as $career)
                <div class="flex items-center justify-between py-3 border-b last:border-b-0">
                    <div>
                        <p class="font-medium">{{ $career->first_name }} {{ $career->last_name }}</p>
                        <p class="text-sm text-gray-600">{{ $career->position }}</p>
                        <p class="text-xs text-gray-500">{{ $career->created_at->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('admin.careers.show', $career) }}" 
                       class="text-blue-600 hover:text-blue-800">
                        عرض
                    </a>
                </div>
            @empty
                <p class="text-gray-500">لا توجد طلبات جديدة</p>
            @endforelse
        </div>
    </div>
</div>
@endsection