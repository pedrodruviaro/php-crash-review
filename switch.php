<?php

$size = "X";

switch ($size) {
    case "S":
    case "M":
        echo "Small or medium size";
    case "L":
    case "XL":
        echo "Large or extra large size";
    default:
        echo "Invalid size";
}