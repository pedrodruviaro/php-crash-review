<?php declare(strict_types=1);

$x = 10;
if ($x > 5) {
    echo "X's bigger than 5";
}

echo "\n";

$score = 85;
if($score >= 90) {
    echo "A";
} elseif ($score >= 80) {
    echo "B";
} elseif ($score >= 70) {
    echo "C";
} elseif ($score >= 60) {
    echo "D";
} else {
    echo "F";
}

