<?php
/*
 * Static references to the current class like self:: or 
 * __CLASS__ are resolved using the class in which the 
 * function belongs, as in where it was defined.
 */
 
class A {
    public static function who() {
        echo __CLASS__;
    }
    public static function test() {
        self::who();
    }
}

class B extends A {

}

B::test(); // The output is 'A'.
