<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;
    protected $student;

    public function index(){
        return view('add-students');

//
//        $this->students = new Student();
//        $this->students->newStudent();
//        return 'Success';
//        $this->students = Student::getAllStudent();
//        return view('all', ['students' => $this->students]);
//        return view('all')->with([
//            'data' => $this->name,
//            'city' => $this->city
//        ]);
//        return view('all', compact('name', 'city'));
    }
    public function create(Request $request)
    {
//        return $request->all();
        $this->student = new Student();
        $this->student->name = $request->name;
        $this->student->email = $request->email;
        $this->student->mobile = $request->mobile;
        $this->student->save();

        return redirect()->back()->with('message', 'Student info save sucessfully,');

    }
    public function manage()
    {
        $this->students = Student::orderBy('id', 'desc')->get();
//        return Student::
        return view('manage-student',['students' => $this->students]);
    }
    public function edit($id)
    {
        $this->student = Student::find($id);

        return view('edit-student',['student'=> $this->student]);
    }
    public function update(Request $request, $id)
    {
       $this->student = Student::find($id);
       $this->student->name  = $request->name;
       $this->student->email  = $request->email;
       $this->student->mobile  = $request->mobile;
       $this->student->save();

       return redirect('/manage-student')->with('message','Student Info Update Successfully');
    }
    public function delete($id)
    {
        $this->student = Student::find($id);
        $this->student->delete();

        return redirect('/manage-student')->with('message','Student Info Delete Successfully');

    }
}
