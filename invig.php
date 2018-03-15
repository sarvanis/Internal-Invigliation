<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

	
<body >

   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>


<?php

global $q5;

$dt2="";
$cr="";
$dd2="";
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"select * from Faculty f ,admin a where f.fday=a.examday;  ");


while($row=mysqli_fetch_assoc($q))
{

	if(($row['frm']=="9:00") && ($row['till']=="10:40"))
	{
	
		//$cs=$row['classroomnumber'];
			$ft="9:30";
			$tt="11:00";
			$fd= $row['fday'];
			$fid=$row['fid'];
				$dt=$row['examdate'];
			$dd=$row['examday'];				
			$fnm= $row['fname'];
			$fid=$row['fid'];
echo $fid;	 

echo "<center>";
//echo "<style>".'color:red'."</style>".$fd;

echo $dt;
echo $fnm;
echo "</center>";

$q5=mysqli_query($c,"select * from examdetails where examdate='$dt';");

$q6=mysqli_query($c,"select count(fid) as fcnt from examdetails where fid='".$fid."' ");
$data=mysqli_fetch_assoc($q6);
$fcount=$data['fcnt'];
echo $fcount;





if(mysqli_num_rows($q5)==0){
	//echo $dt;
//echo $dt2;
echo $cs;
echo $fd;
 echo $row['tfrom'];
echo $row['till'];
//echo $cr;
echo "</center>";


$q3=mysqli_query($c,"insert into examdetails values('$fd','$dt','$ft','$tt','$fnm','$fid','$fcount'+1)");
echo"hi";

if($q3)
{

echo "inserted";
}

}


else
echo "not inserted";



echo "<br><br><br>";
}
}

?>
</body>
</html>
