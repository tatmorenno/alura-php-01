<?php

$age = 17;
$numberOfPeople = 2;

echo "You can only enter if you are over 18 years old or ";
echo "from 16 years old accompanied." . PHP_EOL . PHP_EOL;

if ($age >= 18) {
    echo "You are $age years old. You can come in alone." . PHP_EOL;
    echo 'You may come in.';
} else if ($age >= 16 && $numberOfPeople > 1) {
    echo "You are $age years old. You are accompanied and you can come in.";
} else {
    echo "You're only $age years old and you're not accompanied. So, you can't come in.";
}

echo PHP_EOL;
echo 'Goodbye!';
