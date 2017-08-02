<?php

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
  					$errMsg = "Invalid email format"; 
			}
		$subject = test_input($_POST['subject']);
		$message = test_input($_POST['message']);
		
		$to = "mark.alexa.uk@gmail.com";
		$from = "From: $name";
		$headers ="From:<$from>\n";
		$headers.="MIME-Version: 1.0\n";
		$headers.="Content-type: text/html; charset=iso 8859-1";
		
		if(empty($errMsg)) {
			if (mail($to, $subject, $message, $headers)) {
				$sucMsg = "<p>The email was sent successfully !</p>";	
			} else {
				$errMsg = "<p>The email could not be sent !</p>";
			}
	}
	
	}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
	 <title>Mark Alexa: Contact</title>
    <link rel="stylesheet" href="contact.css" type="text/css">
  </head>
  <body>
  
  <div class="container">
  	
    <form method="post" action="contact.php">
		<div class="form-group">
			<label for="fullName">Full Name</label>
			<input type="text" name="fullName" class="form-control" required>
			<label for="visitors_email">Your Email</label>
			<input type="email" name="email" class="form-control" required>
			<label for="subject">Subject</label>
			<input type="text" name="subject" class="form-control" required>
			<label for="message">Message</label>
			<textarea cols="3" rows="4" name="message" class="form-control" required></textarea>
			<button type="submit" class="btn btn-primary btn-outline btn-lg" name="submit">Submit</button>		
		</div>    
    </form>
</div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js">
  </body>
</html>