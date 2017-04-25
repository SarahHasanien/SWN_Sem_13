<?php
<<<<<<< HEAD
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
            else echo"data updated";
        }
    }
}
//header("Location:ProfileFront.php");
=======
<<<<<<< HEAD
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
=======
/**
 * Created by PhpStorm.
 * User: darwish
 * Date: 23/04/17
 * Time: 13:41
 */
$conn = new mysqli('localhost', 'root', 'sw');

//Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error );
}

$num = $_Post["ID"];
$awelEsm = $_Post["firstName"];
$a5erEsm = $_Post["lastName"];
$elEmail = $_Post["email"];
$elPwEladeema = $_Post["oldPassword"];
$elPwElgedida = $_Post["newPassword"];
$ta2keedElPw = $_Post["confirmPassword"];
$elkesm = $_Post["department"];
$elmadina = $_Post["city"];
$elbalad = $_Post["country"];
$elshehadat = $_Post["certificates"];

if($num == NULL || $awelEsm == NULL || $a5erEsm == NULL || $elEmail == NULL || $elPwEladeema == NULL || $elPwElgedida == NULL || $ta2keedElPw == NULL || $elkesm == NULL || $elmadina == NULL || $elbalad == NULL  || $elshehadat == NULL)
{
    echo " <div class= "alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Some fields are still empty
          </div> ";
}
>>>>>>> origin/master

if (!empty($_SESSION['user2']))
{
<<<<<<< HEAD
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
=======
    echo "<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Wrong Password!!
          </div> ";
}

else if ($elPwElgedida != $ta2keedElPw)
{
    echo "<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Passwords mismatch!!
          </div>";
>>>>>>> origin/master
}
}
//Uncomment me to be redirected to the homepage
//header("Location:Home.php");
>>>>>>> 122acdcaa5acc8b760ee80ab1a4bfb3c28c1ca55
?>