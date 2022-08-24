<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Course;
use App\Models\Section;
use App\Models\Studentclass;
use App\Models\Studentregistration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;



    // form  viwe route
    public function student(){
        $data['class']=DB::table('studentclasses')->get();
        $studentbatch =Batch::all();
        $studentcourse = Course::all();
        return view('studentregister',$data, compact('studentbatch','studentcourse'));
    }

    // get the data form ajax
    public function getSection(Request $request){
        $cid= $request->post('cid');
        $section=DB::table('sections')->where('class',$cid)->orderBy('section','asc')->get();
        $html='<option value="">Select Section</option>';
        foreach($section as $list){
			$html.='<option value="'.$list->id.'">'.$list->section.'</option>';
		}
		echo $html;
    }

    // student registration

    public function studentRegistration(Request $request){
        $request->validate([

            'EiStName'=>'required|string|max:50',
            'BaStName'=>'required|string|max:70',
            'EiFaName'=>'required|string|max:50',
            'BaFaName'=>'required|string|max:70',
            'EiMoName'=>'required|string|max:50',
            'BaMoName'=>'required|string|max:70',
            'batch'=>'required|',
            'course'=>'required|',
            'class'=>'required',
            'section'=>'required',
            'roll'=>'required|numeric',
            'date'=>'required|date',
            'gander'=>'required',
            'number'=>'required|numeric',
       ]);

       $studentreg = new Studentregistration();
       $studentreg->studentName  = $request->EiStName;
       $studentreg->BaStudentName  = $request->BaStName;
       $studentreg->FatherName  = $request->EiFaName;
       $studentreg->BaFatherName  = $request->BaFaName;
       $studentreg->MotherName  = $request->EiMoName;
       $studentreg->BaMotherName  = $request->BaMoName;
       $studentreg->batch  = $request->batch;
       $studentreg->course  = $request->course;
       $studentreg->class  = $request->class;
       $studentreg->section  = $request->section;
       $studentreg->roll  = $request->roll;
       $studentreg->date  = $request->date;
       $studentreg->gender  = $request->gander;
       $studentreg->number  = $request->number;

       $studentreg->save();

       return back()->with('success','আপনার নিবন্ধন সফল হয়েছে।  ধন্যবাদ');

    }

    // student edit data

    // Register student edit page show

    public function editStudent($id){

        $studentbatch= Batch::all();
        $studentcourse= Course::all();
        $registerStudent = Studentregistration::find($id);
        $studentClass = Studentclass::all();
        $studentsection = Section::all();
        return view('backend.student.edit', compact('registerStudent','studentClass','studentbatch','studentcourse','studentsection'));
    }

   // student update

    public function UpdateStudent(Request $request, $id){
        $request->validate([

            'EiStName'=>'required|string|max:50',
            'BaStName'=>'required|string|max:70',
            'EiFaName'=>'required|string|max:50',
            'BaFaName'=>'required|string|max:70',
            'EiMoName'=>'required|string|max:50',
            'BaMoName'=>'required|string|max:70',
            'batch'=>'required|',
            'course'=>'required|',
            'class'=>'required',
            'section'=>'required',
            'roll'=>'required|numeric',
            'date'=>'required|date',
            'gander'=>'required',
            'number'=>'required|numeric',
       ]);

       $studentreg = Studentregistration::find($id);
       $studentreg->studentName  = $request->EiStName;
       $studentreg->BaStudentName  = $request->BaStName;
       $studentreg->FatherName  = $request->EiFaName;
       $studentreg->BaFatherName  = $request->BaFaName;
       $studentreg->MotherName  = $request->EiMoName;
       $studentreg->BaMotherName  = $request->BaMoName;
       $studentreg->batch  = $request->batch;
       $studentreg->course  = $request->course;
       $studentreg->class  = $request->class;
       $studentreg->section  = $request->section;
       $studentreg->roll  = $request->roll;
       $studentreg->date  = $request->date;
       $studentreg->gender  = $request->gander;
       $studentreg->number  = $request->number;

       $studentreg->save();

       return back()->with('success','আপনার নিবন্ধন আপডেট সফল হয়েছে।  ধন্যবাদ');

    }



    // student delete from admin

    public function deleteStudent($id){

        $studentDelete = Studentregistration::find($id);
        $studentDelete->delete();

        return back()->with('success','আপনার নিবন্ধন মুছা সফল হয়েছে।');
    }
}
