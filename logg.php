<?php
require("Common.php");
if(isset($_POST["login"]))
{
    
$em=$_POST["email"];
$pw=$_POST["password"];
$db=Database::Connect();
$result1=$db->conn->query("SELECT MID,type,DNO from manager where email='".$em."' and password='".$pw."'");
$result2=$db->conn->query("SELECT DNO,EID from employee where email='".$em."' and password='".$pw."'");
if($result1->num_rows==1)
{
    while ($row=$result1->fetch_assoc())
   {
            $_SESSION['user']=$row;
            header("Location:Home.php");
   }
}
else if ($result2->num_rows==1)
{
    while ($row2=$result2->fetch_assoc())
   {
            $_SESSION['user2']=$row2;
            header("Location:Home.php");
   }
}
else
{
    die(header("location:VisitorHome.php?loginFailed=true&reason=password"));
}
}
else
{
    header("Location:VisitorHome.php");
}
?>
