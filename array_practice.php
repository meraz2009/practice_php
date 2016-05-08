<?php
function for_array($a)
{
	return $a*$a;
}
$a=[1,2,3,4];
$b=array_map("for_array",$a);
print_r($b);die;
?> 
