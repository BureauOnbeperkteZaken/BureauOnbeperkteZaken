<?php

namespace App\Http\Controllers;

use App\Models\Block;
use App\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $projectData = [];

        $projects = Project::all()->take(3);

        return view('app.home', ['projects' => $projects]);
    }
}
