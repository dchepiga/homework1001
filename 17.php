<?php
/*17) Используя аргументы функции - три целых числа. Одно из чисел отлично от двух других, равных между собой.
Вывести на экран порядковый номер числа, отличного от остальных.
Пример для чисел 4 6 6: 1
Пример для чисел 6 6 3: 3
*/

function defineUniqueNumIndex($a, $b, $c)
{
    if ($a == $b) {
        $index = 3;
    } elseif ($a == $c) {
        $index = 2;
    } else {
        $index = 1;
    }
    return $index;

}

$array = [3, 1, 3];
echo defineUniqueNumIndex(...$array);