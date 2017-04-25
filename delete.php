<?php
require("Common.php");
$db=Database::Connect();  
$num = $_POST["ID"];
$db->conn->query("delete from post where PID=".$num);
?>