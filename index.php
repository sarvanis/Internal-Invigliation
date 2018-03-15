<html>
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Internal_Invigilation";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "YOUR";
function NewUser()
{
//echo "YOUR2";
	$nam = $_POST['uname'];
	$ui = $_POST['uid'];
	$pw = $_POST['pwd'];
	$repw = $_POST['repwd'];
	$dep = $_POST['dept'];
	$sql = "INSERT INTO regisration (uname,uid,pwd,repwd,dept) VALUES ('$nam', '$ui' ,'$pw', '$repw','$dep')";
	$data = mysqli_query($GLOBALS['conn'],$sql)or die(mysqli_error($GLOBALS['conn']));
	
	echo "YOUR REGISTRATION IS COMPLETED...";
	
}
NewUser();
if(!empty($_POST['uid']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$sql1 = mysqli_query($GLOBALS['conn'] , "SELECT * FROM regisration WHERE uid = '$_POST[uid]'") or die(mysqli_error($GLOBALS['conn']));

	if(!$row = mysqli_fetch_array($sql1) or die(mysqli_error($GLOBALS['conn'])))
	{
		NewUser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
/*function SignUp()
{
echo "YOUR33";

}
SignUp();*/
$conn->close();
?> 

<body>
<a href="login.html">Click here to login</a>
</body>
</html>
