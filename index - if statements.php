<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>You must bet +18 to enter</title>

</head>
<body>
    <form action="index.php" method = 'get'>
        <label>Age:</label>
        <input type="text" name="age">
        <input type="submit" value="check age">
    </form>
    
</body>
</html>






<?php
    $age = $_GET['age'];

    if ($age >= 100){
        echo "You are too old to enter this site.";
    }
    elseif($age >= 18){
        echo "You may enter this site.";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age.";
    }
    else{
        echo"You must be 18+ to enter.";
    }
?>