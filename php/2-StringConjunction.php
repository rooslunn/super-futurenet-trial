<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: russ
 * Date: 10/5/17
 * Time: 11:44 AM
 * @param string $s1
 * @param string $s2
 * @return string
 */

function StringConjunction(string $s1, string $s2): string
{
    $n = max(strlen($s1), strlen($s2));

    $result = '';

    $s1 = str_pad($s1, $n);
    $s2 = str_pad($s2, $n);

    for ($i = 0; $i < $n; ++$i)
    {
        if ($s1[$i] !== ' ') {
            $result .= $s1[$i];
        }
        if ($s2[$i] !== ' ') {
            $result .= $s2[$i];
        }
    }

    return $result;
}

assert(StringConjunction('', '') == '', 'Failed');
assert(StringConjunction('TEST', 'VALUE') == 'TVEASLTUE', 'Failed');
assert(StringConjunction('VALUE', 'TEST') == 'VTAELSUTE', 'Failed');
