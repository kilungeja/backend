<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $testmonials = Testmonial::latest()->get();
        $data = ["testmonials" => $testmonials];
        return view('pages/index', $data);
    }

    public function about()
    {
        return view('pages/about');
    }

    public function work()
    {
        $projects = Project::with('images')->paginate(10);

        $data = ["projects" => $projects];
        return view('pages/work', $data);
    }

    public function single_work(Project $project)
    {
        $next_project = Project::with('images')->find($project->id + 1);
        $data = ["project" => $project, "next_project" => $next_project];
        return view('pages/single_work', $data);
    }

    public function contact()
    {
        return view('pages/contact');
    }
    public function opportunity()
    {
        return view('pages/opportunity');
    }
}
