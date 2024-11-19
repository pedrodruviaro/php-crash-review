<?php 

declare(strict_types=1);

function greet (string $name = "Dondo"): string {
    return "Hello, $name";
}

echo greet();

$numbers = [1, 2, 3];

function sum (int ...$numbers): int {
    $sum = 0;

    foreach ($numbers as $number) {
        $sum += $number;
    }

    return $sum;
}

var_dump(sum(...$numbers));