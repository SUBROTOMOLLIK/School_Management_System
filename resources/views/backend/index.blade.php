@extends('layouts.backend')
@section('mainContent')

  <main class="mt-4">
        @if(Session::has('success'))
        <p class="text-success text-center">{{session('success')}}</p>
        @endif
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-4 p-2">
                            <h4 style="color:red; padding-top:5px">{{App\Models\Studentregistration::count()}}</h4>
                            <p class="text-muted text-capitalize">Total Student</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-4 p-2">
                            <h4 style="color:red; padding-top:5px">{{App\Models\Studentclass::count()}}</h4>
                            <p class="text-muted text-capitalize">Total Class</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-4 p-2">
                            <h4 style="color:red; padding-top:5px">{{App\Models\Batch::count()}}</h4>
                            <p class="text-muted text-capitalize">Total Batch</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mb-4 p-2">
                            <h4 style="color:red; padding-top:5px">{{App\Models\Course::count()}}</h4>
                            <p class="text-muted text-capitalize">Total Course</p>
                        </div>
                    </div>

                </div>

            </div>
  </main>
@endsection
