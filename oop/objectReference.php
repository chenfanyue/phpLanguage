<?php
class A {
    public $foo = 3;
}  

$e = new A;
echo $e->foo, "\n";

function foo($obj) {
    $obj->foo = 200;
}

foo($e);
echo $e->foo;
