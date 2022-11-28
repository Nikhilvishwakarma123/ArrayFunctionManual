<?php

$array=[68,56,55];

$findMax = $array[0]>$array[1]?($array[0]>$array[2]?$array[0]:$array[2]):($array[1]>$array[2]?$array[1]:
	       $array[2]);

echo "Max Number is : ".$findMax;

?>