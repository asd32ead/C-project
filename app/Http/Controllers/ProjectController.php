<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
 
    public function index()
    {
        $projects = Project::where('status', 'active')->get();
        return view('pages.projects', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('pages.project-detail', compact('project'));
    }
}