<html>
<head> 
<title> allocation</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-image:url('invig.png');background-repeat:no-repeat">
<div >
<table >
<thead>
	<tr>
	<div  >
		<h1 class="text-center">Maharaj Gajpathi Raj College Of Engineering</h1>
		</tr>
		</div>
</thead>
</table>
</div>
<nav >
	<div class="container-fluid" >
		<ul class="nav navbar-nav">
		<li><a href="home.html" class="btn btn-lg" role="button">HOME</a>
		</li><li><a href="li.html" class="btn-lg" role="button">USER</a>
		</li>	<li><a href="li.html" class="btn-lg" role="button">ADMINSTRATOR</a>
		</li><li><a href="register.html" class="btn-lg" role="button">REGISTER</a>	</li>
		</ul>
		
			</div>
			</nav>


		<div class="login-page">
					<form>
					     <div class="row centered">
							<div class="form">
								
						  </div></div>
			</form>
</div>
<?php 
		$fname=$_POST['fname'];
        $fid=$_POST['fid'];
		//$fph=$_POST['fph'];
		//$fsub=$_POST['fsub'];
		$from=$_POST['frm'];
		$till=$_POST['till'];
		//$deg=$_POST['deg'];
		//$yr=$_POST['yr'];
		$dt=$_POST['fday'];
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"insert into Faculty values('$fname','$fid','$from','$till','$dt')");
if($q)
{
echo "<script>";
echo "alert('submitteddetails')";
echo "</script>";
}
?>
</body>
</html>
