<?php
    $n1=rand(0,100);
    $n2=rand(0,100);
    $n3=rand(0,100);

    echo " los números son $n1, $n2 y $n3 " . " ";

    if ($n1 > $n2 && $n2 > $n3) {
        echo "$n1, $n2, $n3";
    }   elseif ($n1 > $n2 && $n2 < $n3 && $n1 > $n3){
        echo "$n1, $n3, $n2";
    }   elseif ($n1 < $n2 && $n2 < $n3) {
        echo "$n3, $n2, $n1";
    }   elseif ($n1 < $n2 && $n3 < $n2 && $n1 < $n3) {
        echo "$n2, $n3, $n1";
    }   elseif ($n1 < $n2 && $n1 > $n3){
        echo "$n3, $n1, $n2";
    }   else {
        echo "$n2, $n1, $n3";
    }

?>