<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket price</title>
</head>
<body>
    <form   aciton="index.php" method="post">
        <label>Child: </label>
        <input  type= "checkbox" name ="child" value = 1 >
        <label>Senior: </label>
        <input  type= "checkbox" name ="senior" value = 1>
        <input type="submit" value="Submit">
    </form>
    
</body>
</html>


<?php

if(isset($_POST['child'])){
    $child = $_POST['child'];
}
else{
    $child = null;
}

if(isset($_POST['senior'])){
    $senior = $_POST['senior'];
}
else{
    $senior = null;
}


if(($child && $senior) || (!$child && !$senior)){
    echo "Ticket price is 15 EUR"; 
}
elseif($child){
    echo "Ticket is FREE";
}
else{
    echo "Ticket is 5 EUR";
}
/*
    $temp = 15;
    $cloudy = true;

    if($temp < 0 || $temp > 30 ){
        echo "The weather is bad.<br>";
    }
    else{
        echo "The weather is good <br>";
    }


    if($cloudy){
        echo "It's cloudy";
    }
    else{
        echo "It's sunny";
    }
*/


?>