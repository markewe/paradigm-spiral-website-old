<?php
if($_POST){
    $email = $_POST['email'];
    $message = $email . " wrote - " . $_POST['message'];

	//send email
    mail("paradigmspiralanime@gmail.com", "Paradigm Spiral Website Contact Form", $message);
}
?>