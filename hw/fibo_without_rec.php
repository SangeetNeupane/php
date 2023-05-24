<?php

function fibonacci_series($n) {
    $a= 0;
    $b = 1;
    $c = 0;
    for ($i = 0; $i < $n; $i++) {
      
        echo $a . " ";
        $c = $a+$b;
        $a =$b ;
        $b = $c;
      }
      
    }

    $n = 10;
    echo "Fibonacci series of first " . $n . " numbers: ";
    fibonacci_series($n);

?>