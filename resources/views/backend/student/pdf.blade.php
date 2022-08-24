<!DOCTYPE html>
<html lang="ba">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
         <style>
        body {
            width: 29cm;
        height: 21cm;
        margin: 0mm 0mm 0mm 0mm; 
        font-family: 'nikosh', sans-serif;
      // 
        }
    </style>
        <style type='text/css'>
            body, html {
                margin: 0;
                padding: 0;
               
                
                    width: 29cm;
        height: 21cm;
            }
            body {
                 background:url(back.jpg);
                    background-repeat: no-repeat;
                  opacity: 0.75;
  background-attachment: fixed;
  background-position: center;
    background-size: 800px 800px;
                    width: 29cm;
        height: 21cm;
                color: black;
                display: table;
                  font-family: 'nikosh', sans-serif;
                font-size: 24px;
                text-align: justify;
            }
            
            .container {
                
                 background:url(kalakopakokilpyarihighschool-logo-bg.png);
                 background-repeat: no-repeat;
                  opacity: 0.75;
  background-attachment: fixed;
  background-position: center;
    background-size: 800px 800px;
               border-width: 20px;
    border-image: repeating-radial-gradient(circle at 10px, turquoise, pink 2px, greenyellow 4px, pink 2px) 1;
                 //background-color:#c5eafc;
                    width: 29cm;
        height: 21cm;
                   font-family: 'nikosh', sans-serif;
                display: table-cell;
                vertical-align: middle;
            }
            .logo {
                color: tan;
            }

            .marquee {
                color: green;
                font-size: 68px;
                margin: 30px;
                text-align:center;
                font-weight:bold;
            }
            .assignment {
                margin: 60px;
            }
            .person {
                border-bottom: 2px solid green;
                font-size: 32px;
                font-style: italic;
                text-align:center;
                   font-family: 'nikosh', sans-serif;
                margin: 20px auto;
                width: 200px;
            }
            .reason {
                
                margin: 20px;
                 text-align:center;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="logo">
                <table width="100%">
                    <tr><td><br></td></tr>
                    <tr>
                          <td></td>  <td></td>
                        <td> <img src="kalakopakokilpyarihighschool-logo.jpg"/ width="140px"></td>
                        <td></td>
                          <td></td>  <td style="width:200px;">Student ID: KPICTCLUB-{{$student->id}}</td>  
                         <td> <img src="logo-lg.png" width="140px"></td>
                         <td></td>  
                    </tr>
                  
                </table>
                            
            </div>

            <div class="marquee">
              <u> সনদপত্র
               </u>
            </div>

            <div class="assignment">
 এই মর্মে প্রত্যয়ন করা যাচ্ছে যে  <strong> {{$student->BaStudentName}},  </strong>
     
     শ্রেণিঃ                         @foreach($studentclass as $class)
                        @if($class->id == $student->class)
                      <strong>   {{$class->class}} </strong>
                       @endif
                    @endforeach
                    
                    শাখাঃ
                    
                    @foreach($studentsection as $section)
                        @if($section->id == $student->section)
                        <b>{{$section->section}}</b>
                       @endif
                    @endforeach
                    
                    রোল নং: 
                    
                    {{$student->roll}},
                    
                    পিতার নামঃ <b>{{$student->BaFatherName}}</b>, মাতার নামঃ<b> {{$student->BaMotherName}}</b>, জন্ম তারিখঃ <b>{{$student->date}}</b>। সে শেখ রাসেল কম্পিউটার ডিজিটাল ল্যাব প্রশিক্ষণ কেন্দ্র  হতে <strong>
                    
                    @foreach ($studentbatch as $batch)
                        @if ($batch->id == $student->batch)
                            {{$batch->batch}} তারিখ
                             ({{$batch->batch_duration_from}} হতে  পর্যন্ত    ({{$batch->batch_duration_to}} )                   @endif
                    @endforeach 
                    
                     </strong>নং   ব্যাচ এর
                     <strong>
                    @foreach ($studentcourse as $course)
                        @if ($course->id == $student->course)
                            {{$course->course}} (মোট
:  {{$course->course_duration}})                       @endif
                    @endforeach 
                    </strong>
        সফল ভাবে সম্পূর্ণ করে <b>এ+</b> গ্রেড পেয়ে উত্তীর্ণ হয়েছে।
            </div>

            <div class="person">
              <img src="sin2.png">
            </div>
            <div class="reason">
                প্রধান শিক্ষক<br/>
                কলাকোপা কোকিলপ্যারী উচ্চ বিদ্যালয়<br>
নবাবগঞ্জ,ঢাকা-১৩২০।
            </div>
        </div><br>
<hr>
<table width="100%">
<tr><td style="font-size:12px;text-align:center;"> এই সার্টিফিকেটটি কলাকোপা কোকিলপ্যারী উচ্চ বিদ্যালয় আইসিটি ক্লাব স্টুডেন্ট প্রশিক্ষণ অনলাইন সফটওয়্যার সিস্টেম থেকে স্বয়ংক্রিয়ভাবে তৈরি হয়েছে।<br>  সার্টিফিকেট মুদ্রণের তারিখ : <?php
// Return current date from the remote server
$date = date('d-m-y h:i:s');
echo $date;
?>
</td></tr>
</table>
    </body>
</html>