<?php session_start();
require_once('dbconnection.php');


//code for message
if (isset($_POST['message'])) 
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$message=$_POST['message'];
	$msg=mysqli_query($con,"insert into comment(fname,lname,email,password,message) values('$fname','$lname','$email','$password','$message')");
	if($msg)
	{
		echo "<script>alert('Message send');</script>";
	}
}



?>




<!DOCTYPE html>
<html>
<head>
	<title>Traveling and tours</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div style="background: url('slider-2.jpg'); background-size: 100% 120%; background-repeat: no-repeat; ">
				       



					<nav class="navbar" >
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle navbtn" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand bdname" href="#" style="color: black">Hepta</a>
					    </div>
					    <div class="collapse navbar-collapse" id="myNavbar">
					      <ul class="nav navbar-nav">
					        <li class="active linking" ><a href="index.php">Home</a></li>
					        <li  class=" linking" ><a href="hotel.php">Hotels </a></li>
					        <li class=" linking" ><a href="about.php">About Us</a></li>
					        <li  class=" linking" ><a href="gallery.php">Gallery</a></li>
					        <li  class=" linking" ><a class="btn" data-toggle="modal" data-target="#conct">Contact</a></li>
					      </ul>


					 <!-- Modal contact -->
							  <div class="modal fade " id="conct" role="dialog">
							    <div class="modal-dialog ">
							    
							      <!-- Modal content-->
							      <div class="modal-content ">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          
							          <h2>Contact</h2>

							        </div>
							        <div class="modal-body">
							          
							         <div class="container-fluid wrapper1">
 		
							 		<div class="col-md-12 col-sm-12 content1">

							 			<div class="row"> 			
								 			<form method="post" class="form1">
								 				<input type="text" name="fname" placeholder="First Name" required class="col-md-6 nbox1">
								 				<input type="text" name="lname" placeholder="Last Name" class="col-md-6 nbox1"><br>
								 				<input type="email" name="email" placeholder="Email" class="box1"><br>
								 				<input type="password" name="password" placeholder="Password" class="box1"><br>
								 				<textarea rows="4" name="cpassword" placeholder="write your message here" required class="box1"></textarea><br>								 				
								 				<button name="message" class="btn btn11">send</button>
								 			</form>
								 		</div>	
							 		</div>

							 	</div>
							 

							        </div>
							        <div class="modal-footer">
							          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							        </div>
							      </div>
							      
							    </div>
							  </div>


					    </div>
					  </div>
					</nav>
				    
				    
				<center>
					<p style="font-size: 70px;margin-top: 10%; font-family:Elephant;color: white;">About Us</p>
					<p style="font-size: 31px;padding-bottom: 20%; ">A free template by Free-Template.co. Download and share!</p>
				</center>
		</div>	
		<div class="row">
			<div class="col-md-6"><img src="slider-1.jpg" class="myimg" style="float: right; margin-top: 10%; height: 600px" ></div>
			<div class="col-md-6">
				<h2 style="font-family: Cambria;padding-left: 7%; margin-top: 30%">Welcome To Our Website</h2>
				<br>
				<p class="para">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
				</p>
				<p class="para">A small river named Duden flows by their place and supplies it with the necessary regelialia.
				</p>
			</div>
		</div>


		<div class="row">
			<center>
			 <div class="row">
            	<p style="font-family: elephant;font-size: 70px;color: black;margin-right: 20%;margin-left: 20%; margin-top: 7%;">Hotel Gallery</p>
            	<p style="font-size: 20px;line-height: 38px;color: grey;margin-right:26%;margin-left:26%;margin-top: 30px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            
          	</center>
        </div>

        <div class="row">
     	  <div id="myCarousel" class="carousel slide col-md-12 myslide" data-ride="carousel" >
  				  <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0"></li>
			      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="2"></li>
			      <li data-target="#myCarousel" data-slide-to="3"></li>
			      <li data-target="#myCarousel" data-slide-to="4"></li>
			    </ol>

			    <!-- Wrapper for slides -->
			    <div class="carousel-inner ">

			      <div class="item active">
			        <img src="slider-1.jpg" alt="Los Angeles" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="slider-2.jpg" alt="Chicago" style="width:100%;">
			      </div>
			    
			      <div class="item">
			        <img src="slider-3.jpg" alt="New York" style="width:100%;">
			      </div>
			  
			      	<div class="item">
			        <img src="slider-4.jpg" alt="Chicago" style="width:100%;">
			      </div>

			      	<div class="item">
			        <img src="slider-5.jpg" alt="Chicago" style="width:100%;">
			      </div>

			      <div class="item">
			        <img src="slider-6.jpg" alt="Chicago" style="width:100%;">
			      </div>

			    </div>

			    <!-- Left and right controls -->
			    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
			      <span class="glyphicon glyphicon-chevron-left"></span>
			      <span class="sr-only">Previous</span>
			    </a>
			    <a class="right carousel-control" href="#myCarousel" data-slide="next">
			      <span class="glyphicon glyphicon-chevron-right"></span>
			      <span class="sr-only">Next</span>
			    </a>
		   </div>
		 </div>  


		

		<div class="row">
			<center>
			<p style="font-family: Cambria;font-size: 70px;color: black;margin-top: 10%;">Team</p>
			<p style="font-size: 20px;line-height: 38px;color: grey;margin-right:20%;margin-left:20%;margin-top: 30px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
            
			</center>	
		</div>	
		<div class="row" style="width:80%;margin:auto;">
			<div class="col-md-4 cust">
				<img src="person_1.jpg" class="p1" >
				<p class="cutnm">Jean Love</p>

			</div>
			<div class="col-md-4 cust">
				<img src="person_2.jpg" class="p1" >
				<p class="cutnm" >Vince Richardson</p>

			</div>
			<div class="col-md-4 cust">
				<img src="person_3.jpg" class="p1">
				<p class="cutnm">Jeff Stark</p>
			</div>


			<div class="col-md-4 cust">
				<img src="person_1.jpg" class="p1" >
				<p class="cutnm" >Jean Love</p>

			</div>
			<div class="col-md-4 cust">
				<img src="person_2.jpg" class="p1" >
				<p class="cutnm">Vince Richardson</p>

			</div>
			<div class="col-md-4 cust">
				<img src="person_3.jpg" class="p1">
				<p class="cutnm">Jeff Stark</p>
			</div>
		</div>	
		

		<footer class="section footer-section">
      <div class="container"  style="background-color: black;width:100%; padding-top: 5%;">
        <div class="row" style="width:85% ;margin:auto; border-bottom: 1px solid ;padding-bottom: 3%;">
          <div class="col-md-3">
            <h4>Quick Link</h4>
            <ul class="list-unstyled link">
              <li><a href="">About Us</a></li>
              <li><a href="">Terms &amp; Conditions</a></li>
              <li><a href="">Privacy Policy</a></li>
              <li><a href="">Help</a></li>
             <li><a href="#">Rooms</a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <h4>Support</h4>
            <ul class="list-unstyled link">
              <li><a href="">Our Location</a></li>
              <li><a href="#">The Hosts</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">Contact</a></li>
              <li><a href="#">Restaurant</a></li>
            </ul>
          </div>
          <div class="col-md-3 contact-info">
            <h4>Contact Info</h4>
            <p><span class="d-block">Address:</span></p><p> <span> 98 West 21th Street, Suite 721 New York NY 10016</span></p>
            <p><span class="d-block">Phone:</span></p><p> <span> (+1) 435 3533</span></p>
            <p><span class="d-block">Email:</span> </p><p><span> info@yourdomain.com</span></p>
          </div>
          <div class="col-md-3">
            <h4>Subscribe</h4>
            <p>Sign up for our newsletter</p>
            <form action="#">
              <div class="form-group">
                <input type="email" class="form-control" placeholder="Your email..." style="width:80%;float: left;background-color: black;border:0; border-bottom: 2px solid grey">
                <button type="submit" class="btn" style="float: right;"><span class="fa fa-paper-plane"></span></button>
              </div>
            </form>
          </div>
        </div> 
        <div class="row bordertop text-center ">
          <p class="col-md-12 para">© Copyright 2018. All Rights Reserved. <br> Designed &amp; Developed by <a href="">Free-Template.co</a> <br>Distributed by <a href="">ThemeWagon</a></p>
           
          <p class="col-md-12 social" style="margin-bottom: 10%;">
            <a href=""><span class="fa fa-facebook"></span></a>
            <a href="#"><span class="fa fa-twitter"></span></a>
            <a href="#"><span class="fa fa-instagram"></span></a>
            <a href="#"><span class="fa fa-linkedin"></span></a>
            <a href="#"><span class="fa fa-youtube"></span></a>
            
          </p>
        </div>
      </div>
    </footer>
	</div>	
</body>
</html>