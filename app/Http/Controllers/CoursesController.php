<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses')->with('courses',$courses);
    }

    public function show($id) {
        $course = Course::find($id);
        $course->students;
        return view('courses_students', compact('course'));       
    }
}
