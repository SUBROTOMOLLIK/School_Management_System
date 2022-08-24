@extends('layouts.backend')
@section('mainContent')
<main>
    <div class="container">
        <div class="m-5 p-2">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><span><strong>শিক্ষার্থীর নাম (ইংরেজি)  :</strong></span> <span class="text-muted px-1">{{$studentprofile->studentName}}</span></li>
                <li class="list-group-item"><span><strong>শিক্ষার্থীর নাম (বাংলায়) :</strong></span> <span class="text-muted px-1">{{$studentprofile->BaStudentName}}</span></li>
                <li class="list-group-item"><span><strong>পিতার নাম (ইংরেজি) :</strong></span> <span class="text-muted px-1">{{$studentprofile->FatherName}}</span></li>
                <li class="list-group-item"><span><strong>পিতার নাম (বাংলায়) :</strong></span> <span class="text-muted px-1">{{$studentprofile->BaFatherName}}</span></li>
                <li class="list-group-item"><span><strong>মাতার নাম ( ইংরেজি) :</strong></span> <span class="text-muted px-1">{{$studentprofile->MotherName}}</span></li>
                <li class="list-group-item"><span><strong>মাতার নাম (বাংলায়) :</strong></span> <span class="text-muted px-1">{{$studentprofile->BaMotherName}}</span></li>
                <li class="list-group-item"><span><strong>ব্যাচ :</strong></span> <span class="text-muted px-1">
                    @foreach ($studentbatch as $batch)
                        @if ($batch->id == $studentprofile->batch)
                            {{$batch->batch}}
                        @endif
                    @endforeach
                    </span></li>
                <li class="list-group-item"><span><strong>কোর্সের নাম :</strong></span> <span class="text-muted px-1">
                    @foreach ($studentcourse as $course)
                        @if ($course->id == $studentprofile->course)
                            {{$course->course}}
                        @endif
                    @endforeach
                    </span></li>
                <li class="list-group-item"><span><strong>শ্রেণি :</strong></span> <span class="text-muted px-1">
                    @foreach($studentclass as $class)
                        @if($class->id == $studentprofile->class)
                        {{$class->class}}
                       @endif
                    @endforeach
                    </span></li>
                <li class="list-group-item"><span><strong>শ্রেণি রোল নম্বর :</strong></span> <span class="text-muted px-1">{{$studentprofile->roll}}</span></li>
                <li class="list-group-item"><span><strong>শাখা :</strong></span> <span class="text-muted px-1">
                    @foreach($studentsection as $section)
                        @if($section->id == $studentprofile->section)
                        {{$section->section}}
                       @endif
                    @endforeach
                    </span></li>
                <li class="list-group-item"><span><strong>জন্ম তারিখ :</strong></span> <span class="text-muted px-1">{{$studentprofile->date}}</span></li>
                <li class="list-group-item"><span><strong>লিঙ্গ :</strong></span> <span class="text-muted px-1">{{$studentprofile->gender}}</span></li>
                <li class="list-group-item"><span><strong>মোবাইল নাম্বার :</strong></span> <span class="text-muted px-1">{{$studentprofile->number}}</span></li>
            </ul>
        </div>
    </div>
</main>
@endsection
