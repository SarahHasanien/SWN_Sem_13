<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <?php include "Conn.php"?>
    <!-- Latest compiled and minified CSS -->
    <link rel ="stylesheet" href ="Achieve-front/CSS/profileStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset = "utf-8">
    <meta name = "description" content = "Welcome to My Website">
    <title> Profile Page </title>
</head>
<!-- End of head -->

<!-- Body -->
<body>

<div class = "container">
    <!-- Static small Navigation Bar -->

    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active selected"><a href="ProfileFront.php"> Profile </a></li>
                <li> <a href="EditProfileFront.php">Edit Profile </a></li>
                <!-- <li><a href="Employee's Achievements"> My Achievements</a> </li> -->
            </ul>
        </div>
    </nav>

<?php
SELECT * FROM employee WHERE ID = '.$ID.';
        $result= $conn->query($qry);

        echo '
            <!-- Main div -->

<div class ="main" >

    <!-- Photo div -->

    <div id="userImage">
        <img src ="Achieve-front/images/icon-user-default.png" alt ="User's image" id="myImage">
    </div>

    <!-- User\'s info -->
    <div class = "userInfo">

        <div>
            <span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
            <p> Name:'. $result['firstname'].'  &nbsp '.  $result['lastname'].'; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            <p> Country: '.  $result['country'].' &nbsp; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
            <p> Certificate: '.  $result['certificate'].'&nbsp; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
            <p> Joining Date: '.  $result['joinDate'].' &nbsp; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            <p> Department: '.  $result['department'].' &nbsp; </p>
        </div>

        <div>
            <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
            <p> Title: '.  $result['Ejobtitle'].' &nbsp; </p>
            <div class ="Rating">
                <span class="glyphicon glyphicon-star yellowStar" aria-hidden="true"></span>
                <p> Rating: &nbsp; </p>
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
            </div>
        </div>

    </div>
</div>

    <!-- End of container class>

    <!-- Graph div -->
    <canvas width="848" height ="300" style ="position: absolute"; left: 0px; top: 0px;" ></canvas>
</div>

'
    ?>


</body>

</html>
