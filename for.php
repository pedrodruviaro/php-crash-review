<?php

$secondsToLaunch = 10;

for ($i = $secondsToLaunch; $i >= 0; $i-- ) {
    if ($i !== 0) {
        echo "$i\n";
    } else {
        echo "Let's go!";
    }

    sleep(1);
}