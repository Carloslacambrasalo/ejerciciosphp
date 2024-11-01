<?php
    $n1=rand(0,20);
    $n2=rand(0,20);
    if ($n1 > $n2) {
        echo "$n1 es mayor que $n2";
    }
    elseif ($n2 > $n1) {
        echo "$n2 es mayor que $n1";
    }
    else {
        echo "$n1 y $n2 son iguales";
    }
    
    ?>
    