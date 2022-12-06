<?php
## CONFIG ##
# LIST EMAIL ADDRESS
$recipient = "steelinox@smartmouse.ro";
# SUBJECT (Subscribe/Remove)
$subject = "Remove";
# RESULT PAGE
$location = "www.steelinox.ro";
## FORM VALUES ##
# SENDER
$email = $_REQUEST['Email'] ;
# MAIL BODY
$body .= "Name: ".$_REQUEST['Name']." \n";
$body .= "Email: ".$_REQUEST['Email']." \n";
# add more fields here if required
## SEND MESSGAE ##
$a = mail( $recipient, $subject, $body, "From: $email" );
if(!$a) echo " Nu s-a putut trimite mail";
else echo " Unsubscribed";
## SHOW RESULT PAGE ##
//header( "Location: $location" );
?>