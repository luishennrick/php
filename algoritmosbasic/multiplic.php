<?php 
// Multiplicando números grandes sem alocar o resultado diretamente na memória

$u=22223344;
$v=11223214;
$n=8;

function mult($u,$v,$n){

 

    if ( $u <999 and $v < 999){

        return $u * $v;
    }

        $m = $n / 2;
        $p = $u / 10 ** $m;
        $q = $u % 10 ** $m;
        $r = $v / 10 ** $m;
        $s = $v % 10 ** $m;
        $pr = mult($p, $r, $m);
        $qs = mult($q, $s, $m);
        $y =  mult($p + $q, $r + $s, $m + 1);
        $uv = $pr * 10**(2*$m) + ($y - $pr - $qs) * 10**$m + $qs;

    return $uv;    





    

}


echo mult($u,$v,$n);


?>