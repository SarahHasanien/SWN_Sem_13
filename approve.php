<?php
			$con=mysqli_connect("localhost","root",'',"sw");
			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }
			$ID=$_POST["ID"];
			$q2="UPDATE employee SET approved='approved' WHERE EID='$ID'";
			//UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value
			$result2=$con->query($q2);
		    //header("Refresh:0");
			?>