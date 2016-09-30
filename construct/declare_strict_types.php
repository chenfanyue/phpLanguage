<?php
declare(strict_types=1);
// Without the statement above the default mode is coercive.

function sum(int $a, int $b) :int {
    return $a + $b;
}

var_dump(sum(1, 2));
var_dump(sum(1.5, 2.5)); //Uncaught TypeError.
