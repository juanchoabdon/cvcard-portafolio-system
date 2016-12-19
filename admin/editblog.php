
<?

include '../controller/class.person.php';
include '.../includes/functions.php';
$con = connect_mysql ();
$id_author = validar_login ( '/editblog.php' );
$id = $_GET ['id'];
$page = "blog";
$juandi = new Person($con);
$juandi->blog->get_info($id,$con);



if (isset ( $_POST ['title'] )) {



$title= $_POST ['title'];
$subtitle= $_POST ['subtitle'];
$content= $_POST ['content'];
$status = $_POST ['status'];
$ruta_archivo = $juandi->blog->image;
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


$create =  $juandi->blog->update_post($title, $subtitle , $subtitle , $content ,  $ruta_archivo  , $status, $con );
if ( $create) {
//$modal = " $('#modal1').modal('open'); " ;


header ( 'Location: /admin/index.php?m=edit' );

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
  <h4> Editar <?  print $juandi->blog->title ?> </h4>
<br>
	<div class="col s12 w-block z-depth-1 shadow-change pdt-10 pdr-30 pdb-30 pdl-30">
  <div class="row">
  <form class="col s12" method="post" action="" enctype="multipart/form-data">


    <div class="row">
      <div class="input-field col s12">
        <input id="title" type="text" name = "title" value="<? print $juandi->blog->title?>">
        <label class="active" for="title"  >Título</label>
      </div>
    </div>
    <div class="row">
      <div class="input-field col s12">
        <input id="subtitle" type="text" name = "subtitle" value="<? print $juandi->blog->subtitle?>"  >
        <label for="subtitle">Subtítulo</label>
      </div>
    </div>

    <div class="row">
      <div class="input-field col s12">
        <textarea id="content" name = "content" class="materialize-textarea"><? print $juandi->blog->content?></textarea>
        <label for="content">Contenido</label>
      </div>
    </div>
<div class="row">
    <img src="<? print $juandi->blog->image   ?>  " style="max-width: 300px;">
    <div class="file-field input-field">
      <div class="btn  " style="background-color: #0EB57D;">
        <span>Imágen</span>

        <input type="file" name = "image" value="<? print $juandi->blog->image?>"  >
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text"  value="<? print $juandi->blog->image?>" >
      </div>
    </div>
  </div>
  <br>
<div class="row">
  <div class="input-field ">
    <select>
      <?  if ($juandi->blog->status == 1 ) {
        print " <option value=\"1\" selected >Publicado</option> <option value=\"2\"> No Publicado</option> ";
      }
      else {
        print "<option value=\"2\" selected> No Publicado</option> <option value=\"1\">Publicado</option>";

       } ?>


    </select>
    <label>Estado del blog</label>
  </div>
  </div>

  <button class="btn waves-effect waves-light"  style="background-color: #0EB57D;" type="submit" name="action">Editar
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

 $(document).ready(function() {
  $('select').material_select();
});

 // Hide sideNav
 </script>
 </body>


 </html>
