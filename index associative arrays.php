<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Enter country name:</label>
        <input type="text" name="country">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
    $capitals = array("USA"=>"Washington D.C.",
                    "Japan"=>"Kyoto"
                    ,"South Korea"=>"Seoul"
                    ,"India"=>"New Delhi");

    $capital = $_POST["country"];
    echo $capitals[$capital];

   /* 
   $capitals["USA"] = "Las Vegas";


    foreach($capitals as $key => $value){
        echo $key . " = " . $value .  "<br>";
    }
    */

    //while(count($foods) <= isset($i))


?>