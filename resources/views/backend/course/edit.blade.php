@extends('layouts.backend')
@section('mainContent')
      <main>
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">

            <li class="breadcrumb-item active">Edit Course</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Edit Course
              <a href="{{route('ShowStudentCourse')}}" class="float-right btn btn-sm btn-dark">All Course</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">

                @if($errors)
                  @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                  @endforeach
                @endif

                @if(Session::has('success'))
                <p class="text-success">{{session('success')}}</p>
                @endif

                <form method="post" action="{{route('UpdateStudentCourse', $studentcourse->id)}}" enctype="multipart/form-data" >
                  @csrf
                  @method('PUT')
                  <table class="table table-bordered">
                      <tr>
                          <th>Course<span class="text-danger">*</span></th>
                          <td>
                            <input type="text" class="form-control" name="course" value="{{$studentcourse->course}}" required>
                          </td>
                      </tr>
                      
                      <tr>
                        <th>Course Image</th>
                        <td>
                            <p><img width="120px" height="80px" src="{{asset('course/image')}}/{{$studentcourse->image}}" alt="No Image"></p>
                            <input type="file" name="image"  class="form-control">
                            <input type="hidden" name="oldimage" value="{{$studentcourse->image}}" class="form-control">
                        </td>
                    </tr>
                    <tr>
                        <th>Course Description<span class="text-danger">*</span></th>
                        <td>
                             <textarea name="description" cols="30" rows="4" class="form-control" required>{{$studentcourse->description}}"</textarea>
                        </td>
                    </tr>
                      <tr>
                        <th>Course Duration<span class="text-danger">*</span></th>
                        <td>
                            <input type="text" class="form-control" name="course_duration" value="{{$studentcourse->course_duration}}" >
                        </td>
                    </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-dark" value="Edit Course"/>
                          </td>
                      </tr>
                  </table>
                </form>
              </div>
            </div>
          </div>

        </div>
      </main>
        <!-- /.container-fluid -->
@endsection

