<?php
/*
 * An exception could be passed subsequently or 
 * to the outer level within a nested 'try-catch'
 * structure.
 */
class MyException extends Exception { }

class Test {
    public function testing() {
        try {
            try {
                throw new MyException('foo!');
            } catch (MyException $e) {
                // rethrow it
                throw $e;
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

$foo = new Test;
$foo->testing();
