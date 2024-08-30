<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Profile;


class PortoController extends Controller
{
    public function home()
    {
        $home = Profile::first();
        return view('portofolio.home', compact('home'));
    }

    public function about()
    {
        $home = Profile::first();

        return view('portofolio.about',compact('home'));
    }
}
