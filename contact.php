<?php
	include('smtpMailer.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <title>Mark Alexa: Contact</title>
	 <link rel="stylesheet" href="contact.css" type="text/css">
    
  
  </head>
  <body>
 
<!-- NAVIGATION BAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <ul class="navbar-brand" href="#">
            <li class="slideDown" data-scroll="offset(0,-2px)">Find me on <a href="https://linkedin.com/in/mark-alexa-074326144" target="_blank" alt="find me on linkedin">
            <img id="in" style="padding:0;margin:0;" width="30px" height="auto" src="in.png"></a>
            <a href="https://google.com/+MarkAlexa" target="_blank" alt="find me on google plus">
            <img id="gplus" style="padding:0;margin:0;" width="32px" height="auto" src="gplus.png"></a></li>
            
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right" id="littleBitDown">
       	 <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home</a></li>
          <li><a href="about.html" alt="about me"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Who I am</a></li>
          <li><a href="my_work.html" alt="my work"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;My Work</a></li>
        	 <li class="active"><a href="contact.php" alt="contact me"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>&nbsp;Contact Me</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>  

  <div class="jumbotron">
	<div class="container">  
  <div class="row">
  	<div class="col-md-4">
  	<?php echo $successMsg; ?>
  	<h2 id="touch">Let's get in touch !</h2>
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
			<button type="submit" id="submit" class="btn btn-primary btn-outline btn-lg" name="submit">Submit</button>
			
		</div>    
		
    </form>
    
	</div>
	<div class="col-md-4" id="remove">
		 <img src="bgcontact.png" alt="">
	</div>
	<div class="col-md-4" id="remove">
		 <div  id="canvas-wrap">
		 <canvas id="non-fadingCanvas" width="500" height="250"></canvas>
		 <canvas id="fadingCanvas" style="top:130px;" width="500" height="250"></canvas>
    	 <div id="overlay"></div>
		 </div>
	</div>
	</div>
	</div>
   </div>
   
   <script src="expanding.js" type="text/javascript"></script>
   <script type="text/javascript">
   	var windowWidth = $(window).width();
   	if (windowWidth < 800) {
   		$("#remove").remove();
   		$("#canvas-wrap").remove();
   	}
   </script>
   <script type="text/javascript" src="getInTouch.js"></script>
   <script type="text/javascript" src="messageSent.js"></script>
   <?php if($successMsg != "") { echo "<script>messageSent();</script>"; } ?>
  </body>
</html>