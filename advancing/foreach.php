<?php

$checkingAccount = [
    123456789 => [
        'holder' => 'Tatiana',
        'balance' => 3000000
    ],
    123456780 => [
        'holder' => 'Joao Neto',
        'balance' => 2000000
    ],
    123456781 => [
    'holder' => 'Cecilia',
    'balance' => 1000000
    ]
];

foreach ($checkingAccount as $index => $account) {
    echo $account['holder'] . PHP_EOL;

    # display the index
    //echo $index . PHP_EOL;

}