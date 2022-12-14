@extends('frontend.layouts.master')

@section('content')

<style>
    .fancybox-overlay-fixed {
        z-index: 9999 !important;
    }
</style>

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>19 th Asian Games</h1>
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
                <li>19th Asian Games</li>                                       
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
  

        <!-- Items Gallery filters-->
        <div class="portfolioContainer">
@if($posts)
        @foreach($posts as $post)
            <!-- Item -->
            <div class="col-xs-6 col-sm-6 col-md-4 soccer">
                <div class="img-hover">
                    <a href="{{route('post', $post->id)}}" class="fancybox">
                        <img src="{{asset("frontend/assets/posts/images/".$post->category."/".$post->image)}}" alt="" class="img-responsive">
                    </a>
                </div>                
                <p class="text-center">{{$post->title}}</p>
            </div>
            <!-- End Item -->
        @endforeach
@else
            <!-- Item -->
            <div class="col-xs-6 col-sm-6 col-md-4 soccer">
                <div class="img-hover">
                    <a href="{{asset('frontend/assets/img/19thasiangames/1.jpg')}}" class="fancybox"><img src="{{asset('frontend/assets/img/19thasiangames/1.jpg')}}" alt="" class="img-responsive"></a>
                </div>                
                <p class="text-center">Holding the Invitation Letter-Mr. Syed Shahed Reza, NOC Secretary General and Mr. Fakhruddin Haider, NOC Director General</p>
            </div>
            <!-- End Item -->
            
            <!-- Item -->
            <div class="col-xs-6 col-sm-6 col-md-4 soccer">
                <div class="img-hover">
                    <a href="{{asset('frontend/assets/img/19thasiangames/2.jpg')}}" class="fancybox"><img src="{{asset('frontend/assets/img/19thasiangames/2.jpg')}}" alt="" class="img-responsive"></a>
                </div>                
                <p class="text-center">Holding the Mascots-Mr. Syed Shahed Reza, NOC Secretary General and Mr. Fakhruddin Haider, NOC Director General</p>
            </div>
            <!-- End Item -->
            
            <!-- Item -->
            <div class="col-xs-6 col-sm-6 col-md-4 soccer">
                <div class="img-hover">
                    <a href="{{asset('frontend/assets/img/19thasiangames/3.jpg')}}" class="fancybox"><img src="{{asset('frontend/assets/img/19thasiangames/3.jpg')}}" alt="" class="img-responsive"></a>
                </div>                
                <p class="text-center">CDM Seminar Banner</p>
            </div>
            <!-- End Item -->

            @endif

        </div>   
        <!-- End Items Gallery filters-->       

    </div>
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection