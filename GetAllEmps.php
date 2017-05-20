<?php
$db=Database::Connect();
$result=$db->conn->query("select * from employee");
if ($result->num_rows>0)
{
   while ($row=$result->fetch_assoc())
    {
        echo '<br><br><div class="deptname">'.$row['username'].'&nbsp;</div><br>';
        $i=$row['EID'];
        ?>
       <form method="POST" action="empExxcel.php">
      <input type="hidden" name="num" value="<?php echo $i; ?>">
      <button name="export" type="submit" class="btn btn-success">
      Export sheet</button>
      </form>
    <?php 
    }
}
?>