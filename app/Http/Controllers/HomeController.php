<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class HomeController extends Controller
{
    public function __invoke()
    {
         $courses = Course::where('status', '3')->get()->take(8);
        // return $courses;
        //return Course::find(2)->rating;

        return view('welcome', compact('courses'));
    }
}
