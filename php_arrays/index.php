<?php

$arr = [
    "lt" => [
        "Pirmadienis",
        "Antradienis",
        "Trečiadienis",
        "Ketvirtadienis",
        "Penktadienis",
        "Šeštadienis",
        "Sekmadienis"
    ],
    "en" => [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    ]
];

echo $arr["lt"][0];
echo $arr["en"][2];

$lang = "lt";
echo $arr[$lang][date(N)];