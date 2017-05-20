<<<<<<< HEAD
<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <?php
    require("Common.php");
    ?>
    <!-- Latest compiled and minified CSS -->
    <link rel ="stylesheet" href ="CSS/editProfileStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset = "utf-8">
    <meta name = "description" content = "Welcome to My Website">
    <title> Edit Profile Page </title>
</head>
<!-- End of head -->

<!-- Body -->
<body>

<div class = "container">
    <!-- Static small Navigation Bar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active "><a href=" ProfileFront.php"> Profile </a></li>
                <li class="selected" > <a href="EditProfileFront.php">Edit Profile </a></li>
                <!--   <li><a href="Employee's Achievements"> My Achievements</a> </li> -->
            </ul>
        </div>
    </nav>
    <div class ="main">
        <div class="col-md-8">
            <div class="card">
                <div class="content">
                    <?php
                    if (!empty($_SESSION['user2']))//then employee
                    {
                        $qry = 'SELECT * FROM employee WHERE EID='.$_SESSION['user2']['EID'];
                        $row= $conn->query($qry);
                        if ($row->num_rows>0)
                        {
                            $result=$row->fetch_assoc();
                        }
                        $qry2='SELECT Name FROM department WHERE DNO='.$_SESSION['user2']['DNO'];
                        $row2 = $conn->query($qry2);
                        if ($row2->num_rows>0)
                        {
                            $result2=$row2->fetch_assoc();
                        }
                        echo '<form accept-charset="UTF-8" role="form" method="post"action="EditProfileBack.php" method="POST">
                    <!-- Photo div -->

                    <div id="userImage">
                        <img src ="Achieve-front/images/icon-user-default.png" alt ="Users image" id="myImage">
                    </div>

                    <div class = "userInfo">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="'.  $result['firstname'].'" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="'.  $result['lastname'].'" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value = "'.  $result['email'].'" name ="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" placeholder="Old Password" value="" name="oldPassword">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" value="" name="newPassword">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" value="" name="confirmPassword">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" placeholder="Department Name" value="'.  $result2['Name'].'" name="department">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" value="'.  $result['country'].'" name="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country" value="'.  $result['country'].'" name="country">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Certificates</label>
                                <textarea rows="5" class="form-control" placeholder="" name="certificates" >'.$result['certificate'].'</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>
                    </form>';
                    }
                    else//then manager or ceo
                    {
                        $qry = 'SELECT * FROM manager WHERE MID='.$_SESSION['user']['MID'];
                        $row= $conn->query($qry);
                        if ($row->num_rows>0)
                        {
                            $result=$row->fetch_assoc();
                        }
                        $qry2='SELECT Name FROM department WHERE DNO='.$_SESSION['user']['DNO'];
                        $row2 = $conn->query($qry2);
                        if ($row2->num_rows>0)
                        {
                            $result2=$row2->fetch_assoc();
                        }
                        echo '<form accept-charset="UTF-8" role="form" method="post"action="EditProfileBack.php" method="POST">
                    <!-- Photo div -->

                    <div id="userImage">
                        <img src ="Achieve-front/images/icon-user-default.png" alt ="Users image" id="myImage">
                    </div>

                    <div class = "userInfo">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="'.  $result['firstname'].'" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="'.  $result['lastname'].'" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value = "'.  $result['email'].'" name ="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" placeholder="Old Password" value="" name="oldPassword">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" value="" name="newPassword">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" value="" name="confirmPassword">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" placeholder="Department Name" value="'.  $result2['Name'].'" name="department">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" value="'.  $result['country'].'" name="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country" value="'.  $result['country'].'" name="country">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Certificates</label>
                                <textarea rows="5" class="form-control" placeholder="" name="certificates" >'.$result['certificate'].'</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>
                    </form>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
=======
<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <?php
    require("Common.php");
    $db=Database::Connect();  

    ?>
    <!-- Latest compiled and minified CSS -->
    <link rel ="stylesheet" href ="CSS/EditProfiStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <meta charset = "utf-8">
    <meta name = "description" content = "Welcome to My Website">
    <title> Edit Profile Page </title>
</head>
<!-- End of head -->

<!-- Body -->
<body>

<div class = "container">
    <!-- Static small Navigation Bar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <li class="active "><a href=" ProfileFront.php"> Profile </a></li>
                <li class="selected" > <a href="EditProfileFront.php">Edit Profile </a></li>
                <li> <a href="Home.php">Home </a></li>
            <li> <a href="logout.php">Logout </a></li>
             <!--   <li><a href="Employee's Achievements"> My Achievements</a> </li> -->
            </ul>
        </div>
    </nav>
    <div class ="main">
     <div class="col-md-8">
        <div class="card">
            <div class="content">
                <?php
                if (!empty($_SESSION['user2']))//then employee
                {
                    $qry = 'SELECT * FROM employee WHERE EID='.$_SESSION['user2']['EID'];
                $row= $db->conn->query($qry);
                if ($row->num_rows>0)
                    {
                        $result=$row->fetch_assoc();
                    }
                $qry2='SELECT Name FROM department WHERE DNO='.$_SESSION['user2']['DNO'];
                $row2 = $db->conn->query($qry2);
                if ($row2->num_rows>0)
                    {
                        $result2=$row2->fetch_assoc();
                    }
                echo '<form accept-charset="UTF-8" role="form" method="post"action="EditProfileBack.php" method="POST">
                    <!-- Photo div -->

                    

                    <div class = "userInfo">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="'.  $result['firstname'].'" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="'.  $result['lastname'].'" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value = "'.  $result['email'].'" name ="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" placeholder="Old Password" value="" name="oldPassword">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" value="" name="newPassword">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" value="" name="confirmPassword">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" placeholder="Department Name" value="'.  $result2['Name'].'" name="department">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" value="'.  $result['country'].'" name="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country" value="'.  $result['country'].'" name="country">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Certificates</label>
                                <textarea rows="5" class="form-control" placeholder="" name="certificates" >'.$result['certificate'].'</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>
                    </form>';
                }
                else//then manager or ceo
                {
                    $qry = 'SELECT * FROM manager WHERE MID='.$_SESSION['user']['MID'];
                $row= $db->conn->query($qry);
                if ($row->num_rows>0)
                    {
                        $result=$row->fetch_assoc();
                    }
                $qry2='SELECT Name FROM department WHERE DNO='.$_SESSION['user']['DNO'];
                $row2 = $db->conn->query($qry2);
                if ($row2->num_rows>0)
                    {
                        $result2=$row2->fetch_assoc();
                    }
                echo '<form accept-charset="UTF-8" role="form" method="post"action="EditProfileBack.php" method="POST">
                    <!-- Photo div -->

                    <!--<div id="userImage">
                        <img src ="Achieve-front/images/icon-user-default.png" alt ="Users image" id="myImage">
                    </div>-->

                    <div class = "userInfo">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" value="'.  $result['firstname'].'" name="firstName">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="'.  $result['lastname'].'" name="lastName">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control" placeholder="Email" name="email" value = "'.  $result['email'].'" name ="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Old Password</label>
                                <input type="password" class="form-control" placeholder="Old Password" value="" name="oldPassword">
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="form-group">
                                <label>New Password</label>
                                <input type="password" class="form-control" placeholder="New Password" value="" name="newPassword">
                            </div>
                        </div>

                        <div class="col-md-7">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" value="" name="confirmPassword">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Department</label>
                                <input type="text" class="form-control" placeholder="Department Name" value="'.  $result2['Name'].'" name="department">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City" value="'.  $result['country'].'" name="city">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country" value="'.  $result['country'].'" name="country">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Certificates</label>
                                <textarea rows="5" class="form-control" placeholder="" name="certificates" >'.$result['certificate'].'</textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info btn-fill pull-right" name="update">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>
                    </form>';
                }
                ?>
                </div>
            </div>
        </div>
    </div>

</div>


</body>
>>>>>>> 03452133319925b26530a79bcdfbc0c6e61b4cee
