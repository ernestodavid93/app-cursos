<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(){

        $courses = Course::where('status', '3')->get();

        //return $courses;

        return view('courses.index');
    }
}
