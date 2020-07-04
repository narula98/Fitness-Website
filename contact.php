<!DOCTYPE html>
<!-- https://p.w3layouts.com/demos_new/template_demo/28-04-2017/fitness_in-demo_Free/1565793455/web/index.html -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/workout.jpg">

    <title>Fitness Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,600,700,800,900" rel="stylesheet"> 
    
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50">
  
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Fitness Freaks</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
           	<li><a href="gallery.php">Gallery</a></li>
			<li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	
	 <div id="mycarousel" class="carousel slide" data-ride="carousel">
		
	
		<ol class="carousel-indicators">
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responsive" src="images/workout.jpg">
				<div class="carousel-caption">
				<h2>Lorem Ipsum is a Dummy Text</h2>
				<p>Lorem Ipsum is a Dummy Text. It was started in 1930s and is been used as dummy </p>
				<button>Know More</button>
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="images/workout.jpg">
				<div class="carousel-caption">
				<h2>Lorem Ipsum is a Dummy Text</h2>
				<p>Lorem Ipsum is a Dummy Text. It was started in 1930s and is been used as dummy </p>
				<button>Know More</button>
				</div>
			</div>
			<div class="item">
				<img class="img-responsive" src="images/workout.jpg">
				<div class="carousel-caption">
				<h2>Lorem Ipsum is a Dummy Text</h2>
				<p>Lorem Ipsum is a Dummy Text. It was started in 1930s and is been used as dummy </p>
				<button>Know More</button>
				</div>
			</div>
		</div>
		
  </div>
  
	
	
		<div class="contactu" id="contact">
		<div class="container">
			<h3>Contact Us</h3>
			<div class="col-md-12">
				<div class="col-md-6">
				<label>Comments:</label>
				<textarea rows="10"></textarea> 
				</div>
				<div class="col-md-6">
					<form class="form" action="index.php" method="post">
					<label>Full Name:</label><input class="form-control" type="text" name="name">
					<label>Email:</label><input class="form-control" type="text" name="email">
					<label>Phone No:</label><input class="form-control" type="number" name="phone"><br/>
					<input  type="Submit" value="submit" name="submit">
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="mail">
	<?php
		if(isset($_POST['submit'])){
				if(empty($_POST['name'])||empty($_POST['email'])||empty($_POST['phone'])){
					echo 'All Feilds Required';
				}
				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				
				//send mail
				$mailid="sahilnarula98@gmail.com";
				$subject="Form Values";
				$headers="From: sahilnarula98@gmail.com";
				$msg = "'.$name.'"."'.$email.'"."'.$phone.'";
				$mail= mail($mailid,$subject,$msg,$headers);
				if(!$mail->send()){
							echo 'There was an error sending mail';
						}
					else{
						echo 'mail sent';
					}
		}
	?>
	</div>
	<footer>
	<div class="footer">
		<div class="container">
			<div class="col-md-12">
				<div class="col-md-6">
					<a href="#"><p>Fitness Freak</p></a>
				</div>
				<div class="col-md-6 pull-right">
					<a href="#"><p>Terms and Conditions Apply</p></a>
				</div>
			</div>
		</div>
	</div>
	</footer>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body> 
  </html>