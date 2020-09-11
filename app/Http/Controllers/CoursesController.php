<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('courses')->with('courses',$courses);
    }

    public function show($id) 
    {
        $course = Course::find($id);
        $course->students;
        return view('courses_students', compact('course'));       
    }

    public function generateCertificate($courseId, $studentId)
    {
        $student = Student::find($studentId);
        $course = Course::find($courseId);
        $pdf = App::make('dompdf.wrapper');
        $pdf->setPaper('A4', 'landscape');
        $pdf->loadView('certificate_pdf', compact(['course','student']));
        return $pdf->stream();
    }
}
