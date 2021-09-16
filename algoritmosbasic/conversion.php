<?php 

$valor = "1754252552.1155";

if(is_integer($valor) == true){
   
    echo $valor ." É o valor inteiro";
}
elseif (is_string($valor) == true){
    
    echo var_dump($valor) ."O valor inteiro é:";
    $convert = (int)$valor;
    echo $convert;

}
else{

    $convert = (int)$valor;
    echo $convert ." É o valor inteiro";

}




?>