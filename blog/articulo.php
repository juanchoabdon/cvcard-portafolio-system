
<?

include '../controller/class.person.php';
include '.../includes/functions.php';
setlocale(LC_ALL,”es_CO”);
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$id = $_GET['id'];
$con = connect_mysql ();
$juandi = new Person($con);
$page = "blog";
$id = explode("-", $id);
$blog = $id[0];
$juandi->blog->get_info($blog,$con);
$juandi->blog->set_view($con);
?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<meta name="author" content="<?    print $juandi->name." ".$juandi->lastname ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog -  <?    print $juandi->name." ".$juandi->lastname ?></title>
		<link rel="shortcut icon" href="../img/favicon.png"/>
		<link rel="apple-touch-icon" href="../img/apple-touch-icon.png"/>
		<link rel="apple-touch-icon" sizes="72x72" href="../img/apple-touch-icon-72x72.png"/>
		<link rel="apple-touch-icon" sizes="114x114" href="../img/apple-touch-icon-114x114.png"/>
		<link rel="apple-touch-icon" sizes="144x144" href="../img/apple-touch-icon-144x144.png"/>
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

		<!-- header starts -->
		<div class="site-header z-depth-1 top-section">
			<div class="container">
				<div class="row">
					<div class="col l6 m6 s12 pd-0">
						<div class="site-header-title">
							<a href="/blog" style="color: #fff">	Blog </a>
							<span>	<?  print $juandi->name." ".$juandi->lastname  ?></span>
						</div>
					</div>
					<div class="col l6 m6 s12 pd-0">
						<div class="site-header-contact">
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-facebook"></span></a>
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-twitter"></span></a>
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-google-plus"></span></a>
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-linkedin"></span></a>
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-github"></span></a>
							<a class="btn btn-floating waves-effect waves-light" href="#0"><span class="fa fa-skype"></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- header ends -->
		<div class="single-blog-section">
			<div class="container">
				<div class="row">
					<div class="col l8 m8 s12 single-blog-wrapper pdl-0">
						<div class="col s12 w-block z-depth-1 shadow-change pd-50">
							<div class="single-blog-title">
							<?  print $juandi->blog->title   ?>
							</div>
							<div class="single-blog-data blog-data">

								<a href="#0" class="waves-effect"><span class="fa fa-calendar"></span>	<? print date('M d', strtotime($juandi->blog->date))  ?></a>

							</div>
							<div class="single-blog-content">
								<img src="<? print "../admin/".trim($juandi->blog->image)  ?>  " alt="Image"/>
								<p>
									<?  print $juandi->blog->content   ?>
								</p>

							</div>
						</div>
						<div class="col s12 single-blog-comment w-block z-depth-1 shadow-change pd-50 mgt-50">
							<div id="disqus_thread"></div>


						</div>
					</div>
					<div class="col l4 m4 s12 sidebar-wrapper pdr-0">
						<div class="col s12 single-sidebar w-block z-depth-1 shadow-change pd-30">
							<div class="sidebar-title">
								Autor
							</div>
							<div class="author-content">
								<img src="<? print "../admin/".trim($juandi->image) ?>" alt="Autor"/>
								<div class="author-data" >
							<? print $juandi->name." ".$juandi->lastname  ?>
									<span><? print $juandi->ocupacion ?></span>
								</div>

							</div>
						</div>
						<div class="col s12 single-sidebar w-block z-depth-1 shadow-change pdt-30 pdr-30 pdb-40 pdl-30">
							<div class="sidebar-title">
								Últimos blogs
							</div>
							<div class="related-post-content">

								<?
               	$result = $juandi->blog->get_post($con);
							 $num = 0;
							 while( $blogs = $result->fetch_object() ) {

								$var = explode(" ", strtolower($blogs->title));
								 if($num < 4) {
									 if( $blogs->id != $blog  ) {
								?>
								<div class="related-post-single">
									<div class="related-post-img">
										<img src="<? print "../admin/".trim($blogs->image)  ?>" alt=""/>
									</div>
									<div class="related-post-title">
										<a  href="articulo.php?id=	<? print $blogs->id;  foreach($var as $vari) { print "-".$vari;  }  ?>"><? print $blogs->title  ?></a>
									</div>
									<div class="related-post-author">
										<a href="#0"><span class="fa fa-calendar"></span><? print date('M d', strtotime($blogs->date))  ?></a>
									</div>
								</div>

								<?
							}

						}
					}
								?>


							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col s12">
						<a class="btn btn-floating waves-effect waves-light back-to-top animatescroll-link" onclick="$('html').animatescroll();" href="#0">
							<span class="fa fa-angle-up"></span>
						</a>
						<div class="social-links">
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-facebook"></span></a>
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-twitter"></span></a>
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-google-plus"></span></a>
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-linkedin"></span></a>
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-github"></span></a>
							<a class="waves-effect waves-light" href="#0"><span class="fa fa-skype"></span></a>
						</div>
					</div>
				</div>
			</div>
		</footer>

		</div>
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
