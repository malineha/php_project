<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />


    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="gray" data-image="assets/img/sidebar.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        <div class="sidebar-wrapper">
            <div class="logo">
                 <h> <b> <font size="+1">ADVOCATE DESHPANDE</font></b></h>
            
            </div>

            <ul class="nav">
            <li>
                    <a href="pending.php">
                        <i class="pe-7s-note2"></i>
                        <p>Pending Appointments</p>
                    </a>
                </li>
                <li class="active">
                    <a href="appointment.php">
                        <i class="pe-7s-note2"></i>
                        <p>Appointments</p>
                    </a>
                </li>
                <li>
                    <a href="comment.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Comment Box</p>
                    </a>
                </li>
                
                
                
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Appointments</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                       
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        
                        
                        <li>
                            <a href="index.html">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav><br><br>
        <nav class="navbar navbar-default navbar-fixed">                
        <div class="container-fluid">
                <div class="navbar-header">
                    <ul class="nav navbar-nav navbar-right">
                        <li >
                           <a href="propertycase.php">
                              Property Case
                            </a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                           <a href="landcase.php">
                               Land Case
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="appointment.php">
                               Divorce 
                            </a>
                        </li>
                    </ul>
                </div>
            </div>                
            
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">LAND CASES</h4>
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "advocate";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id,name, email, date,time,case_type,status FROM appointment WHERE status='accept' and case_type='land'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {               
      echo "<thead><th>ID</th><th>Name</th><th>Email</th><th>Date</th><th>Time</th><th>case_type</th></thead>";

      while($row = $result->fetch_assoc()) {
        echo "<tbody><tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["email"]."</td><td><p> ".$row["date"]."</td><td>".$row["time"]."</td><td>".$row["case_type"]."</td>";
        echo"<td><a href='acceptview1.php?id=" . $row['id'] . "'><button id=". $row['id'] .">view</button></a></td></tr>";
    }
    echo " </tbody>";
} else {
    echo "&nbspNo Cases...!!!";
}
$conn->close();
?>
                                </table>

                            </div>
                        </div>
                    </div>


                    
                    </div>


                </div>
            </div>
        </div>

       
    </div>
</div>




</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>


</html>
