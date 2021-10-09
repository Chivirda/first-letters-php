<?php

$str = readline('Введите текст: ');

function firstLetters(string $str): array
{
    $resultArray = [];

    $tempArray = explode(' ', $str);
    foreach ($tempArray as $item) {
        array_push($resultArray, mb_strtolower(mb_substr($item, 0, 1)));
    }

    $uniqueNumbers = array_unique($resultArray);
    asort($uniqueNumbers);

    return $uniqueNumbers;
}

print_r(firstLetters($str));