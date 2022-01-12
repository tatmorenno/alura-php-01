<?php

$ageList = [19, 26, 27, 28, 30];

# old form - declarating an array:
# $ageList = array(19, 26, 27, 28, 30);

for ($i = 0; $i < count($ageList); $i++) {
    echo $ageList[$i] . PHP_EOL;
}echo 