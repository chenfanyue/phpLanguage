<?php
class A {
    private function foo() {
        echo "success!\n";
    }
    public function test() {
        $this->foo();
        static::foo();
    }
}

class B extends A {

}

class C extends A {
    protected function foo() {

    }
}

$b = new B();
$b->test(); //? Why this line of code can execute correctly?
$c = new C();
$c->test();
