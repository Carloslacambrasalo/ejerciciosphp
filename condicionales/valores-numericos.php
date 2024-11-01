<?php
    $numero = rand(-100,100);
    if($numero < 0){
        echo "$numero Numero negativo";
    } elseif($numero > 0){
        echo "$numero Numero positivo";
    } else {
        echo "Numero: 0";
    }
?>
