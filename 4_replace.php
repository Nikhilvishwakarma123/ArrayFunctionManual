<?php

$name =   ['ram','sita','alex','ola','john'];
$fruits = ['apple','grape','banana'];

function replace($name,$fruits){
   for ($i=0; @$fruits[$i]!=null ; $i++) { 
       $name[$i]=$fruits[$i];
      
   }
    print_r($name);
}
echo "<pre>";
replace($name,$fruits);
echo "</pre>";

?>