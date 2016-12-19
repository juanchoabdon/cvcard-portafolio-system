<?php

include 'class.education.php';
include 'class.blog.php';
include 'class.portfolio.php';
include 'class.experience.php';
include '../includes/functions.php';



class Person {

   function __construct($con) {
     $query = "select * from informacion";

 if (! $result = $con->query ( $query )) {
   print "Error al ejecutar la consulta: $query -> " . $con->error;
 }
 if ($result->num_rows > 0) {
   $row = $result->fetch_assoc ();

   $this->name = $row['nombre'];
   $this->lastname = $row['apellido'];
   $this->direccion = $row['direccion'];
   $this->ocupacion = $row['ocupacion'];
   $this->telefono = $row['telefono'];
   $this->web = $row['web'];
   $this->email = $row['email'];
   $this->image = $row['image'];
   $this->descripcion = $row['descripcion'];
   $this->education = new Education($con);
   $this->experience = new Experience($con);
   $this->blog = new Blog($con);
   $this->portfolio = new Portfolio($con);

 }
 $query = "select * from social";

 if (! $result = $con->query ( $query )) {
   print "Error al ejecutar la consulta: $query -> " . $con->error;
 }

 if ($result->num_rows > 0) {
   $row = $result->fetch_assoc ();

  $this->facebook = $row['facebook'];
  $this->twitter = $row['twitter'];
  $this->github = $row['github'];
  $this->linkedin = $row['linkedin'];
  $this->instagram = $row['instagram'];
  $this->snapchat = $row['snapchat'];





 }


   }



   function update_info($name, $image, $lastname , $ocupacion, $descripcion, $direccion, $telefono, $email, $web, $con) {


      $query = "update informacion set nombre='$name', image='$image', apellido = '$lastname', descripcion = '$descripcion', ocupacion = '$ocupacion', direccion = '$direccion' , telefono = '$telefono' , email = '$email', web = '$web' ";


       	if (! $result = $con->query ( $query )) {
       		print "Error al ejecutar la consulta: $query -> " . $con->error;
       		return;
       	}

         return true;

   }


   function update_social($facebook, $twitter , $github, $linkedin, $instagram , $snapchat, $con) {


      $query = "update social set facebook='$facebook', twitter='$twitter', github = '$github', linkedin = '$linkedin' , instagram = '$instagram', snapchat = '$snapchat'    ";


        if (! $result = $con->query ( $query )) {
          print "Error al ejecutar la consulta: $query -> " . $con->error;
          return;
        }

         return true;

   }




   function start_login( $email , $password , $con ){

     $query = "select * from informacion where email='$email' and  password='$password'";

     	if (! $result = $con->query ( $query )) {
     		print "Error al ejecutar la consulta: $query -> " . $con->error;
     		return;
     	}
       if ($result->num_rows > 0) {
       $row = $result->fetch_array ();
        return $row ['id'];

       }
      else {

   	  return null;
     }

   }


}


?>
