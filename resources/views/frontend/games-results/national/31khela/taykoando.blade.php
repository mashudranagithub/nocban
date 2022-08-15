@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Bangabandhu 9th Bangladesh Games</h1>
    </div>
</section>
<!-- End Section Title --> 

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="crumbs">
        <div class="container">
            <ul>
                <li><a href="{{route('homepage')}}">Home</a></li>
                <li>/</li>
                <li>Games & Results</li>  
                <li>/</li>
                <li><a href="{{route('national')}}">National</a></li>  
                <li>/</li>
                <li><a href="{{route('9bangladeshgames')}}">Bangabandhu 9th Bangladesh Games</a></li>     
                <li>/</li>
                <li><a href="{{route('dpodoktalika')}}">ডিসিপ্লিন অনুযায়ী পদক তালিকা</a> </li>  
                <li>/</li>
                <li>তায়কোয়ানডো</li>               
                @include('frontend.partials.back-button')
                
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Bangabandhu 9th Bangladesh Games</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">



<section id="tabs" class="project-tab">
        <div class="">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-center">পদক তালিকা ২০২০</h3>
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-scro-all" data-toggle="tab" href="#scro-all" role="tab" aria-controls="nav-all" aria-selected="true">সব</a>
                            <a class="nav-item nav-link" id="nav-scro-man" data-toggle="tab" href="#scro-man" role="tab" aria-controls="nav-man" aria-selected="false">পুরুষ</a>
                            <a class="nav-item nav-link" id="nav-scro-woman" data-toggle="tab" href="#scro-woman" role="tab" aria-controls="nav-woman" aria-selected="false">মহিলা</a>
                            <a class="nav-item nav-link" id="nav-scro-duet" data-toggle="tab" href="#scro-duet" role="tab" aria-controls="nav-duet" aria-selected="false">দ্বৈত</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="scro-all" role="tabpanel" aria-labelledby="nav-scro-all">
                            
                                <h4 class="mt-5">তায়কোয়ানডো </h4>
                                <table class="table table-hover table-striped">
                                  <thead class="scr-had-bg">
                                      <tr><th>পজিশন</th>
                                      <th>দল</th>
                                      <th>গোল্ড</th>
                                      <th>সিলভার</th>
                                      <th>ব্রোঞ্জ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                                    <tr>
                                                      <td>১</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>১৮</td>
                                                      <td>১১</td>
                                                      <td>৪</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td> বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>১৪</td>
                                                      <td>১১</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>২</td>
                                                      <td>৪</td>
                                                      <td>৯</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>৮</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>৬</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৮</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৭</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কক্সবাজার জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>নারায়ণগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৪</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>গাজীপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>ব্রাহ্মণবাড়িয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td> খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>রাঙামাটি জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>মানিকগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>খাগড়াছড়ি পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>নাটোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>সাতক্ষীরা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৩৪</td>
                                          <td>৩৪</td>
                                          <td>৬৮</td>
                                      </tr>
                                  </tbody>
                                </table>
                           
                        </div>
                        <div class="tab-pane fade" id="scro-man" role="tabpanel" aria-labelledby="nav-scro-man">
                           
                                <h4 class="mt-5">তায়কোয়ানডো</h4>
                                <table class="table table-hover table-striped">
                                  <thead class="scr-had-bg">
                                    <tr>
                                      <th>পজিশন</th>
                                      <th>দল</th>
                                      <th>গোল্ড</th>
                                      <th>সিলভার</th>
                                      <th>ব্রোঞ্জ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                                    <tr>
                                                      <td>১</td>
                                                      <td> বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>৮</td>
                                                      <td>৫</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>৭</td>
                                                      <td>৫</td>
                                                      <td>৪</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>২</td>
                                                      <td>৪</td>
                                                      <td>৯</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৮</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>নারায়ণগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কক্সবাজার জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ব্রাহ্মণবাড়িয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>গাজীপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>মানিকগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>রাঙামাটি জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>খাগড়াছড়ি পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>নাটোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>সাতক্ষীরা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>১৭</td>
                                          <td>১৭</td>
                                          <td>৩৪</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-woman" role="tabpanel" aria-labelledby="nav-scro-woman">
                            
                                <h4 class="mt-5">তায়কোয়ানডো</h4>
                                     <table class="table table-hover table-striped">
                                  <thead class="scr-had-bg">
                                    <tr>
                                      <th>পজিশন</th>
                                      <th>দল</th>
                                      <th>গোল্ড</th>
                                      <th>সিলভার</th>
                                      <th>ব্রোঞ্জ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                                    <tr>
                                                      <td>১</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>১১</td>
                                                      <td>৬</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td> বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>৬</td>
                                                      <td>৬</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>৬</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৫</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৫</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>কক্সবাজার জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>নারায়ণগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>গাজীপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>ব্রাহ্মণবাড়িয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>রাঙামাটি জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>মানিকগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td> খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>খাগড়াছড়ি পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>নাটোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>সাতক্ষীরা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>১৭</td>
                                          <td>১৭</td>
                                          <td>৩৪</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-duet" role="tabpanel" aria-labelledby="nav-scro-duet">
                            
                                <h4 class="mt-5">তায়কোয়ানডো</h4>
                                     <table class="table table-hover table-striped">
                                  <thead class="scr-had-bg">
                                    <tr>
                                      <th>পজিশন</th>
                                      <th>দল</th>
                                      <th>গোল্ড</th>
                                      <th>সিলভার</th>
                                      <th>ব্রোঞ্জ</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      
                                                    <tr>
                                                      <td>১</td>
                                                      <td> বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>কক্সবাজার জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>নারায়ণগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>গাজীপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>ব্রাহ্মণবাড়িয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>মানিকগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>রাঙামাটি জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>খাগড়াছড়ি পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>নাটোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>সাতক্ষীরা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>০</td>
                                          <td>০</td>
                                          <td>০</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


                        </div>
                    </div>
                    <!-- End Info ABout --> 
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->

        </div>                     
    </div>  
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection