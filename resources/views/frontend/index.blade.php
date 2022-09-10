@extends('frontend.layouts.master')

@section('content')

<!-- Slide -->           
<section class="camera_wrap camera_white_skin" id="slide">

    @foreach($sliders as $slide)
    <!-- Item Slide - Caption --> 
    <div  data-src="{{ asset('frontend/assets/img/sliders/'.$slide->slider_image) }}">
        <div class="style-caption fadeFromTop">
            <div class="overlay-bg"></div>
            {{-- <div class="container"> 
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="animated fadeInRight">{{$slide->slider_title}}</h1>
                    </div>    
                </div>                     
            </div> --}}
        </div>
    </div>
    <!-- End Item Slide - Caption  -->
    @endforeach

</section>   
<!-- End Slide --> 

<!-- Section Area - Content Central -->
<section class="content-info">

<div class="semiboxshadow text-center">
    <img src="{{ asset('frontend/assets/img/img-theme/shp.png') }}" class="img-responsive" alt="">
</div>

<!-- Dark Home -->
<div class="bg-dark dark-home">
    <div class="row">
        <!-- Left Content - Tabs and Carousel -->
        <div class="col-md-12">
            <!-- Nav Tabs -->
            <ul class="nav nav-tabs" id="myTab">
               <li class="active"><a href="#upcomming-events" data-toggle="tab">UPCOMING EVENTS</a></li>
               <li><a href="#media-press" data-toggle="tab">MEDIA & PRESS</a></li>
               <li><a href="#photo-gallery" data-toggle="tab">PHOTO GALLERY</a></li>
            </ul>
            <!-- End Nav Tabs -->

            <!-- Content Tabs -->
            <div class="tab-content">
                
                <div class="tab-pane active" id="upcomming-events">
                    <ul id="events-carousel row" class="events-carousel padding-top">

                        @foreach($upcoming_events as $u_event)
                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    {{$u_event->start_date}}
                                </div>
                                <a href="{{route('post', $u_event->id)}}"><img src="{{asset("frontend/assets/posts/images/".$u_event->category."/".$u_event->image)}}" alt="{{$u_event->title}}"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="{{route('post', $u_event->id)}}">{{$u_event->title}}</a></h4>
                            </div>
                        </li>
                        @endforeach
          
                    </ul>
                    <div class="clearfix" style="margin-bottom: 15px;"></div>

                    @if(isset($upcoming_events[0]))
                    @php $cat = $upcoming_events[0]->category; @endphp
                    <a href="{{route('newss', $cat)}}" class="btn btn-default pull-right">View More</a>
                    @endif
                </div>
                <!-- Tab One - Feature News -->
                

                <!-- Tab Two - Players Staff -->
                <div class="tab-pane d-none" id="media-press">
                    <!-- media post-->  
                    <ul id="media-carousel row" class="media-carousel padding-top">
                        
                        @foreach($media_press as $m_press)
                        <!-- Item media post -->  
                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    {{$m_press->start_date}}
                                </div>
                                <a href="{{route('post', $m_press->id)}}"><img src="{{asset("frontend/assets/posts/images/".$m_press->category."/".$m_press->image)}}" alt="{{$m_press->title}}"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="{{route('post', $m_press->id)}}">{{$m_press->title}}</a></h4>
                            </div>
                        </li>
                        <!-- End Item media post -->  
                        @endforeach
                                    
                    </ul>
                    <!-- End media post--> 
                    
                    <div class="clearfix" style="margin-bottom: 15px;"></div>

                    @if(isset($media_press[0]))
                    @php $cat = $media_press[0]->category; @endphp
                    <a href="{{route('newss', $cat)}}" class="btn btn-default pull-right">View More</a> 
                    @endif
                </div>
                <!-- Tab Two - Players Staff -->

                <!-- Tab Three - Club Teams -->
                <div class="tab-pane" id="photo-gallery">
                    <!-- Clubs Carousel-->  
                    <ul class="clubs-teams row">

                        @foreach($galleries as $gallery)
                        <!-- Item clubs --> 
                        <li class="col-sm-4">
                            <div class="header-post">
                                <a href="{{route('singleGallery', $gallery->id)}}"><img src="{{ asset('frontend/assets/img/galleries_thumbnails/'.$gallery->image) }}" alt="{{$gallery->name}}"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="{{route('singleGallery', $gallery->id)}}">{{$gallery->name}}</a></h4>
                            </div>
                        </li>
                        <!-- End Item clubs -->
                        @endforeach

                    </ul>
                    <!-- End Clubs Carousel--> 
                    
                    <div class="clearfix" style="margin-bottom: 15px;"></div>
                    
                    <a href="{{route('all-galleries')}}" class="btn btn-default pull-right">View All</a>    
                </div>
                <!-- Tab Three - Club Teams -->
            </div>
            <!-- Content Tabs -->
        </div> 
        <!-- Left Content - Tabs and Carousel -->    

        {{-- <div class="col-md-3" id="event">
            <aside>
                <div class="title-color text-center">
                    <h4>Next Event</h4>
                </div>
                
                <ul id="clubs-carousel">
                    <li>
                        <div class="content-counter content-counter-home">
                            <p class="text-center"> 
                                <i class="fa fa-clock-o"></i> 
                                Countdown Till Start
                            </p>
                            <div id="event-one" class="counter"></div>
                            <ul class="post-options">
                                <li><i class="fa fa-calendar"></i>12 May - 22 May 2017</li>
                            </ul>
                            <p><a href="#" target="_blank"><img src="{{ asset('frontend/assets/img/baku-2017.png') }}" class="img-responsive center-block" width="160"></a></p>
                        </div>
                    </li>
                </ul>
            </aside>            
        </div> --}}

    </div>
