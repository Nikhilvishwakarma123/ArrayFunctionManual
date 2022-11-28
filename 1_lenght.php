<?php

$name =   ['ram','sita','alex','ola','john'];
$fruits = ['apple','grape','banana','koma'];

function stringLength($name)
{
  $i=0;
  while(@$name[$i]!=null)
  $i++;
  return $i;
}

echo "String Length is : ".stringLength($name)."<br>";
echo "String Length is : ".stringLength($fruits);

?>