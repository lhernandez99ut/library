<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class StudentController extends Controller
{
    public function others(){
        return "TEXTO";
    }

    public function index() {
        $students = App\Student::all();
        
        return view('student', compact('students'));
    }

    public function store(Request $request) {
        $student = new App\Student();
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->dni = $request->dni;
        $student->career = $request->career;
        $student->address = $request->address;

        $student->save();
        return back()->with('mensaje', 'The Student has been added... ');
    }

    public function edit($id){
        $student = App\Student::findOrFail($id);

        return view('library/editstudent', compact('student'));
    }

    public function save(Request $request, $id){
        $student = App\Student::findOrFail($id);
        $student->name = $request->name;
        $student->lastname = $request->lastname;
        $student->dni = $request->dni;
        $student->career = $request->career;
        $student->address = $request->address;

        $student->save();

        return back()->with('mensaje', 'The Student has been updated ...');
    }

    public function delete($id){

        $student = App\Student::findOrFail($id);
        
        $student->delete();

        return back()->with('mensaje', "The student has been deleted ...");
    }


    public function show() {
        return "Metodo show";
    }
}
