<!DOCTYPE html>
<html>

<!-- Head -->
<head>
    <?php include "Conn.php"?>
    <?php include "EditProfileBack.php"?>
    <!-- Latest compiled and minified CSS -->
    <link rel ="stylesheet" href ="Achieve-front/CSS/editProfileStyle.css">
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
                $qry = SELECT * FROM employee WHERE EID = '.$ID.';
                $result= $conn->query($qry);

                $qry2 = SELECT Name FROM department, employee WHERE EID = '.$ID.' AND DNO = Dno;
                $result2 = $conn->query($qry2);

                echo '<form action="EditProfileFront.php">
                    <!-- Photo div -->

                    <div id="userImage">
                        <img src ="Achieve-front/images/icon-user-default.png" alt ="User's image" id="myImage">
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
                                <input type="password" class="form-control" placeholder="Old Password" value="'.  $result['password'].'" name="oldPassword">
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
                                <input type="text" class="form-control" placeholder="City" value="'.  $result['city'].'" name="city">
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
                                <textarea rows="5" class="form-control" placeholder="Here can be your description" value="'.  $result['certificate'].'" name="certificates" >  </textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                    </div>
                    </form>';
                ?>

                </div>
            </div>
        </div>
    </div>

</div>


</body>
