<?

class Portfolio {


function __construct($con ) {

$this->name =  "hola portafolio";


}

function new_proyect($name, $image, $link ,$con) {


   $query = "insert into portfolios set name='$name',  image =' $image', link = '$link'  ";


    	if (! $result = $con->query ( $query )) {
    		print "Error al ejecutar la consulta: $query -> " . $con->error;
    		return;
    	}

      return true;

}

function update_project($name, $image, $link ,$con) {


   $query = "update portfolios set name='$name', image='$image', link = '$link' where id='$this->id' ";


    	if (! $result = $con->query ( $query )) {
    		print "Error al ejecutar la consulta: $query -> " . $con->error;
    		return;
    	}

      return true;

}


function get_post($con) {

  $query = "select * from portfolios group by name desc";

   if (! $result = $con->query ( $query )) {
       print "Error al ejecutar la consulta: $query -> " . $con->error;
       return;
     }



     return $result;

}

function delete_project($con) {

  $query = "delete from portfolios where id = '$this->id' ";

   if (! $result = $con->query ( $query )) {
       print "Error al ejecutar la consulta: $query -> " . $con->error;
       return false;
     }

     return true;

}


function get_info($id, $con) {


  $query = "select * from portfolios where id = '$id '";

   if (! $result = $con->query ( $query )) {
       print "Error al ejecutar la consulta: $query -> " . $con->error;
       return;
     }

     if ($result->num_rows > 0) {
     $row = $result->fetch_array ();

      $this->id = $row ['id'];
      $this->name = $row ['name'];
      $this->image = $row ['image'];
        $this->link = $row ['link'];


     }


}



}



?>
