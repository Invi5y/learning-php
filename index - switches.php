<?php

$grade = "";
$date = date("l");

switch($date){
    case "Monday":
        echo "Mondays suck";
        break;
    case "Tuesday":
        echo "Tuesdays suck";
        break;
    default:
        echo "Nope";
};

?>