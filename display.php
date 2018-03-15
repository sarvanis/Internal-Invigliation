
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
	
<body style="background-image:url('hi2.jpg');background-size:cover">

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
header("Refresh:10");
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$dis=mysqli_query($c,"select a.examdate,a.examday,f.fname,f.fid from Faculty f,admin a 
where a.fromtime >f.frm and a.tilltime< f.till and a.examday=f.fday");
//echo "<form method=\"post\" action=\"d.php\">";
echo "<center>";
echo "<table border=2 width=50% style='color:white;background:blue; border-collapse:collapse;margin-top:70px;margin-left:100px'>";
echo "<th>"."examdate"."</th>";
echo "<th>"."examday"."</th>";
echo "<th>"."FacultyName"."</th>";
echo "<th>"."FacultyId"."</th>";

while($row=mysqli_fetch_assoc($dis))
{

echo"<tr><td name='nm'>".$row['examdate']."</td>";
echo"<td>".$row['examday']."</td><td>".$row['fname']."</td><td>".$row['fid']."</td></td>";


}
echo "<table>";
echo "</center>";
?>
</body>
</html>
