<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CINEDATA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
    <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="FreeHTML5.co" />

    <!--
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE
    DESIGNED & DEVELOPED by FreeHTML5.co

    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/bootstrap.css">

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/magnific-popup.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="<?php echo base_url()?>/css/style.css">

    <!-- Modernizr JS -->
    <script src="<?php echo base_url()?>/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url()?>/js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="fh5co-loader"></div>

<div id="page">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Cinédata</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo base_url(); ?>">Accueil</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('index.php/scenario'); ?>">Scénario</a></li>
                        <li><a href="<?php echo base_url('index.php/imdb');?>">ImDb</a></li>
                        <li><a href="#">Droits</a></li>
                        <li><a href="#">Financement</a></li>
                    </ul>
                </li>
                <li><a href="#">Forum</a></li>
                <li><a href="<?php echo base_url('index.php/account'); ?>">Mon compte</a></li>
                <li><a   href="<?php echo base_url('index.php/main/logout'); ?>">Deconnexion</a></li>
            </ul>
        </div>
    </nav>
