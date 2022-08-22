@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Previous President & SG</h1>
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
                <li>Previous President & SG</li>                                       
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
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>{{$post->title}}</h4>
                    </div>
                    <div class="row">
						<div class="col-md-12">
                            @if(isset($post->image))
                            <div class="col-md-4 pull-right">
                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset("frontend/assets/posts/images/".$post->category."/".$post->image)}}" class="img-responsive"> 
                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            {!!$post->details!!}
							<br>
							@if($post->file)
							<iframe src="{{asset("frontend/assets/posts/files/".$post->category."/".$post->file)}}" frameborder="0" scrolling="no" width="100%" height="800px;"></iframe>
                            @endif
						</div>
                    </div>
                </div>  
            </div>
            <!-- End About Template-->
            
        </div>                     
    </div>  
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection