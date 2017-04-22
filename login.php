<?php
$conn=new mysqli('localhost','root','','sw');
// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
$em=$_POST["email"];
$pw=$_POST["password"];
$result1=$conn->query("SELECT MID,type from manager where email='".$em."' and password='".$pw."'");
$result2=$conn->query("SELECT EID from employee where email='".$em."' and password='".$pw."'");
if($result1->num_rows==1)
{
    while ($row=$result1->fetch_assoc())
    {
        if ($row['type']==1)
            header("Location:CEOHome.php");
        else if ($row["type"]==2)
            header("Location:ManagerHome.php");

    }
}
else if ($result2->num_rows==1)
{
    header("Location:EmployeeHome.php");
}
else
{
    header("Location:VisitorHome.php");
}
?>
