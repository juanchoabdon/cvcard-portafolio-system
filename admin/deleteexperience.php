<?
include '../controller/class.person.php';
include '.../includes/functions.php';
$id = $_GET ['id'];
$con = connect_mysql ();

$juandi = new Person( $con);
$juandi->experience->get_info($id,$con);

if($juandi->experience->delete_experience($con )) {

header("Location: /admin/experience.php ");


}



?>
