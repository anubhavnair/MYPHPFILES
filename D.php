<?php  session_start(); ?>
<html>

<body>

    <?php

    // $t1=$_REQUEST["t1"];
    // $t2=$_REQUEST["t2"];
    // $t3=$_REQUEST["t3"];
            echo($_SESSION["fs"]);
            echo($_SESSION["sn"]);

            // echo("<h1>number is ".$t3."</h1>");
    ?>
    <a href="logout.php">sign out</a>
    
   
</body>
</html>