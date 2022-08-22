@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>{{ ucfirst(trans(Str::replace('_', ' ', $newses[0]->category)));}}</h1>
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
                <li>{{ ucfirst(trans(Str::replace('_', ' ', $newses[0]->category)));}}</li>
                
                @include('frontend.partials.back-button')
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">

            <!-- content Column Left -->
            <div class="col-md-12">                     
                <!-- Recent Post -->
                <div class="panel-box">

                    <div class="titles">
                        <h4>All News</h4>
                    </div>
     
                    @foreach($newses as $news)
                    <!-- Post Item -->
                    <div class="post-item">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="img-hover">
                                    <img src="{{asset("frontend/assets/posts/images/".$news->category."/".$news->image)}}" alt="{{$news->title}}" class="img-responsive">
                                    <div class="overlay"><a href="{{route('post', $news->id)}}">+</a></div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h4><a href="{{route('post', $news->id)}}">{{$news->title}}</a></h4>
                                <p class="data-info">
                                    {{$news->start_date}}
                                </p>
                                <a href="{{route('post', $news->id)}}">Read More [+]</a>
                            </div>
                       </div>
                    </div>
                    <!-- End Post Item -->                        
                    @endforeach


                </div>  
                <!-- End Recent Post --> 

                <!-- Pagination -->
                {{$newses->links()}}
                <!-- End Pagination -->
            </div>
             <!-- End content Left -->
        </div>                     
    </div>  
    <!-- End Content Central -->
</section>
<!-- End Section Area -  Content Central -->

@endsection