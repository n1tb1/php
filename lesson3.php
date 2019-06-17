<?php
/**
 * Created by PhpStorm.
 * User: good
 * Date: 11/06/2019
 * Time: 22:59
 */

// 1

$i = 100;

while ($i) {
    if ($i % 3 == 0) {
        echo $i . PHP_EOL;
    }
    $i--;
}

// 2
$i = 0;
do {
    if ($i % 2 == 0) {
        echo $i . " - Четное число" . PHP_EOL;
    } else {
        echo $i . " - Нечетное число" . PHP_EOL;
    }
    $i++;
} while ($i <= 10);

// 3

$regions = [
    "Москвовская область" => ["Москва", "Зеленоград", "Клин"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Рязанская область" => ["Кород1", "Город2", "Город3", "Город4"]
];

foreach ($regions as $key => $value) {
    echo $key . " :" . PHP_EOL;
    foreach ($value as $region) {
        echo $region . " ";
    }
    echo PHP_EOL;
}

// 4

$letters = array(
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "y",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "s'h",
    "ъ" => "",
    "ы" => "i",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    " " => " "
);

echo strtr("привет, как дела?", $letters) . PHP_EOL;

// 5

$str = "Жили были дед да бабка!";

echo str_replace(" ", "_", $str) . PHP_EOL;

// 6
// Pls check file lesson3.html

// 7

for ($i = 0; $i < 10; print $i . PHP_EOL, $i++) {}

// 8

foreach ($regions as $key => $value) {
    echo $key . " :" . PHP_EOL;
    foreach ($value as $region) {
        $result = preg_split ('//u', $region);
        if ($result[1] == 'К') echo $region . " ";
    }
    echo PHP_EOL;
}

// 9

echo str_replace(" ", "_",strtr("привет, как дела?", $letters)) . PHP_EOL;