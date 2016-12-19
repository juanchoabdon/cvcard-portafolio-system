<?
require 'variables.php';


function connect_mysql() {
	global $mysql_host;
	global $mysql_user;
	global $mysql_pass;
	global $mysql_db;
	$conn = mysqli_connect ( $mysql_host, $mysql_user, $mysql_pass, $mysql_db );
	if (! $conn) {
		die ( "Connection failed: " . mysqli_connect_error () );
	}
	mysqli_set_charset($conn,"utf8");
	return $conn;
}


function validar_login($page) {
	session_start ();
	if (! $_SESSION ["juandi_logued"] || time () - $_SESSION ['juandi_timeout'] > 43200) {

		session_destroy ();
   	header ( 'Location: login.php?redirect=' . $page );
	}
return $_SESSION["juandi_id"];
}

function modals( $modal, $juandi ) {

	if($modal == "login") {

	return " Materialize.toast(' Hola! $juandi->name ', 4000);  ";

	}

	if( $modal == "delete") {

	  return" Materialize.toast('Blog eliminado :)', 4000);  ";

	}
	if( $modal == "create") {

	  return" Materialize.toast('Blog creado :)', 4000);  ";

	}

	if( $modal == "edit") {

		return" Materialize.toast('Blog editado :)', 4000);  ";

	}


}

function print_header($page) {

	switch ($page) {
	    case "blog":
	        $blog_active = "class='active' ";
	        break;
	    case "experience":
	        $experience_active = "class='active' ";
	        break;
	    case "education":
	        $education_active = "class='active' ";
	        break;
			case "portfolio":
					$portfolio_active = "class='active' ";
					break;
			case "info":
					$info_active = "class='active' ";
					break;
	}


?>

	<header class="header z-depth-1 shadow-change">
		<div class="site-logo"><a href="#0">JDS</a></div>
		<div class="menu-bar btn-floating waves-effect waves-light"><span class="fa fa-bars"></span></div>

		<nav class="main-nav">
			<ul>
				<li ><a href="#0" class=" waves-effect" >Home</a></li>

						<li <?  print $blog_active   ?>><a href="index.php" class=" waves-effect" > Blog</a></li>
					<li <?  print $portfolio_active   ?> ><a href="portfolio.php" class=" waves-effect" >Portafolio</a></li>
				<li  <?  print $education_active  ?>><a href="education.php" class=" waves-effect" >Educación</a></li>
				<li <?  print $experience_active   ?>><a href="experience.php" class=" waves-effect ">Experiencia</a></li>

					<li <?  print $info_active   ?>><a href="info.php" class=" waves-effect" >Información</a></li>
				<li><a href="logout.php" class=" waves-effect" >   Salir</a></li>
			</ul>
		</nav>
	</header>

<?



}

?>
