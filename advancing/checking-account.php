<?php

$account1 = [
    'holder' => 'Tatiana',
    'balance' => 3000000
];

$account2 = [
    'holder' => 'Joao Neto',
    'balance' => 2000000
];

$account3 = [
  'holder' => 'Cecilia',
  'balance' => 1000000
];

$checkingAccount = [$account1, $account2, $account3];

for ($i = 0; $i < count($checkingAccount); $i++) {
    echo $checkingAccount[$i]['holder'] . PHP_EOL;
}