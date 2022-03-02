<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('project.index', [
            'projects' => $projects
        ]);
    }

    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $otherProjects = Project::latest()->take(10)->get();

        return view('project.show', [
            'project' => $project,
            'otherProjects' => $otherProjects
        ]);
    }
}
