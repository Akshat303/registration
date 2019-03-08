<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
<title>QUESTION</title>
<link rel="stylesheet" type="text/css" href="style.css">
<style>
  body{
          background-image: url("low-poly-abstract-background_1048-6723.jpg");
          background-repeat: no-repeat;
          background-size: 100%  100%;

		  
       }
       .overlay{
       	opacity: 100;
       }
	   h1 {
        border:12px solid #ffa31a;
		color:red;
		text-shadow:2px 2px 8px blue; 
		}
	   a:{
	     display:block;
		 font-weight:bold;
		 color:black;
    	 background-color:#FDFFD1;
		width:120px;
        }
       .dropdown-content {
        display: none;
        position: absolute;
        min-width: 160px
        box-shadow: 0px 8px 16px 0px rgba (0,0,0,0.2);
        z-index: 1;
       }

     .dropdown-content a {
      columns: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
     }

    .dropdown-content a:hover {background-color: #ddd}
    .dropdown:hover .dropdown-content  {
      display: block;
         }
    .dropdown:hover .dropbtn {
      background-color: #3e8e41
    }
</style>
</head>
<body>

	<h1> <hr> <marquee>  ONLINE &nbsp; EXAMINATION &nbsp; QUESTION </marquee> <hr>
   </h1>
	<div class="header">
		<h2>QUESTION <BR> PAGE</h2>
	</div>


	<div class="content">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>



		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
			<p> <CENTER> Welcome <strong><?php echo $_SESSION['username']; ?></strong> </p>
			<p> <a href="index.php?logout='1'" style="color: #ff0000;">log-out</a> </CENTER> </p>
		<?php endif ?>
	</div>

	 <center>
   <br> <br> 
  <a href="home.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="about.php">ABOUT</a>     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

<select>
<option value="CONTACTS US">CONTACTS US</option> 
<option value="AKSHAT SRIVASTAVA  (8298066638)">AKSHAT SRIVATAVA (8298066638)</option>
<option value="ABHISHEK KUMAR SINGH (9471575708)">ABHISHEK KUMAR SINGH (9471575708)</option>

 </select> &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
 <a href="index.php?logout='1'">LOG OUT</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<br><br>
<meta name="viewport" content="width=device-width, initial-scale=1"> <hr>
  

  <h3>  INSTRUCTIONS <BR>  </h3>
<h4> Total number of question is 10 , each question carries 1 marks . And tick right answer you got 1 marks each correct answeer. </h4> <br>
 
 </center>
<h3>

 1. &nbsp; Java is a ______ language. <br>
A&nbsp;&nbsp;<input type="radio" name="quizcheck[1]" value="1">   weakly typed &nbsp;&nbsp;&nbsp; &nbsp;
B&nbsp;&nbsp;<input type="radio" name="quizcheck[1]" value="2">  strogly typed &nbsp;&nbsp;&nbsp; </br>
C&nbsp;&nbsp;<input type="radio" name="quizcheck[1]" value="3"> moderate typed &nbsp;
D&nbsp;&nbsp;<input type="radio" name="quizcheck[1]" value="4">  None of these &nbsp;&nbsp;&nbsp; </br>
<BR>
  2. &nbsp; How many primitive data type are there in java? <br>
A&nbsp;&nbsp;<input type="radio" name="quizcheck[2]" value="6"> 6 &nbsp;&nbsp; &nbsp;
B&nbsp;&nbsp;<input type="radio" name="quizcheck[2]" value="7"> 7 </br>
C&nbsp;&nbsp;<input type="radio" name="quizcheck[2]" value="8"> 8 &nbsp;&nbsp; &nbsp;
D&nbsp;&nbsp;<input type="radio" name="quizcheck[2]" value="9"> 9 </br>
<BR>
 3. &nbsp; In Java arrays are. <br>
A&nbsp;&nbsp;<input type="radio" name="quizcheck[3]" value="object">   object &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
B&nbsp;&nbsp;<input type="radio" name="quizcheck[3]" value="object references"> object references &nbsp;&nbsp;&nbsp; </br>
C&nbsp;&nbsp;<input type="radio" name="quizcheck[3]" value="primitive data type"> primitive data type &nbsp; 
D&nbsp;&nbsp;<input type="radio" name="quizcheck[3]" value="None of the above">  None of the above &nbsp;&nbsp;&nbsp; </br>
<BR>
 4. &nbsp; In Java, the word true is _____ <br>
A&nbsp;&nbsp;<input type="radio" name="quizcheck[4]" value="A Java keyword">   A Java keyword &nbsp;&nbsp;&nbsp;
B&nbsp;&nbsp;<input type="radio" name="quizcheck[4]" value="A Boolean Literal"> A Boolean Literal &nbsp;&nbsp;&nbsp; </br>
C&nbsp;&nbsp;<input type="radio" name="quizcheck[4]" value="Same as value 1 "> Same as value 1 &nbsp;&nbsp;&nbsp;&nbsp; 
D&nbsp;&nbsp;<input type="radio" name="quizcheck[4]" value="Same as value 0">  Same as value 0 &nbsp;&nbsp;&nbsp; </br>
<BR>
 5. &nbsp; System class is defined in  _____ <br>
A&nbsp;&nbsp;<input type="radio" name="quizcheck[5]" value="Java.util package">  Java.util package &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
B&nbsp;&nbsp;<input type="radio" name="quizcheck[5]" value="Java.lang packeag"> Java.lang packeag &nbsp;&nbsp;&nbsp; </br>
C&nbsp;&nbsp;<input type="radio" name="quizcheck[5]" value="Java.io package"> Java.io package &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
D&nbsp;&nbsp;<input type="radio" name="quizcheck[5]" value="Java.awt package"> Java.awt package&nbsp;&nbsp;&nbsp; </br>
</h3> 
<center> <h3> 
  <a href="index.php">1</a> &nbsp; &nbsp;
  <a href="q1.php">2</a> &nbsp; &nbsp;
 
 </h3>

</center>
</body>
</html>