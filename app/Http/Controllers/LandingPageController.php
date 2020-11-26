<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::inRandomOrder()->take(8)->get();
        return view('landingpage')->with('jobs', $jobs);
    }

   
}
