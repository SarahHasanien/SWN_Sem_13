<?php
require "Common.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title> Achievement</title>
        <link rel="stylesheet" href="css/achievement.css">
        <link rel="icon" href="images/rsz_achive.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         <link rel="icon" href="images/rsz_achive.png">
        <script src="javascript/main.js"></script>
        <script src="javascript/jquery-1.11.3.min.js"></script>
        <script src="javascript/plugins.js"></script>
        <script src="javascript/file.js"></script>
        <script type="text/javascript"></script>
        <script src="javascript/file.js"></script>
        <script src="javascript/file.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    </head>
    <body> 
<div class="example3">
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img src="images/rsz_achive.png"/>
        </a>
        <div class="navbar-text">ACHIEVE</div>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="Home.php">Home</a></li>
         <li class="active"><a href="AddAchievement.php">Add Achievement</a></li>
          <li><a href="ProfileFront.php">My Profile</a></li>
              <li ><a href="viewAchievement.php">View Achievement</a></li>
            <?php
                if (empty($_SESSION['user2']))
                {
                    if ($_SESSION['user']['type']==1)
                        {
                            echo'<li><a href="requests.php">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
                        }
                        else if ($_SESSION['user']['type']==2)
                        {
                            echo'<li><a href="requestsManagers.php">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
                        }
                }
            ?>
          <li><a href="ExportAch.php">Export achievements</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
           <li><a href="MyAchievement.php">My Achievement</a></li>
              <li><a href="view_emp.php">Employees</a></li>
              <li><a href="EmpAch.php">Employees Achievement</a></li>
              <li><a href="DeptsAch.php">Departments</a></li>
              <li><a href="logout.php">Log out</a></li>
              <!--<li class="divider"></li>-->
              <li class="dropdown-header"></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
<!--Start posts area-->
<div class="PostsArea">
     
    <br><br>
    <?php
        require("GetMyAchievement.php");
    ?>
        <br><br> <br><br> <br><br> <br><br> <br><br> <br><br>

        </div> 
<!--End posts area-->
<!--Navbar starts here-->
<div class="firstsec">
<i class="fa fa-google-plus-square" style="font-size:25px"></i>
<i class="fa fa-facebook-square" style="font-size:25px"></i>
<i class="fa fa-twitter-square" style="font-size:25px"></i>     
<p class="footText1">Monitoring and evaluating the performance of your company became easier<br></p>
<p class="footText2">&copy;Achieve | All rights reserved</p>  
</div>
<!--Navbar ends here-->    
    </body>
    
</html>
