<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // return view('students.index');

        $students = [
            [
                "name" => "Bob",
            ],
            [
                "name" => "Alice",
            ]
        ];

        // dd($students);
        return view('students.index', compact('students'));

    }
}
