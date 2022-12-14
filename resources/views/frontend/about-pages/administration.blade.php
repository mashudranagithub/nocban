@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Administration</h1>
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
                <li>Administration</li>                                       
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Content Central -->
    <div class="container padding-top">
        <div class="row">


            @if($post->file)
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

            @else

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Administration</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table">
                                    <tr>
                                    <td>Sl.</td>
                                    <td>Name</td>
                                    <td>Designation</td>
                                    <td>Contacts</td>
                                    <td>Photos</td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Brig Gen (Retd.) Fakhruddin Haider,ndu,psc</td>
                                    <td>Director General</td>
                                    <td>Cell No:01711531323, 9570505(Office)</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_1.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Md. Mahfuzur Rahman Siddique</td>
                                    <td>Director, National Olympic Academy</td>
                                    <td>Cell No: 01755534318</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_2.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sayeed Ahmed Shahed</td>
                                    <td>DGM-Finance & Accounts</td>
                                    <td>Cell No:01713255030</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_3.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Mohammad Habibur Rahman</td>
                                    <td>Deputy Manager-Games & IR</td>
                                    <td>Cell No:01755534315</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_4.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Md. Rashed Ahmed Shams</td>
                                    <td>Assistant Manager-OS</td>
                                    <td>Cell No:01755534316</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_5.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Md. Shohel Rana</td>
                                    <td>Assistant Manage-Accounts</td>
                                    <td>Cell No:01755534317</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_6.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Md. Hafizul Islam</td>
                                    <td>Executive Officer</td>
                                    <td>Cell No:01713255034</td>
                                    <td><img src="{{asset('frontend/assets/img/administration/admin_07.jpg')}}" width="100" class="img-thumbnail"></td>
                                </tr>
                            </table>                                        
                        </div>
                    </div>
                    <!-- End Info ABout --> 
                </div>  
                <!-- End Info-->
            </div>
            <!-- End About Template-->

            @endif

        </div>                     
    </div>  
    <!-- End Content Central -->

</section>
<!-- End Section Area - Content Central -->

@endsection