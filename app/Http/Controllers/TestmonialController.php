<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;

class TestmonialController extends Controller
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
        $testimonials = Testmonial::latest()->paginate();
        $data = ['testimonials' => $testimonials];
        return view('dashboard.testimonial.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.testimonial.create');
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
            "name" => "required",
            "company" => "required",
            "position" => "required",
            "message" => "required",
        ]);
        $testmonial = new Testmonial($form_data);

        try {
            if (!$testmonial->save()) {
                return back();
            }
            return redirect()->route('testimonial.index');
        } catch (\Throwable $th) {
            return back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testmonial $testmonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testmonial $testimonial)
    {
        $data = ['testimonial' => $testimonial];

        return view('dashboard.testimonial.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testmonial $testimonial)
    {
        $form_data = $this->validate($request, [
            "name" => "required",
            "company" => "required",
            "position" => "required",
            "message" => "required",
        ]);



        if (!$testimonial->update($form_data)) {
            return back();
        }

        return redirect()->route('testimonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testmonial  $testmonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testmonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonial.index');
    }
}
