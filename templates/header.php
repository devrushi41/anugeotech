<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="css\main.css">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/cae1531884.js"></script>

    <title><?php echo $title; ?></title>
</head>

<body id="home" class="scrollspy grey lighten-4">

    <div class="navbar-fixed">
        <nav class="teal lighten-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">AnuGeoTech</a>
                    <a href="#" class="sidenav-trigger" data-target="mobile-nav">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--Nav bar for mobile view-->
    <ul class="sidenav " id="mobile-nav">
        <li>
            <h4 class="teal-text center">Anu GeoTech</h4>
        </li>
        <div class="divider"></div>
        <br>
        <li><a class="sidenav-close" href="#home">Home</a></li>
        <li><a class="sidenav-close" href="#about">About</a></li>
        <li><a class="sidenav-close" href="#services">Services</a></li>
        <li><a class="sidenav-close" href="#gallery">Gallery</a></li>
        <li><a class="sidenav-close" href="#contact">Contact Us</a></li>
    </ul>

    <!--slider section for all the images-->
    <section class="slider">
        <ul class="slides">
            <li>
                <img src="img/testbg1.jpg" alt="">
                <div class="caption center-align ">
                    <h2>Starting a Construction ?</h2>
                    <h5 class="light grey-text text-lighten-3">
                        A construction with more than 2 floors requires to get the soil test for proper foundation.
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/testbg2.jpg" alt="">
                <div class="caption left-align">
                    <h2>Fast Response</h2>
                    <h5 class="light grey-text text-lighten-3 ">
                        We take your time seriously and get the work done at the fastest time possible.
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/testbg3.jpg" alt="">
                <div class="caption right-align">
                    <h2>24/7 Support</h2>
                    <h5 class="light grey-text text-lighten-3 ">
                        Our customers are our priority and we are available to help you to get the details and updates of the work being done by us.
                    </h5>
                </div>
            </li>
        </ul>
    </section>
    <span id="about"><br><br></span>

    <!--

    <div class="navbar-fixed">
        <nav class="teal lighten-2">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">Anu GeoTech</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="#home">Home</a></li>
                            <li><a href="#about">About</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#gallery">Gallery</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    
                </div>
            </div>
        </nav>
    </div>
    <ul class="sidenav" id="mobile-demo">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Contact Us</a></li>
    </ul>




    section:slider

    
    <div class="section section-slider slider z-depth-0" style="padding-bottom: 0px;">
        <ul class="slides">
            <li>
                <img src="img/testbg1.jpg" alt="">
                <div class="caption center-align">
                    <h2>Starting a Construction ?</h2>
                    <h5 class="light grey-text text-lighten-3">
                        A construction with more than 2 floors requires to get the soil test for proper foundation.
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/testbg2.jpg" alt="">
                <div class="caption left-align">
                    <h2>Fast Response</h2>
                    <h5 class="light grey-text text-lighten-3 ">
                        We take your time seriously and get the work done at the fastest time possible.
                    </h5>
                </div>
            </li>
            <li>
                <img src="img/testbg3.jpg" alt="">
                <div class="caption right-align">
                    <h2>24/7 Support</h2>
                    <h5 class="light grey-text text-lighten-3 hide-on-small-only">
                        Our customers are our priority and we are available to help you to get the details and updates of the work being done by us.
                    </h5>
                </div>
            </li>
        </ul>
    </div>

-->