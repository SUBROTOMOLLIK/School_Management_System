<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Studentregistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= 1;
        $studentbatch= Batch::paginate(10);
         return view('backend.batch.index', compact('studentbatch','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.batch.create');
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
            'batch' => 'required|string',
             'batch_duration_from' => 'string',
             'batch_duration_to' => 'string',
        ]);

        $studentbatch = new Batch();
        $studentbatch->batch = $request->batch;
        $studentbatch->batch_duration_from = $request->batch_duration_from;
        $studentbatch->batch_duration_to = $request->batch_duration_to;
        $studentbatch->save();

        return back()->with('success','Batch Created Successful');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentbatch = Batch::find($id);
        return view('backend.batch.edit', compact('studentbatch'));
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
            'batch' => 'required|string',
             'batch_duration_from' => 'string',
             'batch_duration_to' => 'string',
        ]);

        $studentbatch = Batch::find($id);
        $studentbatch->batch = $request->batch;
         $studentbatch->batch_duration_from = $request->batch_duration_from;
        $studentbatch->batch_duration_to = $request->batch_duration_to;
        $studentbatch->save();

        return back()->with('success','Batch Updated Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        DB::table("studentregistrations")->where("batch", $id)->delete();

        $studentbatch= Batch::find($id);
        $studentbatch->delete();

        return back()->with('success','Batch Deleted Successful');
    }
}
