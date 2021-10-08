<?php

$str = 'Если ты будешь злиться на меня каждый раз, когда я делаю глупость, мне придется прекратить делать глупости';

function firstLetters(string $str): array
{
    $resultArray = [];

    $tempArray = explode(' ', $str);
    foreach ($tempArray as $item) {
        array_push($resultArray, mb_strtolower(substr($item, 0, 2)));
    }

    $uniqueNumbers = array_unique($resultArray);
    asort($uniqueNumbers);

    return $uniqueNumbers;
}

print_r(firstLetters($str));