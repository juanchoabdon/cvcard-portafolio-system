<?

class Blog {


function __construct($con ) {

$this->name =  "hola blog";


}

function new_post($title, $subtitle , $subtitle , $content , $image , $status  ,$con) {




   $query = "insert into blog set title='$title', subtitle='$subtitle', content='$content', image =' $image', status = '$status'  ";


    	if (! $result = $con->query ( $query )) {
    		print "Error al ejecutar la consulta: $query -> " . $con->error;
    		return;
    	}

      return true;

}

function update_post($title, $subtitle , $subtitle , $content , $image , $status ,$con) {


   $query = "update blog set title='$title', subtitle='$subtitle', content='$content', image =' $image', status = '$status' where id='$this->id' ";


    	if (! $result = $con->query ( $query )) {
    		print "Error al ejecutar la consulta: $query -> " . $con->error;
    		return;
    	}

      return true;

}

function set_view($con) {

  $query = "select views from blog where id='$this->id' ";

  if (! $result = $con->query ( $query )) {
      print "Error al ejecutar la consulta: $query -> " . $con->error;
      return;
    }
    $row = $result->fetch_array ();
    $vistas = $row['views'];
    $vistas++;

    $query = "update blog set views = '$vistas' where id='$this->id' ";
    if (! $result = $con->query ( $query )) {
        print "Error al ejecutar la consulta: $query -> " . $con->error;
        return;
      }



}

function get_post($con) {

  $query = "select * from blog";

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

function delete_post($con) {

  $query = "delete from blog where id = '$this->id' ";

   if (! $result = $con->query ( $query )) {
       print "Error al ejecutar la consulta: $query -> " . $con->error;
       return false;
     }

     return true;

}


function get_info($id, $con) {


  $query = "select * from blog where id = '$id '";

   if (! $result = $con->query ( $query )) {
       print "Error al ejecutar la consulta: $query -> " . $con->error;
       return;
     }

     if ($result->num_rows > 0) {
     $row = $result->fetch_array ();

      $this->id = $row ['id'];
      $this->title = $row ['title'];
      $this->subtitle = $row ['subtitle'];
      $this->content = $row ['content'];
      $this->image = $row ['image'];
      $this->status = $row ['status'];
      $this->category = $row ['category'];
      $this->date = $row ['date'];
        $this->views = $row ['views'];

     }


}



}



?>
