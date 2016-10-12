<?php
echo PHP_VERSION, PHP_EOL;

class A{
	public function test(){
		echo "test1";
	}
	public function test($a){
		echo "test2";
	}
}
$a=new A();
$a->test();
$a->test($a);
