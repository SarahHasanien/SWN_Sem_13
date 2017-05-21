<?php
require "Common.php";
$db=Database::Connect();

$dno= $_SESSION['user']['DNO'];
$result=$db->conn->query("SELECT e.EID,e.firstname,e.lastname ,a.AchID,a.type,a.Month,a.pillar,a.BU,a.title,a.category,a.Currency,a.description,a.EID,a.industry,a.country,a.currency,a.BU,a.pillar,a.client  FROM employee e ,achievement a WHERE e.DNO='$dno' and e.EID=a.EID order by AchID DESC");

   $result3=$db->conn->query("SELECT e.EID,e.firstname,e.lastname ,a.AchID,a.type,a.Month,a.pillar,a.BU,a.title,a.category,a.Currency,a.description,a.EID,a.industry,a.country,a.currency,a.BU,a.pillar,a.client  FROM employee e ,achievement a WHERE e.DNO='$dno' and e.EID=a.EID order by AchID DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title> Achievement</title>
        <link rel="stylesheet" href="css/department.css">
        <link rel="icon" href="images/rsz_achive.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <?php if(! empty($_SESSION['user2'])){  ?>
         <li ><a href="AddAchievement.php">Add Achievement</a></li>
            <?php } ?>
            
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
             <?php if(! empty($_SESSION['user2'])){  ?>
           <li><a href="MyAchievement.php">My Achievement</a></li>
                            <?php } ?> 
                
                 <?php if(! empty($_SESSION['user'])){ 
                
               if($_SESSION['user']['type'] == 2){  ?>
           <li><a href="department.php">Department Achievement</a></li>
                            <?php } }?> 
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
  
   
    

<!--Start posts area-->
<div class="PostsArea">
    <br>
    <?php  if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    { ?>
    <div class="postowner"> <?php echo $row['firstname'] ?> <?php echo $row['lastname'] ?> </div>
    <div class="onepost">
    <p>Title: <?php echo $row['title'] ?> </p>
        <p>Client: <?php echo $row['client'] ?> </p>
    <p>Month: <?php echo$row['Month'] ?> </p>
    <p>Category: <?php echo $row['category'] ?> </p>
    <p>Type: <?php echo $row['type'] ?> </p>
    <p>Industry: <?php echo $row['industry'] ?> </p>
    <p>Country: <?php echo $row['country'] ?> </p>
    <p>Currency: <?php echo $row['currency'] ?> </p>
    <p>Description: <?php echo $row['description'] ?> </p>
    <p>BU: <?php echo $row['BU'] ?> </p>
    <p>Pillar: <?php echo $row['pillar'] ?> </p>
    
    <?php 
        $rr=$row['AchID'];
        $result1 = $db->conn->query("select * FROM note n WHERE n.AchID= '$rr'"); 
    
    if ($result1->num_rows>0){
        $row1=$result1->fetch_assoc();
    ?>
    
  
        <h4>
        Note: <?php echo $row1['text'] ?> </h4>
     
    
    <?php } 
     else { $i= $row['AchID']; ?>
           <form method="post" action="addnote.php"> 
                        Note:&nbsp; <input name="note" type="text" ><br>
                           <input type="hidden" name="id" value="<?php echo $i; ?>" >
             
         <div class="container">
           
				 <input type="submit"    value="Add Note"> 
              
				 </div>
                         
          </form>           
  
    <?php } ?>   </div>   <?php }}     ?>
       
        
        </div>

<!--End posts area-->
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
