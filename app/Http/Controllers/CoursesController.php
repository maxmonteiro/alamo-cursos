<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = [
            [
                'id' => '1',
                'name' => 'Téc. em Informática',
                'workload' => 1400
            ],
            [
                'id' => '2',
                'name' => 'Téc. em Enfermagem',
                'workload' => 1400
            ]
        ];
        return view('courses')->with('courses',$courses);
    }
}
