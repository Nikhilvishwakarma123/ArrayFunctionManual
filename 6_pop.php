<?php


function pops($name)
{
	$array[]='';

   for ($i=0; @$name[$i]!=null ; $i++) 
    { 
	   $lenght = $i;
    }

    for ($a=0; $a <$lenght ; $a++) 
    { 
    	  
	   $array[$a]=$name[$a];

    }
	   print_r($array);
	
}

$name = ['ram','sita','alex','nikhil','kumar'];

pops($name);


?>