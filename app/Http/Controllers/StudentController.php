<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('student.index');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:10',
            'content' => 'required',
            'cover'=>'required|mimes:jpg,png'
        ]);

        $path = $request->cover->storeAs('public/cover', time().'-'.$request->cover->getClientOriginalName());
        $storagePath = str_replace("public","storage",$path);

        $student = new Student();
        $studen->title;
    }
}


