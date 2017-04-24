<?php
/**
 * Created by PhpStorm.
 * User: darwish
 * Date: 23/04/17
 * Time: 13:41
 */
$conn = new mysqli('localhost', 'root', 'sw');

//Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error)
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
    echo '<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Some fields are still empty
          </div>'
}

else if ($elPwEladeema != Select password FROM employee WHERE EID ='.$num.')
{
    echo '<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Wrong Password!!
          </div>'
}
else if ($elPwElgedida != $ta2keedElPw)
{
    echo '<div class="alert alert-danger" role="alert">
    <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
    <span class="sr-only">Error:</span> Passwords mismatch!!
          </div>'
}
else
{
    $query = 'Update employee SET firstname ='.$awelEsm.', lastname = '.$a5erEsm.', email ='.$elEmail.',country = '.$elbalad.', certificate = '.'$elshehadat.', password = '.$elPwElgedida.' WHERE EID = '.$num.';
}
?>