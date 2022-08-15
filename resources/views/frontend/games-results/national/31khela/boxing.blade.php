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
                <li>বক্সিং</li>
                
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
                            
                                <h4 class="mt-5">বক্সিং </h4>
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
                                                      <td> বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>৫</td>
                                                      <td>২</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>৩</td>
                                                      <td>৩</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>চাপাইঃ বক্সিং একাডেমি</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>রাজশাহী সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>গোড়ান মৈত্রী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>জামালপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>ঢাকা ওয়ান্ডার্স ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>বাংলাদেশ রেলওয়ে</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>মুক্তিযোদ্ধা ক্রীড়া চক্র, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>মোঃ আলী বক্সিং ক্লাব, যশোর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>সিটি বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>সিপাহিবাগ যুব সংঘ, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td> ফকিরাপুল ইয়াংম্যানস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td> যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td> রংপুর সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td> লালমনিরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>আমজাদ আলী বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>কুষ্টিয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>দিনাজপুর শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>পোলস্টার ক্লাব, দিনাজপুর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>বাগেরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>বিজেএমসি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>রংপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>স্যার মতিন ক্লাব, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৯</td>
                                          <td>৯</td>
                                          <td>১৮</td>
                                      </tr>
                                  </tbody>
                                </table>
                           
                        </div>
                        <div class="tab-pane fade" id="scro-man" role="tabpanel" aria-labelledby="nav-scro-man">
                           
                                <h4 class="mt-5">বক্সিং</h4>
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
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>৩</td>
                                                      <td>১</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td> বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>১</td>
                                                      <td>২</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>চাপাইঃ বক্সিং একাডেমি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>রাজশাহী সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>গোড়ান মৈত্রী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>ঢাকা ওয়ান্ডার্স ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>মুক্তিযোদ্ধা ক্রীড়া চক্র, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>সিটি বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>সিপাহিবাগ যুব সংঘ, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>জামালপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>বাংলাদেশ রেলওয়ে</td>
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
                                                      <td>মোঃ আলী বক্সিং ক্লাব, যশোর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td> ফকিরাপুল ইয়াংম্যানস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td> যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td> রংপুর সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td> লালমনিরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>আমজাদ আলী বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>কুষ্টিয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>দিনাজপুর শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>পোলস্টার ক্লাব, দিনাজপুর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>বাগেরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>বিজেএমসি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>রংপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>স্যার মতিন ক্লাব, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৪</td>
                                          <td>৬</td>
                                          <td>১২</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-woman" role="tabpanel" aria-labelledby="nav-scro-woman">
                            
                                <h4 class="mt-5">বক্সিং</h4>
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
                                                      <td> বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>৪</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>চাপাইঃ বক্সিং একাডেমি</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>রাজশাহী সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>জামালপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>বাংলাদেশ রেলওয়ে</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>মোঃ আলী বক্সিং ক্লাব, যশোর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>গোড়ান মৈত্রী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ঢাকা ওয়ান্ডার্স ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>মুক্তিযোদ্ধা ক্রীড়া চক্র, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>সিটি বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>সিপাহিবাগ যুব সংঘ, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td> ফকিরাপুল ইয়াংম্যানস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td> যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td> রংপুর সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td> লালমনিরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>আমজাদ আলী বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>কুষ্টিয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>দিনাজপুর শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>পোলস্টার ক্লাব, দিনাজপুর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>বাগেরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>বিজেএমসি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>রংপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>স্যার মতিন ক্লাব, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৫</td>
                                          <td>৩</td>
                                          <td>৬</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-duet" role="tabpanel" aria-labelledby="nav-scro-duet">
                            
                                <h4 class="mt-5">বক্সিং</h4>
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
                                                      <td> বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>চাপাইঃ বক্সিং একাডেমি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>রাজশাহী সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>গোড়ান মৈত্রী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>জামালপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>ঢাকা ওয়ান্ডার্স ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>বাংলাদেশ রেলওয়ে</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>বান্দরবান পার্বত্য জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>মুক্তিযোদ্ধা ক্রীড়া চক্র, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>মোঃ আলী বক্সিং ক্লাব, যশোর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>সিটি বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>সিপাহিবাগ যুব সংঘ, ঢাকা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td> ফকিরাপুল ইয়াংম্যানস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td> যশোর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td> রংপুর সিটি কর্পোরেশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td> লালমনিরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>আমজাদ আলী বক্সিং ক্লাব, রাজশাহী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>কুষ্টিয়া জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>খুলনা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>দিনাজপুর শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>পোলস্টার ক্লাব, দিনাজপুর</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>বাগেরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>বিজেএমসি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>রংপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>সিরাজগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>সিলেট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>স্যার মতিন ক্লাব, ঢাকা</td>
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