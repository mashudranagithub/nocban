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
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Previous President & SG</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
						<div class="col-md-12">
							
							<table width="100%">
								<tr>
									<td class="lg_txt"><img src="{{asset('frontend/assets/img/olympic.png')}}"> </td>
								</tr>
								<tr>
									<td class="lg_txt"><h1>President</h1> </td>
								</tr>
								<tr>
									<td class="lg_txt"><h3>Bangladesh Olympic Association</h3></td>
								</tr>
							</table>
							
							<br>
							
							<iframe src="{{asset('frontend/assets/pdf/Previous-President-&-SG.pdf')}}" frameborder="0" scrolling="no" width="100%" height="800px;" ></iframe>
							
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