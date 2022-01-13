<?php

$checkingAccount = [
    '123.456.789-01' => [
        'holder' => 'Tatiana',
        'balance' => 3000000
    ],
    '123.456.780-02' => [
        'holder' => 'Joao Neto',
        'balance' => 2000000
    ],
    '123.456.781-03' => [
    'holder' => 'Cecilia',
    'balance' => 1000000
    ]
];

$checkingAccount ['123.456.789-04'] = [
    'holder' => 'Adrian',
    'balance' => 50000
];

foreach ($checkingAccount as $index => $account) {
    echo $index . " " . $account['holder'] . PHP_EOL;

    # display the index
    //echo $index . PHP_EOL;

}
