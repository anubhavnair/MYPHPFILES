<?php
$a=array(1,2,3,4,5);

foreach($a as $y){
    echo ($y."<br/>");
}

// echo("this is by for loop");
// print("THIS IS simply for loop")

// for($i=0;$i<5;$i++){
//     echo ($a [$i]);
// }




$y=array(array(1,2,3,8,9,11,14),array(4,5,6),array(7,8,9));

for($i=0;$i<count($y);$i++){

    for($j=0;$j<count($y[$i]);$j++){
        echo ($y[$i][$j]."  " );
    }
    print("<br>");
}



// print_r($y); 

// associative array 

$z=array("name"=>10,"mohan"=>29,"sohan"=>50);

foreach($z as $k=>$m){
    echo($k."......".$m."<br>");
}



?>