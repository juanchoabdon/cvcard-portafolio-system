<?
class Education {

   function __construct($con) {



   }


   function new_education($title, $place , $years  ,$con) {


      $query = "insert into education set title='$title', place='$place', years='$years'  ";


       	if (! $result = $con->query ( $query )) {
       		print "Error al ejecutar la consulta: $query -> " . $con->error;
       		return;
       	}

         return true;

   }


   function update_education($title, $place , $years  ,$con) {


      $query = "update education set title='$title', place='$place', years='$years' where id='$this->id' ";


       	if (! $result = $con->query ( $query )) {
       		print "Error al ejecutar la consulta: $query -> " . $con->error;
       		return;
       	}

         return true;

   }


   function get_education($con) {

     $query = "select * from education";

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


     $query = "select * from education where id = '$id '";

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


        }


   }


   function delete_education($con) {

     $query = "delete from education where id = '$this->id' ";

      if (! $result = $con->query ( $query )) {
          print "Error al ejecutar la consulta: $query -> " . $con->error;
          return false;
        }

        return true;

   }


}

?>
