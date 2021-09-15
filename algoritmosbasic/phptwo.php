<?php
$x = 10000;
$y = 10;
$z = 0;
function mutiplicar() {
  global $x, $y, $z;
  $z = $x * $y;
} 

mutiplicar();  
echo $z; 
?>