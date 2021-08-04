<?php

function calculator($first, $opt, $second) {
    $result;

    switch ($opt) {
        case "add":
            $result = $first + $second;
            break;
        case "subtract":
            $result = $first - $second;
            break;
        case "multiply":
            $result = $first * $second;
            break;
        case "divide":
            $result = $first / $second;
            break;
        case "mod":
            $result = $first % $second;
            break;
        default: 
            $result = "Unable to complete request. Please try again. ";
            break;
    }
    return $result;
}

$first = $_GET["first"];
$opt = $_GET["opt"];
$second = $_GET["second"];

$value = calculator($first,$opt,$second);
echo "

<center>

<h1 style='color:blue;'>Value: <i>$value</i> </h1>
<a href='/'><button style='background:blue;color:white;font-size:18px;border: 1px solid transparent;'>Go Back</button></a>

</center>

";