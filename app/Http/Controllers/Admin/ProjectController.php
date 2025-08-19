<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'type' => 'required|in:residential,commercial',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('gallery')) {
            $gallery = [];
            foreach ($request->file('gallery') as $file) {
                $gallery[] = $file->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }

        Project::create($validated);

        return redirect()->route('admin.projects.index')->with('success', 'تم إنشاء المشروع بنجاح');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string|max:255',
            'type' => 'required|in:residential,commercial',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'gallery.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:active,inactive',
            'featured' => 'boolean'
        ]);

        if ($request->hasFile('image')) {
            if ($project->image) {
                Storage::disk('public')->delete($project->image);
            }
            $validated['image'] = $request->file('image')->store('projects', 'public');
        }

        if ($request->hasFile('gallery')) {
            $gallery = $project->gallery ?? [];
            foreach ($request->file('gallery') as $file) {
                $gallery[] = $file->store('projects/gallery', 'public');
            }
            $validated['gallery'] = $gallery;
        }

        $project->update($validated);

        return redirect()->route('admin.projects.index')->with('success', 'تم تحديث المشروع بنجاح');
    }

    public function destroy(Project $project)
    {
        if ($project->image) {
            Storage::disk('public')->delete($project->image);
        }

        if ($project->gallery) {
            foreach ($project->gallery as $image) {
                Storage::disk('public')->delete($image);
            }
        }

        $project->delete();

        return redirect()->route('admin.projects.index')->with('success', 'تم حذف المشروع بنجاح');
    }
}