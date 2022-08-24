<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studentclass;

class StudentclassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $id= 1;
        $studentclass = Studentclass::paginate(8);
        return view('backend.class.index', compact('studentclass','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('backend.class.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([

            'class' => 'string|required|max:100',
        ]);

        $studentclass = new Studentclass();
        $studentclass->class = $request->class;
        $studentclass->save();

        return redirect()->route('CreateStudentClass')->with('success','Class Add Successful');
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
        $studentclass = Studentclass::find($id);
        return view('backend.class.edit', compact('studentclass'));
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

            'class' => 'string|required|max:100',
        ]);

        $studentclass = Studentclass::find($id);
        $studentclass->class = $request->class;
        $studentclass->save();

        return redirect()->route('EditStudentClass', $studentclass->id)->with('success','Class Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentclass = Studentclass::find($id);
        $studentclass->delete();

        return back()->with('success', 'Class Delete Successfull');
    }
}
