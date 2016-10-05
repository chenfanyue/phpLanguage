<?php
class A {
	private $v='hello';
  private function foo() {
    echo "success!\n";
    print $this->v;
  }
	protected function bar(){
		$this->foo();
	}
}

class B extends A {
  function p(){
	  $this->bar();
  }
}

$b = new B();
$b->p();
