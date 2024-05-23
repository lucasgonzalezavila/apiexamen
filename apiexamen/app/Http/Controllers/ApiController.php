<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\students;

class ApiController extends Controller{
    
    public function index(){
        $students= students::All();

        return response()->json($students);
    }

    public function store(Request $request) {
        $validateStudents = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:email',
            'course_id' => 'required'
        ]);

        $student = students::create($validateStudents);

        return response()->json($student, 201);
    }

    public function find($id){
        $student= students::FindOrFail($id);

        return response()->json($student);
    }

    public function put($id){
        $student= students::FindOrFail($id);

    }
    public function delete($id){
        $student= students::FindOrFail($id);
        $student->delete();
        return response()->json(null);
    }
}
