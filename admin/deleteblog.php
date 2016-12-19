<?
include '../controller/class.person.php';
include '.../includes/functions.php';
$id = $_GET ['id'];
$con = connect_mysql ();

$juandi = new Person( $con);
$juandi->blog->get_info($id,$con);

if($juandi->blog->delete_post($con )) {

header("Location: /admin/index.php?m=delete ");


}



?>
