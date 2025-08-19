<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Media;
use App\Models\Contact;
use App\Models\Career;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'projects' => Project::count(),
            'media' => Media::count(),
            'contacts' => Contact::where('status', 'new')->count(),
            'careers' => Career::where('status', 'new')->count(),
        ];

        $recentContacts = Contact::latest()->take(5)->get();
        $recentCareers = Career::latest()->take(5)->get();

        return view('admin.dashboard', compact('stats', 'recentContacts', 'recentCareers'));
    }
}