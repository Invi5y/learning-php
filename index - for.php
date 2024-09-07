
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form   action="index.php" method="post">
        <label>Enter a numver to count to</label>
        <input type="text" name="counter"><br>
        <label>Enter the increment </label>
        <input type="text" name="increment"><br>
        <input  type="submit" value="start">
    </form>

    
</body>
</html>



<?php

    $counter = $_POST["counter"];
    $inc = $_POST["increment"];

    for($i = 0; $i <= $counter; $i++){
        echo "{$i} <br>";
    }


?>