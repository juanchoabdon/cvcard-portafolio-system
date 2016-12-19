<?
include '../controller/class.person.php';
include '.../includes/functions.php';
$id = $_GET ['id'];
$con = connect_mysql ();

$juandi = new Person( $con);
$juandi->education->get_info($id,$con);

if($juandi->education->delete_education($con )) {

header("Location: /admin/education.php ");


}



?>
