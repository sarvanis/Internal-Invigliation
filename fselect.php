<!DOCTYPE html>
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

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
               
                 
                <li>
                    <a href="http://localhost/labproject/">Home</a>
                </li>
                <li>
                    <a href="http://localhost/labproject/faculty.html">Faculty</a>
                </li>
                <li>
                    <a href="http://localhost/labproject/user.html">Users</a>
                </li>
                <li>
                    <a href="http://localhost/labproject/invig.php">AllotInvigilation</a>
                </li>
                <li>
                    <a href="http://localhost/labproject/examdetail.php">DisplayAllotment</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                
              
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
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
$c=mysqli_connect('localhost','root','','labproj');
$d=mysqli_query($c,"select * from faculty ");
//echo "<form method=\"post\" action=\"d.php\">";
echo "<center>";
echo "<table border=2 width=50% style='color:black;border-collapse:collapse;margin-top:20px;background:skyblue'>";
echo "<th>"."fname"."</th>";
echo "<th>"."fid"."</th>";
echo "<th>"."phone"."</th>";
echo "<th>"."desg"."</th>";
echo "<th>"."fromtime"."</th>";
echo "<th>"."tilltime"."</th>";
echo "<th>"."subject"."</th>";
echo "<th>"."year"."</th>";
echo "<th>"."day"."</th>";

while($row=mysqli_fetch_assoc($d))
{
print_r("<tr><td name='nm'>".$row['fname']."</td><td>".$row['fid']."</td><td>".$row['phone']."</td><td>".$row['desg']."</td><td>".$row['tfrom']."</td><td>".$row['till']."</td><td>".$row['sub']."</td><td>".$row['year']."</td><td>".$row['fday']."</td>");

}
echo "<table>";
echo "</center>";
?>

</body>

</html>
