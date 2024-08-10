<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function about()
    {

        return view('front.about');
    }

    public function company()
    {

        return view('front.company');
    }

    public function job()
    {
        return view('front.job');
    }
}
