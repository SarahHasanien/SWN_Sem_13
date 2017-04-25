<?php
    $link="Please fill this form";
    session_start();
$db = mysqli_connect("localhost","root","","sw");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
        $usernameError="";
        $nameError="";
        $passError="";
        $countryError="";
        $depError="";
        $emailError="";
        $certError="";
    if(isset($_POST['reg']))
    { 
       $username = $_POST['username'];
        $name=$_POST['name'];
         $email=$_POST['email'];
         $password=$_POST['password1'];
         $password2=$_POST['password2'];
         $dep=$_POST['dep'];
         $country=$_POST['country'];
         $cert=$_POST['cert'];
       
         $error = false;
if(empty($username))
{
    $error = true;
   $usernameError = "Please enter your User name.";
}
else{ 
    $query=false;
    $sql= "SELECT*  FROM employee Where username='$username'";
    $result = mysqli_query($db, $sql);
  
   if(  mysqli_num_rows($result)){
    $error = true;
    $usernameError = "Provided Username is already in use.";
    }
    
     $sql= "SELECT*  FROM manager Where username='$username'";
    $result = mysqli_query($db, $sql);
  
   if(  mysqli_num_rows($result)){
    $error = true;
    $usernameError = "Provided Username is already in use.";
    }
    
  }
        
        
          // name validation

    if (empty($name)) {
        
   $error = true;
   $nameError = "Please enter your full name.";
        
        }
        
 // password validation        
  if (empty($password) ||empty($password2) ){
   $error = true;
   $passError = "Please enter your password.";
  }
else if($password != $password2)
        {
   $error = true;
   $passError = "two password not equal.";
          
        }
     //email validation
     if(empty($email))
    {   $error = true;
     $emailError = "Please enter your email.";
    }
        
    else
    { $query=false;
    $sql = "SELECT * FROM employee WHERE Email='$email'";
   $result = mysqli_query($db, $sql);     
   if( mysqli_num_rows($result) > 0 )
   {
    $error = true ;
    $emailError = "Provided Email is already in use.";
   }
     $sql = "SELECT * FROM manager WHERE Email='$email'";
   $result = mysqli_query($db, $sql);     
   if( mysqli_num_rows($result) > 0 ){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
     
     }
     // mobile validation

      if(empty($dep))
      {   $error = true;
   $depError = "Please enter your Department.";}
    else {
      $sql = "SELECT * FROM department WHERE Name='$dep'";
        
   $result = mysqli_query($db, $sql);     
   if(mysqli_num_rows($result) > 0 ){
        $sql = "SELECT Dno FROM department WHERE Name='$dep'";
          $result = mysqli_query($db, $sql); 
       if($row = mysqli_fetch_assoc($result))
       $dep=$row['Dno'];
       
       
        }
       else{        $error = true;
    $depError = "Please enter Correct Department.";
           }
        }
        
          // adress validation
         if(empty($country)) 
         {   $error = true;
   $countryError = "Please enter your Country.";
         }
          if(empty($cert)) 
         {   $error = true;
   $certError = "Please enter your Certificate.";
         }
        $E="E";
        if(! $error)
        {
            $sql = "INSERT INTO employee ( name,Email,country,certificate,Password, username,Dno )
            Values ('$name','$email','$country','$cert','$password','$username','$dep')";
         mysqli_query($db,$sql);
         $link ="your registration is successful !!";    
        }
    }

    ?>




<!DOCTYPE html>
<html lang="en">
    <head> 

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script  src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="CSS/form.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Sign up</title>
	</head>
	<body>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<center><h3>Sign up </h3></center>
               <center> <strong><?php echo $link; ?></strong> </center>
                  
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
								</div>
							
                        <span class="text-danger"><?php echo $nameError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email"   placeholder="Enter your Email"/>
								</div>

							
                     <span class="text-danger"><?php echo $emailError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username"  placeholder="Enter your Username"/>
								</div>
							
                        <span class="text-danger"><?php echo $usernameError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password1"  placeholder="Enter your Password"/>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password2"  placeholder="Confirm your Password"/>
								</div>
                                                                <span class="text-danger"><?php echo $passError; ?></span>

							</div>
						</div>

                        <div class="form-group">
							<label class="cols-sm-2 control-label">Country</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-info" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="country"   placeholder="Enter your Country"/>
								</div>
                                                <span class="text-danger"><?php echo $countryError; ?></span>

							</div>
						</div>
                         <div class="form-group">
							<label class="cols-sm-2 control-label">Department</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="dep"  placeholder="Enter your Department"/>
								</div>
                                                <span class="text-danger"><?php echo $depError; ?></span>

							</div>
						</div>
                        
                          <div class="form-group">
							<label class="cols-sm-2 control-label">Certificate</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="cert"  placeholder="Enter your Certificate"/>
                                </div>
                                     <span class="text-danger"><?php echo $certError; ?></span>

								
							</div>
						</div>
                        
						<div class="form-group ">
                                    <input type="submit" name="reg"  value="Register Now" class="btn btn-primary btn-lg btn-block login-button"> 

						
						</div>
						
					</form>
				</div>
			</div>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>