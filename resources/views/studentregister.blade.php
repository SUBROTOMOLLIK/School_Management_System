@extends('layouts.app')
@section('content')
    <style>
        input[type=submit] {
            color:#ffffff;
            float: right;
            margin-right: 10px;
            padding:8px 12px;
            background:rgb(248, 52, 52);
        }
    </style>
<main>
    <div class="container py-2">
        <div class="row">
           <div class="col-md-6 mx-auto">
            <div class="card">
              <div class="card-header">
                <h3 class="text-muted text-center py-1">নিবন্ধন ফরম</h3>
              </div>

            @if(Session::has('success'))
              <p class="text-success text-center">{{session('success')}}</p>
            @endif

              <div class="card-body">
                <div class="table-responsive">

                  <form action="{{url('/studentregister')}}"  method="post" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-bordered">
                        <tr>
                            <th> শিক্ষার্থীর নাম (ইংরেজি) <span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="EiStName" placeholder="শিক্ষার্থীর নাম (ইংরেজি) " required>
                            </td>
                        </tr>
                        <tr>
                            <th> শিক্ষার্থীর নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaStName" placeholder="শিক্ষার্থীর নাম (বাংলায়)" required>
                            </td>
                        </tr>

                        <tr>
                            <th> পিতার নাম (ইংরেজি)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="EiFaName" placeholder="পিতার নাম (ইংরেজি)" required>
                            </td>
                        </tr>
                        <tr>
                            <th>পিতার নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaFaName" placeholder="পিতার নাম (বাংলায়)" required>
                            </td>
                        </tr>
                        <tr>
                            <th> মাতার নাম ( ইংরেজি)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="EiMoName" placeholder="মাতার নাম ( ইংরেজি)" required>
                            </td>
                        </tr>
                        <tr>
                            <th>মাতার নাম (বাংলায়)<span class="text-danger">*</span></th>
                            <td>
                              <input type="text" class="form-control"  name="BaMoName" placeholder="মাতার নাম (বাংলায়)" required>
                            </td>
                        </tr>
                        <tr>
                            <th>ব্যাচ<span class="text-danger">*</span></th>
                            <td>
                            <select name="batch" class="form-control" required>
                                <option value="" selected>ব্যাচ নির্বাচন করুন</option>
                                @foreach($studentbatch as $batch)
                                  <option value="{{$batch->id}}">{{$batch->batch}}</option>
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
                                  <option value="{{$course->id}}">{{$course->course}}</option>
                                @endforeach
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>শ্রেণি<span class="text-danger">*</span></th>
                            <td>
                            <select name="class" id="class" class="form-control" required>
                                <option value="">শ্রেণি নির্বাচন করুন</option>
                                @foreach($class as $student)
                                  <option value="{{$student->id}}">{{$student->class}}</option>
                                @endforeach
                            </select>
                            </td>
                        </tr>
						<tr>
                            <th>শ্রেণি রোল নম্বর<span class="text-danger">*</span></th>
                            <td>
                                <input type="text" name="roll" class="form-control" placeholder="শ্রেণি রোল নম্বর" required>
                            </td>
                        </tr>
                        <tr>
                            <th>শাখা<span class="text-danger">*</span></th>
                            <td>
                            <select id="section" name="section" class="form-control" required>
                                <option value="">শাখা নির্বাচন করুন</option>
                            </select>
                            </td>
                        </tr>
                        <tr>
                            <th>জন্ম তারিখ<span class="text-danger">*</span></th>
                            <td>
                                <input type="date" name="date" class="form-control" required>
                            </td>
                        </tr>
                        <tr>
                            <th>লিঙ্গ<span class="text-danger">*</span></th>
                            <td>
                                <select name="gander" class="form-control" required>
                                    <option value="" selected>নির্বাচন করুন</option>
                                    <option value="male">ছেলে</option>
                                    <option value="female">মেয়ে</option>
                                </select>
                           </td>
                        </tr>
                        <tr>
                            <th>মোবাইল নাম্বার<span class="text-danger">*</span></th>
                            <td>
                                <input type="number" name="number" class="form-control" placeholder="মোবাইল নাম্বার" required>
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2" >
                                <input type="submit" class="btn" value="নিবন্ধন" />
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
</main>
@endsection


