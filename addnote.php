<?php
require("Common.php");
$db=Database::Connect();  
$val = $_POST["note"];
$num = $_POST["id"];
$db->conn->query("INSERT INTO note (text,AchID) Values ('$val','$num')");
header("Location: department.php");

?>