<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body style="text-align: center;">
  <h1>Find to Reverse String</h1>
  <form method="Post">
  <input type="textbox" name="str" required>
  <input type="submit" value="Reverse"name="submit"><br><br>
</form>
</body>
</html>


<?php
if(isset($_POST['submit']))
{ 
      $a = $_POST['str'];
      
function stringLength($a)
{
  $i=0;
  while(@$a[$i]!=null)
  $i++;
  return $i;
}

$b=stringLength($a)-1;

function stringrev($b,$a)
{

     $c="";

    for ($i=$b; $i>=0; $i--) 
      { 
          $c.= $a[$i];
      }
            echo $c;
}

stringrev($b,$a);
}

?>