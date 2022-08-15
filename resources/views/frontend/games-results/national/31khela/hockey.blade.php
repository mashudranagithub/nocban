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
                <li>হকি</li>          
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
                            
                                <h4 class="mt-5">হকি </h4>
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
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
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
                                                      <td>ঝিনাইদহ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ নৌবাহিনী</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কুড়িগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>ঠাকুরগাঁও জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ঢাকা শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>ময়মনসিংহ জেলা ক্রীড়া সংস্থা</td>
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
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>২</td>
                                          <td>২</td>
                                          <td>২</td>
                                      </tr>
                                  </tbody>
                                </table>
                           
                        </div>
                        <div class="tab-pane fade" id="scro-man" role="tabpanel" aria-labelledby="nav-scro-man">
                           
                                <h4 class="mt-5">হকি</h4>
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
                                                      <td>১</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>২</td>
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৩</td>
                                                      <td>বাংলাদেশ নৌবাহিনী</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>ঝিনাইদহ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কুড়িগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>ঠাকুরগাঁও জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ঢাকা শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>ময়মনসিংহ জেলা ক্রীড়া সংস্থা</td>
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
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>১</td>
                                          <td>১</td>
                                          <td>১</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-woman" role="tabpanel" aria-labelledby="nav-scro-woman">
                            
                                <h4 class="mt-5">হকি</h4>
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
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
                                                      <td>১</td>
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
                                                      <td>ঝিনাইদহ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ নৌবাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>১</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কুড়িগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>ঠাকুরগাঁও জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ঢাকা শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>ময়মনসিংহ জেলা ক্রীড়া সংস্থা</td>
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
                                                                                      <tr><td colspan="5"><hr></td></tr>
                                      <tr>
                                          <td colspan="2" align="center">সর্ব মোট </td>
                                          <td>১</td>
                                          <td>১</td>
                                          <td>১</td>
                                      </tr>
                                  </tbody>
                                </table>
                            
                        </div>
                        <div class="tab-pane fade" id="scro-duet" role="tabpanel" aria-labelledby="nav-scro-duet">
                            
                                <h4 class="mt-5">হকি</h4>
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
                                                      <td>নড়াইল জেলা ক্রীড়া সংস্থা</td>
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
                                                      <td>ঝিনাইদহ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৪</td>
                                                      <td>বাংলাদেশ নৌবাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৫</td>
                                                      <td>কিশোরগঞ্জ জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৬</td>
                                                      <td>বাংলাদেশ পুলিশ</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৭</td>
                                                      <td>কুমিল্লা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৮</td>
                                                      <td>কুড়িগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>৯</td>
                                                      <td>চট্টগ্রাম জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১০</td>
                                                      <td>ঠাকুরগাঁও জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১১</td>
                                                      <td>ঢাকা জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১২</td>
                                                      <td>ঢাকা শিক্ষা বোর্ড</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৩</td>
                                                      <td>দিনাজপুর জেলা ক্রীড়া সংস্থা</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৪</td>
                                                      <td>বাংলাদেশ ক্রীড়া শিক্ষা প্রতিষ্ঠান (বিকেএসপি)</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৫</td>
                                                      <td>বাংলাদেশ বিমান বাহিনী</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                      <td>০</td>
                                                    </tr>
                                                
                                                    <tr>
                                                      <td>১৬</td>
                                                      <td>ময়মনসিংহ জেলা ক্রীড়া সংস্থা</td>
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