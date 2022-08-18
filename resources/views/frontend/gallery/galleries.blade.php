@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-gallery">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Gallery</h1>
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
                <li><a href="{{route('galleries')}}">Galleries</a></li>
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container"> 
        <div class="row"> 


            @foreach($galleries as $gallery)
            <!-- Item Gallery --> 
            <div class="col-sm-4" style="margin-top: 30px;">
                <div class="header-post">
                    <a href="{{route('singleGallery', $gallery->id)}}"><img src="{{ asset('frontend/assets/img/galleries_thumbnails/'.$gallery->image) }}" alt="{{$gallery->name}}"></a>
                </div>
                <div class="info-post" style="margin-top: 10px;">
                    <h4><a href="{{route('singleGallery', $gallery->id)}}">{{$gallery->name}}</a></h4>
                </div>
            </div>
            <!-- End Item Gallery -->
            @endforeach

        
        </div>
        <div class="row">
            <div class="col-md-12">
            {{$galleries->links()}}
            </div>
        </div>
        
    </div>
    <!-- End Content Central -->
</section>
<!-- End Section Area - Content Central -->

@endsection