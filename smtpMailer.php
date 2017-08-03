<?php

	require 'PHPMailer/PHPMailerAutoload.php';

	$errMsg = $successMsg = "";

	if(isset($_POST['submit'])) {
		
		function test_input($data) {
			$data = stripcslashes($data);
			$data = trim($data);
			$data = htmlspecialchars($data);
			return $data;		
		}
	
		$name = test_input($_POST['fullName']);
		$email = test_input($_POST['email']);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  					$errMsg = '<div class="alert alert-danger" role="alert">
  						<strong>There was error in your form:</strong> Invalid email. Enter valid email address so I can get back to you.
							</div>'; 
			}
		$subject = test_input($_POST['subject']);
		$message = test_input($_POST['message']);
		
		if(empty($errMsg)) {
 		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'serverubuntu92@gmail.com';                 // SMTP username
		$mail->Password = 'ubuntu2509';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom("$email", "$name");
		$mail->addAddress("serverubuntu92@gmail.com", "");     // Add a recipient
		$mail->addAddress('');               // Name is optional
		$mail->addReplyTo("$email", "$name");
		$mail->addCC('');
		$mail->addBCC('');

		$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

		$mail->Subject = "$subject";
		$mail->Body    = "$message";
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		
		if(!$mail->send()) {
    		echo 'Message could not be sent.';
    		echo 'Mailer Error: ' . $mail->ErrorInfo;
		} else {
   		$successMsg = '<div id="successMsg" class="alert alert-success" role="alert">
  			<strong>Great ! </strong> Message sent. I\'ll get back to you in a bit.</div>';
		}
} else {
	exit;
}
}


?>