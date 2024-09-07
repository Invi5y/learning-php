<?php
    $foods = array("apple","orange","banana","coconut");

    //$foods[0] = "mango";
    //array_push($foods, "mango");
    //array_pop($foods);
    //array_shift($foods);
    $reversed_foods = array_reverse($foods);

    foreach($reversed_foods as $food){
        echo $food . "<br>";
    }

    for($i = 0; $i < count($foods); $i++){
        echo $foods[$i] . "<br>";
    }

    echo $i . "<br>";

    //while(count($foods) <= isset($i))


?>