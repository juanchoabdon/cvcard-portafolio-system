<?

include '../controller/class.person.php';
include '.../includes/functions.php';
$con = connect_mysql ();
$id_author = validar_login ( '/createproyect.php' );
$page = "experience";
$juandi = new Person($con);



if (isset ( $_POST ['title'] )) {
$title= $_POST ['title'];
$place= $_POST ['place'];
$years= $_POST ['years'];
$description = $_POST ['description'];


$create =  $juandi->experience->new_experience($title, $place , $years , $description ,$con);
if ( $create) {
//$modal = " $('#modal1').modal('open'); " ;


header ( 'Location: /admin/experience.php' );

}

}

?>


html>
<head>
  <meta charset="UTF-8">

<title>Juandi Backend</title>



<!-- Making sure the web-site will scale fine on mobiles-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

<link type="text/css" rel="stylesheet" media="all" href="../css/style.css">
<link class="color-scheme" type="text/css" rel="stylesheet" media="all" href="../css/color-1.css">
<link type="text/css" rel="stylesheet" media="all" href="../css/responsive.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<style>

.input-field input[type=text]:focus {
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;

}
.input-field input[type=file]:focus {
  border-bottom: 1px solid  #0EB57D;
  box-shadow: 0 1px 0 0  #0EB57D;
}
textarea:focus {
  border-bottom: 1px solid  #0EB57D;
  box-shadow: 0 1px 0 0  #0EB57D;
}


 .input-field input[type=text]:focus + label {
   color:  #0EB57D;
 }
 .input-field textarea:focus + label {
   color:  #0EB57D;
 }

.brand-logo img {

max-width: 130px;
margin-left: 15px;
margin-top: 7px;

}
.brand-logo {

z-index: 99999;

}

.side-nav {
z-index: 999999;


}

.blogs {

margin-top: 90px;
margin-bottom: 50px;

}

td i {


color: #424242;

}

form {

margin-top: 30px;


}

button {

width: 100%;
margin-top: 20px;

}
</style>


</head>

<body>


<?

print_header($page);
?>

<section class="blogs">

<div class="container">
  <h4> Agrega una experiencia! <? print  $juandi->name   ?> </h4>
<br>
	<div class="col s12 w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30">
  <div class="row">
  <form class="col s12" method="post" action="" enctype="multipart/form-data">


    <div class="row">
      <div class="input-field col s12">
        <input id="title" type="text" name= "title" >
        <label for="title" >Título</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <input id="title" type="text" name= "place" >
        <label for="title" >Lugar</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="content" name = "description" class="materialize-textarea"></textarea>
        <label for="content">Descripción</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="title" type="text" name= "years" >
        <label for="title" >Años</label>
      </div>
    </div>


  <br>



  <button style="background-color: #0EB57D" class="btn waves-effect waves-light " type="submit" name="action">Agregar
    <i class="material-icons left">send</i>
  </button>

  </form>
</div>
</div>
     </div>


</section>




  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 <script>
 $('.button-collapse').sideNav();
<?  print "$modal";  ?>



 // Hide sideNav
 </script>
 </body>


 </html>
