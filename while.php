<?php 

$secret = "magic";
$attempts = 0;
$maxAttempts = 5;

while ($attempts < $maxAttempts) {
    echo "What's the secret? \n";
    $guess = trim(fgets(STDIN));
    $attempts++;

    if ($guess === $secret) {
        echo "You're right!\n";
        break;
    } elseif ($attempts === $maxAttempts) {
        echo "Out of guesses...\n";
    } else {
        echo "Wrong. Try again. Attempts left: " . $maxAttempts - $attempts . "\n";
    }
}