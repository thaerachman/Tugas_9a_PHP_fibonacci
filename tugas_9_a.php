<?php
    function fibonacci($fib){
        $fib1=0;
        $fib2=1;
        $counter = 0;

        do{
            $counter = $counter+1;
            echo ' '.$fib1; 
            $fib3 = $fib2 + $fib1; 
            $fib1 = $fib2; 
            $fib2 = $fib3; 
        } while ($counter < $fib);
    }


    echo "Deret Fibonacci Dari 0 sampai dengan 20 adalah : <br>",fibonacci(22) ;
   
   
?>
