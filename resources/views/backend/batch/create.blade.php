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
        <i class="fas fa-table"></i> Add Batch
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

          <form method="post" action="{{ Route('StoreStudentBatch') }}" >
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>Batch<span class="text-danger">*</span></th>
                    <td>
                        <input type="text" name="batch" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Batch Duration From<span class="text-danger">*</span></th>
                    <td>
                        <input type="date" name="batch_duration_from" class="form-control">
                    </td>
                </tr>
                <tr>
                    <th>Batch Duration To<span class="text-danger">*</span></th>
                    <td>
                        <input type="date" name="batch_duration_to" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" class="btn btn-dark" value="Add Batch" />
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

