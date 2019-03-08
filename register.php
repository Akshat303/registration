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
<a href="login.php">LOG IN</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<select>
<option value="CONTACTS US">CONTACTS US</option> 
<option value="AKSHAT SRIVASTAVA  (8298066638)">AKSHAT SRIVATAVA  (8298066638)</option>
<option value="ABHISHEK KUMAR SINGH (9471575708)">ABHISHEK KUMAR SINGH (9471575708)</option>s

 </select>
 <hr>
 <br> </center>

	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label> <center>Username </center></label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<label><center>Email</center></label>
			<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<label><center>Password</center></label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label><center>Confirm password</center></label>
			<input type="password" name="password_2">
		</div>
		<center>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div></center>
		<p>
			Already a member? <center> <a href="login.php" style="color: #00ff00;">Sign in</a> </center>
		</p> 
	</form>
	<img src="1zn3l2x.jpg"> 
</body>
</html>