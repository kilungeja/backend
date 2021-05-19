<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = User::where('id', '!=', 1)->with('role')->latest()->paginate();
        $data = ['teams' => $teams];
        return view('dashboard.team.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $data = ['roles' => $roles];
        return view('dashboard.team.create', $data);
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
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            'role_id' => "required",
            "linkedIn_account" => "required",
            "profile_pic"  =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $file = $request->file('profile_pic');

        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('uploads/profile', $fileName, 'public');
        $form_data["profile_pic"] = '/storage/' . $filePath;
        $team = new User($form_data);
        try {
            if (!$team->save()) {
                return back();
            }
            return redirect()->route('team.index');
        } catch (\Throwable $th) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $team)
    {
        $roles = Role::all();
        $data = ['team' => $team, 'roles' => $roles];

        return view('dashboard.team.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $team)
    {
        $form_data = $this->validate($request, [
            "first_name" => "required",
            "last_name" => "required",
            "email" => "required",
            'role_id' => "required",
            "linkedIn_account" => "required",
        ]);

        if (!$team->update($form_data)) {
            return back();
        }

        return redirect()->route('team.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $team)
    {
        $team->delete();
        return redirect()->route('team.index');
    }
}
