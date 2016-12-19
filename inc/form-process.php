<?php

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$email_to = "juanchoabdon@hotmail.com";
$subject = "Hola! nuevo mensaje desde tu web";

if($name != '' && $email != '' && $message != ''){
    // prepare email body text
    $body = "";
    $body .= "Name: ";
    $body .= $name;
    $body .= "\n";
    $body .= "Email: ";
    $body .= $email;
    $body .= "\n";
    $body .= "Message: ";
    $body .= $message;
    $body .= "\n";

    // send email
    $success = mail($email_to, $subject, $body, "de:".$email);

    // sending back message status
    if ($success){
        echo "success";
    }else{
        echo "Algo salio mal! :(";
    }
}else{
    echo "No debes dejar nada vacío! :( ";
}
?>
