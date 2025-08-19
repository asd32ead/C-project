<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Media;

class MediaController extends Controller
{
 
    public function index()
    {
        $media = Media::where('status', 'active')->latest()->get();
        return view('pages.media', compact('media'));
    }

    public function show(Media $media)
    {
        return view('pages.media-detail', compact('media'));
    }
}