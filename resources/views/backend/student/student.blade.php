@extends('layouts.backend')
@section('mainContent')
   <main>
    <div class="container-fluid">
        <ol class="breadcrumb my-4">
            <li class="breadcrumb-item active">All Message Here</li>
        </ol>
      {{-- session show     --}}
      @if (Session::has('success'))
      <p class="text-success">{{session('success')}}</p>
      @endif

      <div class="card mb-4">
         {{-- <div class="card-header">
             <style>
                  body{font-family:NikoshBAN !important;
                src: url({{asset('NikoshBAN.ttf')}}) format('true-type');
          }
             </style>
            <a class="btn btn-dark sm-btn" href="" >Register Students List</a>
         </div> --}}
         <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>শিক্ষার্থীর নাম</th>
                            <th>শ্রেণি</th>
                            <th>শাখা</th>
                            <th>রোল নম্বর</th>
                            <th>মোবাইল</th>
                            <th>লিঙ্গ</th>

                            <th>কোর্সের নাম</th>
							 <th>ব্যাচ</th>
                            <th>অপশন</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($registerStudent)>0)
                          @foreach ($registerStudent as $item)
                            <tr>
                                <td>{{$id++}}</td>
                                <td>{{ $item->studentName}}</td>
                                <td>
                                    @if ($item->class == '1')
                                    ৬ষ্ঠ শ্রেণি
                                    @elseif($item->class == '2')
                                     সপ্তম শ্রেণি
                                    @elseif($item->class == '3')
                                     অষ্টম শ্রেণি
                                    @elseif($item->class == '4')
                                   নবম শ্রেণি
                                    @elseif($item->class == '5')
                                        দশম শ্রেণি
                                    @else
                                    No Class
                                    @endif
                                </td>
                                <td>
                              
                                    @if ($item->section == '1')
                                     শিউলি
                                    @elseif($item->section == '2')
                                     বকুল
                                    @elseif($item->section == '3')
                                     পরাগ
                                    @elseif($item->section == '4')
                                     জুঁই
                                    @elseif($item->section == '5')
                                     বেলি
                                    @elseif($item->section == '6')
                                    শাপলা
                                    @elseif($item->section == '7')
                                     শিমুল
                                    @elseif($item->section == '8')
                                     পদ্ম
                                    @elseif ($item->section == '9')
                                     কামিনি
                                    @elseif($item->section == '10')
                                    মল্লিকা
                                    @elseif($item->section == '11')
                                    পলাশ
                                    @elseif($item->section == '12')
                                    রজনীগন্ধা
                                    @elseif($item->section == '13')
                                    গোলাপ
                                    @elseif($item->section == '14')
                                     করবী
                                    @elseif($item->section == '15')
                                    হাসনাহেনা
                                    @elseif($item->section == '16')
                                     নিউটন
                                    @elseif($item->section == '17')
                                     নজরুল 
                                    @elseif($item->section == '18')
                                    কায়কোবাদ
                                    @else
                                      No Course
                                    @endif      

                                </td>
                                <td>{{ $item->roll}}</td>
                                <td>{{ $item->number}}</td>
                                <td>
                                    @if ($item->gender == 'male')
                                    ছেলে
                                    @elseif($item->gender == 'female')
                                     মেয়ে
                                    @else
                                    No gander
                                    @endif
                                </td>
                                <td>
                                    @if ($item->course == '1')
                                    কম্পিউটার বেসিক
                                    @elseif($item->course == '2')
                                     মাইক্রোসফট অফিস কোর্স
                                    @elseif($item->course == '3')
                                     গ্রাফিক্স কোর্স
                                    @else
                                    No Course
                                    @endif
                                </td>
                                <td>
                                    @if ($item->batch == '1')
                                     ১ম ব্যাচ
                                    @elseif($item->batch == '2')
                                     ২য় ব্যাচ
                                    @elseif($item->batch == '3')
                                     ৩য় ব্যাচ
                                    @elseif($item->batch == '4')
                                     ৪র্থ ব্যাচ
                                    @elseif($item->batch == '5')
                                     ৫ম ব্যাচ
                                    @elseif($item->batch == '6')
                                     ৬ষ্ট ব্যাচ
                                    @elseif($item->batch == '7')
                                     ৭ম ব্যাচ
                                    @elseif($item->batch == '8')
                                     ৮ম ব্যাচ
                                    @else
                                      No Course
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-success sm-btn p-1 my-1" href="{{route('studentPdf', $item->id)}}" target="_blank" >ভিউ</a>
                                    <a class="btn btn-danger sm-btn p-1 my-1" href="{{ url('/admin/studentregister/edit/'. $item->id) }}" >আপডেট</a>

                                     <a class="btn btn-danger sm-btn p-1 my-1" href="{{route('studentPdf', $item->id)}}" target="_blank"><i class="fa fa-download"></i>ডাউনলোড</a>

                                      <a class="btn btn-danger sm-btn p-1 my-1" href="{{ url('admin/studentregister/delete/'. $item->id) }}" >মুছুন</a>
                                </td>
                            </tr>
                          @endforeach
                        @endif
                    </tbody>
                </table>
                <div class="d-flex">
                    {{$registerStudent->links()}}
                </div>
            </div>
         </div>
       </div>
    </div>
   </main>
@endsection
