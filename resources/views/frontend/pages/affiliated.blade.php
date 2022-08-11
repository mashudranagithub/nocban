@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Affiliated Organization</h1>
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
                <li>Affiliated Organization</li>                                       
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
                        <h4><i class="fa fa-rocket"></i>Affiliated Organization</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Category-A: Olympic Games NFs Affiliated with BOA</h4>
                            <ul>
                                <li>Bangladesh Archery Federation</li>
                                <li>Bangladesh Athletics Federation</li>
                                <li>Bangladesh Badminton Federation</li>
                                <li>Bangladesh Basketball Federation</li>
                                <li>Bangladesh Boxing Federation</li>
                                <li>Bangladesh Cycling Federation</li>
                                <li>Bangladesh Fencing Association</li>
                                <li>Bangladesh Football Federation</li>
                                <li>Bangladesh Golf Federation</li>
                                <li>Bangladesh Gymnastics Federation</li>
                                <li>Bangladesh Handball Federation</li>
                                <li>Bangladesh Hockey Federation</li>
                                <li>Bangladesh Judo Federation</li>
                                <li>Bangladesh Karate Federation</li>
                                <li>Bangladesh Rowing Federation</li>
                                <li>Bangladesh Shooting Federation</li>
                                <li>Bangladesh Swimming Federation</li>
                                <li>Bangladesh Table Tennis Federation</li>
                                <li>Bangladesh Taekwondo Federation</li>
                                <li>Bangladesh Tennis Federation</li>
                                <li>Bangladesh Volleyball Federation</li>
                                <li>Bangladesh Weightlifting Federation</li>
                                <li>Bangladesh Wrestling Federation</li>
                                <li>Bangladesh Rugby Association</li>
                                <li>Bangladesh Baseball –Softball Association</li>
                            </ul>

                            <h4>Category-B: Non Olympic but Regional Games NFs Affiliated with BOA</h4>
                            <ul>
                                <li>Bangladesh Chess Federation</li>
                                <li>Bangladesh Cricket Board</li>
                                <li>Bangladesh Kabaddi Federation</li>
                                <li>Bangladesh Wushu Associatio</li>
                                <li>Bangladesh Roller Skating Federation</li>
                            </ul>

                            <h4>Category-C: Multi-Games Sport Associations Affiliated with BOA</h4>
                            <ul>
                                <li>Bangladesh Army Sports Control Board</li>
                                <li>Bangladesh Navy Sports Control Board</li>
                                <li>Bangladesh Air Force Sports Control Board</li>
                                <li>Border Guards of Bangladesh Sports Board</li>
                                <li>Bangladesh Police Sports Council</li>
                                <li>Bangladesh Ansar &amp; VDP Sports Control Board</li>
                                <li>Bangladesh Women Sports Association</li>
                                <li>Special Olympics-Bangladesh</li>
                            </ul>

                            <h4>Category-D: Olympic and Non Olympic Games&#039; NF/NA yet to be Affiliated with BOA</h4>
                            <ul>
                                <li>Bangladesh BASAUP Association</li>
                                <li>Bangladesh Billiard &amp; Snooker Federation</li>
                                <li>Bangladesh Bodybuilding Federation</li>
                                <li>Bangladesh Breeze Federation</li>
                                <li>Bangladesh Carom Federation.</li>
                                <li>Bangladesh Deaf &amp; Dumb Association</li>
                                <li>Bangladesh Kho-kho Federation</li>
                                <li>Bangladesh Kick Boxing Association</li>
                                <li>Bangladesh Kite Federation</li>
                                <li>Bangladesh Life Guard Association (Proposed)</li>
                                <li>Bangladesh Marshal Art Confederation</li>
                                <li>Bangladesh Squash Rackets Federation</li>
                                <li>Bangladesh Surfing Association (Proposed)</li>
                            </ul>
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