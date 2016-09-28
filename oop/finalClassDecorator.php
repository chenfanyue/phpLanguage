<?php
final class Foo
{
    public function doFoo()
    {
        // do something useful and return a result
    }
}

final class FooDecorator
{
    private $foo;
   
    public function __construct(Foo $foo)
    {
        $this->foo = $foo;
    }
   
    public function doFoo()
    {
          $result = $this->foo->doFoo();
          // ... customize result ...
          return $result;
    }
}
