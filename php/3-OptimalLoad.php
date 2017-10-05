<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/5/17
 * Time: 2:32 PM
 * @param array $a
 * @param int $capacity
 * @return int
 * @internal param int $load
 */

function OptimalLoad(array $a, int $capacity): int
{
    $result = 0;
    $truck_rem = $capacity;

    rsort($a);
    $n = count($a);

    for ($i = 0; $i < $n; ++$i) {
        if ($a[$i] > $truck_rem) {
            $result++;
            $truck_rem = $capacity - $a[$i];
        } else {
            $truck_rem -= $a[$i];
        }
    }

    return ++$result;
}

assert(OptimalLoad([9, 8, 2, 2, 5, 4], 10) == 4);
assert(OptimalLoad([2, 5, 4, 7, 1, 3, 8], 10) == 4);