</div>   
<!-- Dark Home -->

<!-- Content Central -->
<div class="container padding-top">
    <div class="row">
        
        <!-- content Column Left -->
        <div class="col-xs-12 col-md-12 col-lg-12">                     
            <!-- Recent Post -->
            <div class="panel-box">
            @php $cat = $recent_news[0]->category; @endphp
                <div class="titles">
                    <h4>Recent News                        
                        <a href="{{route('newss', $cat)}}" class="btn btn-default btn-xs pull-right">View More</a>  
                    </h4>
                </div>

                    @foreach($recent_news as $news)
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

                    {{$recent_news->links()}}

            </div>  
            <!-- End Recent Post -->                              
        </div>
        <!-- End content Left -->

        <!-- content Sidebar Center -->
        {{-- <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-4">                     
            <div class="panel-box">
                <div class="titles">
                    <h4>12th South Asian Games</h4>
                </div>
                <ul class="single-carousel">  
                    <li>
                        <img src="{{ asset('frontend/assets/uploads/post/Mascot_Logo.jpg') }}" alt="" class="img-responsive">
                        <div class="info-single-carousel">
                            <p>The South Asian Games is a biennial multinational multi-sport event held amongst the athletes from South Asia. The governing body of these games is South Asia Olympic Council (SAOC). <a href="http://www.southasiangames2016.com/" target="_blank" class="text-right">View More [+]</a></p>
                        </div>
                    </li>                                
                </ul>                               
            </div>      
        </aside> --}}
        <!-- End content Sidebar Center -->

        <!-- Links -->
        <aside class="col-xs-12 col-sm-12 col-md-8 col-lg-8">                     
            <!-- Diary -->
            <div class="panel-box">
                <div class="titles">
                    <h4><i class="fa fa-external-link"></i>Links</h4>
                </div>
                <!-- List Diary --> 
                <div class="carousel owl-carousel" id="links-carousel">
                    @foreach($links as $link)
                        <a href="{{$link->link}}" target="_blank"><img src="{{ asset('frontend/assets/img/partners/'.$link->type.'/'.$link->image) }}" class="img-responsive"></a>
                    @endforeach
                </div>
                <!-- End List Diary -->
            </div>  
            <!-- End Diary --> 
        </aside>
        <!-- End Links -->
        
        <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-4">
            <!-- Video presentation -->
            <div class="panel-box">
                <div class="titles">
                    <h4>Video</h4>
                </div>
                <!-- Locations Video --> 
                <div class="row">
                    <iframe src="https://www.youtube.com/embed/hcdKEYN5FFg" class="video"></iframe>
                    <div class="col-md-12">
                        {{-- <h4>12th South Asian Games</h4>                                     --}}
					</div>
                </div>
                <!-- End Locations Video --> 
            </div>  
            <!-- End Video presentation--> 
        </aside>



        <!-- Olympic Partners -->
        <div class="col-xs-12 col-md-9 col-lg-12">
            <div class="panel-box">                            
                <div class="titles">
                    <h4>Olympic Partners</h4>
                </div>     
                <div class="row" class="carousel owl-carousel" id="olympic-partners-carousel">
                    @foreach($olympic_partners as $partner)
                    <a href="{{$partner->link}}" target="_blank"><img src="{{ asset('frontend/assets/img/partners/'.$partner->type.'/'.$partner->image) }}" class="img-responsive"></a>
                    @endforeach
                </div>                          
            </div>  
        </div>
        <!-- End Olympic Partners -->


        
    </div>                     
</div>  
<!-- End Content Central -->
</section>
<!-- End Section Area -  Content Central -->


@endsection