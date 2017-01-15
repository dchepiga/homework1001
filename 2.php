<?php
/*2) Разработать функцию, которая вносит процентную коррекцию в массив чисел(целых, дробных или смешанных не имеет значения)
Исходные данные:
a)Массив с числами в виде
array(5, 6.5, 10, 3.355, 400, 9.43, ..., [n]);
b)Процент внесения изменений(0.8 - 80% от целого, 1 - оставить без изменения, 2.5 - увеличить в полтора раза и т.д.)
Предусмотреть, что пользователь случайно может в функцию передать отрицательный процент, тогда функция должна вернуть ошибку.
На выходе нужно получить такой же массив, с внесённой процентной ставкой.
*/

function makePercentageCorrection($arr, $percent)
{
    if ($percent < 0) {
        return "Error: Negative percent";
    } else {
        $function = function (&$element, $key, $percent) {
            $element *= $percent;
        };
        array_walk($arr, $function, $percent);
        return $arr;
    }

}

$arr = [5, 6.5, 10, 3.355, 400, 9.43];
$percent = 0.5;


echo '<pre>';
print_r( makePercentageCorrection($arr, $percent));
echo '<pre>';