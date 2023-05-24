<?php

function fibo($n)
 {
    if ($n <= 0)
     {
      return 0;
    } 
    elseif ($n == 1) 
    {
      return 1;
    }
     else
      {
      return fibo($n - 1)+fibo($n - 2);
    }
  }
  $n=10;
  echo "Fibonacci series of first " . $n . " numbers: ";
  for ($i = 0; $i < $n; $i++)
  {  
	echo fibo($i);  
    echo " ";  
   }  
?>