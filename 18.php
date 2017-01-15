<?php
/*18) Используем аргументы функции - два целых числа, которые будут координатами точки, не лежащей на координатных осях OX и OY.
Вывести на экран номер координатной четверти, в которой находится данная точка.
*/

function defineCoordinateQuarter($x, $y)
{
    if ($x > 0) {
        $quarter = ($y > 0) ? 1 : 4;
    } else {
        $quarter = ($y > 0) ? 2 : 3;
    }
    return $quarter;
}

$array = [-3, 8];
echo "Номер координатной четверти: " . defineCoordinateQuarter(...$array);