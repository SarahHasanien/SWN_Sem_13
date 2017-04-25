<?php
$db=Database::Connect();
$result=$db->conn->query("select p.Text, p.PID, p.MID,m.MID,m.firstname,m.lastname from post p,manager m where p.MID=m.MID order by PID DESC");
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        if (!empty($_SESSION['user']))
        {
             if($_SESSION['user']['type']==1)
                echo'<a onclick="loadDoc('.$row['PID'].')" class=" exit exit'.$row['PID'].'"><span class=" glyphicon glyphicon-remove" aria-hidden="true"></span></a>';
            
            else if($row['MID']==$_SESSION['user']['MID'])
                {
                    echo'<a onclick="loadDoc('.$row['PID'].')" class=" exit exit'.$row['PID'].'"><span class=" glyphicon glyphicon-remove" aria-hidden="true"></span></a>';
                }
        }
        echo '<div class="postowner">'.$row['firstname'].'&nbsp;'.$row['lastname']
        .'</div>';
        echo '<div class="onepost">&nbsp; &nbsp;'.$row['Text'].'</div><br>'; 
        
    }
}
?>