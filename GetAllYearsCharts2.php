<?php
$db=Database::Connect();
$result=$db->conn->query("select p.Text, p.PID, p.MID,m.MID,m.firstname,m.lastname from post p,manager m where p.MID=m.MID order by PID DESC");

    //2017
    $d1=0;
    $d2=0;
    $d3=0;
    $d4=0;
    $d5=0;
    $d6=0;
    $d7=0;
    $d8=0;
    $d9=0;
    $d10=0;
    $d11=0;
    $d12=0;
    $result=$db->conn->query('select rating, year,EID,Month from achievement where EID='.$id.' and year=2017 order by Month ASC');
    if ($result->num_rows>0)
        while ($row=$result->fetch_assoc())
        {
            if ($row['Month']=="January")
                $d1=$row['rating'];
            else if ($row['Month']=="February")
                $d2=$row['rating'];
            else if ($row['Month']=="March")
                $d3=$row['rating'];
            else if ($row['Month']=="April")
                $d4=$row['rating'];
            else if ($row['Month']=="May")
                $d5=$row['rating'];
            else if ($row['Month']=="June")
                $d6=$row['rating'];
            else if ($row['Month']=="July")
                $d7=$row['rating'];
            else if ($row['Month']=="August")
                $d8=$row['rating'];
            else if ($row['Month']=="September")
                $d9=$row['rating'];
            else if ($row['Month']=="October")
                $d10=$row['rating'];
            else if ($row['Month']=="November")
                $d11=$row['rating'];
            else if ($row['Month']=="December")
                $d12=$row['rating'];
        }
    echo '<div class="chartContainer1">
    <canvas id="myChart1">My chart</canvas>
    </div>
        
    <script>    
    var ctx = document.getElementById("myChart1").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "April", "May", "June", "July","Aug","Sep","Oct","Nov","Dec"],
        datasets: [{
          label: "Rating 2017",
          data: ['.$d1.','.$d2.','.$d3.','.$d4.','.$d5.','.$d6.','.$d7.','.$d8.','.$d9.','.$d10.','.$d11.','.$d12.'],
          backgroundColor: "#36A2EB"
        }]
      }
    });    
    </script>';
   //2016
    $d1=0;
    $d2=0;
    $d3=0;
    $d4=0;
    $d5=0;
    $d6=0;
    $d7=0;
    $d8=0;
    $d9=0;
    $d10=0;
    $d11=0;
    $d12=0;
    $result=$db->conn->query('select rating, year,EID,Month from achievement where EID='.$id.' and year=2016 order by Month ASC');
    if ($result->num_rows>0)
        while ($row=$result->fetch_assoc())
        {
            if ($row['Month']=="January")
                $d1=$row['rating'];
            else if ($row['Month']=="February")
                $d2=$row['rating'];
            else if ($row['Month']=="March")
                $d3=$row['rating'];
            else if ($row['Month']=="April")
                $d4=$row['rating'];
            else if ($row['Month']=="May")
                $d5=$row['rating'];
            else if ($row['Month']=="June")
                $d6=$row['rating'];
            else if ($row['Month']=="July")
                $d7=$row['rating'];
            else if ($row['Month']=="August")
                $d8=$row['rating'];
            else if ($row['Month']=="September")
                $d9=$row['rating'];
            else if ($row['Month']=="October")
                $d10=$row['rating'];
            else if ($row['Month']=="November")
                $d11=$row['rating'];
            else if ($row['Month']=="December")
                $d12=$row['rating'];
        }
    echo '<br><br><div class="chartContainer2">
    <canvas id="myChart2">My chart</canvas>
    </div>
        
    <script>    
    var ctx = document.getElementById("myChart2").getContext("2d");
    var myChart = new Chart(ctx, {
      type: "line",
      data: {
        labels: ["Jan", "Feb", "Mar", "April", "May", "June", "July","Aug","Sep","Oct","Nov","Dec"],
        datasets: [{
          label: "Rating 2016",
          data: ['.$d1.','.$d2.','.$d3.','.$d4.','.$d5.','.$d6.','.$d7.','.$d8.','.$d9.','.$d10.','.$d11.','.$d12.'],
          backgroundColor: "#36A2EB"
        }]
      }
    });    
    </script>';

?>