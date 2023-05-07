<?php
$studid=$_REQUEST["combobox"];

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"college");
mysqli_query($con,"delete from student where sid=$studid");
echo("Data Has Been deleted");
header("location:deleteStudentbycmb.php?status=1");

?>