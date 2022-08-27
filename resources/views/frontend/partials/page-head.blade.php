<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>Bangladesh Olympic Association</title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">  

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Theme CSS -->
        
        <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet" >
        <!-- Responsive CSS -->
        <link href="{{ asset('frontend/assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
        <!-- Skins Theme -->
        <link href="{{ asset('frontend/assets/css/skins/green/green.css') }}" rel="stylesheet" media="screen" class="skin">

        <!-- Favicons -->
        <link rel="shortcut icon"  href="{{ asset('frontend/assets/img/icons/favicon.ico') }}">
        <link rel="apple-touch-icon"  href="{{ asset('frontend/assets/img/icons/apple-touch-icon.png') }}">
        <link rel="apple-touch-icon" sizes="72x72"  href="{{ asset('frontend/assets/img/icons/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114"  href="{{ asset('frontend/assets/img/icons/apple-touch-icon-114x114.png') }}">  

        <!--[if IE]>
            <link rel="stylesheet" href="frontend/assets/css/ie/ie.css">
        <![endif]-->

        <!--[if lte IE 8]>
            <script src="js/responsive/html5shiv.js"></script>
            <script src="js/responsive/respond.js"></script>
        <![endif]-->

        <!-- Skins Changer-->
        <script type="text/javascript" src="http://www.google.com/jsapi"></script>
    </head>

    <body>
        <!-- layout-->
        <div id="layout">
            <!-- Header-->
            <header class="header-3">
                <!-- End headerbox-->
                <div class="headerbox">
                    <div class="container">
                        <div class="row">
                            <!-- Logo-->
                            <div class="col-md-12 logo text-center">
                                <a href="{{route('homepage')}}" title="Return Home">                            
                                    <img src="{{ asset('frontend/assets/img/settings/logo/'.$settings->logo) }}" alt="Logo" class="logo_img">
                                </a>
                            </div>
                            <!-- End Logo-->
                        </div>
                    </div>
                </div>
                <!-- End headerbox-->  

                <!-- mainmenu-->
                <nav class="mainmenu">
                    <div class="container">
                        <!-- Menu-->
                        <ul class="sf-menu" id="menu">
                            <li class="selected"><a href="{{route('homepage')}}">Home</a></li>                                
                            <li>
                                <a href="">About BOA</a>
                                <div class="sf-mega">
                                    <div class="col-md-4">
                                        <ul>                                                
                                            <li><a href="{{route('history')}}">History</a></li>
                                            <li><a href="{{route('mission')}}">Mission & Vision</a></li>
                                            <li><a href="{{route('executive')}}">Executive Committee</a></li>
                                            <li><a href="{{route('general')}}">General Assembly</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul>                                                
                                            <li><a href="{{route('previous')}}">Previous President & SG</a></li>
                                            <li><a href="{{route('administration')}}">Administration</a></li>
                                            <li><a href="{{route('committees')}}">Commissions & Committees</a></li>
                                            <li><a href="{{route('noa')}}">National Olympic Academy</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul>                                                
                                            <li><a href="{{route('constitution')}}">Constitution</a></li>
                                            <li><a href="{{route('organogram')}}">Organogram</a></li>
                                            <li><a href="{{route('doping')}}">Anti Doping</a></li>
                                            <li><a href="{{route('athleteProfiles')}}">Athlete Profiles</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="{{route('affiliated')}}">Affiliated Organizations</a></li>
                            <li><a href="{{route('activities')}}">Activities</a></li>
                            <li class="current">
                            	<a href="javascript:void(0);">Games & Results</a>
                            	<ul class="sub-current">
                                    <li>
                                        <a href="{{route('national')}}">National</a>
                                    </li>
                                    <li>
                                        <a href="{{route('international')}}">International</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="current">
                            	<a href="javascript:void(0);">Sports Awards</a>
                            	<ul class="sub-current">
                                	<li>
                                        <a href="{{route('internationalsportsawards')}}">International</a>
                                    </li>
                                    <li>
                                        <a href="{{route('regionalsportsawards')}}">Regional</a>
                                    </li>
                                    <li>
                                        <a href="{{route('nationalsportsawards')}}">National</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{route('athletes')}}">BOA Athletes Commission</a></li> 
                            <li><a href="{{route('boaantidoping')}}">BOA Anti-Doping</a></li> 
                            <li><a href="{{route('noa')}}">National Olympic Academy (NOA)</a></li> 
                            <li><a href="{{route('19asiangames')}}">19th Asian Games</a></li>
                            <li><a href="{{route('boaelection')}}">BOA Election</a></li>
                            <li><a href="{{route('esportsroad')}}">Esports-Road to Asian Games 2022</a></li>
                            <li><a href="{{route('contactpage')}}">Contact Us</a></li> 
                        </ul>
                        <!-- End Menu-->
                    </div>
                </nav>
                <!-- End mainmenu-->
                
            </header>
            <!-- End Header-->