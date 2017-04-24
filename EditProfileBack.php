<?php
require("Common.php");
if(isset($_POST["update"]))
{
$awelEsm = $_POST["firstName"];
$a5erEsm = $_POST["lastName"];
$elEmail = $_POST["email"];
$elPwEladeema = $_POST["oldPassword"];
$elPwElgedida = $_POST["newPassword"];
$ta2keedElPw = $_POST["confirmPassword"];
$elkesm = $_POST["department"];
$elmadina = $_POST["city"];
$elbalad = $_POST["country"];
$elshehadat = $_POST["certificates"];

if (!empty($_SESSION['user2']))
{
    //so the logged in user is employee
    $result=$conn->query('Select password FROM employee WHERE EID ='.$_SESSION['user2']['EID']);
    $row=$result->fetch_assoc();
    if( $awelEsm == "" || $a5erEsm == "" || $elEmail == "" || $elPwEladeema == "" || $elPwElgedida == "" || $ta2keedElPw == "" || $elkesm == "" || $elmadina == "" || $elbalad == ""  || $elshehadat == "")
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Some fields are still empty
              </div>';
    }
    else if ($elPwEladeema !=$row["password"])
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Wrong Password!!
              </div>';
    }
    else if ($elPwElgedida != $ta2keedElPw)
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Passwords mismatch!!
              </div>';
    }
    else
    {
        $qry="UPDATE employee SET firstname ='".$awelEsm."', lastname = '".$a5erEsm."', email ='".$elEmail."',country = '".$elbalad."', certificate = '".$elshehadat."', password = '".$elPwElgedida."' WHERE EID = '".$_SESSION['user2']['EID']. "'";
        $retval = $conn->query($qry);
        if(! $retval )
        {
          die('Could not update data: ' . mysql_error());
        }
    }  
}
    
    
    //else then manager or employee
    if (!empty($_SESSION['user']))
{
     $result=$conn->query('Select password FROM manager WHERE MID ='.$_SESSION['user']['MID']);
    $row=$result->fetch_assoc();
    if( $awelEsm == "" || $a5erEsm == "" || $elEmail == "" || $elPwEladeema == "" || $elPwElgedida == "" || $ta2keedElPw == "" || $elkesm == "" || $elmadina == "" || $elbalad == ""  || $elshehadat == "")
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Some fields are still empty
              </div>';
    }
    else if ($elPwEladeema !=$row["password"])
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Wrong Password!!
              </div>';
    }
    else if ($elPwElgedida != $ta2keedElPw)
    {
        echo '<div class="alert alert-danger" role="alert">
        <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
        <span class="sr-only">Error:</span> Passwords mismatch!!
              </div>';
    }
    else
    {
        $qry="UPDATE manager SET firstname ='".$awelEsm."', lastname = '".$a5erEsm."', email ='".$elEmail."',country = '".$elbalad."', certificate = '".$elshehadat."', password = '".$elPwElgedida."' WHERE MID = '".$_SESSION['user']['MID']. "'";
        $retval = $conn->query($qry);
        if(! $retval )
        {
          die('Could not update data: ' . mysql_error());
        }
        else 
            echo "Data updates successfully =)";
    }
}
}
//Uncomment me to be redirected to the homepage
//header("Location:Home.php");
?>