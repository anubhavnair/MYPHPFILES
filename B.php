<?php  session_start(); ?>
<html>
    <body>
        <h1>i am B </h1>
        <form action="C.php" method="get">

            <?php
                $x=$_REQUEST["t1"];
            //    echo(" <input type='hidden' name='t1' value='$x'>" );
            $_SESSION["fs"]=$x;
               
            ?>
          
            <b> Enter Your Surname </b><input type="text" name="t2">
            <input type="submit" value="ok">
        </form>
        <a href="C.php" >Click Here</a>
    </body>
</html>