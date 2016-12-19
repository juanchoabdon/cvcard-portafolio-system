<?

include '../controller/class.person.php';
include '.../includes/functions.php';
$modal = $_GET['m'];
$con = connect_mysql ();
$id = validar_login ( '/' );
$juandi = new Person($con);
modals($modal);
$page = "portfolio";

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
margin-bottom: 90px;

}

td i {


color: #424242;

}
</style>


</head>

<body>

  <?
  print_header($page);

  ?>

<section class="blogs">

<div class="container">
  <div class="fixed-action-btn  ">
  <a href="createproject.php" class="btn-floating btn-large waves-effect tooltipped" data-position="left" data-delay="50" data-tooltip="Agregar Proyecto" style="background-color: #0EB57D;">
    <i class="material-icons">add</i>
  </a>


</div>

  <h4>  Portafolio  </h4>
  <table class="center highlight striped responsive-table" >





         <thead>
           <tr>
               <th data-field="id">#</th>
               <th data-field="name">Nombre</th>

               <th data-field="price">Acción</th>
           </tr>
         </thead>

         <tbody>

             <?

            $result = $juandi->portfolio->get_post($con);
            $num = 0;
           while($project = $result->fetch_object() ) {
              $num++;

             ?>
             <tr>
             <td><?  print $num ?></td>
             <td><?  print $project->name  ?></td>


             <td><a href="<? print "editproject.php?id=$project->id " ?> "class="waves-effect waves-light "><i class="material-icons  ">mode_edit</i></a>
               <a href="<? print "deleteproject.php?id=$project->id"; ?>" class="waves-effect waves-light "><i class="material-icons ">delete</i></a>
             </td>
           </tr>
             <?

          }

             ?>



         </tbody>
       </table>

     </div>


</section>




  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
 <script type="text/javascript" >

 $(document).ready(function(){
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered

   $('.button-collapse').sideNav();
   $('#delete1').modal();

   <? print  modals($modal, $juandi);   ?>
 });


   $(document).ready(function(){
     $('.tooltipped').tooltip({delay: 50});
   });


 // Hide sideNav
 </script>
 </body>
<?


?>

 </html>
