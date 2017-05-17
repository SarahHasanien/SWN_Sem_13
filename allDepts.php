<?php
$db=Database::Connect();
$result=$db->conn->query("select * from department");
if ($result->num_rows>0)
{
    while ($row=$result->fetch_assoc())
    {
        echo '<br><br><div class="deptname">'.$row['Name'].'&nbsp;</div><br>';
        $i=$row['Dno'];
        echo '<form method="post" action="deptExcel.php">
      <input type="hidden" name="num" value="<?php echo '.$i.'; ?>">
      <button name="export" type="submit" class="btn btn-success">
      Export sheet</button>
      </form>';
    }
}
?>