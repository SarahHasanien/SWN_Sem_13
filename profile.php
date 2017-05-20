<?php
	require("Common.php");
    $db=Database::Connect(); 
    $id = $_GET['num'];
?>
<html>
<!-- Head -->
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel ="stylesheet" href ="CSS/ProfStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!--chart include-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- include css files realted to image -->
    <link rel="stylesheet" href="css/boxes3.css">

    <meta charset = "utf-8">
    <meta name = "description" content = "Welcome to My Website">
    <title> Profile Page </title>
</head>
<!-- End of head -->

<!-- Body -->
<body>
<!--navbar starts here-->
    
<!--navbar ends here-->
<div class = "container">
<!-- Static small Navigation Bar -->
<nav class="c navbar navbar-static-top" role="navigation">
    <div class="container-fluid">
        <ul class="nav navbar-nav">
            <li class="active selected"><a href="ProfileFront.php"> Profile </a></li>
            <li> <a href="EditProfileFront.php">Edit Profile </a></li>
            <li> <a href="Home.php">Home </a></li>
            <li> <a href="logout.php">Logout </a></li>
            <!-- <li><a href="Employee's Achievements"> My Achievements</a> </li> -->
        </ul>
    </div>
</nav>
<?php
        $qry='SELECT * FROM employee WHERE EID ='.$id;
        $row= $db->conn->query($qry);
    if ($row->num_rows>0)
        {
            $result=$row->fetch_assoc();
        }
        $image=$result["Eimg"];
        if(is_null($image))
	    	{
	    		$image="images/icon-user-default.png";
	    	}
    echo '<!-- Main div -->

<div class ="main" >

    <!-- Photo div -->

    <div id="userImage">
        <img src="data:image/jpeg;base64,'.base64_encode( $image ).'" alt ="Users image" id="myImage" class="box">
    </div>

    <!-- User\'s info -->
    <div class = "userInfo">

        <div>
            <span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
            <p> Name:&nbsp;&nbsp;'.$result['firstname'].'&nbsp;'.  $result['lastname'].'</p>
        </div>
        <div>
            <span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
            <p> Country:&nbsp;&nbsp;'.  $result['country'].'&nbsp;</p>
        </div>
        <div>
            <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
            <p> Certificate:&nbsp;&nbsp;'.  $result['certificate'].'&nbsp; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
            <p> Joining Date:&nbsp;&nbsp;'.$result['joinDate'].' &nbsp; </p>
        </div>
        <div>
            <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            <p> Department:&nbsp;&nbsp;'.$result['department'].'&nbsp; </p>
        </div>

        <div>
            <span class="glyphicon glyphicon-tag" aria-hidden="true"></span>
            <p> Title:&nbsp;&nbsp;'.  $result['Ejobtitle'].' &nbsp; </p>
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

    <!-- End of container class-->

    <!-- Graph div -->
    <canvas width="848" height ="300" style ="position: absolute"; left: 0px; top: 0px;" ></canvas>';

    ?>
     </div>
    <?php
        require("GetAllYearsCharts2.php");
    ?>
</body>
</html>
