<?php
$studid=$_REQUEST["studid"];

$con=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($con,"college");
mysqli_query($con,"delete from student where sid=$studid");
echo("Data Has Been deleted");
header("location:displaystudentlist.php?status=1");

?>