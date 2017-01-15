<?php
/*11) Реализовать функцию closeToTen. функцию должна выводить на экран ближайшее к 10 из двух чисел,
записанных в аргументах метода.Например, среди чисел 8 и 11 ближайшее к десяти 11. Если оба числа на равной длине к 10,
то вывести на экран любое из них.*/

function closeToTen($firstNum, $secondNum)
{
    return (abs(10 - $firstNum) <= abs(10 - $secondNum)) ? $firstNum : $secondNum;

}

$first = 8.5;
$second = 11;

echo "Ближайшее к 10 из ({$first} и {$second}): " . closeToTen($first, $second);