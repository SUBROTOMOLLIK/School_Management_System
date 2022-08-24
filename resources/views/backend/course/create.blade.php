@extends('layouts.backend')
@section('mainContent')
<main>
<div class="container-fulid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        {{-- <a class="text-danger" href="{{route('adminIndex')}}">Home</a> --}}
      </li>
      {{-- <li class="breadcrumb-item active">Message</li> --}}
    </ol>


    <!-- DataTables Example -->
    <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-table"></i> Add Course
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

          <form method="post" action="{{ Route('StoreStudentCourse') }}" enctype="multipart/form-data" >
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Course<span class="text-danger">*</span></th>
                    <td>
                        <input type="text" name="course" class="form-control" required >
                    </td>
                </tr>
                <tr>
                    <th>Course Image</th>
                    <td>
                        <input type="file" name="image" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Course Description<span class="text-danger">*</span></th>
                    <td>
                        <textarea name="description" cols="30" rows="4" class="form-control" required></textarea>
                    </td>
                </tr>
                 <tr>
                    <th>Course Duration<span class="text-danger">*</span></th>
                    <td>
                        <input type="text" name="course_duration" class="form-control" required >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-dark" value="Add Course" />
                    </td>
                </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
</div>
<main>
@endsection

