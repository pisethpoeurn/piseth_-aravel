<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public $students = ["preab","Sovath","Reach","Rith","Kanha"];
    public function showStudent() {
        return view("showStudent")-> with('students',$this->students);
    }
    public function searchStudent($name) {
        foreach ($this->students as $student) {
            if($student == $name) {
                
            } 
        }
    }

    public function getStudent(){
        $students = Student::all();
        return view("student",compact("students"));
    }

    public function showFormStudent(){
        return view("formStudents");
    }

    public function addStudent(Request $request){
        
        $students = new Student;
        $students->firstName="$request->get('fname')";
        $students->lastName="$request->get('lname')";
        $students->age="$request->get('age')";

        $students->save();
        return redirect('student');
    }

    public function showUpdateStudent($id){
        $students= Student::find($id);
        return view('editeformstudent',compact('students'));
    }

    public function updateStudent($id, Request $request){
        $students = Student::find($id);
        $students ->firstName=$request->fname;
        $students ->lastName=$request->lname;
        $students ->age=$request->age;

        $students->save();
        return redirect('student');

    }


    public function saveStudent (Request $request) {
        $request->validate([
            'firstName'=>'required',
            'lastName'=>'required',
        ]);
    }

    public function delete($id){
        $students= Student::find($id);
        $students->delete();

        return redirect('student');
    }

}
