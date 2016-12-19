<?

include '../controller/class.person.php';
include '.../includes/functions.php';
session_start ();
$modal = false;
$con = connect_mysql ();
$id = null;

$juandi = new Person($con );

if (isset ( $_POST ['email'] )) {
  $email = $_POST ['email'];
  $password = $_POST ['password']; 
 $id = $juandi->start_login($email , $password, $con);

  if($id != null) {

    $_SESSION ["juandi_id"] = $id;
  	$_SESSION ["juandi_logued"] = true;
  	$_SESSION ["juandi_timeout"] = time ();


  }
  if ($_SESSION ["juandi_logued"]) {
	header ( 'Location: /admin/index.php?m=login' );
} else {

$modal = true;

}

}
?>
<html>
<head>
<title>Juandi | Login</title>


<meta charset="utf-8">
<!-- Making sure the web-site will scale fine on mobiles-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!--Import materialize.css-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

<!--Let browser know website is optimized for mobile-->
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>


<style>

.container {

margin-top: 80px;

}

.center img {

max-width: 160px;

}

.login {

margin-top: 30px;

}

.input-field {


margin-top: 25px;

}
.input-field input[type=email]:focus {
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;
}
.input-field input[type=password]:focus {
  border-bottom: 1px solid #0EB57D;
  box-shadow: 0 1px 0 0 #0EB57D;
}
.input-field .prefix.active {
   color: #0EB57D;
 }

 .input-field input[type=email]:focus + label {
   color: #0EB57D;
 }
 .input-field input[type=password]:focus + label {
   color: #0EB57D;
 }

 .btn {

width: 50%;
 }
</style>
</head>


<body>




  <div class="container">
    <div class="row">
     <div class="center">

      <h1 style="color: #0EB57D; font-weight: 500;">JDS</h1>

 <div class="login">

      <form class="col l6 s12 push-l3" action="" method="POST">
        <div class="row">
          <div class="input-field">
            <i class="material-icons prefix">account_circle</i>
            <input id="icon_prefix" name="email" type="email" required>
            <label for="icon_prefix">Email</label>
          </div>

          <div class="input-field ">
            <i class="material-icons prefix">lock_outline</i>
            <input id="lock_outline" name = "password" type="password" required>
            <label for="lock_outline">Contraseña</label>
          </div>
        </div>
        <button class="btn waves-effect waves-light  " style="background-color: #0EB57D;" type="submit" name="action">Ingresar
  <i class="material-icons right">input</i>
</button>

      </form>


  </div>

     </div>

</div>
      </div>




        <!-- Modal Structure -->


   <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>

   <?

   if($modal) {

?>

<script type="text/javascript" >


 Materialize.toast('Datos incorrectos!', 4000, 'top')


</script>

<?


   }


   ?>
</body>


</html>
