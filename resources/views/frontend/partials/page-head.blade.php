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
                                    <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="Logo" class="logo_img">
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
                                            <li><a href="history.php">History</a></li>
                                            <li><a href="mission.php">Mission & Vision</a></li>
                                            <li><a href="executive.php">Executive Committee</a></li>
                                            <li><a href="general.php">General Assembly</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul>                                                
                                            <li><a href="previous.php">Previous President & SG</a></li>
                                            <li><a href="administration.php">Administration</a></li>
                                            <li><a href="committees.php">Commissions & Committees</a></li>
                                            <li><a href="noa.php">National Olympic Academy</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-md-4">
                                        <ul>                                                
                                            <li><a href="constitution.php">Constitution</a></li>
                                            <li><a href="organogram.php">Organogram</a></li>
                                            <li><a href="doping.php">Anti Doping</a></li>
                                            <li><a href="athleteProfiles.php">Athlete Profiles</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li><a href="affiliated.php">Affiliated Organizations</a></li>
                            <li><a href="activities.php">Activities</a></li>
                            <li class="current">
                            	<a href="">Games & Results</a>
                            	<ul class="sub-current">
                                    <li>
                                        <a href="national.php">National</a>
                                    </li>
                                    <li>
                                        <a href="international.php">International</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="current">
                            	<a href="">Sports Awards</a>
                            	<ul class="sub-current">
                                	<li>
                                        <a href="internationalsportsawards.php">International</a>
                                    </li>
                                    <li>
                                        <a href="regionalsportsawards.php">Regional</a>
                                    </li>
                                    <li>
                                        <a href="nationalsportsawards.php">National</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="athletes.php">BOA Athletes Commission</a></li> 
                            <li><a href="boaantidoping.php">BOA Anti-Doping</a></li> 
                            <li><a href="noa.php">National Olympic Academy (NOA)</a></li> 
                            <li><a href="19asiangames.php">19th Asian Games</a></li>
                            <li><a href="boaelec2021.php">BOA Election</a></li>
                            <li><a href="esportsroad.php">Esports-Road to Asian Games 2022</a></li>
                            <li><a href="contact.php">Contact Us</a></li> 
                        </ul>
                        <!-- End Menu-->
                    </div>
                </nav>
                <!-- End mainmenu-->
                
            </header>
            <!-- End Header-->