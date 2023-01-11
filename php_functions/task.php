<?php

//Parašykite funkciją, kuri grąžina skaičiaus kvadratą. Skaičius perduodamas kaip parametras.
function square($number){
    $squareOfNumber = $number * $number;
    return $squareOfNumber;
}
echo square(10);

//Parašykite funkciją, kuri grąžina dviejų skaičių sumą. Skaičiai perduodami funkcijos parametrus.
function sum($number, $number2){
    $result = $number + $number2;
    return $result;
}
echo sum(10, 10);

//Parašykite funkciją, kuri iš antro parametro atima pirmą ir padalija iš trečio.
function math($par1, $par2, $par3){
    $result = ($par2 - $par1) / $par3;
    return $result;
}
echo math(50, 100, 2);

//Parašykite funkciją, kuri priima kaip parametrą skaičių nuo 1 iki 7, o grąžina savaitės dieną lietuvių kalba.
function day($number){
    if($number == 1){echo 'Pirmadienis';}
    elseif($number == 2){echo 'Antradienis';}
    elseif($number == 3){echo 'Trečiadienis';}
    elseif($number == 4){echo 'Ketvirtadienis';}
    elseif($number == 5){echo 'Penktadienis';}
    elseif($number == 6){echo 'Šeštadienis';}
    elseif($number == 7){echo 'Sekmadienis';}
    else{echo 'Klaidingas parametras';}
}
echo day(2);