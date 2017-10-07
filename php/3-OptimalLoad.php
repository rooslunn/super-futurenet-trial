<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/5/17
 * Time: 2:32 PM
 */

/**
 * Bin Packing problem?
 *
 * @param array $a
 * @param int $capacity
 * @return int
 */
function OptimalLoad(array $a, int $capacity): int
{
    $result = 0;
    $truck_rem = $capacity;

    rsort($a);
    $n = count($a);

    for ($i = 1; $i < $n; ++$i) {
        if ($a[$i] > $truck_rem) {
            $result++;
            $truck_rem = $capacity - $a[$i];
        } else {
            $truck_rem -= $a[$i];
        }
    }
    $result++;

    return $result;
}

assert(OptimalLoad([9, 8, 2, 2, 5, 4], 10) == 3);
assert(OptimalLoad([2, 5, 4, 7, 1, 3, 8], 10) == 3);
