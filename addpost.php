<?php
require("Common.php");
$logged=$_SESSION['user']['MID'];
$post=$_POST['newwpost'];
$conn->query("insert into post (Text,MID) values ('$post',$logged)");
header("Location:Home.php");
?>