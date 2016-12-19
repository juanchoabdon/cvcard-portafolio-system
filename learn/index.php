
<?


include '.../includes/content.php';
include '.../includes/functions.php';
include '../controller/class.person.php';
$con = connect_mysql();
$person = new Person($con);
$result = $person->blog->get_post($con);

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?  print $person->name." ".$person->lastname ?></title>
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300italic,300,900italic,900,700italic,700,500italic,500,400italic">
		<link type="text/css" rel="stylesheet" media="all" href="../font/font-awesome/css/font-awesome.min.css"/>
		<link type="text/css" rel="stylesheet" media="all" href="../css/animate.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/materialize.min.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/magnific-popup.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/owl.carousel.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/owl.theme.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/owl.transitions.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/style.css">
		<link class="color-scheme" type="text/css" rel="stylesheet" media="all" href="../css/color-1.css">
		<link type="text/css" rel="stylesheet" media="all" href="../css/responsive.css">
		<script type="text/javascript" src="../js/modernizr.js"></script>
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



		<div class="site-header z-depth-1 top-section " style="height: 500px;">
			<div class="container">
				<div class="row">

					<div class="col l6 m6 s12 pd-0">
  <br>
	<div class="site-header-title">
	JDS

	</div>
					<div class="text-q"> ¿Quieres aprender a programar de manera personalizada? </div>

    <img class="q-image center hide-on-med-and-down  wow slideInLeft" src="../img/bg.png" >



					</div>
					<div class="col l5 m6 s12 push-s6 right">
						<div class="site-header-contact  w-block wow fadeInUp shadow-change " style="height: 300px; margin-top: 50px;">
              <div class=" w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30" style="">
               <form id="c-form" class="c-form conti" action="#0" method="post">
                 <fieldset>

                   <div class="input-field">
                     <input id="name" type="text" name="name">
                     <label for="name">Nombre</label>
                   </div>
                   <div class="input-field">
                     <input id="email" type="email" name="email" >
                     <label for="email">Email</label>
                   </div>
									 <div class="input-field">
										 <input id="phone" type="number" name="phone" >
										 <label for="phone">Número celular</label>
									 </div>

                   <div>
                     <button class="btn waves-effect waves-light left" type="submit" name="button">Empezar</button>
                     <span id="c-form-status" class="hidden"></span>
                   </div>
                 </fieldset>
               </form>
             </div>
						</div>
					</div>
				</div>
			</div>
		</div>

