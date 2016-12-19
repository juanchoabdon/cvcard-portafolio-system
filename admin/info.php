<?

include '../controller/class.person.php';
include '.../includes/functions.php';
$con = connect_mysql ();
$id_author = validar_login ( '/editportfolio.php' );
$id = $_GET ['id'];
$juandi = new Person($con);
$page = "info";




if (isset ( $_POST ['name'] )) {
$name= $_POST ['name'];
$lastname= $_POST ['lastname'];
$ocupacion = $_POST ['ocupacion'];
$descripcion = $_POST ['descripcion'];
$direccion = $_POST ['direccion'];
$telefono = $_POST ['telefono'];
$email = $_POST ['email'];
$web = $_POST ['web'];


$ruta_archivo = $juandi->image;
if (($_FILES ['image'] ['name'] ) != null ) {

  $image = $_FILES ['image'] ['name'];
  $img = $_FILES ['image'] ['tmp_name'];
  $arr = explode ( '.', $_FILES ['image'] ['name'] );
  $formato = array_pop ( $arr );
  $nombre_img = round ( microtime ( true ) * 1000 );
  $ruta_archivo = "images/$nombre_img.$formato";

   if (! move_uploaded_file ( $_FILES ['image'] ['tmp_name'] ,  $ruta_archivo )) {
     print "Error al subir la imagen: " . $_FILES ["image"] ["error"];
     //return;
   }

}
$create =  $juandi->update_info($name, $ruta_archivo  , $lastname, $ocupacion, $descripcion, $direccion, $telefono, $email, $web, $con );
if ( $create) {
//$modal = " $('#modal1').modal('open'); " ;


header ( 'Location: /admin/info.php' );

}

}

if (isset ( $_POST ['facebook'] )) {

$facebook = $_POST ['facebook'];
$twitter = $_POST ['twitter'];
$github = $_POST ['github'];
$linkedin = $_POST ['linkedin'];
$instagram= $_POST ['instagram'];
$snapchat = $_POST ['snapchat'];

$create =  $juandi->update_social($facebook, $twitter , $github, $linkedin,$instagram, $snapchat,  $con );
if ( $create) {
//$modal = " $('#modal1').modal('open'); " ;


header ( 'Location: /admin/info.php#test2' );

}


}
?>




<!DOCTYPE html>
<html>
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
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;
}
.input-field input[type=text]:active {
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;
}
textarea:focus {
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;
}


 .input-field input[type=text]:focus + label {
   color: #0EB57D;
 }
 .input-field textarea:focus + label {
   color: #0EB57D;
 }

.tabs .tab a {

color: #0EB57D;


 }
 .tabs .tab a.active {

 color: #0EB57D;
 border-bottom: 2px solid #0EB57D;
 z-index: 99999;

  }
.tabs .tab a:active {

  color: #0EB57D;
  border-bottom: 1px solid #0EB57D;

   }

   .tabs .tab a:hover, .tabs .tab a.active {
       background-color: transparent;
       color: #0EB57D;
   }

.indicator {
border-bottom: 1.5px solid #0EB57D;

}
.tabs .indicator {
    position: absolute;
    bottom: 0;
    height: 2px;
    background-color: #0EB57D;
    will-change: left, right;
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
  <div class="row">
    <div class="col s12">
      <ul class="tabs tabs-fixed-width">
        <li class="tab col s3"><a  class="tabi active"  href="#test1">Sobre</a></li>
        <li class="tab col s3"><a class="tabi" href="#test2">Social</a></li>

        <li class="tab col s3"><a class="tabi" href="#test3">Habilidades</a></li>
      </ul>
    </div>
</div>

    <div id="test3" class="col s12">Test 3</div>

  </div>


  <div id="test1" class="col s12">
    <div class="container">

<br>
	<div class="col s12 w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30">
  <div class="row">
  <form class="col s12" method="post" action="" enctype="multipart/form-data">

    <div class="row">
        <img src="<? print $juandi->image   ?>  " style="max-width: 300px;">
        <div class="file-field input-field">
          <div class="btn  " style="background-color: #0EB57D;">
            <span>Imágen</span>

            <input type="file" name = "image" value="<? print $juandi->image ?>"  >
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text"  value="<? print $juandi->image ?>" >
          </div>
        </div>
      </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "name" value="<? print $juandi->name?>">
        <label class="active" for="title"  >Nombre</label>
      </div>


      <div class="input-field col s6">
        <input id="title" type="text" name = "lastname" value="<? print $juandi->lastname?>">
        <label class="active" for="title"  >Apellido</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="subtitle" type="text" name = "ocupacion" value="<? print $juandi->ocupacion?>"  >
        <label for="subtitle">Ocupación</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <textarea id="content" name = "descripcion" class="materialize-textarea"><? print $juandi->descripcion?></textarea>
        <label for="content">Descripción</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "direccion" value="<? print $juandi->direccion?>">
        <label class="active" for="title"  >Dirección</label>
      </div>


      <div class="input-field col s6">
        <input id="title" type="text" name = "telefono" value="<? print $juandi->telefono?>">
        <label class="active" for="title"  >Télefono</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "email" value="<? print $juandi->email?>">
        <label class="active" for="title"  >Email</label>
      </div>


      <div class="input-field col s6">
        <input id="title" type="text" name = "web" value="<? print $juandi->web?>">
        <label class="active" for="title"  >Website</label>
      </div>
    </div>

  <br>


  <button class="btn waves-effect waves-light"  style="background-color: #0EB57D;" type="submit" name="action">Editar
    <i class="material-icons left">send</i>
  </button>

  </form>
</div>

     </div>
</div>
</div>





  <div id="test2" class="col s12">
    <div class="container">

<br>
	<div class="col s12 w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30">
  <div class="row">
  <form class="col s12" method="post" action="" enctype="multipart/form-data">


    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "facebook" value="<? print $juandi->facebook?>">
        <label class="active" for="title"  >Facebook</label>
      </div>


      <div class="input-field col s6">

        <input id="title" type="text" name = "twitter" value="<? print $juandi->twitter?>">
        <label class="active" for="title"  >Twitter</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "github" value="<? print $juandi->github?>">
        <label class="active" for="title"  >Github</label>
      </div>


      <div class="input-field col s6">
        <input id="title" type="text" name = "linkedin" value="<? print $juandi->linkedin?>">
        <label class="active" for="title"  >Linkedin</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s6">
        <input id="title" type="text" name = "instagram" value="<? print $juandi->instagram?>">
        <label class="active" for="title"  >Instagram</label>
      </div>


      <div class="input-field col s6">
        <input id="title" type="text" name = "snapchat" value="<? print $juandi->snapchat?>">
        <label class="active" for="title"  >Snapchat</label>
      </div>
    </div>
<br>

  <button class="btn waves-effect waves-light"  style="background-color: #0EB57D;" type="submit" name="action">Editar
    <i class="material-icons left">send</i>
  </button>

  </form>
</div>

     </div>
</div>
</div>


</div>

</section>







  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 <script>
 $('.button-collapse').sideNav();

 $(document).ready(function() {
  $('select').material_select();
});

$(document).ready(function(){
  $('ul.tabs').tabs('#0EB57D');
});


 // Hide sideNav
 </script>
 </body>


 </html>
