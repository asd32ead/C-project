<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'لوحة التحكم')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        body { font-family: 'Cairo', sans-serif; }
        .sidebar { min-height: 100vh; }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="sidebar w-64 bg-gray-800 text-white">
            <div class="p-4">
                <h2 class="text-xl font-bold">لوحة التحكم</h2>
            </div>
            
            <nav class="mt-8">
                <a href="{{ route('admin.dashboard') }}" 
                   class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.dashboard') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-tachometer-alt ml-2"></i> الرئيسية
                </a>
                
                <a href="{{ route('admin.projects.index') }}" 
                   class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.projects.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-building ml-2"></i> المشاريع
                </a>
                
                <a href="{{ route('admin.media.index') }}" 
                   class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.media.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-images ml-2"></i> الإعلام
                </a>
                
                <a href="{{ route('admin.contacts.index') }}" 
                   class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.contacts.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-envelope ml-2"></i> رسائل التواصل
                    @if($newContactsCount = \App\Models\Contact::where('status', 'new')->count())
                        <span class="bg-red-500 text-xs px-2 py-1 rounded-full mr-2">{{ $newContactsCount }}</span>
                    @endif
                </a>
                
                <a href="{{ route('admin.careers.index') }}" 
                   class="block px-4 py-2 hover:bg-gray-700 {{ request()->routeIs('admin.careers.*') ? 'bg-gray-700' : '' }}">
                    <i class="fas fa-briefcase ml-2"></i> طلبات التوظيف
                    @if($newCareersCount = \App\Models\Career::where('status', 'new')->count())
                        <span class="bg-red-500 text-xs px-2 py-1 rounded-full mr-2">{{ $newCareersCount }}</span>
                    @endif
                </a>
                
                <div class="border-t border-gray-700 mt-4 pt-4">
                    <a href="{{ route('home') }}" class="block px-4 py-2 hover:bg-gray-700" target="_blank">
                        <i class="fas fa-external-link-alt ml-2"></i> عرض الموقع
                    </a>
                </div>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-sm border-b">
                <div class="px-6 py-4">
                    <h1 class="text-2xl font-semibold text-gray-800">@yield('page-title', 'لوحة التحكم')</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="p-6">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                @if(session('error'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @yield('content')
            </main>
        </div>
    </div>

    @stack('scripts')
</body>
</html>