<?php

function contador(){
    static $x=0;
    

    while($x <= 120){
        echo $x;
        echo "\n";
        $x++;
        
    }
}

contador();



?>