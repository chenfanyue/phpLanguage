<?php

function a(float $a,$b=22,$c='cc',...$d)
{
	var_dump(func_num_args());
	var_dump(func_get_args());
	var_dump(func_get_arg(0));
	var_dump($d);
	var_dump(...$d);
}

a(1.1,222,'ccc','variadic parameter',[1,2,3],9.9);

/* The output is as following:

int(6)
array(6) {
  [0]=>
  float(1.1)
  [1]=>
  int(222)
  [2]=>
  string(3) "ccc"
  [3]=>
  string(18) "variadic parameter"
  [4]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  [5]=>
  float(9.9)
}
float(1.1)
array(3) {
  [0]=>
  string(18) "variadic parameter"
  [1]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
  [2]=>
  float(9.9)
}
string(18) "variadic parameter"
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
float(9.9)
*/
