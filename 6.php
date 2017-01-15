<?php
/*6) Напишите функцию, которая будет находить корни квадратного уравнения.*/

function getQuadraticEquationRoots($a, $b, $c)
{
    if ($a == 0) return false;

    if ($b == 0) {
        if ($a * $c > 0) { //случай, когда под корнем отрицательное значение

            //коректный вывод значения корня и его значения
            $flag = ((intval(sqrt($c / $a))) == sqrt($c / $a)) ? true : false;
            $sqrt = ($flag) ? sqrt($c / $a) : "&radic;($c / $a)";

            $x1 = 'i*' . $sqrt;
            $x2 = '-' . 'i*' . $sqrt;

        } elseif ($c == 0) {
            $x1 = $x2 = 0;
        } else {
            $x1 = sqrt(-($c / $a));
            $x2 = -sqrt(-($c / $a));
        }
    } elseif ($b != 0 && $c == 0) {
        $x1 = 0;
        $x2 = -($b / $a);
    } else {
        //вычисляем дискриминант
        $d = pow($b, 2) - 4 * $a * $c;
        if ($d > 0) {
            $x1 = (-$b + sqrt($d)) / 2 * $a;
            $x2 = (-$b - sqrt($d)) / 2 * $a;
        } elseif ($d == 0) {
            $x1 = $x2 = (-$b) / 2 * $a;
        } else {
            //если нет действительных корней
            $d *= -1;

            //коректный вывод значения корня и его значения
            $flag = ((intval(sqrt($d))) == sqrt($d)) ? true : false;
            $sqrt = ($flag) ? sqrt($d) : "&radic;$d";

            $x1 = '(' . -$b . '+' . 'i*' . "$sqrt)/" . (2 * $a);
            $x2 = '(' . -$b . '-' . 'i*' . "$sqrt)/" . (2 * $a);
        }
    }
    return ['x1' => $x1, 'x2' => $x2];

}

$a = 1;
$b = 2;
$c = 4;
echo '<pre>';
print_r(getQuadraticEquationRoots($a, $b, $c));
echo '</pre>';