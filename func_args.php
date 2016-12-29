<?php

function a(float $a,$b=22,$c='cc',...$d)
{
	var_dump(func_num_args());
	var_dump(func_get_args());
	var_dump(func_get_arg(3));
	var_dump($d);
	var_dump(...$d);
}

a(1.1,222,'ccc',[1,2,3]);

/* The output is as following:

int(4)

array(4) {
  [0]=>
  float(1.1)
  [1]=>
  int(222)
  [2]=>
  string(3) "ccc"
  [3]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}

array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}

array(1) {
  [0]=>
  array(3) {
    [0]=>
    int(1)
    [1]=>
    int(2)
    [2]=>
    int(3)
  }
}

array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
}
*/
