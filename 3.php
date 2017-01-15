<?php
/*3) Реализовать шифрование текста путем замены букв друг другом (напр. A => B, B=>X, итд).
Каждая буква может представлять только одну другую букву. Написать три функции - первая генерирует ключ в виде нового алфавита.
Вторая шифрует заданный текст по заданному ключу. Третья расшифровывает заданный зашифрованный текст по заданному ключу. */


function generateKey()
{
    $arr1 = range('A', 'Z');
    $arr2 = range('a', 'z');

    $arr = array_merge($arr1, $arr2);
    $keyMatrix = array_flip($arr);

    foreach ($keyMatrix as $key => &$value) {
        $randomKey = array_rand($arr, 1);
        $value = $arr[$randomKey];

        unset($arr[$randomKey]);
    }
    return $keyMatrix;

}


function encodeTextByKey($text, $key)
{
    return strtr($text, $key);
}

function decodeTextByKey($text, $key)
{
    return strtr($text, array_flip($key));
}


$text = "An array in PHP is actually an ordered map. A map is a type that associates values to keys. This type is optimized
for several different uses; it can be treated as an array, list (vector), hash table (an implementation of a map), dictionary,
collection, stack, queue, and probably more.
As array values can be other arrays, trees and multidimensional arrays are also possible.";

$key = generateKey();

echo $text . '<br>';

$result = encodeTextByKey($text, $key);
echo '<br>' . $result . '<br>';

$text = decodeTextByKey($result, $key);
echo '<br>' . $text;