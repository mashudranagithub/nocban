@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Asian Youth Games</h1>
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
                <li><a href="{{route('international')}}">International</a></li> 
                <li>/</li>
                <li>Asian Youth Games</li>                                      
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
                        <h4><i class="fa fa-rocket"></i>Asian Youth Games</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque aspernatur aperiam iure necessitatibus libero ullam quibusdam reiciendis corporis dolor sed ducimus explicabo non inventore alias eius soluta enim cumque impedit obcaecati dolore atque eum, vitae amet autem. Ut magnam aliquam repellat, unde perferendis nobis mollitia a dignissimos hic cumque labore nihil accusantium ea? Architecto ad iste doloribus. Repellat, ratione veniam?</p>
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