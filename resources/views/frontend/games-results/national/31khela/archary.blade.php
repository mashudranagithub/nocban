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
                <li>আরচ্যারী</li>
                
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
                            
                                <h4 class="mt-5">আরচ্যারী </h4>
                                <table class="table table-hover table-striped">
                                  <thead class="scr-had-bg">
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
                                                      <td>৪</td>
                                                      <td>১</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>২</td>
                                                      <td>৩</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>২</td>
                                                      <td>২</td>
                                                      <td>৪</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>১</td>
                                                      <td>৩</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td> বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td> ওয়াহেদ আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td> কোয়ান্টাম স্পোর্টিয়াম</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> গাজী ট্যাংকস</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td> জয়পুরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td> দয়াগঞ্জ বর্ণালী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td> বাংলাদেশ এক্স-ক্যাডেট ওয়েলফেয়ার ট্রাস্ট</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td> বাঙলা ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td> বিনন্দপুর সূর্য তরুন ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>উত্তরা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>এএসপিটিএস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>এস টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>এস বি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>ওল্ড আইডিয়ালস এসোসিয়েশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>গোপালগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>গ্রীণ উড ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>চুয়াডাঙ্গা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>টিম ব্লেজার বিডি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ড্যানিস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>ঢাকা মেরিনার ইয়াংস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>তীরন্দাজ সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>দন্ত্যস সমাজ সেবা সংগঠন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>নীলফামারী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>প্রগতি সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>ফরিদপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>বরিশাল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>বসতি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>মহাস্থান আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৭</td>
                                                      <td>মৌচাক সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৮</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৯</td>
                                                      <td>সতীর্থ ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪০</td>
                                                      <td>সাবু স্মৃতি সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪১</td>
                                                      <td>সিংনা সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪২</td>
                                                      <td>সৃষ্টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>১০</td>
                                          <td>১০</td>
                                          <td>১০</td>
                                      </tr>
                                  </tbody>
                                </table>
                           
                        </div>
                        <div class="tab-pane fade" id="scro-man" role="tabpanel" aria-labelledby="nav-scro-man">
                           
                                <h4 class="mt-5">আরচ্যারী</h4>
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
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>১</td>
                                                      <td>২</td>
                                                      <td>৩</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td> বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td> ওয়াহেদ আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td> কোয়ান্টাম স্পোর্টিয়াম</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> গাজী ট্যাংকস</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td> জয়পুরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td> দয়াগঞ্জ বর্ণালী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td> বাংলাদেশ এক্স-ক্যাডেট ওয়েলফেয়ার ট্রাস্ট</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td> বাঙলা ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td> বিনন্দপুর সূর্য তরুন ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>উত্তরা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>এএসপিটিএস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>এস টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>এস বি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>ওল্ড আইডিয়ালস এসোসিয়েশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>গোপালগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>গ্রীণ উড ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>চুয়াডাঙ্গা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>টিম ব্লেজার বিডি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ড্যানিস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>ঢাকা মেরিনার ইয়াংস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>তীরন্দাজ সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>দন্ত্যস সমাজ সেবা সংগঠন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>নীলফামারী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>প্রগতি সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>ফরিদপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>বরিশাল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>বসতি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>মহাস্থান আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৭</td>
                                                      <td>মৌচাক সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৮</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৯</td>
                                                      <td>সতীর্থ ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪০</td>
                                                      <td>সাবু স্মৃতি সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪১</td>
                                                      <td>সিংনা সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪২</td>
                                                      <td>সৃষ্টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৪</td>
                                          <td>৪</td>
                                          <td>৪</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-woman" role="tabpanel" aria-labelledby="nav-scro-woman">
                            
                                <h4 class="mt-5">আরচ্যারী</h4>
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
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>২</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td> বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td> ওয়াহেদ আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td> কোয়ান্টাম স্পোর্টিয়াম</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> গাজী ট্যাংকস</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td> জয়পুরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td> দয়াগঞ্জ বর্ণালী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td> বাংলাদেশ এক্স-ক্যাডেট ওয়েলফেয়ার ট্রাস্ট</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td> বাঙলা ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td> বিনন্দপুর সূর্য তরুন ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>উত্তরা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>এএসপিটিএস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>এস টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>এস বি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>ওল্ড আইডিয়ালস এসোসিয়েশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>গোপালগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>গ্রীণ উড ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>চুয়াডাঙ্গা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>টিম ব্লেজার বিডি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ড্যানিস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>ঢাকা মেরিনার ইয়াংস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>তীরন্দাজ সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>দন্ত্যস সমাজ সেবা সংগঠন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>নীলফামারী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>প্রগতি সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>ফরিদপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>বরিশাল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>বসতি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>মহাস্থান আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৭</td>
                                                      <td>মৌচাক সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৮</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৯</td>
                                                      <td>সতীর্থ ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪০</td>
                                                      <td>সাবু স্মৃতি সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪১</td>
                                                      <td>সিংনা সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪২</td>
                                                      <td>সৃষ্টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>৪</td>
                                          <td>৪</td>
                                          <td>২</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-duet" role="tabpanel" aria-labelledby="nav-scro-duet">
                            
                                <h4 class="mt-5">আরচ্যারী</h4>
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
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>১</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>বাংলাদেশ আনসার ও ভিডিপি</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ সেনাবাহিনী</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>২</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td> বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বর্ডার গার্ড বাংলাদেশ (বিজিবি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td> ওয়াহেদ আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td> কোয়ান্টাম স্পোর্টিয়াম</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td> গাজী ট্যাংকস</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td> জয়পুরহাট জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td> দয়াগঞ্জ বর্ণালী সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td> বাংলাদেশ এক্স-ক্যাডেট ওয়েলফেয়ার ট্রাস্ট</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td> বাঙলা ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td> বিনন্দপুর সূর্য তরুন ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>উত্তরা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৭</td>
                                                      <td>এএসপিটিএস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৮</td>
                                                      <td>এস টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৯</td>
                                                      <td>এস বি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২০</td>
                                                      <td>ওল্ড আইডিয়ালস এসোসিয়েশন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২১</td>
                                                      <td>গোপালগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২২</td>
                                                      <td>গ্রীণ উড ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৩</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৪</td>
                                                      <td>চুয়াডাঙ্গা আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৫</td>
                                                      <td>টিম ব্লেজার বিডি</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৬</td>
                                                      <td>ড্যানিস আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৭</td>
                                                      <td>ঢাকা মেরিনার ইয়াংস ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৮</td>
                                                      <td>তীরন্দাজ সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২৯</td>
                                                      <td>দন্ত্যস সমাজ সেবা সংগঠন</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩০</td>
                                                      <td>নীলফামারী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩১</td>
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩২</td>
                                                      <td>প্রগতি সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৩</td>
                                                      <td>ফরিদপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৪</td>
                                                      <td>বরিশাল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৫</td>
                                                      <td>বসতি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৬</td>
                                                      <td>মহাস্থান আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৭</td>
                                                      <td>মৌচাক সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৮</td>
                                                      <td>রাজশাহী জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩৯</td>
                                                      <td>সতীর্থ ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪০</td>
                                                      <td>সাবু স্মৃতি সংসদ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪১</td>
                                                      <td>সিংনা সংঘ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪২</td>
                                                      <td>সৃষ্টি আরচ্যারী ক্লাব</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>২</td>
                                          <td>২</td>
                                          <td>৪</td>
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