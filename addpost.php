<?php
require("Common.php");
$db=Database::Connect();

$logged=$_SESSION['user']['MID'];
$post=$_POST['newwpost'];

$db->conn->query("insert into post (Text,MID) values ('$post',$logged)");
header("Location:Home.php");
?>