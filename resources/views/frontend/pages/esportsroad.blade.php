@extends('frontend.layouts.master')

@section('content')

<!-- Section Title -->           
<section class="section-title img-about">
    <div class="overlay-bg"></div>
    <div class="container">
        <h1>Esports-Road to Asian Games 2022</h1>
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
                <li><a href="{{route('esportsroad')}}">Esports-Road to Asian Games 2022</a> </li>  
                <li>/</li>
                
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

            <!-- About Template-->
            <div class="col-md-12">
                <!-- Info -->
                <div class="panel-box">
                    <div class="titles">
                        <h4><i class="fa fa-rocket"></i>Esports-Road to Asian Games 2022</h4>
                    </div>
                    <!-- Info ABout --> 
                    <div class="row">
                        <div class="col-md-12">
                            <section id="tabs" class="project-tab">
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Esports-Road to Asian Games 2022</h3>
                                            
                                            
                                            
                                            <table class="table table-hover table-striped">
                                                <thead class="scr-had-bg">
                                                    <tr>
                                                        <th>Serial</th>
                                                        <th>Title</th>
                                                        <th>View</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/esportsroad/FIFA-22-Asian-Games-2022-Qualifying-Process.pdf')}}">FIFA 22 Asian Games 2022 Qualifying Process</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/esportsroad/FIFA-22-Asian-Games-2022-Qualifying-Process.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>1</td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/esportsroad/Hearthstone-Asian-Games-2022-Qualifying-Process.pdf')}}">[Hearthstone] Asian Games 2022 - Qualifying Process</a></td>
                                                        <td><a target="_blank" href="{{asset('frontend/assets/esportsroad/Hearthstone-Asian-Games-2022-Qualifying-Process.pdf')}}"><i class="fa fa-eye"></i></a></td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                            </section>
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