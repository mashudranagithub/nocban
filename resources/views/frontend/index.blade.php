@extends('frontend.layouts.master')

@section('content')

<!-- Slide -->           
<section class="camera_wrap camera_white_skin" id="slide">
<!-- Item Slide - Caption --> 
<div  data-src="{{ asset('frontend/assets/img/slide/slides/1.jpg') }}">
    <div class="style-caption fadeFromTop">
        <div class="overlay-bg"></div>
    </div>
</div>
<!-- End Item Slide - Caption  -->

<!-- Item Slide - Caption --> 
<div  data-src="{{ asset('frontend/assets/img/slide/slides/2.jpg') }}">
    <div class="style-caption fadeFromTop">
        <div class="overlay-bg"></div>
    </div>
</div>
<!-- End Item Slide - Caption  -->

<!-- Item Slide - Caption --> 
<div  data-src="{{ asset('frontend/assets/img/slide/slides/3.jpg') }}">
    <div class="style-caption fadeFromTop">
        <div class="overlay-bg"></div>
    </div>
</div>
<!-- End Item Slide - Caption  --> 

<!-- Item Slide - Caption --> 
<div  data-src="{{ asset('frontend/assets/img/slide/slides/4.jpg') }}">
    <div class="style-caption fadeFromTop">
        <div class="overlay-bg"></div>
    </div>
</div>
<!-- End Item Slide - Caption  -->  
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
        <div class="col-md-9">
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

                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    July 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/thumbs/konya2021.jpg') }}" alt="Links of 5th Islamic Solidarity Games"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Links of 5th Islamic Solidarity Games</a></h4>
                            </div>
                        </li>                      

                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    July 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/thumbs/konya2021.jpg') }}" alt="Links of 5th Islamic Solidarity Games"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Links of 5th Islamic Solidarity Games</a></h4>
                            </div>
                        </li>                      

                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    July 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/thumbs/konya2021.jpg') }}" alt="Links of 5th Islamic Solidarity Games"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Links of 5th Islamic Solidarity Games</a></h4>
                            </div>
                        </li>                      
          
                    </ul>
                    <div class="clearfix" style="margin-bottom: 15px;"></div>
                    <a href="news.php" class="btn btn-default pull-right">View More</a>
                </div>
                <!-- Tab One - Feature News -->
                

                <!-- Tab Two - Players Staff -->
                <div class="tab-pane d-none" id="media-press">
                    <!-- media post-->  
                    <ul id="media-carousel row" class="media-carousel padding-top">
                        

                        <!-- Item media post -->  
                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    June 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/Olympic_Day_2022.jpg') }}" alt="Olympic Day 2022"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Olympic Day 2022</a></h4>
                            </div>
                        </li>
                        <!-- End Item media post -->                        

                        <!-- Item media post -->  
                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    June 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/Olympic_Day_2022.jpg') }}" alt="Olympic Day 2022"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Olympic Day 2022</a></h4>
                            </div>
                        </li>
                        <!-- End Item media post -->                        

                        <!-- Item media post -->  
                        <li class="col-sm-4">
                            <div class="header-post">
                                <div class="date">
                                    June 2022
                                </div>
                                <a href="post.php"><img src="{{ asset('frontend/assets/uploads/post/Olympic_Day_2022.jpg') }}" alt="Olympic Day 2022"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="post.php">Olympic Day 2022</a></h4>
                            </div>
                        </li>
                        <!-- End Item media post -->                        
                    
                                    
                    </ul>
                    <!-- End media post--> 
                    
                    <div class="clearfix" style="margin-bottom: 15px;"></div>
                    
                    <a href="news.php" class="btn btn-default pull-right">View More</a>  
                </div>
                <!-- Tab Two - Players Staff -->

                <!-- Tab Three - Club Teams -->
                <div class="tab-pane" id="photo-gallery">
                    <!-- Clubs Carousel-->  
                    <ul class="clubs-teams row">

                        <!-- Item clubs --> 
                        <li class="col-sm-4">
                            <div class="header-post">
                                <a href="#"><img src="{{ asset('frontend/assets/uploads/gallery/thumbs/55.jpg') }}" alt="National Olympic Academy Photo Gallery"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="#">National Olympic Academy Photo Gallery</a></h4>
                            </div>
                        </li>
                        <!-- End Item clubs --> 

                        <!-- Item clubs --> 
                        <li class="col-sm-4">
                            <div class="header-post">
                                <a href="#"><img src="{{ asset('frontend/assets/uploads/gallery/thumbs/55.jpg') }}" alt="National Olympic Academy Photo Gallery"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="#">National Olympic Academy Photo Gallery</a></h4>
                            </div>
                        </li>
                        <!-- End Item clubs --> 

                        <!-- Item clubs --> 
                        <li class="col-sm-4">
                            <div class="header-post">
                                <a href="#"><img src="{{ asset('frontend/assets/uploads/gallery/thumbs/55.jpg') }}" alt="National Olympic Academy Photo Gallery"></a>
                            </div>
                            <div class="info-post">
                                <h4><a href="#">National Olympic Academy Photo Gallery</a></h4>
                            </div>
                        </li>
                        <!-- End Item clubs --> 

                    </ul>
                    <!-- End Clubs Carousel--> 
                    
                    <div class="clearfix" style="margin-bottom: 15px;"></div>
                    
                    <a href="gallery.php" class="btn btn-default pull-right">View All</a>    
                </div>
                <!-- Tab Three - Club Teams -->
            </div>
            <!-- Content Tabs -->
        </div> 
        <!-- Left Content - Tabs and Carousel -->    

        <!-- Right Content - Content Counter -->
        <div class="col-md-3" id="event">
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
            <!-- Content Counter -->
        </div>
        <!-- End Right Content - Content Counter -->
    </div>
