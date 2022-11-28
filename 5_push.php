<?php

$name = ['ram','sita','alex','ola','john','jum'];
$b    = 'nikhil';

function push($name,$b)
{
   for ($i=0; @$name[$i]!=null ; $i++) 
  {
  		// statement ...
  }
   $name[$i]=$b;

   print_r($name);
}


echo "<pre>";
push($name,$b);
echo "</pre>";

?>