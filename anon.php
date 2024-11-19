<?php 


declare(strict_types=1);

// anon functions and clojures

$greet = function ($name) {
    return "Hi, $name";
};

echo $greet("Peter");

$numbers = [1, 2, 3];

$squared = array_map(function ($n) {
    return $n * $n;
}, $numbers);

var_dump($numbers);
var_dump($squared);

echo "\n";

$message= "NTMY!";

$greet2 = function ($name) use ($message) {
    return "Hi, $name. $message";
};

echo $greet2("Peter");