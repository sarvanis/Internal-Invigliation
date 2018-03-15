<html lang="en">    

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

    
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
global $c,$i;
$date=$_POST['edate'];
$day=$_POST['day'];
/*if(isset($_POST['cs1']))
{
$c1=$_POST['cs1'];
}
if(isset($_POST['cs2']))
{
$c2=$_POST['cs2'];
}
if(isset($_POST['cs3']))
{
$c3=$_POST['cs3'];
}
//$c2=$_POST['cs2'];
//$c3=$_POST['cs3'];
if(isset($_POST['cs4']))
{
$c4=$_POST['cs4'];
}
if(isset($_POST['cs5']))
{
$c5=$_POST['cs5'];
}
if(isset($_POST['cs6']))
{
$c6=$_POST['cs6'];
}
if(isset($_POST['cs7']))
{
$c7=$_POST['cs7'];
}
if(isset($_POST['cs8']))
{
$c8=$_POST['cs8'];
}
if(isset($_POST['cs9']))
{
$c9=$_POST['cs9'];
}
if(isset($_POST['cs10']))
{
$c10=$_POST['cs10'];
}
if(isset($_POST['cs11']))
{
$c11=$_POST['cs11'];
}
if(isset($_POST['cs12']))
{
$c12=$_POST['cs12'];
}*/
/*
for($i=1;$i<=12;$i++)
{
	$c[i]=$_POST['cs'];
}*/
$tm=$_POST['tm'];
$tt=$_POST['tt'];

$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$q=mysqli_query($c,"insert into admin values('$date','$day','$tm','$tt')");

echo"click here to submit another exam day";
echo"<a href='admin.html' src='admin.html' alt='something went wrong'>Exam day</a>";


?>
</body>

</html>









































































































































