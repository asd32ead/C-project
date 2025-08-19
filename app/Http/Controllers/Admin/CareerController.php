<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Career;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CareerController extends Controller
{
    public function index()
    {
        $careers = Career::latest()->paginate(15);
        return view('admin.careers.index', compact('careers'));
    }

    public function show(Career $career)
    {
        $career->update(['status' => 'reviewed']);
        return view('admin.careers.show', compact('career'));
    }

    public function updateStatus(Request $request, Career $career)
    {
        $validated = $request->validate([
            'status' => 'required|in:new,reviewed,contacted,rejected'
        ]);

        $career->update($validated);

        return redirect()->back()->with('success', 'تم تحديث الحالة بنجاح');
    }

    public function downloadCV(Career $career)
    {
        if ($career->cv_path && Storage::disk('public')->exists($career->cv_path)) {
            return Storage::disk('public')->download($career->cv_path);
        }

        return redirect()->back()->with('error', 'الملف غير موجود');
    }

    public function destroy(Career $career)
    {
        if ($career->cv_path) {
            Storage::disk('public')->delete($career->cv_path);
        }

        $career->delete();
        return redirect()->route('admin.careers.index')->with('success', 'تم حذف الطلب بنجاح');
    }
}