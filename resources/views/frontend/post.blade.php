@extends('frontend.layouts.master')

@section('content')


<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>@if($post) {{$post->title}} @endif</h1>
    </div>
</section>
<!-- End Section Title --> 

<!-- Section Area - Content Central -->
<section class="content-info">

    <div class="crumbs">
        <div class="container">
            <ul>
                <li><a href="index.php">Home</a></li>                                     
                <li>/</li>
                <li>@if($post) {{ucfirst(trans(Str::replace('_', ' ', $post->category)))}}@endif</li>
                
                @include('frontend.partials.back-button')                                     
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="@if($post) {{$post->title}} @endif">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">
            @if($post) 
            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>{{$post->title}}</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12" style="padding-bottom: 15px">
                            @if(isset($post->file))
                            <div class="col-md-12">
                                <embed src="{{asset("frontend/assets/posts/files/".$post->category."/".$post->file)}}" width="100%" height="750" alt="{{$post->file}}">
                                <br>
                                <br>
                            </div>
                            @endif
                            <div class="clearfix"></div>
                            @if(isset($post->image))
                            <div class="col-md-12 pull-right">
                                <img src="{{asset("frontend/assets/posts/images/".$post->category."/".$post->image)}}" class="img-responsive"> 
                            </div>
                            @endif
                            <div class="col-md-12">
                            <br>
                                {!!$post->details!!}
                            </div>
                        </div>
                    </div>
                    <!-- End Info ABout --> 
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->
            @else
            <p>No data found !!</p>
            @endif

        </div>                     
    </div>  
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection