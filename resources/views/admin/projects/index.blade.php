@extends('admin.layouts.app')

@section('title', 'إدارة المشاريع')
@section('page-title', 'إدارة المشاريع')

@section('content')
<div class="flex justify-between items-center mb-6">
    <h2 class="text-xl font-semibold">قائمة المشاريع</h2>
    <a href="{{ route('admin.projects.create') }}" 
       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
        <i class="fas fa-plus ml-2"></i> إضافة مشروع جديد
    </a>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">العنوان</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">النوع</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">العنوان</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">الحالة</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">مميز</th>
                <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase">الإجراءات</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($projects as $project)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <img class="h-10 w-10 rounded-lg object-cover ml-4" 
                                 src="{{ Storage::url($project->image) }}" 
                                 alt="{{ $project->title }}">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $project->title }}</div>
                                <div class="text-sm text-gray-500">{{ Str::limit($project->description, 50) }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                   {{ $project->type === 'residential' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                            {{ $project->type === 'residential' ? 'سكني' : 'تجاري' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $project->address }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                   {{ $project->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                            {{ $project->status === 'active' ? 'نشط' : 'غير نشط' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        @if($project->featured)
                            <i class="fas fa-star text-yellow-500"></i>
                        @else
                            <i class="far fa-star text-gray-400"></i>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('admin.projects.show', $project) }}" 
                           class="text-blue-600 hover:text-blue-900 ml-3">عرض</a>
                        <a href="{{ route('admin.projects.edit', $project) }}" 
                           class="text-indigo-600 hover:text-indigo-900 ml-3">تعديل</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" 
                              method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('هل أنت متأكد من الحذف؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="px-6 py-4 text-center text-gray-500">لا توجد مشاريع</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-6">
    {{ $projects->links() }}
</div>
@endsection