		function func1(id) {
		    //will delete the employee row using the EID i have now,after that refresh the page

		  /* <?php
		    $q2="DELETE FROM employee WHERE EID = '$EID'";
		    $result2=$con->query($q2);
		    //header("Refresh:0");
		    ?>*/
		    $.post("disapprove.php",{EID:id});

		    window.location.reload();
		}

		function func2(id){
			//will only change the approved column of the employee i have his EID ,after that refresh the page
			/*<?php
			$q2="UPDATE employee SET approved='approved' WHERE EID='$EID'";
			//UPDATE table_name SET column1=value, column2=value2,... WHERE some_column=some_value
			$result2=$con->query($q2);
		    //header("Refresh:0");
			?>*/
			$.post("approve.php",{ID:id});
			window.location.reload();
		}


