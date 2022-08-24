@extends('layouts.backend')
@section('mainContent')
      <main>
        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">

            <li class="breadcrumb-item active">Edit Section</li>
          </ol>


          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Edit Section
              <a href="{{route('ShowStudentSection')}}" class="float-right btn btn-sm btn-dark">All Section</a>
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

                <form method="post" action="{{route('UpdateStudentSection', $studentsection->id)}}" >
                  @csrf
                  @method('PUT')
                  <table class="table table-bordered">
                      <tr>
                          <th>Section<span class="text-danger">*</span></th>
                          <td>
                            <input class="form-control" name="section" value="{{$studentsection->section}}">
                          </td>
                      </tr>
                      <tr>
                        <th>Class<span class="text-danger">*</span></th>
                        <td>
                            <select name="class" class="form-control">
                                @foreach ($studentclass as $class)
                                    @if ($class->id == $studentsection->class)
                                      <option value="{{$class->id}}" selected >{{$class->class}}</option>
                                   @else
                                     <option value="{{$class->id}}">{{$class->class}}</option>
                                   @endif
                                @endforeach

                            </select>
                        </td>
                    </tr>
                      <tr>
                          <td colspan="2">
                              <input type="submit" class="btn btn-dark" value="Edit Section"/>
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

