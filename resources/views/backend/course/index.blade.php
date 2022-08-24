@extends('layouts.backend')
@section('mainContent')
   <main>
    <div class="container-fluid">
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item active">All Course Here</li>
        </ol>
      {{-- session show     --}}
      @if (Session::has('success'))
      <p class="text-success">{{session('success')}}</p>
      @endif

      <div class="card mb-4">
         <div class="card-header">
            <a class="btn btn-dark sm-btn" href="{{route('CreateStudentCourse')}}" >Add Course</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Course</th>
                            <th>Image</th>
                            <th>Description</th>
                             <th>Duration</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($studentcourse)>0)
                          @foreach ($studentcourse as $item)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$item->course}}</td>
                                <td>
                                    <img src="{{asset('course/image')}}/{{$item->image}}" alt="No Image" width="140px" height="80px" >
                                </td>
                                <td>{{$item->description}}</td>
                                  <td>{{$item->course_duration}}</td>
                                <td>
                                  <a class="btn btn-success sm-btn" href="{{ route('EditStudentCourse', $item->id) }}">Edit</a>
                                  <a class="btn btn-danger sm-btn" href="{{ route('DeleteStudentCourse', $item->id) }}">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>
              <div class="d-flex">
                {{ $studentcourse->links() }}
              </div>
            </div>

         </div>
       </div>
    </div>
   </main>
@endsection
