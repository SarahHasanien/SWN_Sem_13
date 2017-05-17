<?php
require ("Common.php");
$db=Database::Connect();
$output="";
$num = $_POST["num"];
echo ($num);
    $result=$db->conn->query('Select * from achievement where EID='.$num.' order by AchID desc');
    if ($result->num_rows>0)
    {
        $output.='
        <table class="table" ordered="1">
            <tr>
                <th>EID</th>
                <th>Type</th>
                <th>Month</th>
                <th>Pillar</th>
                <th>BU</th>
                <th>Title</th>
                <th>Category</th>
                <th>Currency</th>
                <th>Description</th>
            </tr>
        ';
        while ($row=$result->fetch_assoc())
        {
            $output.='
            
            <tr>
                <th>'.$row["EID"].'</th>
                <th>'.$row["type"].'</th>
                <th>'.$row["Month"].'</th>
                <th>'.$row["pillar"].'</th>
                <th>'.$row["BU"].'</th>
                <th>'.$row["title"].'</th>
                <th>'.$row["category"].'</th>
                <th>'.$row["Currency"].'</th>
                <th>'.$row["description"].'</th>
            </tr>
            ';
        }
        
    $output.='</table>';
        
        
header("Content-type: application/octet-stream");  
header("Content-Disposition: attachment; filename=Achieve.xls"); 
header("Pragma: no-cache");  
header("Expires: 0");  

        echo $output;
    }

?>