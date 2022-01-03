<?php

for  ($counter = 1; $counter <= 15; $counter++) {
    if ($counter != 13) {
        echo "#$counter" . PHP_EOL;
    }
}

/* different ways to increment:
 *
 * $counter = $counter + 1;
 * $counter += $counter;
 * $counter++;
*/
