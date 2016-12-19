<?


function print_header_content($person,$result) {
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?  print $person->name." ".$person->lastname ?></title>
		<link rel="shortcut icon" href="img/favicon.png"/>
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,900italic,900,700italic,700,500italic,500,400italic">
		<link type="text/css" rel="stylesheet" media="all" href="font/font-awesome/css/font-awesome.min.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="css/animate.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/materialize.min.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/magnific-popup.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/owl.carousel.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/owl.theme.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/owl.transitions.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/style.css">
		<link class="color-scheme" type="text/css" rel="stylesheet" media="all" href="css/color-1.css">
		<link type="text/css" rel="stylesheet" media="all" href="css/responsive.css">
		<script type="text/javascript" src="js/modernizr.js"></script>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88197615-1', 'auto');
  ga('send', 'pageview');

</script>
	</head>
	<body>
		<div class="preloader">
			<div class="preloader-inner">
				<div class="preloader-wrapper active">
					<div class="spinner-layer">
						<div class="circle-clipper left">
							<div class="circle"></div>
						</div>
						<div class="gap-patch">
							<div class="circle"></div>
						</div>
						<div class="circle-clipper right">
							<div class="circle"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<header class="header header-hidden z-depth-1 shadow-change">
			<div class="site-logo"><a href="#0">JDS</a></div>
			<div class="menu-bar btn-floating waves-effect waves-light"><span class="fa fa-bars"></span></div>

			<nav class="main-nav">
				<ul>
					<li><a href="#0" class="animatescroll-link waves-effect" onclick="$('#skill-section').animatescroll();">Sobre mi</a></li>

							<?  if($result != false){ ?>			<li><a href="#0" class="portfolio-section-nav animatescroll-link waves-effect" onclick="$('#blog-section').animatescroll();">Blog</a></li> <? } ?>
															<li><a href="#0" class="portfolio-section-nav animatescroll-link waves-effect" onclick="$('#portfolio-section').animatescroll();">Portafolio</a></li>
					<li><a href="#0" class="education-section-nav animatescroll-link waves-effect" onclick="$('#education-section').animatescroll();">Educación</a></li>
					<li><a href="#0" class="experience-section-nav animatescroll-link waves-effect" onclick="$('#experience-section').animatescroll();">Experiencia</a></li>

					<li><a href="#0" class="testimonial-section-nav animatescroll-link waves-effect" onclick="$('#testimonial-section').animatescroll();">Testimonios</a></li>
				  <li><a href="#0" class="contact-section-nav animatescroll-link waves-effect" onclick="$('#contact-section').animatescroll();">Contacto</a></li>
				</ul>
			</nav>
		</header>

<?


}

function print_footer($person) {


?>

<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col s12">
        <a class="btn btn-floating waves-effect waves-light back-to-top animatescroll-link" onclick="$('html').animatescroll();" href="#0">
          <span class="fa fa-angle-up"></span>
        </a>
        <div class="social-links">
					<a target="_blank"  class="waves-effect waves-light " href="<?  print $person->facebook   ?>"><span class="fa fa-facebook"></span></a>
					<a target="_blank"  class="waves-effect waves-light " href="<?  print $person->twitter   ?>"><span class="fa fa-twitter"></span></a>
					<a target="_blank"  class="waves-effect waves-light " href="<?  print $person->linkedin   ?>"><span class="fa fa-linkedin"></span></a>
					<a target="_blank"  class="waves-effect waves-light " href="<?  print $person->github   ?>"><span class="fa fa-github"></span></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/animatescroll.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script type="text/javascript" src="js/device.min.js"></script>
<script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/magnific-popup.js"></script>
<script type="text/javascript" src="js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="js/owl.carousel.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>
<script type="text/javascript" src="js/validator.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>


<?
}







?>
