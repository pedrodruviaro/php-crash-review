<?php 

do {
    $diceRoll = rand(1, 6);
    echo "You roll a $diceRoll\n";
    if ($diceRoll === 6) {
        echo "Jackpot!\n";
    }
    echo "Roll again? (y/n)";
    $rollAgain = trim(fgets(STDIN));
} while ($rollAgain === "y");