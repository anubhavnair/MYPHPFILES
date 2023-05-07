
<?php session_start(); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegForm</title>
    <style>



    </style>
</head>

<body>
    <?php
    $roll = $_REQUEST["roll"];
    $_SESSION["rn"]=$roll;
    
    $con = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($con, "college");
    $data_row = mysqli_query($con, "select *from student where sid=$roll");
    $data = mysqli_fetch_array($data_row);

    $nm = $data["sname"];
    $adrs = $data["saddress"];
    $mob = $data["smobile"];

    ?>



    <h1>Student Registration For</h1>

    <form action="updatedetails.php?" method="get">
        <input type="hidden"  name ="id"value=<?php echo($roll); ?>>
        <b>Enter Your Name</b><input type="text" name="txtName" value=<?php echo ($nm); ?>><br>
        <br>
        <b>Enter Your Address</b><input type="text" name="txtAddress" value=<?php echo ($adrs); ?>> <br>
        <br>
        <b>Enter Your Mobile Number </b><input type="text" name="txtMobile" value=<?php echo ($mob); ?>>
        <br>
        <input type="submit" value="Save">


    </form>
    <br>


</body>

</html>