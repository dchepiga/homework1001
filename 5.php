<?php
/*5) Написать функцию, определяющую является ли переданная в неее строка  палиндромом*/

function isPalindrome($string)
{
    $string = preg_replace('/[^a-zA-Z0-9]/', "", $string);
    $string = strtolower($string);

    if (empty($string)) { //если строка не являлась словом или фразой
        return false;
    }

    for ($i = 0, $end = strlen($string) - 1, $middle = ceil($end / 2); $i < $middle; ++$i) {
        if ($string[$i] != $string[$end - $i]) {
            return false;
        }
    }

    return true;
}

$str = "Was it a car or a cat I saw?";
//$str = "In girum imus nocte et consumimur igni";

$result = ((isPalindrome($str)) ? " - palindrome" : " - not palindrome");
echo "\"$str\"" . $result;
