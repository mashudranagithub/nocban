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
                        <h4><i class="fa fa-rocket"></i>ডিসিপ্লিন অনুযায়ী পদক তালিকা </h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <h3 style="text-align: center;">বঙ্গবন্ধু ৯ম বাংলাদেশ গেমস ২০২০ -  ডিসিপ্লিন অনুযায়ী পদক তালিকা</h3>
                            <hr>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('archary')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/01-archari.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('badminton')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/02-badminton.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('sorirgothon')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/03-sorir-gothon.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('daba')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/04-daba.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('cycling')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/05-cycling.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('football')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/06-football.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('gymnastic')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/07-gymnastic.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('hockey')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/08-hockey.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('kabadi')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/09-kabadi.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('khokho')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/10-khokho.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('ragbi')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/11-ragbi.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('swiming')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/12-swimming.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('tabletennis')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/12-table-tennis.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('taykoando')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/13-taykoando.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('varuttolon')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/14-varuttolon.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('usha')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/15-usha.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('athletics')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/16-athletics.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('basketball')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/17-basketball.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('boxing')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/18-boxing.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('cricket')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/19-cricket.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('fencing')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/20-fencing.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('golf')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/21-golf.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('handball')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/22-handball.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('judo')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/23-judo.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('carate')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/24-carate.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('roing')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/25-roing.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('rolerscating')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/26-roler-scating.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('shooting')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/27-shooting.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('tennis')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/28-tennis.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('vollyball')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/29-vollyball.png')}}">
                            	</a>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="single-list">
                            	<a href="{{route('resling')}}">
                            	    <img src="{{asset('frontend/assets/img/31khela/30-resling.png')}}">
                            	</a>
                            </div>
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