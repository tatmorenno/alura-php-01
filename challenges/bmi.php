<?php

$weight = 65;
$height = 1.7;
$bmi = $weight / $height**2;

echo "Your BMI is $bmi. ";

if ($bmi < 18.5) {
    echo "You are underweight.";
} elseif ($bmi < 25) {
    echo "Your weight is normal. Congratulations!";
} else {
    echo "You are overweight.";
}