</div>   
<!-- Dark Home -->

<!-- Content Central -->
<div class="container padding-top">
    <div class="row">
        
        <!-- content Column Left -->
        <div class="col-xs-12 col-md-6 col-lg-8">                     
            <!-- Recent Post -->
            <div class="panel-box">
            
                <div class="titles">
                    <h4>
                        Recent News                        
                        <a href="news.php" class="btn btn-default btn-xs pull-right">View More</a>  
                    </h4>
                </div>

                <!-- Post Item -->
                <div class="post-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-hover">
                            <img src="{{ asset('frontend/assets/uploads/post/thumbs/20170430_172825.jpg') }}" alt="Official Photo Session of Bangladesh Contingent for 4th Islamic Solidarity Games" class="img-responsive">
                               <div class="overlay"><a href="post.php">+</a></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4><a href="post.php">Official Photo Session of Bangladesh Contingent for 4th Islamic Solidarity Games</a></h4>
                            <p class="data-info">
                            	April 30 2017
                            </p>
                            <a href="post.php">Read More [+]</a>
                        </div>
                   </div>
                </div>
                 <!-- End Post Item -->

                <!-- Post Item -->
                <div class="post-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="img-hover">
                            <img src="{{ asset('frontend/assets/uploads/post/thumbs/20170430_172825.jpg') }}" alt="Official Photo Session of Bangladesh Contingent for 4th Islamic Solidarity Games" class="img-responsive">
                               <div class="overlay"><a href="post.php">+</a></div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4><a href="post.php">Official Photo Session of Bangladesh Contingent for 4th Islamic Solidarity Games</a></h4>
                            <p class="data-info">
                            	April 30 2017
                            </p>
                            <a href="post.php">Read More [+]</a>
                        </div>
                   </div>
                </div>
                 <!-- End Post Item -->

            </div>  
            <!-- End Recent Post -->                              
        </div>
        <!-- End content Left -->

        <!-- content Sidebar Center -->
        <aside class="col-xs-6 col-sm-6 col-md-3 col-lg-4">                     
            <!-- Locations -->
            <div class="panel-box">
            
                <div class="titles">
                    <h4>12th South Asian Games</h4>
                </div>
                <!-- Locations Carousel --> 
                <ul class="single-carousel">  
                    <li>
                        <img src="{{ asset('frontend/assets/uploads/post/Mascot_Logo.jpg') }}" alt="" class="img-responsive">
                        <div class="info-single-carousel">
                            <p>The South Asian Games is a biennial multinational multi-sport event held amongst the athletes from South Asia. The governing body of these games is South Asia Olympic Council (SAOC). <a href="http://www.southasiangames2016.com/" target="_blank" class="text-right">View More [+]</a></p>
                        </div>
                    </li>                                
                </ul>
                <!-- Locations Carousel -->                                
            </div>  
            <!-- End Locations -->     
        </aside>
        <!-- End content Sidebar Center -->

        <!-- content Sidebar Right -->
        <aside class="col-xs-12 col-sm-12 col-md-8 col-lg-8">                     
            <!-- Diary -->
            <div class="panel-box">
                <div class="titles">
                    <h4><i class="fa fa-external-link"></i>Links</h4>
                </div>
                <!-- List Diary --> 
                <div class="carousel owl-carousel" id="links-carousel">
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo4.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo3.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo2.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo1.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo2.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo3.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo4.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo5.jpg') }}" class="img-responsive"></a>
                </div>
                <!-- End List Diary -->
            </div>  
            <!-- End Diary --> 
        </aside>
        <!-- End content Sidebar Right -->
        
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
                        <h4>12th South Asian Games</h4>                                    
					</div>
                </div>
                <!-- End Locations Video --> 
            </div>  
            <!-- End Video presentation--> 
        </aside>




        <!-- Experts -->
        <div class="col-xs-12 col-md-9 col-lg-12">
            <div class="panel-box">                            
                <div class="titles">
                    <h4>Olympic Partners</h4>
                </div>     

                <div class="row" class="carousel owl-carousel" id="olympic-partners-carousel">
                    
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo4.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo3.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo2.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo1.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo2.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo3.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo4.jpg') }}" class="img-responsive"></a>
                    <a href="http://www.acnolympic.org" target="_blank"><img src="{{ asset('frontend/assets/img/logo5.jpg') }}" class="img-responsive"></a>

                </div>                          
            </div>  
        </div>
        <!-- End Experts -->


        
    </div>                     
</div>  
<!-- End Content Central -->
</section>
<!-- End Section Area -  Content Central -->


@endsection