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
   		$successMsg = true;
		}
} else {
	exit;
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
    <link rel="stylesheet" href="stylesheet.css" type="text/css">
  
  </head>
  <body>
 
<!-- NAVIGATION BAR -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="navbar-brand" href="#">
            <li class="slideDown" data-scroll="offset(0,-2px)">Find me on <a href="https://linkedin.com/in/mark-alexa-074326144" target="_blank" alt="find me on linkedin">
            <img style="padding:0;margin:0;" width="30px" height="auto" src="in.png"></a>
            <a href="https://google.com/+MarkAlexa" target="_blank" alt="find me on google plus">
            <img style="padding:0;margin:0;" width="32px" height="auto" src="gplus.png"></a></li>
            
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right">
       	 <li><a id="hover" href="index.html">Home</a></li>
          <li><a id="hover" href="about.html">Who I am</a></li>
          <li><a id="hover" href="my_work.html">My Work</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

  <div class="jumbotron">
	<div class="container">  
  <div class="row">
  	<div class="col-md-4">
    <form method="post" action="">
		<div class="form-group">
			<label for="fullName">Full Name</label>
			<input type="text" name="fullName" class="form-control" autofocus="autofocus" required>
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
	<div class="col-md-4">
		 <img src="bgcontact.png" alt="">
	</div>
	<div class="col-md-4">
		 <div  id="canvas-wrap">
		 <canvas id="myCanvas" width="500" height="250"></canvas>
		 <div id="overlay"></div>
		 </div>
	</div>
	</div>
	</div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">
    	
    	function output() {
    	var myCanvas = document.getElementById("myCanvas");
    	var context = myCanvas.getContext("2d");
    	
    	context.moveTo(80,80);
    	context.lineTo(340,80);
    	context.lineWidth = 2;
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.beginPath();
    	context.arc(340,120,40,-1.6,0.5*Math.PI);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(340,160);
    	context.lineTo(85,160);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(80,80);
    	context.lineTo(0,70);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.moveTo(0,70);
    	context.lineTo(49,95);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.beginPath();
    	context.arc(80,120,40,1.4,1.2*Math.PI);
    	context.strokeStyle = "#21a527";
    	context.stroke();
    	context.fillStyle = "#21a527";
    	context.font = "19px Verdana";
    	context.strokeText("Great ! Message has been sent.",80,110);
    	context.strokeText("I'll get back to you as soon as I can.",80,130);
    	context.strokeText("Have a good one !",80,150);
    	
    	}
    	
    </script>
     <?php if($successMsg == true) { echo "<script>output();</script>"; } ?>
  </body>
</html>