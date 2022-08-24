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
        <i class="fas fa-table"></i> Add Section
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

          <form method="post" action="{{ Route('StoreStudentSection') }}" >
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Section<span class="text-danger">*</span></th>
                    <td>
                        <input type="text" name="section" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Class<span class="text-danger">*</span></th>
                    <td>
                        <select name="class" class="form-control" required>
                          <option value="" selected >Select Class</option>
                           @foreach ($studentclass as $item)
                             <option value="{{$item->id}}">{{$item->class}}</option>
                           @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-dark" value="Add Section" />
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

