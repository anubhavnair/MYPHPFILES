<?php session_start(); ?>
<html>
    <body>
        
    <h1>I am C</h1>
    <form action="D.php">

    <?php
            // $x=$_REQUEST["t1"];
            $y=$_REQUEST["t2"];
            // $z=$_REQUEST["t2"];
            $_SESSION["sn"]=$y;

            // echo("<input type='hidden' name='t1' value='$x'>");
            // echo("<input type='hidden' name='t2' value='$y'>");


    ?>
        <b>Enter Your Mobile numer</b><input type="text" name="t3">
        <input type="submit" value="Submit">
    </form>
    <a href="D.php">Click Here</a>
    </body>
</html>