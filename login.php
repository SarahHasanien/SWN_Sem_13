<?php
require("Common.php");
if(isset($_POST["login"]))
{
$em=$_POST["email"];
$pw=$_POST["password"];
$result1=$conn->query("SELECT MID,type from manager where email='".$em."' and password='".$pw."'");
$result2=$conn->query("SELECT EID from employee where email='".$em."' and password='".$pw."'");
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
    while ($row=$result2->fetch_assoc())
   {
            $_SESSION['user2']=$row;
            header("Location:Home.php");
   }
}
else
{
    header("Location:VisitorHome.php");
}
}
else
{
    header("Location:VisitorHome.php");
}
?>
