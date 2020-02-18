<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public $subjects = array(
        ["java",100],
        ["javaScript",90],
        ["PHP",70],
        ["Bootstrap",100],
        ["Laravel",100],
    );
    function subject() {
        return view("subject") -> with("subjects",$this->subjects);
    }
}
