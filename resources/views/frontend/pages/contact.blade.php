@extends('frontend.layouts.master')

@section('content')
<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Contact Us</h1>
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
                <li>Contact Us</li>                                       
            </ul>
        </div>        
    </div>

    <div class="semiboxshadow text-center">
        <img src="{{asset('frontend/assets/img/img-theme/shp.png')}}" class="img-responsive" alt="">
    </div>

    <!-- Google Map --> 
    <div id="map"></div>
    <!-- End Google Map --> 

    <!-- Content Central -->
    <section class="container">
        <div class="row padding-top"> 
            <!-- Left Content -->
            <div class="col-md-4">
                <aside class="panel-box">
                    <div class="titles">
                        <h4>Olympic Bhaban </h4>
                    </div>
                    <address>
                      <i class="fa fa-map-marker"></i><strong>Address: </strong> {{$settings->address}}<br>
                      <i class="fa fa-phone"></i> <abbr title="Phone">P:</abbr> {{$settings->phone}}<br>
                      <i class="fa fa-fax"></i> <abbr title="fax">F:</abbr> {{$settings->fax}}
                    </address>
                </aside>

                <aside class="panel-box">
                    <div class="titles">
                        <h4>Emails Contact</h4>
                    </div>
                    <address>
                      <i class="fa fa-envelope"></i><strong>Email:</strong><a href="mailto:#"> {{$settings->email}}</a><br>
                    </address>
                </aside>
            </div>
            <!-- End Left Content -->

            <!-- Right Content -->
            <div class="col-md-8">
                <div class="panel-box">
                    <div class="titles">
                        <h4>Contact Form</h4>
                    </div>
                    <!-- Form Contact -->
                    <form class="form-theme" action="#">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Your name *</label>
                                    <input type="text"  required="required" value="" maxlength="100" class="form-control" name="Name" id="name">
                                </div>
                                <div class="col-md-6">
                                    <label>Your email address *</label>
                                    <input type="email"  required="required" value="" maxlength="100" class="form-control" name="Email" id="email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label>Comment *</label>
                                    <textarea maxlength="5000" rows="10" class="form-control" name="message"  style="height: 138px;" required="required" ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-lg btn-primary">
                            </div>
                        </div>
                    </form>
                    <!-- End Form Contact --> 
                    <div class="result"></div>
                </div>
            </div> 
            <!-- End Right Content -->         
        </div>    
    </section>
    <!-- End Content Central -->
</section>
<!-- End Section Area - Content Central -->

@endsection