<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 09/06/2019
 * Time: 14:31
 */

// 1

$a = mt_rand(0, 10);
$b = mt_rand(0, 20);

if ($a >= 0 && $b >= 0) {
    echo $a - $b;
} else if ($a <= 0 && $b <= 0) {
    echo $a * $b;
} else {
    echo $a + $b;
}


// 2

$a = mt_rand(0, 15);

switch ($a) {
    case $a :
        show($a);
        break;
    default :
}

function show($a) {
    for ($i = $a; $i <= 15; $i++) {
        echo $i . PHP_EOL;
    }
}

// 3

function sum ($a, $b) {
    return $a + $b;
}

function multiply ($a, $b) {
    return $a * $b;
}

function diff ($a, $b) {
    return $a - $b;
}

function div ($a, $b) {
    return $b == 0 ? 'Impossible to devide on zero' : ($a / $b);
}


// 4

function calc ($a, $b, $operation) {
    switch ($operation) {
        case 'sum' :
            return $a + $b;
        case 'multiply' :
            return $a * $b;
        case 'diff' :
            return $a - $b;
        case 'div' :
            return $b == 0 ? 'Impossible to devide on zero' : ($a / $b);
    }
}

// 5

echo date('Y') . PHP_EOL;

// 6

echo power(4, 2) . PHP_EOL;

function power ($a, $pow) {
    if ($pow == 0) {
        return 1;
    } else {
        return $a * power($a, $pow - 1);
    }
}

// 7

echo timeFormat() . PHP_EOL;

function timeFormat() {
    $hours = date("H");
    $minutes = date("i");

    $hours1 = $hours % 10;
    $minutes1 = $minutes % 10;

    $textHours = check($hours, $hours1);
    $textMinutes = check($minutes, $minutes1);

    return "Сейчас ${hours} ${textHours[0]} ${minutes} ${textMinutes[1]}";
}

function check($digit, $digit1) {
    if ($digit >= 5 && $digit <= 20) {
        return ['часов', 'минут'];
    } else if ($digit1 > 1 && $digit1 < 5) {
        return ['часа', 'минуты'];
    } else if ($digit1 === 1) {
        return ['час', 'минута'];
    } else {
        return ['часов', 'минут'];
    }
}