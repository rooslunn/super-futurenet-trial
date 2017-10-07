<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/5/17
 * Time: 11:25 AM
 * @param array $a
 * @return bool
 */


function ArrMax(array $a)
{
    $n = count($a);
    if ($n < 1) {
        return false;
    }

    $a = array_map(function ($v) {
        return (float) $v;
    }, $a);

    $max = $a[0];
    for ($i = 1; $i < $n; ++$i) {
        if ($a[$i] > $max) {
            $max = $a[$i];
        }
    }

    return $max;
}

assert(ArrMax([]) === false);
assert(ArrMax([0]) == 0);
assert(ArrMax([5, 6, 99]) == 99);
assert(ArrMax([false, null, true, 1, '99.9', '99', '99.0']) == 99.9);