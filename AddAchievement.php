<?php
require("Common.php");
$db=Database::Connect();

$EID =$_SESSION['user2']['EID'];
//$post= $_POST['newachievement'];

  $date = date('Y/m/d H:i:s');
$month = date("m",strtotime($date)); 
$year =$date[0].$date[1].$date[2].$date[3];
    if($month == '01')
    {
     $month="January";   
    }
else if ($month == "02")
{
        $month="February";
}
else if ($month == "03")
{
    $month="March";
}
else if ($month == "04")
{
   $month="April";  
}
else if ($month == "05")
{
      $month="May";  
}
else if ($month == "06")
{
      $month="June";  
}
else if ($month == "07")
{
      $month="July";  
}
else if ($month == "08")
{
    $month="August"; 
}
else if ($month == "09")
{
    $month="September"; 
}
else if ($month == "10")
{
    $month="October"; 
}
else if ($month == "11")
{
    $month="November"; 
}
else if ($month == "12")
{
    $month="December"; 
}


//$db->conn->query("insert into Achievement (Text,MID) values ('$post',$logged)");
    $link="You Can Add Achievement";

$titleError="";
$clientnameError="";
$categoryError="";
$typeError="";
$industryError="";
$countryError="";
$currencyError="";
$BUError="";
$PillarError="";
$mesError="";
$CIHError="";
$ReferencelinkError="";
if(isset( $_POST['reg'] ))

