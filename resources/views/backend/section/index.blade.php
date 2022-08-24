@extends('layouts.backend')
@section('mainContent')
   <main>
    <div class="container-fluid">
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item active">All Section Here</li>
        </ol>
      {{-- session show     --}}
      @if (Session::has('success'))
      <p class="text-success">{{session('success')}}</p>
      @endif

      <div class="card mb-4">
         <div class="card-header">
            <a class="btn btn-dark sm-btn" href="{{route('CreateStudentSection')}}" >Add Section</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Section</th>
                            <th>Class</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($studentsection)>0)
                          @foreach ($studentsection as $item)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$item->section}}</td>
                                <td>{{$item->class}}</td>
                                <td>

                                    <a class="btn btn-success sm-btn" href="{{route('EditStudentSection', $item->id)}}">Edit</a>
                                    <a class="btn btn-danger sm-btn" href="{{route('DeleteStudentSection', $item->id)}}">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="d-flex">
                    {{ $studentsection->links() }}
                  </div>
            </div>
         </div>
       </div>
    </div>
   </main>
@endsection
