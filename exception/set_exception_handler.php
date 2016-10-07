<?php
function exception_handler($exception) {
  echo "Uncabcabc exception: " , $exception->getMessage(), "\n";
}

set_exception_handler('exception_handler');

throw new Exception('ExceptionHello');
echo "Not Executed\n";
