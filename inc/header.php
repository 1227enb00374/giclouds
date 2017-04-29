<?php
if(isset($url) == 'root'){
	include './config/config.php';
}else{
if(empty($config['config_status'])){
	include '../config/config.php';
}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html lang="en-GB" class="no-js ie6"> <![endif]-->
<!--[if IE 7]>    <html lang="en-GB" class="no-js ie7"> <![endif]-->
<!--[if IE 8]>    <html lang="en-GB" class="no-js ie8"> <![endif]-->
<!--[if IE 9]>    <html lang="en-GB" class="no-js ie9 ie9andOthers"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js ie9andOthers">
<!--<![endif]-->
<head>

    <meta charset="utf-8" />

    <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>favicon.ico" />

    <title>Luxury holidays, tailor made holidays, escorted tours and safaris - Kuoni Travel</title>


    <link rel="stylesheet" href="<?php echo base_url();?>content/css/kuoni.lib.min.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>content/css/core.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>content/css/skin.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>content/css/layout.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>content/css/bootstrap-responsive.min.css" />



    <link rel="stylesheet" href="<?php echo base_url();?>content/css/fonts.css" />

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,400italic,300italic' rel='stylesheet' type='text/css'>
        <!--
        <link rel="stylesheet" href="<?php echo base_url();?>assets/css/docs.theme.min.css">
    -->
    <!-- Owl Stylesheets -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/owlcarousel/assets/owl.theme.default.min.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!--[if lt IE 9]>
          <script src="<?php echo base_url();?>https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="<?php echo base_url();?>https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <!-- Favicons -->
          <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>assets/ico/apple-touch-icon-144-precomposed.png">
          <link rel="shortcut icon" href="<?php echo base_url();?>assets/ico/favicon.png">
          <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico">

          <!-- Yeah i know js should not be in header. Its required for demos.-->
          <script src="<?php echo base_url();?>assets/vendors/jquery.min.js"></script>
          <script type="text/javascript" src="<?php echo base_url();?>scripts/kuoni.init.min.js"></script>
          <link rel="stylesheet" href="<?php echo base_url();?>content/css/animate.min.css" />
        <!-- javascript 
        
        <script src="<?php echo base_url();?>assets/owlcarousel/owl.carousel.js"></script> 
    -->
<style>

</style>
</head>


<!--[if lte IE 8]> <body class="non-responsive  start_page"  itemscope itemtype="http://schema.org/WebPage"><![endif]-->
<!--[if gt IE 8]><!-->

<body class="responsive  start_page " itemscope itemtype="http://schema.org/WebPage">


    <!--<![endif]-->
    

    <a id="top"></a>

    <a id="top"></a>
    <header id="header" class="global-header " style="position:fixed">
        <div id="cookie-acceptance-wrapper" class="cc-closed">
            <span id="cookie-acceptance-row">
                <span id="cookie-acceptance-text">
                    Kuoni uses cookies.
                    <a href="<?php echo base_url();?>/help-and-support/privacy-cookie-policy">Find out more here</a>.
                    By continuing, you are agreeing to our use of cookies.
                    <a href="<?php echo base_url();?>#" id="acceptCookies">I accept</a>
                </span>
                <span id="cookie-acceptance-close"></span>
            </span>
        </div>




       <div class="global-header__nav-wrapper ">
        <div class="global-header__top-nav">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <a class="global-header__mobilelink global-header__mobilelink--left" href="#"></a>
                            <a href="/">
                                <img src="<?php echo base_url(); ?>content/img/header/kuoni_logo.svg" id="logo" title="Kuoni Travel" alt="Kuoni Travel" class="global-header__logo">
                            </a>
                        <nav class="global-header__contact">
                            

        <!--NEW HEADER-->
        <ul>
                                        <li><a class="global-header__icon-link global-header__icon-link--call InfinityNumber" href="Tel:0800 092 4444" title="0800 092 4444">0800 092 4444</a></li>
                                        <li><a class="global-header__icon-link global-header__icon-link--enquire" href="">Enquire</a></li>
                                        <li><a class="global-header__icon-link global-header__icon-link--stores" href="help-and-support.php">Help & Support</a></li>
                                        <li><a class="global-header__icon-link global-header__icon-link--help" href="">language Translator</a></li>

                                        <li><a class="smoothscroll smoothscroll-nohash global-header__icon-link global-header__icon-link--search" href="#top">SEARCH</a></li>
                                    </ul>
        <!--NEW HEADER END-->


                        </nav>
                        <a class="global-header__mobilelink global-header__mobilelink--right" href="#"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="global-header__bottom-nav">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <nav class="global-header__nav">
                            



<ul>


            <li><a href="index.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Home</a></li>
			<li><a href="/destinations" class="global-header__nav-link global-header__nav-link--destinations global-header__nav-link" id="nav_316">Destinations</a></li>

           <li><a href="./activity-holidays.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Holiday Types</a></li>
		   <li><a href="./sale.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">SALE</a></li>
                                        <li><a href="./inspireme.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Inspire Me</a></li>
                                        <li><a href="./sale.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Gallery</a></li>
                                        <li><a href="./hotels.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Hotels</a></li>
										<li><a href="./domesticairlines.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Domestic Airlines</a></li>
                                    </ul>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

       <style>
        .top_menu_2{margin-left: 120px}
        .top_menu_2 ul li{float:left;font-size: 15px;}
        .top_menu_2 ul li a{
            font-size: 13px;
            color: #7F7F7F;
            display: block;
            padding: 0;
            margin: 13px 0 13px 15px;
            box-sizing: border-box;
            transition: all 0.2s ease-in-out;
            text-decoration: none;
            height: 30px;
            line-height: 30px;
            font-family: "open_sanssemibold", Arial, "Helvetica Neue", Helvetica, sans-serif;
        }
    </style>



    <div class="global-header__searchbar">
        <div class="container">
            <div class="row hidden-desktop">
                <div class="span12 menu-back">
                    <a class="menu-back-button" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>Content/img/header/back-up-arrow.svg" alt="Back" title="Back"></a>
                </div>
            </div>
            <div class="row">
                <div class="span12">
                    <form class="global-header__searchform is-search-form" action="/search-results" method="get">
                        <input type="text" name="q" value="" class="clearable search-field" placeholder="Search the Kuoni website for..." autocomplete="off" />
                        <span class="icon_search">
                            <input type="submit" value="Search Now"/>
                            <input type="reset" name="" class="global-header__searchform--cancel">
                        </span>
                    </form>


                </div>
            </div>
            <div class="row hidden-desktop">
                <div class="span12">
                    <ul class="suggested">
                        <li><h4>Suggested searches…</h4></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Maldives">Maldives</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Weddings">Weddings</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Honeymoons">Honeymoons</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Caribbean">Caribbean</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Italy">Italy</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Small+group+tours">Small group tours</a></li>
                        <li><a class="global-header__nav-link" href="<?php echo base_url();?>/search-results?q=Beach+holidays">Beach holidays</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <div class="global-header__destinations">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="row">

                        <div class="span2">
                            <ul class="global-header__dropdown-links">
                                <li><a href="<?php echo base_url();?>destination/destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Maldives</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Mauritius</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Dubai</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Sri Lanka</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Thailand</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Bali</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Kenya</a></li>
                            </ul>
                        </div>
                        <div class="span2">
                            <ul class="global-header__dropdown-links">
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Barbados</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">St Lucia</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Antigua</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">South Africa</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">USA</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Italy</a></li>
                                <li><a href="./destination1.php" class="global-header__nav-link global-header__nav-link" id="nav_102044">Greece</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span4">
                            <a class="ghost-button ghost-button--green" href="<?php echo base_url();?>/destinations">All destinations</a>
                        </div>
                    </div>
                </div>
                <div class="span8">
                    <figure class="world-map">
                        <a class="world-map__link world-map__link--link1" href="<?php echo base_url();?>/north-and-central-america">North &amp; Central America</a>
                        <a class="world-map__link world-map__link--link2" href="<?php echo base_url();?>/caribbean-and-mexico">Caribbean &amp; Mexico</a>
                        <a class="world-map__link world-map__link--link3" href="<?php echo base_url();?>/south-america">South America</a>
                        <a class="world-map__link world-map__link--link4" href="<?php echo base_url();?>/europe">Europe</a>
                        <a class="world-map__link world-map__link--link5" href="<?php echo base_url();?>/asia/china-and-japan">China &amp; Japan</a>
                        <a class="world-map__link world-map__link--link6" href="<?php echo base_url();?>/asia/india-nepal-and-bhutan">India</a>
                        <a class="world-map__link world-map__link--link7" href="<?php echo base_url();?>/asia/south-east-asia">South-East Asia</a>
                        <a class="world-map__link world-map__link--link8" href="<?php echo base_url();?>/asia/arabia">Arabia</a>
                        <a class="world-map__link world-map__link--link9" href="<?php echo base_url();?>/africa">Africa</a>
                        <a class="world-map__link world-map__link--link10" href="<?php echo base_url();?>/indian-ocean">Indian Ocean</a>
                        <a class="world-map__link world-map__link--link11" href="<?php echo base_url();?>/australasia-and-pacific">Australasia &amp; Pacific</a>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="global-header__types">
        <div class="container">
            <div class="row">


                <div class="span3">
                    <ul class="global-header__dropdown-links">
                        <li><a title="Activity holidays" href="<?php echo base_url();?>/activity-holidays">Activity holidays</a></li>
                        <li><a title="Adult only holidays" href="<?php echo base_url();?>/adult-only-holidays">Adult only resorts</a></li>
                        <li><a title="All Inclusive Holidays" href="<?php echo base_url();?>/all-inclusive-holidays">All Inclusive</a></li>
                        <li><a title="Beach Holidays" href="<?php echo base_url();?>/beach-holidays">Beach</a></li>
                        <li><a title="City Breaks" href="<?php echo base_url();?>/city-breaks">City Breaks</a></li>
                        <li><a title="Cruise" href="<?php echo base_url();?>/cruise-holidays">Cruise</a></li>
                        <li><a title="Kuoni Exclusives" href="<?php echo base_url();?>/kuoni-exclusives">Kuoni Exclusives</a></li>
                    </ul>
                </div>
                <div class="span3">
                    <ul class="global-header__dropdown-links">
                        <li><a title="Family Holidays" href="<?php echo base_url();?>/family-holidays">Family</a></li>
                        <li><a title="Honeymoons" href="<?php echo base_url();?>/honeymoons">Honeymoons</a></li>
                        <li><a title="LGBT travel" href="<?php echo base_url();?>/lgbt-holidays">LGBT holidays</a></li>
                        <li><a title="Luxury holidays" href="<?php echo base_url();?>/luxury-holidays">Luxury</a></li>
                        <li><a title="Multi-centres" href="<?php echo base_url();?>/multi-centre-holidays">Multi-centres</a></li>
                        <li><a title="Safaris" href="<?php echo base_url();?>/safari-holidays">Safaris</a></li>
                        <li><a title="Ski holidays" href="<?php echo base_url();?>/ski-holidays">Ski</a></li>
                    </ul>
                </div>
                <div class="span3">
                    <ul class="global-header__dropdown-links">
                        <li><a title="Spa holidays" href="<?php echo base_url();?>/spa-holidays">Spa</a></li>
                        <li><a title="Touring Holidays" href="<?php echo base_url();?>/touring-holidays">Touring holidays</a></li>
                        <li><a title="Wedding Abroad" href="<?php echo base_url();?>/weddings-abroad">Weddings</a></li>
                        <li><a title="Wellness holidays" href="<?php echo base_url();?>/wellness-holidays">Wellness holidays</a></li>
                        <li><a title="Villa Holidays" href="<?php echo base_url();?>/villa-holidays">Villa holidays</a></li>
                        <li style="height: 32px;">&nbsp;</li>
                        <li><a style="color: #2ca6bd;" title="View all holiday types" href="<?php echo base_url();?>/holiday-types">View all holiday types</a></li>
                    </ul>
                </div>
                <div class="span3">
                    <div class="usp">
                        <h2 class="usp__title">Holiday type experts</h2>
                        <p class="usp__body">Our Personal Travel Experts are experts in their field and can help to find the right holiday for you.</p>
                        <a class="ghost-button" href="<?php echo base_url();?>http://expert.kuoni.co.uk/holiday-type">Find an expert</a></div>
                    </div>
                </div>
            </div>
        </div>


    </header>
