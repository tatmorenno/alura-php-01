<?php

$age = 8;

echo "You can only enter if you are over 18 years old." . PHP_EOL . PHP_EOL;

if ($age >= 18) {
    echo "You are $age years old." . PHP_EOL;
    echo 'You may come in.';
} else {
    echo "You're only $age years old. You can't come in.";
}

echo PHP_EOL;
echo 'Goodbye!';
