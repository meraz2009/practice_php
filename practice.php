<?php 
//$numbers=range(0,1000);
class Test
{
public  function test(){
  $result = array();
$numbers=range(0,1000);
foreach ($numbers as $number) {
    $result[] = $number * 10;
}
return $result;
}
}
$new = new Test;
print_r($new->test());
//range function



?>
