<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;

class LandingPageController extends Controller
{
    public function index()
    {
        $aboutUs = AboutUs::first();
        return view('landing-page', compact('aboutUs'));
    }
}
