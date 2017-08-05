<?php
	include('smtpMailer.php');
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
            <img id="in" style="padding:0;margin:0;" width="30px" height="auto" src="in.png"></a>
            <a href="https://google.com/+MarkAlexa" target="_blank" alt="find me on google plus">
            <img id="gplus" style="padding:0;margin:0;" width="32px" height="auto" src="gplus.png"></a></li>
            
      </ul>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
         
      <ul class="nav navbar-nav navbar-right">
       	 <li><a id="hover" href="index.html">Home</a></li>
          <li><a id="hover" href="about.html">Who I am</a></li>
          <li><a id="hover" href="my_work.html">My Work</a></li>
          <li><a id="hover" href="contact.php">Contact Me</a></li>
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
   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="bootstrap/js/bootstrap.min.js"></script>
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