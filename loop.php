<html>
    <body>
        
    <?php


   $a=$_REQUEST["t1"];
    $b=$_REQUEST["t2"];
        for($i=$a;$i<=$b;$i++){
            for($j=1;$j<=$b;$j++){
                echo(" <strong><font color='red'> *</font></strong>");
            }
            echo("<br>");
        }

        function add(){
            $a=$_REQUEST["t1"];
            echo(" <font color='red'>$a</font>");
        }
        add();




    ?>
    </body>
</html>