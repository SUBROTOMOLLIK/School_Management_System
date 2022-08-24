@extends('layouts.backend')
@section('mainContent')
      <main>
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">

            <li class="breadcrumb-item active">Edit Batch</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Edit Batch
              <a href="{{route('ShowStudentBatch')}}" class="float-right btn btn-sm btn-dark">All Batch</a>
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

                <form method="post" action="{{route('UpdateStudentBatch', $studentbatch->id)}}" >
                  @csrf
                  @method('PUT')
                  <table class="table table-bordered">
                      <tr>
                          <th>Batch<span class="text-danger">*</span></th>
                          <td>
                            <input type="text" class="form-control" name="batch" value="{{$studentbatch->batch}}">
                          </td>
                      </tr>
                      
                       <tr>
                    <th>Batch Duration From<span class="text-danger">*</span></th>
                    <td>
                        <input type="date" name="batch_duration_from" class="form-control" value="{{$studentbatch->batch_duration_from}}">
                    </td>
                </tr>
                <tr>
                    <th>Batch Duration To<span class="text-danger">*</span></th>
                    <td>
                        <input type="date" name="batch_duration_to" class="form-control" value="{{$studentbatch->batch_duration_to}}">
                    </td>
                </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-dark" value="Update batch"/>
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

