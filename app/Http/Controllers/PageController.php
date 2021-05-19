<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testmonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{
    public function index()
    {
        $projects = Project::with('images')->latest()->limit(5)->get();
        $testmonials = Testmonial::latest()->get();
        $services = Service::latest()->get();
        $team_members = User::latest()->get();
        $data = ["testmonials" => $testmonials, "projects" => $projects, "services" => $services, "team_members" => $team_members];
        return view('pages/index', $data);
    }

    public function about()
    {
        return view('pages/about');
    }

    public function work(Request $request)
    {
        $query = $request->get('query');
        $projects = Project::query();
        if ($query != null) {
            $projects = $projects->where('project_title', 'LIKE', '%' . $query . '%')
                ->orWhere('brief', 'LIKE', '%' . $query . '%')
                ->orWhere('result', 'LIKE', '%' . $query . '%');
        }
        $projects = $projects->with('images')->paginate(10);
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

    public function post_contact(Request $request)
    {
        $form_data  = $this->validate($request, [
            "name" => "required",
            "email" => "required",
            "organization" => "required",
            "message" => "required",
        ]);

        $emails = ['info@caravanmedia.co'];

        Mail::to($emails)->send(new ContactEmail($form_data));

        return back();
    }
    public function opportunity()
    {
        return view('pages/opportunity');
    }
}
