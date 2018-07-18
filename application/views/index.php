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
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div id="fh5co-logo"><a href="index.html">Ciné data<span>.</span></a></div>
				</div>
				<div class="col-xs-12 text-center menu-1">
					<ul>
						<li class="active"><a href="index.html">Accueil</a></li>
						<li class="has-dropdown">
							<a href="#">Services</a>
							<ul class="dropdown">
								<li><a href="#">IMDB</a></li>
								<li><a href="#">Droits</a></li>
								<li><a href="<?php echo base_url('index.php/scenariolist') ?>">Scénarios</a></li>
								<li><a href="#">API</a></li>
							</ul>
						</li>

<!--						<li><a href="work.html">Work</a></li>-->
<!--						<li><a href="about.html"></a></li>-->
						<li><a href="blog.html">forum</a></li>
						<li><a href="<?php echo base_url('index.php/account'); ?>">Mon compte</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>

	<header id="fh5co-header" class="   fh5co-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeInUp">
							<h1 class="mb30">Simplifiez vous le métier de cinéaste.</h1>
							<p>
								<a href="<?php echo base_url('index.php/main/signin'); ?>" target="_blank" class="btn btn-primary">Inscription</a> ou
								<a href='<?php echo base_url('index.php/main'); ?>' >Connexion</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	

	<div id="fh5co-services" class="fh5co-bg-section">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-heading">
						<h2>Tout le monde y a accès</h2>
                        <span>Professionnel, étudiant ou professeur ? </span>
                        <p>CINÉDATA regroupe la plupart des services liés au monde vidéaste afin de vous accompagner tout au long de votre parcours. </p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-graduation-cap"></i>
						</span>
						<h3>Étudiant</h3>
						<p>Nous vous aidons dans vos démarches de projet grâce aux différentes aides qui sont mise à disposition.</p>
						<p><a href="#">voir plus</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-video"></i>
						</span>
						<h3>Professionnel</h3>
						<p>Retrouvez les différents festivals du cinéma faciles d'accès depuis un espace perso. Nous soumettons votre création aux différents acheteurs et vous accompagnons dans vos projets</p>
						<p><a href="#">voir plus</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 ">
					<div class="feature-center animate-box" data-animate-effect="fadeInUp">
						<span class="icon">
							<i class="icon-user"></i>
						</span>
						<h3>Professeur</h3>
						<p>Rejoignez notre communauté pour former au mieux les nouveaux talents de demain grâce à notre forum dédié.</p>
						<p><a href="#">voir plus</a></p>
					</div>
				</div>


			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading  animate-box">
<!--					<span>Want Some Cool Stuff</span>-->
					<h2>Projets Récents</h2>
					<p>Les derniers projets mis en avant.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Clipboard Office</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Smart Layers</h3>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="images/work-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Notepad Mockup</h3>
					</a>
				</div>

			</div>
		</div>
		
	</div>


	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>You deserved happiness</span>
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"> <img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person2.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>
				</div>

				<div class="col-md-6 animate-box">
					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius. Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person3.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Eric Miller</cite></p>
						</blockquote>
					</div>

					<div class="testimonial">
						<blockquote>
							<p>&ldquo;Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.&rdquo;</p>
							<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite>&mdash; Mike Adam</cite></p>
						</blockquote>
					</div>

				</div>

				

			</div>
		</div>
	</div>


	<div id="fh5co-counter">
		<div class="container">

			<div class="row animate-box" data-animate-effect="fadeInUp">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Enjoy it</span>
					<h2>Fun Facts</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">
				
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
						<span class="icon">
							<i class="ti-download"></i>
						</span>
						<span class="counter"><span class="js-counter" data-from="0" data-to="15" data-speed="1500" data-refresh-interval="50">1</span>M+</span>
						<span class="counter-label">Downloads</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
					<div class="feature-center">
							<span class="icon">
								<i class="ti-face-smile"></i>
							</span>
							<span class="counter"><span class="js-counter" data-from="0" data-to="2" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
							<span class="counter-label">Happy Clients</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-briefcase"></i>
							</span>
							<span class="counter"><span class=" js-counter" data-from="0" data-to="6" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
							<span class="counter-label">Projects Done</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
						<div class="feature-center">
							<span class="icon">
								<i class="ti-time"></i>
							</span>
							<span class="counter"><span class="js-counter" data-from="0" data-to="7" data-speed="1500" data-refresh-interval="50">1</span>K+</span>
							<span class="counter-label">Hours Spent</span>

						</div>
					</div>
						
				</div>
			</div>
	</div>

	<div id="fh5co-blog" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box row-pb-md" data-animate-effect="fadeInUp">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Thoughts &amp; Ideas</span>
					<h2>Our Blog</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 12th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 23rd</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 animate-box" data-animate-effect="fadeInUp">
					<div class="fh5co-post">
						<span class="fh5co-date">Sep. 24th</span>
						<h3><a href="#">Web Design for the Future</a></h3>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
						<p class="author"><img src="images/person1.jpg" alt="Free HTML5 Bootstrap Template by FreeHTML5.co"> <cite> Mike Adam</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-started">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Let's work together</span>
					<h2>Start Your Project</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					<p><button type="submit" class="btn btn-default">Get In Touch</button></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget ">
					<h3>test.</h3>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					<p><a href="#">Learn More</a></p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">About</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 ">
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://pixeden.com/" target="_blank">Pixeden</a> &amp; <a href="http://unsplash.com/" target="_blank">Unsplash</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
    <script>
        window.addEventListener("load", function(){
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {
                        "background": "#000"
                    },
                    "button": {
                        "background": "#f1d600"
                    }
                }
            })});
    </script>

	</body>
</html>

