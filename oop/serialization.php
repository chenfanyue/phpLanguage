<?php
// somewhere containing the scarfolding class.
  class A {
      protected $one = 123;
    
      public function show_one() {
          echo $this->one;
      }
  }
  
// page1.php:  
  $a = new A;
  $s = serialize($a);
  // store $s somewhere where page2.php can find it.
  file_put_contents('store', $s);

// page2.php:

  $t = file_get_contents('store');
  $b = unserialize($t);

  $b->show_one();
