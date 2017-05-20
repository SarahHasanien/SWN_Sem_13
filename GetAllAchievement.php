<?php
$db=Database::Connect();
if(empty($_SESSION['year']) )
{ 
    if(empty($_SESSION['month']))
    {
     $mydate = date('Y/m/d H:i:s');
$month = date("m",strtotime($mydate)); 
$year =$mydate[0].$mydate[1].$mydate[2].$mydate[3];
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
 
}
}
else
{
        
$year= $_SESSION['year'];
$month= $_SESSION['month'];
}


$result=$db->conn->query("select a.AchID,a.type,a.Month,a.pillar,a.BU,a.title,a.category,a.Currency,a.description,a.EID,e.firstname,e.lastname,e.EID,a.client,a.industry,a.country,a.currency,a.BU,a.pillar,a.year from  achievement a , employee e where  e.EID = a.EID and a.Month= '$month' and a.year=' $year' order by AchID DESC");
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
         
        $title="Title: ";
    $Client="Client: ";
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