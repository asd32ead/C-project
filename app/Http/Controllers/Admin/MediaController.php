<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    public function index()
    {
        $media = Media::latest()->paginate(10);
        return view('admin.media.index', compact('media'));
    }

    public function create()
    {
        return view('admin.media.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:news,event,gallery',
            'status' => 'required|in:active,inactive'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('media', 'public');
        }

        Media::create($validated);

        return redirect()->route('admin.media.index')->with('success', 'تم إنشاء المحتوى بنجاح');
    }

    public function show(Media $media)
    {
        return view('admin.media.show', compact('media'));
    }

    public function edit(Media $media)
    {
        return view('admin.media.edit', compact('media'));
    }

    public function update(Request $request, Media $media)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type' => 'required|in:news,event,gallery',
            'status' => 'required|in:active,inactive'
        ]);

        if ($request->hasFile('image')) {
            if ($media->image) {
                Storage::disk('public')->delete($media->image);
            }
            $validated['image'] = $request->file('image')->store('media', 'public');
        }

        $media->update($validated);

        return redirect()->route('admin.media.index')->with('success', 'تم تحديث المحتوى بنجاح');
    }

    public function destroy(Media $media)
    {
        if ($media->image) {
            Storage::disk('public')->delete($media->image);
        }

        $media->delete();

        return redirect()->route('admin.media.index')->with('success', 'تم حذف المحتوى بنجاح');
    }
}