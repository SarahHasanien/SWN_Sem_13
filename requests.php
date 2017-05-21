<?php
	//first i want to make a new column in the table containing all the accounts info or containing the info of all the old and new employees
	//i'll search in the table having the info of old and new emplotyees for the new employees who have new accounts that are not yet approved
	//at first when this page is opened we will ask for user id(of course we will take user id from the previous page),if the id was for the CEO then all requests will be shown to the CEO,but if the user id was for a manager of a department,then only requests of employees in the same department of this manager will be shown
	//for each request the following info will appear in this page:name,department,
	//two buttons will be beside each request or under the request,one button to approve the new request(account) and the other button to disapprove the account and delete this request
	//also there will be check boxes so that CEO or managers can approve or disapprove many requests at a time
	//when CEO or manager approve or disapprove using the button ,the page will be reloaded automatically,also when CEO or manager use check boxes to approve or disapprove then click on a button approve or disapprove (el button da hytla3 2wl ma el CEO 2w el manager ydoso 3la wa7da bs 7tta mn el check boxes,wel button da hytla3 f 4reta beda httla3 f 2a5er el saf7a ,el4reta de htfdal mawgoda m3 el user t7t f 2a5er el 4a4a mhma el user ytla3 2ww ynzel"mahma el user y slide up 2w down,el 4reta de htb2a mawgoda t7t 3la tol w feha el two buttons elly 2olt 3lihom mn 4oya[button ll approve wel tany ll disapprove]")
    require("Common.php");
    $db=Database::Connect();  
	/*$con=mysqli_connect("localhost","root",'',"sw");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }*/
	$inc=0;
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script type="text/javascript" src="javascript/requests.js"></script>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


		<!-- my style for this page -->
		<link rel="stylesheet" href="CSS/nav-CEO.css">
		<link rel="stylesheet" href="CSS/foter.css">
		<link rel="stylesheet" href="CSS/requests.css">

		<title>Joining requests</title>
		
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
          <li style="background:#fff;border-bottom:2px solid #192b75"><a href="#">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>
          <li><a href="ExportAch.php">Export achievements</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
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
<!--End nav-->

	<br>
	<br>
	<br>
	<br>
	<br>
	
	<div class="container">
	  
	  		   
		<?php 

		$q="SELECT * FROM employee WHERE approved IS NULL";
		$result=$db->conn->query($q);
		while($row = $result->fetch_assoc())
		{
			$name=$row["firstname"];
			$Dno=$row["DNO"];
			$EID=$row["EID"];
			$email=$row["email"];
			$Country=$row["country"];
			$certificate=$row["certificate"];
			$q1="SELECT Name FROM `department` WHERE Dno='$Dno'";
			$result1=$db->conn->query($q1);
			$row1=$result1->fetch_assoc();
			//panel body in the following div
			?>

			<div class="panel panel-requests">
			<div class="panel-body">

			<?php
			echo "<strong>".'Employee Name: '."</strong>" . $name;
			echo nl2br("\n")."<strong>" . 'Employee ID: '."</strong>". $EID ;
			echo nl2br("\n"). "<strong>" . 'Department: ' ."</strong>" . $row1["Name"]; 
			echo nl2br("\n"). "<strong>" . 'Email: ' ."</strong>". $email; 
			echo nl2br("\n"). "<strong>" . 'Country: ' ."</strong>". $Country;
			echo nl2br("\n"). "<strong>" . 'Certificate: ' ."</strong>". $certificate;  
			

			echo '<div class="pull-right">
		        <button class="btn btn-primary btn-sx" type="button" onclick="func1('.$EID.')"><b>Disapprove</b> <span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
		   </div>';
		     echo '<div class="pull-right">
		        <button class="btn btn-primary btn-sx btn1" type="button" onclick="func2('. $EID .')"><b>Approve </b><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>
		    </div>';
		    ?>

			</div>
			</div>
		<?php
		$inc++;
		}
		if($inc==0)
		{
			?>
			<div class="container1">
			  <div class="well well-lg" style="text-align:center;font-size: 30px;">There are no requests now. <br>Check later if there are new requests to approve.</div>
			</div>
			<?php
		}
		?>
		 
	</div>

	<!--footer-->
	 <div class="firstsec">
		<i class="fa fa-google-plus-square" style="font-size:25px"></i>
		<i class="fa fa-facebook-square" style="font-size:25px"></i>
		<i class="fa fa-twitter-square" style="font-size:25px"></i>     
		<p class="footText1">Monitoring and evaluating the performance of your company became easier<br></p>
		<p class="footText2">&copy;Achieve | All rights reserved</p>  
	</div>
	<!--end footer -->

	</body>
</html>