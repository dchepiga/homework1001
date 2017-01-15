<?php
/*
1) Рассчитать скорость движения машины и вывести её в удобочитаемом виде.
Осуществить возможность вывода в км/ч, м/c.
Исходные данные: Пройденный путь - S; Время движения - t.
Представить решение задачи с помощью одной функции.
*/

/*
 * $s - км
 * $t - ч
 * $km_h - если true, то вывод в км/ч, если false - м\с*/
function getSpeed($s, $t, $km_h = true)
{
    $v = ($km_h) ? round($s / $t, 2) : round(($s * 1000) / ($t * 60 * 60), 2);
    $v .= ($km_h) ? " km/h" : " m/c";
    return $v;
}

$s = 140;
$t = 2;

echo getSpeed($s, $t, false);