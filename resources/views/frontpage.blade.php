@extends('layouts.frontpage')
@section('content')
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s"><br>কম্পিউটার প্রশিক্ষণ<br></h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">অনলাইন কোর্স করে  নিজের দক্ষতা বৃদ্ধি করতে আমরা কম্পিউটার প্রশিক্ষণ দিচ্ছি।</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">নিবন্ধন করতে  এখানে ক্লিক করুন</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon1.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3> প্রতিদিন ক্লাসের সময়</h3>
                                <p>প্রতিদিন সকাল ৮:৫০-৯:৫০ পর্যন্ত।
								ক্লাসের সময় পরিবর্তন হলে জানিয়ে দেওয়া হবে।</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon2.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>ব্যাচ ভিত্তিক ক্লাস</h3>
                            <p>প্রতি ব্যাচে শিক্ষার্থীর সংখ্যা ৩০ জন। একটি ব্যাচ পূর্ণ হয়ে গেলে অন্য ব্যাচে ভর্তি হতে হবে।</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="assets/img/icon/icon3.svg" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>সনদপত্র  বিতরণ</h3>
                                <p>প্রতিটি কোর্স  সফল ভাবে সমাপ্ত শেষে সনদপত্র ডাউনলোড ও প্রিন্ট করা যাবে</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @php
        $courses = DB::table('courses')->get();
        @endphp
        <!-- Courses area start -->
        <div class="courses-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>আমাদের কোর্সসমূহ</h2>
                        </div>
                    </div>
                </div>  
                <div class="courses-actives">
                    <!-- Single -->@foreach ($courses as $course)
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                    
                              <a href="#"><img src="{{asset('course/image')}}/{{$course->image}}" width="500px" height="200px" alt=""></a>     
                            </div>
                            <div class="properties__caption">
                                <h3><a href="#">{{$course->course}}</a></h3>
                                <p>
                                    {{$course->description}}
                                </p>

                                <a href="#" class="border-btn border-btn2">বিস্তারিত</a>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!-- Single -->
                    <!-- Single 
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                               
                                <h3><a href="#">মাইক্রোসফট অফিস কোর্স</a></h3>
                                <p>এই কোর্সে মাইক্রোসফট অফিস -২০১০ এর (ওয়ার্ড, পাওয়ার পয়েন্ট ও এক্সেল) বিষয়ে হাতে-কলমে শিখানো হয়। 
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(5)</span> </p>
                                    </div>
                                    <div class="price">
                                        <span></span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">বিস্তারিত...</a>
                            </div>
                        </div>
                    </div>
                   
                  
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                             
                                <h3><a href="#">বেসিক ফটোসপ</a></h3>
                                <p>এই কোর্সে কোর্স  সিলেবাস অনুসারে ক্লাস করানো হয়।

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(5)</span> </p>
                                    </div>
                                    <div class="price">
                                        <span></span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">বিস্তারিত...</a>
                            </div>

                        </div>
                    </div>
                    
                 
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span></span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->
        <!--? About Area-1 Start -->
        <section class="about-area1 fix pt-10">
            <div class="support-wrapper align-items-center">
                <div class="left-content1">
                    <div class="about-icon">
                        <img src="assets/img/icon/about.svg" alt="">
                    </div>
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-55">
                        <div class="front-text">
                            <h2 class="">শীর্ষ শিক্ষকদের সাথে অনলাইনে নতুন দক্ষতা শিখুন</h2>
                            <p>স্বয়ংক্রিয় প্রক্রিয়া আপনার সমস্ত ওয়েবসাইট কাজ. সরঞ্জাম আবিষ্কার করুন এবং
                                দুর্বল শিশু এবং তরুণদের সাথে কার্যকরভাবে জড়িত হওয়ার কৌশল
                            মানুষ</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>দুর্বল শিশু এবং যুবকদের সাথে কার্যকরভাবে জড়িত হওয়ার কৌশল।</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>একসাথে শেখার বিশ্বজুড়ে লক্ষ লক্ষ মানুষের সাথে যোগ দিন।</p>
                        </div>
                    </div>

                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>একসাথে শেখার বিশ্বজুড়ে লক্ষ লক্ষ মানুষের সাথে যোগ দিন। অনলাইন শেখার মতো সহজ এবং স্বাভাবিক।</p>
                        </div>
                    </div>
                </div>
                <div class="right-content1">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about.png" alt="">

                        <div class="video-icon" >
                            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=9EKFbyXCCNY"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? top subjects Area Start -->
        <div class="topic-area section-padding40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>শীর্ষ বিষয় অন্বেষণ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic1.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Total Students :{{App\Models\Studentregistration::count()}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic2.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Total Class  {{App\Models\Studentclass::count()}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic3.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Total Batch : {{App\Models\Batch::count()}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="single-topic text-center mb-30">
                            <div class="topic-img">
                                <img src="assets/img/gallery/topic4.png" alt="">
                                <div class="topic-content-box">
                                    <div class="topic-content">
                                        <h3><a href="#">Total Course : {{App\Models\Course::count()}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    
                    
                    
                </div>
                <!--<div class="row justify-content-center">-->
                <!--    <div class="col-xl-12">-->
                <!--        <div class="section-tittle text-center mt-20">-->
                <!--            <a href="#" class="border-btn">View More </a>-->
                <!--        </div>-->
                <!--    </div>-->
                <!--</div>-->
            </div>
        </div>
        <!-- top subjects End -->
        <!--? About Area-3 Start -->
        <section class="about-area3 fix">
            <div class="support-wrapper align-items-center">
                <div class="right-content3">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about3.png" alt="">
                    </div>
                </div>
                <div class="left-content3">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">আপনি যে কোর্সগুলো নেবেন সে বিষয়ে শিক্ষার্থীর ফলাফল</h2>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>দুর্বল শিশু এবং যুবকদের সাথে কার্যকরভাবে জড়িত হওয়ার কৌশল।</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>বিশ্বজুড়ে লক্ষ লক্ষ মানুষের সাথে যোগ দিন
                            একসাথে শেখা।</p>
                        </div>
                    </div>
                    <div class="single-features">
                        <div class="features-icon">
                            <img src="assets/img/icon/right-icon.svg" alt="">
                        </div>
                        <div class="features-caption">
                            <p>একসাথে শেখার বিশ্বজুড়ে লক্ষ লক্ষ মানুষের সাথে যোগ দিন।
                            অনলাইন শেখার মতো সহজ এবং স্বাভাবিক।</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>আমাদের প্রশিক্ষক</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team1.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Urela</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team2.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Uttom</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Shakil</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team4.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Arafat</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="assets/img/gallery/team3.png" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. saiful</a></h5>
                            <p>The automated process all your website tasks.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->
        <section class="about-area2 fix pb-padding">
            <div class="support-wrapper align-items-center">
                <div class="right-content2">
                    <!-- img -->
                    <div class="right-img">
                        <img src="assets/img/gallery/about2.png" alt="">
                    </div>
                </div>
                <div class="left-content2">
                    <!-- section tittle -->
                    <div class="section-tittle section-tittle2 mb-20">
                        <div class="front-text">
                            <h2 class="">আমাদের সাথে আপনার ব্যক্তিগত এবং পেশাদার লক্ষ্যের দিকে পরবর্তী পদক্ষেপ নিন।</h2>
                            <p>স্বয়ংক্রিয় প্রক্রিয়া আপনার সমস্ত ওয়েবসাইট কাজ. দুর্বল শিশু এবং যুবকদের সাথে কার্যকরভাবে জড়িত হওয়ার জন্য সরঞ্জাম এবং কৌশলগুলি আবিষ্কার করুন।</p>
                            <a href="#" class="btn">বিনামূল্যে জন্য এখন যোগ দিন</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End -->
    </main>
@endsection
