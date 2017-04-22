<?php
$conn=new mysqli('localhost','root','','sw');
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
$num = $_POST["ID"];
$conn->query("delete from post where PID=".$num);
header("Location:EmployeeHome.php");//doesn't work :/
?>