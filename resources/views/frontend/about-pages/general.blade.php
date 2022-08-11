@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>General Assembly</h1>
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
                <li>General Assembly</li>                                       
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
                        <h4><i class="fa fa-rocket"></i>General Assembly</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <p>The General Assembly is on the top of the BOA organizational hierarchy. The General Assembly ofBOA is composed of the following councilors:</p>
                            <ul>
                                <li>Two representatives from each 23 National Federation (NF)s affiliated with the International Federations which are included in the Olympic Games. The number of NF is subject to change.</li>
                                <li>Representatives from maximum three sports disciplines, which are not included in the Olympic Games, but recognized by BOA. These sports disciplines will be decided by Executive Committee of BOA.</li>
                                <li>President and General Secretary from Bangladesh Women Sports Association</li>
                                <li>Representatives from seven Divisional Sports Association (DSA)</li>
                                <li>Women representatives from seven Divisional Women Sports Association (DWSA)</li>
                                <li>Six representatives from each of the Multi-Games Sports Association of Bangladesh i.e. Army, Navy, Air force, Border Guards, Police and Ansar &amp; VDP etc. The number is subject to change.</li>
                                <li>Four distinguished sports personalities nominated by the Patron</li>
                                <li>Four distinguished sports personalities nominated by the President of BOA</li>
                                <li>Two Olympians, to be nominated by the President of BOA. However, the later must retire from their posts at the latest by the end of the third Olympiad after the last Olympic Games in which they took part.</li>
                                <li>Elected member of IOC (If available, as per IOC Charter 16.1.1.1)</li>
                                <li>Director General, BOA (Ex-officio with no voting right)</li>
                                <li>Representative from Ministry of Law and Parliamentary Affairs (not below than the rank and status of Deputy Secretary and must have Post Graduate Degree in Law; with no voting right)</li>
                                <li>Representative from Ministry of Finance not below the rank and status of Deputy Secretary (with no voting right)</li>
                                <li>Representative from Ministry of Youth and Sports (not below the rank and status of  Deputy Secretary)</li>
                                <li>Representative from Inter University (Public) Sports Board (with no voting right)</li>
                                <li>Paralympic Association/Organization (Approved by EC)</li>
                                <li>Disabled/Special Olympic/National Association of Sports for the Persons with Disability (Approved by EC)</li>
                                <li>Chairman of the National Anti Doping Organization (NADO)</li>
                                <li>Director General of National Institute of Sports (BKSP); with no voting right</li>
                                <li>Representative from NSC (Not below the rank of a Director)</li>
                                <li>Immediate past President of BOA</li>
                                <li>Immediate past Secretary General of BOA</li>
                            </ul>
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