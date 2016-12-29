<?php

// ?:
$i=2;
$a=null;

echo $a??$i=1000;
echo $i;

// ??
$i=2;
// $a=null;

echo $a??$i=1000;
echo $i;

/* Conclusion
	1. Both support short-circle behavior.
	2. ?: treats the operand on its left as a boolean
	   while ?? decides whether that's null or not.
*/
