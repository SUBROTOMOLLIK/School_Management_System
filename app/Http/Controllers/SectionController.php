<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Studentclass;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= 1;
        $studentclass= Studentclass::all();
        $studentsection = Section::paginate(8);
        return view('backend.section.index', compact('studentsection','studentclass','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studentclass = Studentclass::all();
        return view('backend.section.create', compact('studentclass'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'section' => 'string|required',
        ]);

        $section = new Section();
        $section->section = $request->section;
        $section->class = $request->class;

        $section->save();

        return redirect()->route('CreateStudentSection')->with('success','Section create Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentclass = Studentclass::all();
        $studentsection = Section::find($id);
        return view('backend.section.edit', compact('studentclass','studentsection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'section' => 'string|required',
        ]);

        $section = Section::find($id);
        $section->section = $request->section;
        $section->class = $request->class;

        $section->save();

        return redirect()->route('EditStudentSection', $section->id)->with('success','Section Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $section->delete();

        return redirect()->route('ShowStudentSection')->with('success', 'Section Delete Successful');
    }
}
