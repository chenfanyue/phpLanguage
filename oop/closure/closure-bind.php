<?php

class A {
    private static $sfoo = 1;
    private $ifoo = 2;
}

$cl1 = static function() {
    return static::$sfoo;
};

// bind a static closre to a class
$bcl1 = Closure::bind($cl1, null, 'B');
echo $bcl1(), "\n";


class B {
    private static $sfoo = 11;
    private $ifoo = 22;
}

$cl2 = function() {
    return $this->ifoo;
};

$bcl2 = Closure::bind($cl2, new B(), 'B');
echo $bcl2(), "\n";
