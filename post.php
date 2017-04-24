<?php
$conn=new mysqli('localhost','root','','sw');
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$post=$_POST['newwpost'];
$conn->query("insert into post (Text,MID) values ('$post',1)");
header("Location:CEOHome.php");
?>