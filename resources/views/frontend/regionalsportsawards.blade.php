@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Regional Sports Awards</h1>
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
                <li>Sports Awards</li>  
                <li>/</li>
                <li>Regional</li>                                      
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
                        <h4><i class="fa fa-rocket"></i>Regional Sports Awards</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, veritatis omnis nulla tenetur vitae doloremque quidem libero officiis aspernatur reiciendis, dolorum ad, tempore ullam optio itaque veniam. Neque deserunt blanditiis aspernatur quisquam? Quasi eligendi nostrum consectetur cumque sapiente magnam minus natus, possimus mollitia commodi quaerat, harum eos corporis molestias saepe voluptatem praesentium in iste amet, at ut ullam id atque.</p>
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