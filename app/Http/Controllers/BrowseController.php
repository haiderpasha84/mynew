<?php

namespace App\Http\Controllers;


use App\Job;
use App\Category;
use Illuminate\Http\Request;

class BrowseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->category){
            $jobs = Job::with('categories')->whereHas('categories', function($query){
                    $query->where('slug', request()->category);
            });
            $categories = Category::all();
            $categoryName = optional($categories->where('slug', request()->category)->first())->cname;
        }else {
            $jobs = Job::take(12);
            $categories = Category::all();
            $categoryName = 'Recent Jobs';
        }
            $jobs = $jobs->paginate(6);
        

            return view('browsejob')->with([
                'jobs' => $jobs,
                'categories' => $categories,
                'categoryName' => $categoryName,
                ]);
        
       
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $job = Job::where('slug', $slug)->firstOrFail();
        $mightAlsoLike = Job::where('slug','!=', $slug)->inRandomOrder()->take(4)->get();
        return view('jobdetail')->with([
            'job'=>$job,
            'mightAlsoLike' => $mightAlsoLike,
        ]);

    }

}
