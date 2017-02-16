<?php

// ITERATIVO
function fibonacciIter($n){
    
    if($n >= 0 && $n <= 1){
        return $n;
    }
    $array = [0,1];
    for($i=1;$i<$n;$i++){        
        $array[] = $array[$i] + $array[$i-1];       
    }
    return end($array);
}


// RICORSIVO
function fibonacciRico($n){
    
    if ($n < 2){
       return $n;   
    }
    return fibonacciRico($n - 1) + fibonacciRico($n - 2);
}
echo "Metodo fibonacci ITERATIVO".PHP_EOL;
echo fibonacciIter(0).PHP_EOL;
echo fibonacciIter(1).PHP_EOL; 
echo fibonacciIter(5).PHP_EOL; 
echo fibonacciIter(8).PHP_EOL;

echo "Metodo fibonacci RICORSIVO".PHP_EOL;
echo fibonacciRico(0).PHP_EOL;
echo fibonacciRico(1).PHP_EOL; 
echo fibonacciRico(5).PHP_EOL; 
echo fibonacciRico(8).PHP_EOL;