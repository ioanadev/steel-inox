<?php
if(isset($_POST))
{  
    //form validation vars  
    $formok = true;  
    $errors = array();  
    //submission data  
    $ipaddress = $_SERVER['REMOTE_ADDR'];  
    $date = date('d/m/Y');  
    $time = date('H:i:s');  
    //form data  
    $lastname = $_POST['name']; 
	$firstname = $_POST['name2'];
    $email= $_POST['email'];  
    $telephone = $_POST['telephone'];  
    $subject = $_POST['subject'];  
    $message = $_POST['message']; 

    //validate form data  
    //validate lastname is not empty  
	
    if(empty($lastname)){  
        $formok = false;  
        $errors[] = "Nu ati introdus numele";  
    }  
	//validate firstname is not empty  
	
    if(empty($firstname)){  
        $formok = false;  
        $errors[] = "Nu ati introdus prenumele";  
    }  
	
    //validate email address is not empty  
    if(empty($email)){  
        $formok = false;  
        $errors[] = "Nu ati introdus adresa de email";  
    //validate email address is valid  
    }
	elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
        $formok = false;  
        $errors[] = "Nu ati introdus o adresa de email valida";  
    }  
    //validate message is not empty  
    if(empty($message)){  
        $formok = false;  
        $errors[] = "Nu ati introdus mesajul";  
    }  
    //validate message is greater than 20 characters  
    elseif(strlen($message)<20){  
        $formok = false;  
        $errors[] = "Mesajul dvs. trebuie sa aiba cel putin 20 de caractere";  
    }     
   
//send email if all is ok
if($formok){
	ini_set("sendmail_from","info@example.com"); 
    $headers = "From: info@example.com" . "\r\n";
    $headers = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    $emailbody = "<p>Ai primit un mesaj nou de pe sait.</p>
                  <p><strong>Nume: </strong> {$lastname} </p>
				  <p><strong>Prenume: </strong> {$firstname} </p>
                  <p><strong>Email Address: </strong> {$email} </p>
                  <p><strong>Telefon: </strong> {$telephone} </p>
                  <p><strong>Subiect: </strong> {$subject} </p>
                  <p><strong>Mesaj: </strong> {$message} </p>
                  <p>Acest mesaj a fost trimis de pe adresa de IP: {$ipaddress} on {$date} at {$time}</p>";
    mail("office@steelinox.ro",$subject,$emailbody,$headers);
}

//what we need to return back to our form  
$returndata = array(  
    'posted_form_data' => array(  
        'name' => $lastname,
		'name2' => $firstname,
        'email' => $email,  
        'telephone' => $telephone,  
        'subject' => $subject,  
        'message' => $message  
    ),  
    'form_ok' => $formok,  
    'errors' => $errors  
);  
//if this is not an ajax request  
if(empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) !== 'xmlhttprequest'){  
    //set session variables  
    session_start();  
    $_SESSION['cf_returndata'] = $returndata;  
    //redirect back to form  
    header('location: ' . $_SERVER['HTTP_REFERER']);  
}
  }
  ?>