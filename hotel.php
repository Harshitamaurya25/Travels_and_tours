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
<body style="overflow-x: hidden;">
	<div class="container-fluid">
		<div class="row">
			<div style="background: url('slider-4.jpg');width: 100%;background-repeat: no-repeat; background-size: cover; ">
				       


					<nav class="navbar" >
					  <div class="container-fluid">
					    <div class="navbar-header">
					      <button type="button" class="navbar-toggle navbtn" data-toggle="collapse" data-target="#myNavbar">
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					      <a class="navbar-brand bdname" href="#">Hepta</a>
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
					<p style="font-size: 70px;margin-top: 10%; font-family:Elephant; color:white;">Our Hotel</p>
					<p style="font-size: 31px; color: white; padding-bottom: 20%;">A free template by Free-Template.co. Download and share!</p>
				</center>
		</div>	
		<div class="container opt" style="margin-top: 10%">
		<center>
			<div class="row" style="margin-left: 8%; margin-right: 8%;">
				<div class="col-md-4" >
					<img src="001-breakfast.svg" class="img2">
	            	<h3>Good Foods</h3>
	              	<p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4">
					 <img src="002-planet-earth.svg" class="img2">
	             	 <h3>Travel Anywhere</h3>
	             	 <p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4">
					<img src="003-airplane.svg" class="img2">
		             <h3>Airplane</h3>
	              	<p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
			<br>
			<div class="row" style="margin-left: 8%;margin-right: 8%; margin-bottom: 5%;">
				<div class="col-md-4">
					<img src="004-beach.svg" class="img2">
	                <h3>Beach Resort</h3>
	                <p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4">
					<img src="005-mountains.svg" class="img2">
	                <h3>Mountain Climbing</h3>
	              	<p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
				<div class="col-md-4">
					 <img src="006-hot-air-balloon.svg" class="img2">
	              <h3>Hot Air Balloon</h3>
	              <p style="color:grey;font-size: 18px; line-height: 35px;">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
				</div>
			</div>
		</center>
	</div>
      
        <div class="row">
			<div class="col-md-6" style="height:600px;"><img src="slider-1.jpg" class="myimg2"   style="float: right; margin-top: 14%"></div>
			<div class="col-md-6">
				<h2 style="font-family: Cambria;padding-left: 7%; margin-top: 35%">Welcome To Our Website</h2>
				<br>
				<p style="font-size: 18px;padding-right: 12%;padding-left: 5%;color:grey;line-height: 35px;">
					Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
				</p>
				<p style="font-size: 18px;padding-left: 5%;padding-right: 5%;color: grey; line-height: 35px; ">
					A small river named Duden flows by their place and supplies it with the necessary regelialia.
				</p>
			</div>
		</div>


      <div class="row">
			
			<div class="col-md-6">
				<h2 style="font-family: Cambria;padding-left: 17%; margin-top: 22%">Welcome To Our Website</h2>
				<br>
				<p class="para1">
					Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.
				</p>
				<p class="para1">
					A small river named Duden flows by their place and supplies it with the necessary regelialia.
				</p>
			</div>
			<div class="col-md-6 col-sm-12"><img src="img_1_long.jpg" class="myimg" style="float: left;margin-top: 2%;" ></div>
		</div>


		<div class="row">
			<center>
			 <div class="row">
            	<p class="hg">Hotel gallery</p>
            	<p class="pg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
            
          	</center>
        </div>

        <div class="row">
     	  <div id="myCarousel" class="carousel slide col-md-12 myslide" data-ride="carousel" >
  				  <!-- Indicators -->
			    <ol class="carousel-indicators">
			      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			      <li data-target="#myCarousel" data-slide-to="1"></li>
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



		<div>
				<div class="row">
					<div class="col-md-12" style="margin-top:6%;" >
						<center>
						 <p style="font-family: elephant;font-size: 50px;">More Hotel Features </p>
		           		 <p class="pg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In dolor, iusto doloremque quo odio repudiandae sunt eveniet? Enim facilis laborum voluptate id porro, culpa maiores quis, blanditiis laboriosam alias. Sed.</p>
		           		</center>
					</div>		
				</div>
				<div class="row" style="margin-left: 100px;">
					<div class="col-md-3 one" >
						<img src="slider-6.jpg" style="height: 230px;width: 350px;">
						<p class="reason">Five Reasons to Stay at Villa Resort</p>
					</div>
					<div class="col-md-3 one">
						<img src="slider-5.jpg" style="height: 230px;width: 350px;">
						<p class="reason">Five Reasons to Stay at Villa Resort</p>
					</div>
					<div class="col-md-3 one" >
						<img src="img_3.jpg" style="height: 230px;width: 350px;">
						<p class="reason">Five Reasons to Stay at Villa Resort</p>
					</div>			
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