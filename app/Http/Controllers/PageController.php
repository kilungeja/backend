<?php

namespace App\Http\Controllers;

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
        return view('pages/work');
    }

    public function single_work()
    {
        return view('pages/single_work');
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
