<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages/index');
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
        $data = ["project" => $project];
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
