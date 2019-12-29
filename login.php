<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>WEDDING PHOTOGRAPHY</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="icon" href="images/favicon.png">
	<link rel="shortcut icon" href="images/favicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#body {font-family: Arial, Helvetica, sans-serif; background-color: red;
height: 600px;
}
#body form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

#main{
  align-items: center;
}
button {
  background-color: #403658ba;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  margin-left: 0px;
  border: none;
  cursor: pointer;
  width: 100%;

}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #403658ba;
  text-align: left;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 0px;
  background-color: white;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
    
  }
  .cancelbtn {
     width: 100%;
     float: left;
  }
}
.size{
  height: 300px;
  width: 400px;
  text-align: center;
  background-color: white; 


}
.shadow{
    box-shadow: 8px 8px 8px 8px grey;

}
a{
  color: #2e4e9ae8;
};
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
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>
				<li >
					<a href="gallery.php">Gallery</a>
				</li>
				
				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					
					<a href="login.php"><img src="images/user-image-.png" height="60px" width="60px" alt="Login" title="Login" align="center"></a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div>
			<div class="body" style="height: 600px">


				<h2 align="center">Login to Anne</h2>
<div align="center">
<div class="size">
<form class="shadow">
  
  
  <div class="imgcontainer">
    <img src="images\login.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1" align="left">
    <button type="button" class="cancelbtn" ><a href="signup_form.php"><font color="white">Sign up</font> </a></button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
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