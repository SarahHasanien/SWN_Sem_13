<?php
$post=$_POST['newwpost'];
$conn->query('insert into post (Text,MID) values ('.$post.','.$_SESSION['user']['MID'].')');
header("Location:CEOHome.php");
?>