<html>
<head>
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<script src="login.js"></script>
</head>
<body>
 <?php
$con = mysqli_connect("localhost","root","","Internal_Invigilation");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
// If form submitted, insert values into the database.
if (isset($_REQUEST['uname'])){
        // removes backslashes
	$uname = stripslashes($_REQUEST['uname']);
        //escapes special characters in a string
	$uname = mysqli_real_escape_string($con,$uname); 
	$uid= stripslashes($_REQUEST['uid']);
	$uid = mysqli_real_escape_string($con,$uid);
	$pwd= stripslashes($_REQUEST['pwd']);
	$pwd = mysqli_real_escape_string($con,$pwd);
	$repwd = stripslashes($_REQUEST['repwd']);
	$repwd = mysqli_real_escape_string($con,$repwd);
	$dept= stripslashes($_REQUEST['dept']);
	$dept= mysqli_real_escape_string($con,$dept);
        $query = "INSERT into 'regisration' (uname, uid, pwd, repwd, dept)
VALUES ('$uname', '$uid','$pwd', '$repwd','$dept')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
?> 
<h2><marquee>&clubs;Welcome to Registration Section&clubs;</marquee></h2>
	<div class="login-page">
	  <div class="form" >
		<form action="" method="post">
<p align="center">Enter Name<input name="uname"type="text" placeholder="username" maxlength="32" size="16">
<p align="center">Enter User-id<input name="uid" type="text" placeholder="userId" maxlength="10" size="16">
<p align="center">Enter password<input name="pwd" type="password" placeholder="password" minlength="8" size="16">
<p align="center">Re-enter password<input name="repwd"type="password" placeholder="password" minlength="8" size="16">
<p align="center">Enter your Department<select name="dept" size="1">
<option name="cse" value="CSE">CSE
<option name="it" value="IT">IT
<option name="mech" value="MECH">MECH
<option name="eee" value="EEE">EEE
<option name="ece" value="ECE">ECE
<option name="civ" value="CIV">CIV
<option name="chem" value="CHEM">CHEM
</select>
<p align="center"><input type="submit" name="registration" value="Register">
</form>
	  </div>
	</div>
</body>
