<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id= 1;
        $studentcourse= Course::paginate(8);
         return view('backend.course.index', compact('studentcourse','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.course.create');
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
                'course'=> 'required|string|max:200',
                'image' => 'file|mimes:jpeg,jpg,png|max:1000',
                'description' => 'string|required',
                'course_duration' => 'string|required',
            ]);

            $studentcourse= new Course();
            $studentcourse->course = $request->course;
            $studentcourse->description = $request->description;
            $studentcourse->course_duration = $request->course_duration;

            // student course feather image
            if ($request->hasFile('image')){
                $courseImage = $request->file('image');
                $CourseFile_ext = $courseImage->getClientOriginalExtension();
                $CourseFile_name = rand(123456, 99999) . '.' . $CourseFile_ext;
                $CourseFile_path = public_path('course/image/');
                $courseImage->move($CourseFile_path, $CourseFile_name);

                $studentcourse->image = $CourseFile_name;
            }

            $studentcourse->save();

            return back()->with('success','Course Create Successful');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $studentcourse = Course::find($id);
        return view('backend.course.edit', compact('studentcourse'));
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
            'course'=> 'required|string|max:200',
            'image' => 'file|mimes:jpeg,jpg,png|max:1000',
            'description' => 'string|required',
             'course_duration' => 'string',
        ]);

        $studentcourse= Course::find($id);
        $studentcourse->course = $request->course;
        $studentcourse->description = $request->description;
        $studentcourse->course_duration = $request->course_duration;

        $studentimg = $studentcourse->image;

        // student course feather image

           if ($request->hasFile('image')){

                if ($studentimg != null) {
                    unlink(public_path('course/image/'. $studentimg));
                }


                $courseImage = $request->file('image');
                $CourseFile_ext = $courseImage->getClientOriginalExtension();
                $CourseFile_name = rand(123456, 99999) . '.' . $CourseFile_ext;
                $CourseFile_path = public_path('course/image/');
                $courseImage->move($CourseFile_path, $CourseFile_name);

                $studentcourse->image = $CourseFile_name;
            }else {
                $studentcourse->image = $request->oldimage;
            }

        $studentcourse->save();

        return back()->with('success','Course Update Successful');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studentcourse= Course::find($id);
        $course = $studentcourse->image;

        if ($course != null) {
            unlink(public_path('course/image/'. $course));
        }

        $studentcourse->delete();

        return back()->with('success','Course Delete Successful');
    }
}
