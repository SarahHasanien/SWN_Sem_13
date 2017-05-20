<?php
$db=Database::Connect();
$id=$_SESSION['user2']['EID'];
$result=$db->conn->query("select a.AchID,a.type,a.Month,a.pillar,a.BU,a.title,a.category,a.Currency,a.description,a.EID,e.firstname,e.lastname,e.EID,a.client,a.industry,a.country,a.currency,a.BU,a.pillar from  achievement a , employee e where e.EID=a.EID and a.EID='$id' order by AchID DESC");
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        $title="Title: ";
    $Client="Client: ";
    $LOP="LOP: ";
    $Month="Month: ";
    $category="Category: ";
    $type="Type: ";
    $industry="industry: ";
    $country="Country: ";
    $currency="currency: ";
    $Description="Description: ";
    $BU="BU: ";
    $pillar="Pillar: ";
        echo '<div class="postowner">'.$row['firstname'].'&nbsp;'.$row['lastname']
        .'</div>';
        echo '<div class="onepost">&nbsp;'
            .$title.'&nbsp;' .$row['title'].' &nbsp;<br>'
            .$Client.'&nbsp;'.$row['client'].'&nbsp;<br>'
            .$Month.'&nbsp;'.$row['Month'].'&nbsp;<br>'
            .$category.'&nbsp;'.$row['category'].'&nbsp;<br>'
            .$type.'&nbsp;'.$row['type'].'&nbsp;<br>'
            .$industry.'&nbsp;'.$row['industry'].'&nbsp;<br>'
            .$country.'&nbsp;'.$row['country'].'&nbsp;<br>'
            .$currency.'&nbsp;'.$row['currency'].'&nbsp;<br>'
            .$BU.'&nbsp;'.$row['BU'].'&nbsp;<br>'
            .$pillar.'&nbsp;'.$row['pillar'].'&nbsp;<br>'
            .$Description.' &nbsp;<br>'
            .$row['description'].
            '<br>'; 
        
        
        $rr=$row['AchID'];
        $result1 = $db->conn->query("select * FROM note n WHERE n.AchID= '$rr'"); 
    
         if ($result1->num_rows>0){
            
        $row1=$result1->fetch_assoc();
  echo'<h4>Note: '.$row1['text'].' </h4>&nbsp;' ;
         }
     echo'</div>';   
        
    }
}



?>


