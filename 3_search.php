<?php

function searchWord($a,$b)
{
   $status=false;

   for ($i=0; $i <= 3; $i++) 
{ 
	if ($a[$i]==$b) 
	{
		$status=true;
		break;
	}
}

 if ($status==true) 
  {
	echo "array found $b.$i";
   }
 else{
    echo "array not found";
    }
}

$a=["this","is","aim","cow"];
$b="cow";

searchWord($a,$b);

?>