<? session_start(); ?>
<?php

    $nm=$_REQUEST["txtName"];
    $adrs=$_REQUEST["txtAddress"];
    $mob=$_REQUEST["txtMobile"];
    $id=$_REQUEST["id"];
    echo($nm);
    echo($adrs);
    echo($mob);

    $con=mysqli_connect("127.0.0.1","root","");
    mysqli_select_db($con,"college");
    mysqli_query($con,"update student set sname='$nm',saddress='$adrs',smobile='$mob' where sid=$id");
    header("location:displaystudentlist.php?status=1");



?>