<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action = "index.php" method = "post">
        <label>radius:</label>
        <input type="text" name="radius">
        <input type="submit" value = "calculate">
    </form>
    
</body>
</html>

<?php
    $radius = $_POST["radius"];
    $circumf = null;
    $volume = null;

    $circumf = 2 * pi() * $radius;
    $circumf = round($circumf, 2);

    $area = pi() * pow($radius,2);
    $area = round($area, 2);

    $volume = round(4/3 * pi() * $radius**3,2);

    echo"Circumference = {$circumf}cm <br>";
    echo "Area = {$area}cm^2 <br>";   
    echo "Volume = {$volume}cm^3 <br>";
?>