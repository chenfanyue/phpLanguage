<?php
namespace SomeNamespace;

class SomeClass {

  function someFunction() {
   try {
    throw new Exception('Some Error Message');
   } catch (\Exception $e) { //?
    var_dump($e->getMessage());
   }
  }
}
