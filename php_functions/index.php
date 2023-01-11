<?php

$name = 'Domantas';

function square($number){
    $squareOfNumber = $number * $number;
    return $squareOfNumber;
}

echo square(7);
echo "<br>\n";

$anonymousVarDump = function($value){
    var_dump($value);
};
$anonymousVarDump($name);

$workers = [
    [
        'name' => 'Antanas',
        'salary' => 410
    ],
    [
        'name' => 'Bronius',
        'salary' => 420
    ],
    [
        'name' => 'Česlovas',
        'salary' => 430
    ]
];

$bonus = 300;
$workersWithBonus = array_map(function($worker) use($bonus) {
    $worker['salary'] += $bonus;
    return $worker;
}, $workers);
var_dump($workers, $workersWithBonus);


$workersWithBonusArrow = array_map(fn($worker) => $worker['salary'] += $bonus, $workers);
var_dump($workersWithBonusArrow);

function createUser($name, $surname = null, $address = null, $city = null, $email = null, $phone = null){
    return compact('name', 'surname', 'address', 'city', 'email', 'phone');
}
var_dump(createUser('Domantas', null, null, null, 'dbutrimas@gmail.com'));