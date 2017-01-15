<?php
/*16) используя аргументы функции -  три целых числа, определить, имеется ли среди них хотя бы одна пара равных между собой чисел.
Если такая пара существует, вывести на экран числа через пробел. Если все три числа равны между собой, то вывести все три.
*/

function defineEqualNumbers($a, $b, $c)
{
    $numbers = '';

    if ($a == $b && $a == $c && $b == $c) {
        $numbers = "{$a} {$b} {$c}";
    } elseif ($a == $b) {
        $numbers = "{$a} {$b}";
    } elseif ($a == $c) {
        $numbers = "{$a} {$c}";
    } elseif ($b == $c) {
        $numbers = "{$b} {$c}";
    }

    return $numbers;
}

$array = [3, 1, 3];

echo defineEqualNumbers(...$array);