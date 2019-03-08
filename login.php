<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
<h1>  <marquee>  STUDENT &nbsp; REGISTRATION &nbsp; FORM </marquee> </h1>

<center> <br> <br> 
<a href="home.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="about.php">ABOUT</a>       &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="syllabus.php">SYLLABUS</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="register.php">REGISTRATION</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<select>
<option value="CONTACTS US">CONTACTS US</option> 
<option value="AKSHAT SRIVASTAVA  (8298066638)">AKSHAT SRIVATAVA  (8298066638)</option>
<option value="ABHISHEK KUMAR SINGH (9471575708)">ABHISHEK KUMAR SINGH (9471575708)</option>

 </select>
 <hr>
 <br> </center>

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
      
		<div class="input-group">
			<label> <center> Username </center></label> 
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label> <center> Password </center> </label> 
			<input type="password" name="password">
		</div> 
		<center>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
	   </center>
		<p>
			Not yet a member? <center> <a href="register.php" style="color: orange;">Sign up</a>
			</center>
		</p>
	</form>
<img src="UserLogin.gif"> 

</body>
</html>