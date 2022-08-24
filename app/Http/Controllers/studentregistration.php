<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Section;
use App\Models\Studentclass;
use App\Models\Studentregistration as ModelsStudentregistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class studentregistration extends Controller
{
    // show register student in admin

    public function registerStudent(){
        $registerStudent = ModelsStudentregistration::paginate(8);
        $id = 1;
        return view('backend.student.student', compact('registerStudent','id'));
    }

    // student profile page view controller
    
    public function registerStudentProfile($id){

        $studentprofile= ModelsStudentregistration::find($id);
        $studentbatch= Batch::all();
        $studentcourse= Course::all();
        $studentclass = Studentclass::all();
        $studentsection = Section::all();

        return view('backend.student.profile', compact('studentprofile','studentbatch','studentcourse','studentclass','studentsection'));

    }
    
    // pdf page view controller
    
    public function mpdf($id){
        $student = ModelsStudentregistration::find($id);
        $studentbatch= Batch::all();
        $studentcourse= Course::all();
        $studentclass = Studentclass::all();
        $studentsection = Section::all();
        
        $pdf = PDF::loadView('backend.student.pdf', compact('student','studentbatch','studentcourse','studentclass','studentsection'));
        return $pdf->stream('student.pdf');

     }



}
