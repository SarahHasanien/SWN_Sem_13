<?php

 	require("Common.php");
    $db=Database::Connect();  

?>
<!DOCTYPE html>
<html>
<head>
<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script type="text/javascript" src="javascript/viewemp.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- my style for this page -->
    <link rel="stylesheet" href="CSS/nav-CEO.css">
    <!--
    <link href='http://fonts.googleapis.com/css?family=Didact+Gothic' rel='stylesheet' type='text/css'>
    -->
    <!-- include my css file-->
	<link rel="stylesheet" href="css/boxes2.css">

  <title>Employees List</title>

</head>
<body>


    <!--Start nav-->
<div class="example3">
  <nav class="navbar navbar-fixed-top">
    <div class="container2">
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
          <li><a href="Home.php">Home</a></li>
          <li><a href="ProfileFront.php">My Profile</a></li>
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
<br>
  <br>
  <br>
  <br>
  <br>
<!--End nav-->

    <div class="wrap">


	<?php 
	    $q="SELECT * FROM employee WHERE approved IS NOT NULL";
	    $result=$db->conn->query($q);
		while($row = $result->fetch_assoc())
		{
			$Fname=$row["firstname"];
			$Lname=$row["lastname"];
			$Dno=$row["DNO"];
			$Country=$row["country"];
			$image=$row["Eimg"];
			$job=$row["Ejobtitle"];
      $EID=$row["EID"];
			$q1="SELECT Name FROM `department` WHERE Dno='$Dno'";
			$result1=$db->conn->query($q1);
			$row1=$result1->fetch_assoc();
		  

    ?>

      
    <?php
	    	if(is_null($image))
	    	{
	    		$image="images/black-white-android-user.png";
	    	}
	    echo '<div class="box box6 shadow9">';
      echo '<img src="data:image/jpeg;base64,'.base64_encode( $image ).'" class="box">';


	    	echo "<p><strong>".'Name: '."</strong>" . $Fname .' ' .$Lname;
	    	echo '<br>';
			echo nl2br("\n"). "<strong>" . 'Department: ' ."</strong>" . $row1["Name"]; 
			echo '<br>';
			echo nl2br("\n"). "<strong>" . 'Job Title: ' ."</strong>". $job; 
			echo '<br>';
			echo nl2br("\n"). "<strong>" . 'Country: ' ."</strong>". $Country;
			echo '<br>';
			echo '<br>';

      if (!empty($_SESSION['user2']))
      {
        //employee then only one button will appear
        echo '<button class="btn btn-primary btn-sx btn2" type="submit"><a style="text-decoration: none;color:white;" href="profile.php?num='.$EID.'"><b>View profile </b></a><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>';
      }
      else if(!empty($_SESSION['user']))
      {
        //CEO or manager
        $q2='SELECT type, DNO FROM manager WHERE MID='.$_SESSION['user']['MID'];
        $result2=$db->conn->query($q2);
        $row2=$result2->fetch_assoc();
        $type=$row2['type'];
        $MDNO=$row2['DNO'];
        if($type == 1)
        {
          //CEO so three buttons will appear
          echo '
              <button class="btn btn-primary btn-sx btn1" type="button" onclick="funcMakeManager('. $EID .')"><b>Make Manager </b><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></button>
              
              <button class="btn btn-primary btn-sx btn1" type="submit"><a style="text-decoration: none;color:white;" href="profile.php?num='.$EID.'"><b>View profile </b></a><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>
              
              <button class="btn btn-primary btn-sx btn1" type="button" onclick="funcDeleteEmp('. $EID .')"><b>Delete Employee </b> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
              
              ';
        }
        else
        {
          //manager then two buttons appear if the employee is in the same department of the manager and only one button will appear if they are inot in the same department
          if($Dno == $MDNO)
          {
            echo '
              
              <button class="btn btn-primary btn-sx btn3" type="submit"><a style="text-decoration: none;color:white;" href="profile.php?num='.$EID.'"><b>View profile </b></a><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>
              <button class="btn btn-primary btn-sx btn3" type="button" onclick="funcDeleteEmp('. $EID .')"><b>Delete Employee </b> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
              '; 
          }
          else
          {
            echo '<button class="btn btn-primary btn-sx btn2" type="submit"><a style="text-decoration: none;color:white;" href="profile.php?num='.$EID.'"><b>View profile </b></a><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></button>';
          }
        }
      }

             
		echo'</div>';
    	}
    ?>
     




    </div>

</html>