@extends('layouts.backend')
@section('mainContent')
    <style>
        input[type=submit] {
            color:#ffffff;
            float: right;
            margin-right: 10px;
            padding:8px 12px;
            background:rgb(248, 52, 52);
        }
    </style>

    <div class="container" style="margin-top:5px; margin-bottom:10px">
        <div class="row">
           <div class="col-md-10 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3 class="text-muted text-center py-1">Edit Student Registration</h3>
              </div>

            @if(Session::has('success'))
              <p class="text-success text-center">{{session('success')}}</p>
            @endif

              <div class="card-body">
                <div class="table-responsive">

                  <form action="{{route('UpdateStudent', $registerStudent->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th>  শিক্ষার্থীর নাম (ইংরেজি)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" value="{{$registerStudent->studentName}}"  name="EiStName" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <th> শিক্ষার্থীর নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaStName" value="{{$registerStudent->BaStudentName}}">
                            </td>
                        </tr>

                        <tr>
                            <th> পিতার নাম (ইংরেজি)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="EiFaName" value="{{$registerStudent->FatherName}}" >
                            </td>
                        </tr>
                        <tr>
                            <th>পিতার নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaFaName" value="{{$registerStudent->BaFatherName}}"">
                            </td>
                        </tr>
                        <tr>
                            <th> মাতার নাম ( ইংরেজি) <span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="EiMoName" value="{{$registerStudent->MotherName}}">
                            </td>
                        </tr>
                        <tr>
                            <th>মাতার নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaMoName" value="{{$registerStudent->BaMotherName}}">
                            </td>
                        </tr>
                        <tr>
                            <th>ব্যাচ<span class="text-danger">*</span></th>
                            <td>
                            <select name="batch" class="form-control" required>
                                <option value="">ব্যাচ নির্বাচন করুন</option>
                                @foreach($studentbatch as $batch)
                                    @if ($batch->id == $registerStudent->batch)
                                        <option value="{{$batch->id}}" selected>{{$batch->batch}}</option>
                                    @else
                                        <option value="{{$batch->id}}">{{$batch->batch}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>কোর্সের নাম<span class="text-danger">*</span></th>
                            <td>
                            <select name="course" class="form-control" required>
                                <option value="">কোর্স নির্বাচন করুন</option>
                                @foreach($studentcourse as $course)
                                    @if ($course->id == $registerStudent->course)
                                       <option value="{{$course->id}}" selected>{{$course->course}}</option>
                                    @else
                                       <option value="{{$course->id}}">{{$course->course}}</option>
                                    @endif
                                @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>শ্রেণি<span class="text-danger">*</span></th>
                            <td>
                                <select name="class" id="class" class="form-control" >
                                    @foreach($studentClass as $class)
                                        @if($class->id == $registerStudent->class)
                                        <option value="{{$class->id}}" selected>{{$class->class}}</option>
                                        @else
                                        <option value="{{$class->id}}">{{$class->class}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th>শাখা<span class="text-danger">*</span></th>
                            <td>
                            <select id="section" name="section" class="form-control" required>
                                <option value="">select section</option>
                            @foreach($studentsection as $section)
                              @if($section->id == $registerStudent->section)
                                <option value="{{$section->id}}" selected>{{$section->section}}</option>
                              @else
                                <option value="{{$section->id}}">{{$section->section}}</option>
                             @endif
                            @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>শ্রেণি রোল নম্বর<span class="text-danger">*</span></th>
                            <td>
                                <input type="text" name="roll" class="form-control" value="{{$registerStudent->roll}}" required>
                            </td>
                        </tr>
                        <tr>
                            <th>জন্ম তারিখ<span class="text-danger">*</span></th>
                            <td>
                                <input type="date" name="date" class="form-control" value="{{$registerStudent->date}}">
                            </td>
                        </tr>
                        <tr>
                            <th>লিঙ্গ<span class="text-danger">*</span></th>
                            <td>
                                <select name="gander" class="form-control" >
                                    <option value="male"{{($registerStudent->gender =='male')? 'selected' : ''}}>ছেলে</option>
                                    <option value="female"{{($registerStudent->gender =='female')? 'selected' : ''}} >মেয়ে</option>
                                </select>
                           </td>
                        </tr>
                        <tr>
                            <th>মোবাইল নাম্বার<span class="text-danger">*</span></th>
                            <td>
                                <input type="number" name="number" class="form-control" value="{{$registerStudent->number}}">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" >
                                <input type="submit" class="btn" value="আপডেট নিবন্ধন" />
                            </td>
                        </tr>
                    </table>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
@endsection


