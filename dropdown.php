<html>

<style>
  body{
    font-size:5rem;
    text-align:center;
  }
</style>
    <body>
        
    <?php
    // include("dropdownassignment.html"); 
// /
    $a=$_REQUEST["v1"];
    $b=$_REQUEST["v2"];
    $opr=$_REQUEST["cmb"];
    switch($opr){
        case "add":
            echo("Addtion of given number is "+($a+$b));
            break;
         case "sub":
            echo("The subtraction of given number is".($a-$b));
            break;
        case "mul":
            echo("The multiplication of given number is ".($a*$b));
            break;
            case "div":
                echo("The Division of given number is  ".($a/$b));
                break;
             case "mod":
                    echo("The Modulus of given number is ".($a%$b));
                    break;
             default :
                    echo("Please select the option from the menu");
    }

    ?>
    </body>
</html>