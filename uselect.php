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

<body  >

    
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
header("Refresh:10");
$c=mysqli_connect('localhost','root','','Internal_Invigilation');
$d=mysqli_query($c,"select * from admin ");
//echo "<form method=\"post\" action=\"d.php\">";
echo "<table border=2 width=50% align='center' style='color:black ; background:skyblue'>";

echo "<th>"."examday"."</th>";
echo "<th>"."examdate"."</th>";
echo "<th>"."fromtime"."</th>";
echo "<th>"."tilltime"."</th>";

while($row=mysqli_fetch_assoc($d))
{
print_r("<tr><td name='nm'>".$row['examday']."</td><td>".$row['examdate']."</td>"."<td>".$row['fromtime']."</td><td>".$row['tilltime']."</td>");

}
echo "<table>";

//echo "</form>";
?>
</body>
</html>
