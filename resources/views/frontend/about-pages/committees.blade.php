@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Commissions &amp; Committees</h1>
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
                <li>Commissions &amp; Committees</li>                                       
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
                        <h4><i class="fa fa-rocket"></i>Commissions &amp; Committees</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Commissions of BOA</h4>
                            <ul>
                                <li>Athlete Commission</li>
                                <li>Women Commission</li>
                            </ul>

                            <h4>Standing Committees of BOA</h4>
                            <p>The following Standing Committees perform the activities entrusted by BOA in an advisory capacity</p>
                            <ul>
                                <li>Administration and Purchase Committee</li>
                                <li>Appeal Committee</li>
                                <li>Audit Committee</li>
                                <li>Budget and Finance Committee</li>
                                <li>Discipline Committee</li>
                                <li>Information, Statistics and Media Committee</li>
                                <li>Law and Ethics Committee</li>
                                <li>Marketing Committee</li>
                                <li>Medical and Anti Doping Committee</li>
                                <li>Solidarity Committee</li>
                                <li>Sport for All committee</li>
                                <li>Sports and Environment Committee</li>
                                <li>Training and Development Committee</li>
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