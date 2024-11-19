<?php

$items = [
    "Apple" => 3,
    "Corn" => 11
];
foreach ($items as $key => $value) {
    echo "$key -> $value \n";
}

$items2 = ["A", "B"];
foreach ($items2 as $item) {
    echo "Item is $item \n";
}