<div class="sec-space"></div>
		<section id="skill-section" class="skill-section" >
			<div class="container">
				<div class="row">
					<div class="section-title center">
            ¿Cómo funciona?
					</div>
					<div class="col s12 section-content skill-wrapper w-block z-depth-1 shadow-change pd-50">
						<!-- skill starts -->
						<div class="col l6 m6 s12 skill-desc pdl-0">
						<?  print $person->descripcion   ?>
						</div>
						<div class="col l6 m6 s12 skill-data pdr-0">
							<div class="progress-bar-wrapper">
								<p class="progress-text">Front-End Development
									<span>95%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="90"></span>
								</div>
							</div>
							<div class="progress-bar-wrapper">
								<p class="progress-text">Back-End Development
									<span>80%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="85"></span>
								</div>
							</div>
							<div class="progress-bar-wrapper">
								<p class="progress-text">Mobile App Development
									<span>75%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="75"></span>
								</div>
							</div>
							<div class="progress-bar-wrapper">
								<p class="progress-text">
                   Development and Business Analysis
									<span>90%</span>
								</p>
								<div class="progress-bar">
									<span data-percent="80"></span>
								</div>
							</div>
						</div>
						<!-- skill ends -->
					</div>
				</div>
			</div>
		</section>


		<section id="pricing-section" class="pricing-section">
					<div class="container">
						<div class="row">
							<div class="section-title">
								Precios
							</div>
							<!-- pricing starts -->
							<div class="col l4 m12 s12 pricing-wrapper pdl-0">
								<div class="col s12 w-block z-depth-1 shadow-change pd-0">
									<div class="pricing-title">
										Basic
									</div>
									<div class="pricing-data">
										<p>1 Website</p>
										<p>1GB Storage</p>
										<p>10GB Bandwidth</p>
										<p>100 Email Accounts</p>
										<p>Unlimited Plugins<span>New</span></p>
										<p>24/7 Support</p>
									</div>
									<div class="pricing-price">
										<span>$</span>200<span>per year</span>
									</div>
									<div class="pricing-order">
										<a class="btn btn-floating btn-large waves-effect waves-light tooltipped" href="#0" data-position="top" data-delay="50" data-tooltip="Buy Now"><span class="fa fa-cart-arrow-down"></span></a>
									</div>
								</div>
							</div>
							<div class="col l4 m12 s12 pricing-wrapper">
								<div class="col s12 w-block z-depth-2 pd-0">
									<div class="pricing-title">
										Economy
									</div>
									<div class="pricing-data">
										<p>5 Websites</p>
										<p>10GB Storage</p>
										<p>100GB Bandwidth</p>
										<p>500 Email Accounts</p>
										<p>Unlimited Plugins</p>
										<p>24/7 Support</p>
									</div>
									<div class="pricing-price">
										<span>$</span>350<span>per year</span>
									</div>
									<div class="pricing-order">
										<a class="btn btn-floating btn-large waves-effect waves-light tooltipped" href="#0" data-position="top" data-delay="50" data-tooltip="Buy Now"><span class="fa fa-cart-arrow-down"></span></a>
									</div>
								</div>
							</div>
							<div class="col l4 m12 s12 pricing-wrapper pdr-0">
								<div class="col s12 w-block z-depth-1 shadow-change pd-0">
									<div class="pricing-title">
										Delux
									</div>
									<div class="pricing-data">
										<p>50 Websites</p>
										<p>100GB Storage</p>
										<p>1000GB Bandwidth</p>
										<p>1000 Email Accounts</p>
										<p>Unlimited Plugins</p>
										<p>24/7 Support</p>
									</div>
									<div class="pricing-price">
										<span>$</span>500<span>per year</span>
									</div>
									<div class="pricing-order">
										<a class="btn btn-floating btn-large waves-effect waves-light tooltipped" href="#0" data-position="top" data-delay="50" data-tooltip="Buy Now"><span class="fa fa-cart-arrow-down"></span></a>
									</div>
								</div>
							</div>
							<!-- pricing ends -->
						</div>
					</div>
				</section>

				<section id="skill-section" class="skill-section" >
					<div class="container">
						<div class="row">
							<div class="section-title center">
								Profesor
							</div>
							<div class="col s12 section-content skill-wrapper w-block z-depth-1 shadow-change pd-50">
								<!-- skill starts -->
								<div class="col l6 m6 s12 skill-desc pdl-0">
								<?  print $person->descripcion   ?>
								</div>
								<div class="col l6 m6 s12 skill-data pdr-0">
									<div class="progress-bar-wrapper">
										<p class="progress-text">Front-End Development
											<span>95%</span>
										</p>
										<div class="progress-bar">
											<span data-percent="90"></span>
										</div>
									</div>
									<div class="progress-bar-wrapper">
										<p class="progress-text">Back-End Development
											<span>80%</span>
										</p>
										<div class="progress-bar">
											<span data-percent="85"></span>
										</div>
									</div>
									<div class="progress-bar-wrapper">
										<p class="progress-text">Mobile App Development
											<span>75%</span>
										</p>
										<div class="progress-bar">
											<span data-percent="75"></span>
										</div>
									</div>
									<div class="progress-bar-wrapper">
										<p class="progress-text">
											 Development and Business Analysis
											<span>90%</span>
										</p>
										<div class="progress-bar">
											<span data-percent="80"></span>
										</div>
									</div>
								</div>
								<!-- skill ends -->
							</div>
						</div>
					</div>
				</section>

		<?

				if($result != false) {

		?>
		<section id="blog-section" class="blog-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Blog
					</div>
					<!-- blog starts -->
					<?

         $num = 0;
				 while( $blog = $result->fetch_object() ) {
          $var = explode(" ", strtolower($blog->title));
					 if($num < 4) {
					?>

					<div class="col s12 blog-wrapper w-block z-depth-1 shadow-change pd-0">
						<div class="col l6 m6 s12 blog-img pd-0 image-bg" data-image-bg="		<? print "../admin/".trim($blog->image)  ?>"></div>
						<div class="col m6 s12 l6 blog-desc pd-30">
							<div class="blog-title">
								<a href="#0"><? print $blog->title  ?></a>
							</div>
							<div class="blog-data">

								<a href="#0" class="waves-effect"><span class="fa fa-calendar"></span>		<? print date('M d', strtotime($blog->date))  ?></a>
								<a href="#0" class="waves-effect"><span class="fa fa-heart"></span>32</a>
							</div>
							<div class="blog-content">
								<p>
									<? print $blog->subtitle  ?>
								</p>
							</div>
							<div class="blog-more">

								<a target="_blank" href="blog/articulo.php?id=	<? print $blog->id;  foreach($var as $vari) { print "-".$vari;  }  ?>" class="btn waves-effect waves-light">Leer más</a>
							</div>
						</div>

					</div>

					<?

				}
			}
					?>

					<!-- blog ends -->
				</div>
				<br>

			</div>

		</section>
		<?
	}
		?>
		<section id="portfolio-section" class="portfolio-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Portafolio
					</div>
					<div class="col s12 section-content pd-0">
						<!-- portfolio starts -->

						<ul class="portfolio-items">


							<?
							$result = $person->portfolio->get_post($con);
							$num = 0;
						 while( $project = $result->fetch_object() ) {


							?>


							<li class="design branding portfolio-content three-col-portfolio-gutter">
								<figure>
									<img src="<?  print  "../admin/".trim($project->image); ?>" alt="image">
									<figcaption>
										<div class="portfolio-intro">
											<div class="portfolio-intro-link">
												<a target="_blank" href="<?  print $project->link   ?>"><span><i class="fa fa-link"></i></span></a>
											</div>
											<div class="portfolio-intro-title">
												<? print  $project->name   ?>
											</div>

										</div>
									</figcaption>
								</figure>
							</li>
         <?

					}

				 ?>
						</ul>
						<!-- portfolio ends -->
					</div>
				</div>
			</div>
		</section>
		<section id="education-section" class="education-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Educación
					</div>
					<div class="col s12 section-content pd-0">
						<!-- education starts -->
						<ul class="timeline">


								<?

							$result = $person->education->get_education($con);
							$num = 0;
						 while( $education = $result->fetch_object() ) {
               $num ++;

							if( $num%2 != 0) {

							 ?>

						    <li>
						        <div class="timeline-badge">
						          <a><i class="fa fa-circle"></i></a>
						        </div>
						        <div class="timeline-panel w-block z-depth-1 shadow-change pd-30">
									<div class="timeline-title">
										<? print $education->title ?>
									</div>
									<div class="timeline-tag">
										<? print $education->place ?>
									</div>
									<div class="timeline-time"><? print $education->years ?></div>
						        </div>
						    </li>

								<?

							} else {

								?>


						    <li class="timeline-inverted">
						        <div class="timeline-badge">
						            <a><i class="fa fa-circle invert"></i></a>
						        </div>
								<div class="timeline-panel w-block z-depth-1 shadow-change pd-30">
									<div class="timeline-title">
										<? print $education->title ?>
									</div>
									<div class="timeline-tag">
											<? print $education->place ?>
									</div>
									<div class="timeline-time"><? print $education->years ?></div>
						        </div>
						    </li>

                 <?
							 }

               }

								 ?>
						    <li class="clearfix no-float"></li>
						</ul>
						<!-- education ends -->
					</div>
				</div>
			</div>
		</section>
		<section id="experience-section" class="experience-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Experiencia
					</div>
					<div class="col s12 section-content pd-0">
						<!-- experience starts -->
						<ul class="timeline">

							<?

						$result = $person->experience->get_experience($con);
						$num = 0;
					 while( $experience = $result->fetch_object() ) {
							$num ++;

						if( $num%2 != 0) {

						 ?>
						    <li>
						        <div class="timeline-badge">
						          <a><i class="fa fa-circle"></i></a>
						        </div>
						        <div class="timeline-panel w-block z-depth-1 shadow-change pd-30">
									<div class="timeline-title">
										<? print $experience->title ?>
									</div>
									<div class="timeline-tag">
										<? print $experience->place ?>
									</div>
									<div class="timeline-desc">
										<p>
										<? print $experience->description ?>
										</p>
									</div>
									<div class="timeline-time"><? print $experience->years ?></div>
						        </div>
						    </li>
             <?

					 } else {

						 ?>

						    <li class="timeline-inverted">
						        <div class="timeline-badge">
						            <a><i class="fa fa-circle invert"></i></a>
						        </div>
								<div class="timeline-panel w-block z-depth-1 shadow-change pd-30">
									<div class="timeline-title">
										<? print $experience->title ?>
									</div>
									<div class="timeline-tag">
										<? print $experience->place ?>
									</div>
									<div class="timeline-desc">
										<p>
										<? print $experience->description ?>
										</p>
									</div>
									<div class="timeline-time"><? print $experience->years ?></div>
						        </div>
						    </li>
						      <?


               }
						 }
									?>
						    <li class="clearfix no-float"></li>
						</ul>
						<!-- experience ends -->
					</div>
				</div>
			</div>
		</section>

		<section id="testimonial-section" class="testimonial-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Testimonios
					</div>
					<!-- testimonial starts -->
					<div class="col l4 m12 s12 testimonial-wrapper pdl-0">
						<div class="col s12 w-block z-depth-1 shadow-change pd-0">
							<div class="testimonial-content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								</p>
							</div>
							<div class="testimonial-data">
								<div class="testimonial-name">
									John Doe
								</div>
								<div class="testimonial-title">
									ABC Inc.
								</div>
								<div class="testimonial-img">
									<img class=" z-depth-1" src="../img/testimonial/t.jpg" alt="Testimonial"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col l4 m12 s12 testimonial-wrapper">
						<div class="col s12 w-block z-depth-1 shadow-change pd-0">
							<div class="testimonial-content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								</p>
							</div>
							<div class="testimonial-data">
								<div class="testimonial-name">
									John Doe
								</div>
								<div class="testimonial-title">
									ABC Inc.
								</div>
								<div class="testimonial-img">
									<img class=" z-depth-1" src="../img/testimonial/t.jpg" alt="Testimonial"/>
								</div>
							</div>
						</div>
					</div>
					<div class="col l4 m12 s12 testimonial-wrapper pdr-0">
						<div class="col s12 w-block z-depth-1 shadow-change pd-0">
							<div class="testimonial-content">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
								</p>
							</div>
							<div class="testimonial-data">
								<div class="testimonial-name">
									John Doe
								</div>
								<div class="testimonial-title">
									ABC Inc.
								</div>
								<div class="testimonial-img">
									<img class=" z-depth-1" src=" img/testimonial/t.jpg" alt="Testimonial"/>
								</div>
							</div>
						</div>
					</div>
					<!-- testimonial ends -->
				</div>
			</div>
		</section>


		<section id="contact-section" class="contact-section">
			<div class="container">
				<div class="row">
					<div class="section-title">
						Contacto
					</div>
					<!-- contact starts -->
					<div class="col l5 m5 s12 contact-data pdl-0">
						<div class="col s12 w-block z-depth-1 shadow-change pd-0">
							<div class="col s12 pdt-30 pdr-30 pdb-10 pdl-30">
								<div class="arrow-box">Información</div>
								<div class="c-info">
									<span class="fa fa-phone"></span>
									<span><? print $person->telefono ?></span>
								</div>
								<div class="c-info">
									<span class="fa fa-road"></span>
									<span><? print $person->direccion ?></span>
								</div>
								<div class="c-info">
									<span class="fa fa-envelope"></span>
									<span><? print $person->email ?></span>
								</div>
								<div class="c-info">
									<span class="fa fa-link"></span>
									<span><? print $person->web ?></span>
								</div>
							</div>
							<div class="col s12 g-map-wrapper pd-0">
								<div id="g-map" data-latitude="51.5255069" data-longitude="-0.0836207"></div>
							</div>
							<div class="col s12 contact-map-btn z-depth-1 shadow-change waves-effect waves-light pd-0">
								<span class="fa fa-map-marker"></span>Ver mapa
							</div>
						</div>
					</div>
					<div class="col l7 m7 s12 contact-form pdr-0">
						<div class="col s12 w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30">
							<form id="c-form" class="c-form" action="#0" method="post">
								<fieldset>
									<div class="input-field">
										<input id="name" type="text" name="name" class="validate">
										<label for="name">Nombre</label>
									</div>
									<div class="input-field">
										<input id="email" type="email" name="email" class="validate">
										<label for="email">Email</label>
									</div>
									<div class="input-field">
										<textarea id="message" name="message" class="materialize-textarea validate"></textarea>
										<label for="message">Mensaje</label>
									</div>
									<div>
										<button class="btn waves-effect waves-light" type="submit" name="button">Enviar mensaje</button>
										<span id="c-form-status" class="hidden"></span>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<!-- contact ends -->
				</div>
			</div>
		</section>



		<div class="floating fixed-action-btn wow bounceInUp  floating-hidden">
			<div class="text-floating left  hide-on-small-only ">¡Quiero Empezar!</div>

	    <a  onclick="$('.top-section').animatescroll();" class="btn-floating btn-large teal waves-effect waves-light" >

	      <i class="large material-icons"><span class="fa fa-lightbulb-o"></span></i>
	    </a>
	  </div>

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

    <script type="text/javascript" src="../js/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/animatescroll.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/device.min.js"></script>
    <script type="text/javascript" src="../js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="../js/isotope.js"></script>
    <script type="text/javascript" src="../js/magnific-popup.js"></script>
    <script type="text/javascript" src="../js/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/smoothscroll.js"></script>
    <script type="text/javascript" src="../js/validator.min.js"></script>
    <script type="text/javascript" src="../js/waypoints.min.js"></script>
    <script type="text/javascript" src="../js/wow.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    </body>
    </html>
