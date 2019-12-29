<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>ANNE PHOTOGRAPHY</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">

	<link rel="icon" href="images/favicon.png">
	


	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/slider.min.css">
    <title>jQuery Slider Demo</title>
    <style>
        


        #slider {
            box-shadow: #888888 0px 15px 60px 10px;
            height: 490px;
            margin: 0px auto 0 auto;
            margin-bottom: 10px;
            width: 940px;
        }
    </style>


	

	



</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="index.php"><h1><font color="yellow" size="6px" face="algerian">ANNE PHOTOGRAPHY</h1></font></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li>
					<a href="gallery.php">Gallery</a>
				</li>
				
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					
					<a href="login.php"><img src="images/user-image-.png" height="40px" width="40px" alt="Login" title="Login" align="center"></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body">

				<div id="slider" class="slider no-js">
				    <div class="slides">
				        <img class="image1" src="images/slider/7.jpg">
				        <img class="image1" src="images/slider/8.jpg">

				        <img class="image2" src="images/slider/2.jpg">
				        <img class="image3" src="images/slider/3.jpg">
				        <img class="image4" src="images/slider/4.jpg">
				        <img class="image5" src="images/slider/5.jpg">
				        <img class="image6" src="images/slider/6.jpg">
				        <img class="image6" src="images/slider/1.jpg">
				    </div>
				    <div class="prev">
				        <img src="images/slider/prev.png" alt="prev">
				    </div>
				    <div class="next">
				        <img src="images/slider/next.png" alt="next">
				    </div>
				    <div class="position"></div>
				</div>
				<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
				<script type="text/javascript" src="js/slider.min.js"></script>
				<script>
				    jQuery(document).ready(function () {
				        jQuery("#slider").slider({delay: 1000, interval: 5000});
				    });
				</script>






				<div id="adbox">
					<a href="gallery.php"><img src="images/camera.jpg" alt="Img"> </a><span class="info"><a href="gallery.php" class="btn1">Explore</a> </span>
					<div class="details">
						<h1>High Quality<br>Photographs<br> For You</h1><br><br>
						<p>
							We have hundreds of thousands free stock photos and every day new high resolution photos will be added. All photos are hand-picked from photos uploaded by our users or sourced from free image websites. 
						</p>
					</div>
				</div>



				

			</div>
				
				
			</div>
		</div>
	</div>
	<div id="footer">
		<div>
			<div id="links">
				<div class="showroom">
					<h4>Anne Photography</h4>
					<h5>
						<p>
							<a href="about.php">About<br></a>
						</p>
					</h5>
					<h5>
						<p>
							 <a href="gallery.php">Gallery<br></a>
						</p>
					</h5>
					<h5>
						<p>
							 <a href="contact.php">Contact<br></a>
						</p>
					</h5>
					
				</div>
				<div>
					<h4>Categories</h4>
					<ul class="posts">
						<li>
							
								Wildlife Photography
							
						</li>
						<li>
							
							
								Wedding Photography
							
						</li>
						<li>
							
							
								Portrait Photography
							
						</li>
						<li>
							
							
								Fine Art Photography
							
						</li>
					</ul>
				</div>
				<div>
					<form action="#" method="post" id="newsletter">
						<h4>Join Our Team</h4>
						<input type="text" value="Enter Email Address Here For Updates" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						<input type="submit" value="Sign up" class="btn2">
					</form>
					<div id="connect">
						<h4>Social Media</h4>
						<a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a>
					</div>
				</div>
			</div>
			<ul class="navigation">
				<li>
					<a href="Termofuse.htm">Term of use</a>
				</li>
				<li>
					<a href="Privacy.html">Privacy policy</a>
				</li>
				<li>
					<a href="license.html">License</a>
				</li>
				<li>
					<a href="Imprint.html">Imprint</a>
				</li>
				<li>
					<a href="contact.php">Contact</a>
				</li>
			</ul>
			<p id="footnote">
				© Copyright 2023. All Rights Reserved.
			</p>
		</div>
	</div>
</body>
</html>