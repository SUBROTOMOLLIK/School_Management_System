@extends('layouts.backend')
@section('mainContent')
   <main>
    <div class="container-fluid">
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item active">All Batch Here</li>
        </ol>
      {{-- session show     --}}
      @if (Session::has('success'))
      <p class="text-success">{{session('success')}}</p>
      @endif

      <div class="card mb-4">
         <div class="card-header">
            <a class="btn btn-dark sm-btn" href="{{route('CreateStudentBatch')}}" >Add Batch</a>
         </div>
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Batch</th>
                             <th>Batch Duration From</th>
                               <th>Batch Duration To</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($studentbatch)>0)
                          @foreach ($studentbatch as $item)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{$item->batch}}</td>
                                     <td>{{$item->batch_duration_from}}</td>
                                     <td>{{$item->batch_duration_to}}</td>
                                <td>

                                <a class="btn btn-success sm-btn" href="{{ route('EditStudentBatch', $item->id) }}">Edit</a>
                                <a class="btn btn-danger sm-btn" href="{{ route('DeleteStudentBatch', $item->id) }}">Delete</a>
                                </td>
                            </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="d-flex">
                    {{ $studentbatch->links() }}
                </div>
            </div>
         </div>
       </div>
    </div>
   </main>
@endsection
