<?php
include 'Conn.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title> Employee </title>
        <link rel="stylesheet" href="css/EStyle.css">
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">My Profile</a></li>
          <li><a href="#">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>
          <li><a href="#">Export achievements</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Employees</a></li>
              <li><a href="#">Departments</a></li>
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
<div class="PostsArea">
    <br><br><br>
    <?php
        $result=$conn->query("select Text, PID from post");
        if ($result->num_rows>0)
        {
            while ($row=$result->fetch_assoc())
            {
                echo '<div class="onepost">&nbsp; &nbsp;'.$row['Text'].'</div><br>';
            }
        }
    ?>
    <div>
</div>
</div> 
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
