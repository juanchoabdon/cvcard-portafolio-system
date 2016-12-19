<?
class Experience {

   function __construct($con) {



   }


   function new_experience($title, $place , $years ,$description ,$con) {


      $query = "insert into experience set title='$title', place='$place', years='$years' , description = '$description' ";


       	if (! $result = $con->query ( $query )) {
       		print "Error al ejecutar la consulta: $query -> " . $con->error;
       		return;
       	}

         return true;

   }


   function update_experience($title, $place , $years ,$description ,$con) {


      $query = "update experience set title='$title', place='$place', years='$years',  description = '$description' where id='$this->id' ";


       	if (! $result = $con->query ( $query )) {
       		print "Error al ejecutar la consulta: $query -> " . $con->error;
       		return;
       	}

         return true;

   }


   function get_experience($con) {

     $query = "select * from experience";

      if (! $result = $con->query ( $query )) {
          print "Error al ejecutar la consulta: $query -> " . $con->error;
          return;
        }

     if ($result->num_rows > 0) {
      return $result;

     } else {

      return false;

     }



   }



   function get_info($id, $con) {


     $query = "select * from experience where id = '$id '";

      if (! $result = $con->query ( $query )) {
          print "Error al ejecutar la consulta: $query -> " . $con->error;
          return;
        }

        if ($result->num_rows > 0) {
        $row = $result->fetch_array ();

         $this->id = $row ['id'];
         $this->title = $row ['title'];
         $this->place = $row ['place'];
         $this->years = $row ['years'];
         $this->description = $row ['description'];


        }


   }


   function delete_experience($con) {

     $query = "delete from experience where id = '$this->id' ";

      if (! $result = $con->query ( $query )) {
          print "Error al ejecutar la consulta: $query -> " . $con->error;
          return false;
        }

        return true;

   }


}

?>
