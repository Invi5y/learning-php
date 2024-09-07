<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label>Username</label>
        <input type="text" name="username"><br>
        <label>Password</label>
        <input type="password" name="pwd"><br>
        <input type="submit" name="login" value="Log in">
    </form>
    
</body>
</html>


<?php
    /*
    foreach($_POST as $key => $value){

        echo "{$key} = {$value} <br>";
    }
    */

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];

        if(empty($username)){
            echo "Username is missing";
        }
        elseif(empty($pwd)){
            echo "Password is missing";
        }
        else{
            echo "Hello {$username}";
        }
    }


    /*
    if(isset($_POST["username"]) && isset($_POST["pwd"])){
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
    }
    else{
        echo "Please enter a username and a password";
    }
    */
?>