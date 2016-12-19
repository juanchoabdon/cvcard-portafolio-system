<?
include '../controller/class.person.php';
include '.../includes/functions.php';
$id = $_GET ['id'];
$con = connect_mysql ();

$juandi = new Person( $con);
$juandi->portfolio->get_info($id,$con);

if($juandi->portfolio->delete_project($con )) {

header("Location: /admin/portfolio.php ");


}



?>
