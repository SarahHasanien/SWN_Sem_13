//make manager
<?php
	$con=mysqli_connect("localhost","root",'',"sw");
	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
	$ID=$_POST["ID"]; 
	$q2="SELECT * FROM employee WHERE EID='$ID'";
	$result2=$con->query($q2);
	$row2=$result2->fetch_assoc();
	$MID=$ID;
	$i=$ID;
	$fname=$row2['firstname'];
	$lname=$row2['lastname'];
	$country=$row2['country'];
	$password=$row2['password'];
	$DNO=$row2['DNO'];
	$email=$row2['email'];
	$type=2;
	$Mjob=$row2['Ejobtitle'];
	$Mimg=$row2['Eimg'];
	$gender=$row2['gender'];
	$certificate=$row2['certificate'];
	$joindate=$row2['joinDate'];
	$username=$row2['username'];
	$dept=$row2['department'];

	
	$q3="INSERT INTO manager (MID, firstname, country, password, DNO, email, type, Mjobtitle, Mimg, lastname, gender, certificate, joinDate, username, department) VALUES ('$MID','$fname', '$country','$password','$DNO','$email','$type', '$Mjob', '$Mimg', '$lname','$gender','$certificate','$joindate','$username' , '$dept')";
	
	$result3=$con->query($q3);
	$row3=$result3->fetch_assoc();

	


	
    //INSERT INTO manager (MID, firstname, country, password, DNO, email, type, Mjobtitle, Mimg, lastname, gender, certificate, joinDate, username, department) VALUES ('20', 'Reem', 'Moraco', '789', '2', 'reemmohamed@hotmail.com', '2', 'manager', image, 'Mohamed', 'female', 'engineer', '2017-05-20', 'RMG', 'electronics and communication');
?>