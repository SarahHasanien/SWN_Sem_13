function exportDept(dnum)
{
    $.post("deptExcel.php",{DNUM:dnum});
}