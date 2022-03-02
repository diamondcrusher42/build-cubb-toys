<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carouselProjects = Project::latest()->take(10)->get();

        return view('home', [
            'carouselProjects' => $carouselProjects
        ]);
    }
}
