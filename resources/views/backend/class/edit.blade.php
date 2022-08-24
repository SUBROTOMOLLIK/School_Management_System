@extends('layouts.backend')
@section('mainContent')
      <main>
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">

            <li class="breadcrumb-item active">Edit Class</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Edit Class
              <a href="{{route('ShowStudentClass')}}" class="float-right btn btn-sm btn-dark">All Class</a>
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

                <form method="post" action="{{route('UpdateStudentClass', $studentclass->id)}}" >
                  @csrf
                  @method('PUT')
                  <table class="table table-bordered">
                      <tr>
                          <th>Class<span class="text-danger">*</span></th>
                          <td>
                            <input class="form-control" name="class" value="{{$studentclass->class}}">
                          </td>
                      </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-dark" value="Edit Class"/>
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

