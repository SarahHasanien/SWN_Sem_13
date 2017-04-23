 <?php
			$con=mysqli_connect("localhost","root",'',"sw");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			$ID=$_POST["EID"];		   
		    $q2="DELETE FROM employee WHERE EID = '$ID'";
		    $result2=$con->query($q2);
		   // header("Refresh:0");
?>