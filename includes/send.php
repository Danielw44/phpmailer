<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

	require_once('class.phpmailer.php');
	$fname = $_POST['name'];
	$email_usr = $_POST['email'];
  $covering_comments = $_POST['message'];

	$message = file_get_contents('email.html');
	$message = str_replace('{{name}}', $name, $message);
	$message = str_replace('{{message}}', $covering_comments, $message);
    $message = str_replace('{{email}}', $email_usr, $message);

	$email = new PHPMailer();
	$email->CharSet = 'UTF-8';
	$email->IsHTML(true);
	$email->From      = $email_usr;
	$email->FromName  = $name;
	$email->Subject   = 'Website Enquiry from'. $name;
	$email->Body      =  $message;
//    $email->AddAddress( 'jobs@physio.co.uk' );
	$email->AddAddress( 'me@danielworthington.co.uk');

	if($email->send()){
        $mail->send();
    }
?>
