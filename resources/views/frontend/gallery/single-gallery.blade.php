@extends('frontend.layouts.master') @section('content')

<!-- Section Title -->
<section class="section-title img-gallery">
    <div class="overlay-bg"></div>
    <div class="container">
        @if(isset($photos[0]))
        <h1>{{$photos[0]->name}}@else
            <h1>Gallery Name @endif</h1>
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
                <li><a href="{{route('all-galleries')}}">Galleries</a></li>
                <li>/</li>
                <li><a href="javascript:void(0)">Gallery Photos</a></li>
            </ul>
        </div>
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container">
        <div class="row">
            @if(isset($photos[0])) @foreach($photos as $photo)
            <div class="col-xs-6 col-sm-6 col-md-3">
                <div class="img-hover" style="margin-top: 30px;">
                    <a href="{{ asset('frontend/assets/img/galleries_items/'.$photo->gallery_id.'/'.$photo->gallery_item)}}" class="fancybox">
                        <img src="{{ asset('frontend/assets/img/galleries_items/'.$photo->gallery_id.'/'.$photo->gallery_item)}}" alt="{{$photo->caption}}" class="img-responsive">
                    </a>
                </div>
                <p class="text-center" style="margin-top: 10px;">{{$photo->caption}}</p>
            </div>
            @endforeach
            @else
            <div class="col-md-12">
                <p>No images</p>
            </div>
            @endif
        </div>
    </div>
    <!-- End Content Central -->
</section>
<!-- End Section Area - Content Central -->

@endsection