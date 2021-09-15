<?php 

$h = 875000;
$j = 21;
$k = 16;
$l = 0;

function multdiv(){

    $GLOBALS['l'] = $GLOBALS['j'] * $GLOBALS['h'] / $GLOBALS['k'];
}

multdiv();
echo $l;




?>