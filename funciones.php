<?php 
function calcularMultiplos($multiplicador, $limite) {
    $multiplos = [];
    for ($i = 1; $i <= $limite; $i++) {
        $multiplos[] = $multiplicador * $i;
    }
    return $multiplos;
}


 //función que calcula el fibonacci
function fibonacci($n) {
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }   
}

// funcion que calcula un fibonnaci y los guarde en un array
function fibonacciArray($n) {
    $fibonacci = [];
    for ($i = 0; $i <= $n; $i++) {
        $fibonacci[] = fibonacci($i);
    }
    return $fibonacci;
}