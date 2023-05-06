<html>
    

<body>

    <?php

    $a = $_REQUEST["txtName"];
    $b = $_REQUEST["txtAddress"];
    $c = $_REQUEST["txtMobile"];

    $Con = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($Con, "college");

    mysqli_query($Con, "insert into student(sname,saddress,smobile)values('$a','$b','$c')");

    echo ("Data has been Saved");
    



    ?>
</body>

</html>