{ 
        $title = $_POST['title'];
        $clientname = $_POST['client'];
        $category = $_POST['category'];
       $type= $_POST['type'];
       $industry= $_POST['industry'];
    $country= $_POST['country'];
    $currency= $_POST['currency'];
    $BU= $_POST['BU'];
    $Pillar= $_POST['Pillar'];
    $mes= $_POST['mes'];
    $Referencelink= $_POST['Referencelink'];
    $CIH= $_POST['CIH'];

         $error = false;
  
    
if(empty($title))
{
       $error = true;
   $titleError = "Please enter Title Field.";
}
    if(empty($clientname))
{
       $error = true;
   $clientnameError = "Please enter Client name Field.";
}

        if(empty($category))
{
       $error = true;
   $categoryError = "Please enter Category Field.";
}
            if(empty($type))
{
       $error = true;
   $typeError = "Please enter Type Field.";
}
    
 if(empty($industry))
{
       $error = true;
   $industryError = "Please enter Industry Field.";
}
  if(empty($country))
{
       $error = true;
   $countryError = "Please enter Country Field.";
}
 if(empty($currency))
{
       $error = true;
   $currencyError = "Please enter Currency Field.";
}
if(empty($BU))
{
       $error = true;
   $BUError = "Please enter BU Field.";
}
 if(empty($Pillar))
{
       $error = true;
   $PillarError = "Please enter Pillar Field.";
}
    if(empty($CIH))
{
       $error = true;
   $CIHError = "Please enter CIH Field.";
}
    if(empty($Referencelink))
{
       $error = true;
   $ReferencelinkError = "Please enter Referencelink Field.";
}
  if(empty($mes))
{
       $error = true;
   $mesError = "Please enter Achievement Field.";
}
    
     if(! $error)
        {  
         $db->conn->query("INSERT INTO achievement ( type,Month,year,pillar,BU,title, category,Currency,description,EID,client,country,industry,CIH,Referencelink) Values('$type','$month','$year','$Pillar','$BU','$title','$category','$currency','$mes','$EID','$clientname','$country','$industry','$CIH','$Referencelink')");
       //  mysqli_query($db->conn,$sql);

         $link ="your Achievement Successfully added ";    
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
		<link rel="stylesheet" href="CSS/addachievement.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>Add Achievement</title>
        
        <link rel="icon" href="images/rsz_achive.png">
         <link rel="icon" href="images/rsz_achive.png">
        <script src="javascript/main.js"></script>
        <script src="javascript/jquery-1.11.3.min.js"></script>
        <script src="javascript/plugins.js"></script>
        <script src="javascript/file.js"></script>
        <script type="text/javascript"></script>
        <script src="javascript/file.js"></script>
        <script src="javascript/file.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
    </head>
        
	
	<body>
        
        <div class="example3">
  <nav class="navbar navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar3">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href=""><img src="images/rsz_achive.png"/>
        </a>
        <div class="navbar-text">ACHIEVE</div>
      </div>
      <div id="navbar3" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="Home.php">Home</a></li>
         <li class="active"><a href="AddAchievement.php">Add Achievement</a></li>
          <li><a href="ProfileFront.php">My Profile</a></li>
              <li ><a href="viewAchievement.php">View Achievement</a></li>
            <?php
                if (empty($_SESSION['user2']))
                {
                    if ($_SESSION['user']['type']==1)
                        {
                            echo'<li><a href="requests.php">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
                        }
                        else if ($_SESSION['user']['type']==2)
                        {
                            echo'<li><a href="requestsManagers.php">Joining requests &nbsp;&nbsp;<span class="glyphicon glyphicon-ok" aria-hidden="true"></span></a></li>';
                        }
                }
            ?>
          <li><a href="ExportAch.php">Export achievements</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
           <li><a href="MyAchievement.php">My Achievement</a></li>
           <li><a href="view_emp.php">Employees</a></li>
              <li><a href="EmpAch.php">Employees Achievement</a></li>
              <li><a href="DeptsAch.php">Departments</a></li>
              <li><a href="logout.php">Log out</a></li>
              <!--<li class="divider"></li>-->
              <li class="dropdown-header"></li>
              
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
    <!--/.container-fluid -->
  </nav>
</div>
        <br><br><br>
		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
               <center> <strong><?php echo $link; ?></strong> </center>
                  
					<form class="" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Title</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="title" id="title"  placeholder="Enter Title Field"/>
								</div>
							
                        <span class="text-danger"><?php echo $titleError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Client Name</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="client"   placeholder="Enter Client Name Field"/>
								</div>

							
                     <span class="text-danger"><?php echo $clientnameError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Category</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="category"  placeholder="Enter category Field"/>
								</div>
							
                        <span class="text-danger"><?php echo $categoryError; ?></span>
                            </div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Type</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="type"  placeholder="Enter Type Field"/>
								</div>
                                    <span class="text-danger"><?php echo $typeError; ?></span>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Industry</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="industry"  placeholder="Confirm Industry Field"/>
								</div>
                                                                <span class="text-danger"><?php echo $industryError; ?></span>

							</div>
						</div>

                        <div class="form-group">
							<label class="cols-sm-2 control-label">Country</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="country"   placeholder="Enter Country Field"/>
								</div>
                                                <span class="text-danger"><?php echo $countryError; ?></span>

							</div>
						</div>
                         <div class="form-group">
							<label class="cols-sm-2 control-label">Currency</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="currency"  placeholder="Enter currency Field"/>
								</div>
                                                <span class="text-danger"><?php echo $currencyError; ?></span>

							</div>
						</div>
                        
                          <div class="form-group">
							<label class="cols-sm-2 control-label">BU</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="BU"  placeholder="Enter BU Field"/>
                                </div>
                                     <span class="text-danger"><?php echo $BUError; ?></span>

								
							</div>
						</div>
                          <div class="form-group">
							<label class="cols-sm-2 control-label">Pillar</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="Pillar"  placeholder="Enter Pillar Field"/>
                                </div>
                                     <span class="text-danger"><?php echo $PillarError; ?></span>

								
							</div>
						</div>
                        <div class="form-group">
							<label class="cols-sm-2 control-label">CIH</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="CIH"  placeholder="Enter CIH Field"/>
                                </div>
                                     <span class="text-danger"><?php echo $CIHError; ?></span>

								
							</div>
						</div>
                          <div class="form-group">
							<label class="cols-sm-2 control-label">Reference link</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<input type="text" class="form-control" name="Referencelink"  placeholder="Enter Reference link Field"/>
                                </div>
                                     <span class="text-danger"><?php echo $ReferencelinkError; ?></span>

								
							</div>
						</div>
                        
                         <div class="form-group">
							<label class="cols-sm-2 control-label">Add Achivement</label>
							<div class="cols-sm-10">
								<div class="input-group">
                        <textarea class="form-control" rows="4" name="mes" id="mes" placeholder="Enter Achievement Field"></textarea>
                                </div>
                                     <span class="text-danger"><?php echo $mesError; ?></span>

								
							</div>
						</div>
                        
						<div class="form-group ">
                                    <input type="submit" name="reg"  value="Add Achievement" class="login-button"> 
						
						</div>
						
					</form>
				</div>
			</div>
		</div>
		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
        
        <!--Navbar starts here-->
<div class="firstsec">
<i class="fa fa-google-plus-square" style="font-size:25px"></i>
<i class="fa fa-facebook-square" style="font-size:25px"></i>
<i class="fa fa-twitter-square" style="font-size:25px"></i>     
<p class="footText1">Monitoring and evaluating the performance of your company became easier<br></p>
<p class="footText2">&copy;Achieve | All rights reserved</p>  
</div>
<!--Navbar ends here-->    
	</body>
</html>