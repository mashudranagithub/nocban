@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>International Games</h1>
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
                <li>International</li>                                      
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
                        <h4><i class="fa fa-rocket"></i>International Games</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <h4><a href="{{route('asianGames')}}">Asian Games</a></h4>
                            <h4><a href="{{route('asianBeachGames')}}">Asian Beach Games</a></h4>
                            <h4><a href="{{route('asianYouthGames')}}">Asian Youth Games</a></h4>
                            <h4><a href="{{route('commonWealthGames')}}">Common Wealth Games</a></h4>
                            <h4><a href="{{route('commonWealthYouthGames')}}">Common Wealth Youth Games</a></h4>
                            <h4><a href="{{route('childrenOfAsiaInternationalSportsGames')}}">Children of Asia International Sports Games</a></h4>
                            <h4><a href="{{route('islamicSolidarityGames')}}">Islamic Solidarity Games</a></h4>
                            <h4><a href="{{route('summerOlympicGames')}}">Summer Olympic Games</a></h4>
                            <h4><a href="{{route('youthOlympicGames')}}">Youth Olympic Games</a></h4>
                            <h4><a href="{{route('southAsianGames')}}">South Asian Games</a></h4>
                            <h4><a href="{{route('southAsianBeachGames')}}">South Asian Beach Games</a></h4>
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