<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::latest()->paginate();
        $data = ['projects' => $project];
        return view('dashboard.project.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $form_data = $this->validate($request, [
            'project_title' => 'required',
            'brief' => 'required',
            'result' => '',
            "video_url" => '',
            'project_imgs.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $images = $request->file('project_imgs');
        $images_urls =  [];
        collect($images)->each(function ($file) use (&$images_urls) {
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads', $fileName, 'public');
            array_push($images_urls, $filePath);
        });
        $project = new Project();
        $project->project_title = $form_data['project_title'];
        $project->brief = $form_data['brief'];
        $project->video_url = $form_data['video_url'];
        $project->result = $form_data['result'];
        try {
            if ($project->save()) {
                collect($images_urls)->each(function ($img_url) use ($project) {
                    $project->images()->create(['image_url' => '/storage/' . $img_url]);
                });

                return redirect()->route('project.index');
            } else {
                dd('Did not save to db');
            }
        } catch (\Throwable $th) {
            dd($th);
        }
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $data = ['project' => $project];
        return view('dashboard.project.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $form_data = $this->validate($request, [
            'project_title' => 'required',
            'brief' => 'required',
            'result' => '',
            'video_url' => '',
        ]);



        if (!$project->update($form_data)) {
            return back();
        }

        return redirect()->route('project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $images = $project->images()->get();
        $images_urls =  [];
        $images->each(function (Image $image) use (&$images_urls) {
            array_push($images_urls, $image->image_url);
        });
        $deleted = $this->delete_pictures(collect($images_urls));
        if (!$deleted) {
            return back();
        }
        $project->delete();
        return redirect()->route('project.index');
    }

    private function delete_pictures(Collection $pictures)
    {
        $pic_paths = $pictures
            ->map(function ($pic) {
                return str_replace("/storage", "public", $pic);
            });

        return Storage::delete($pic_paths->toArray());
    }
}
