<?php
    // Fibonacci Series

    $n = 10; // Number of terms
    $fib1 = 0;
    $fib2 = 1;

    echo "$fib1, $fib2";

    for ($i = 3; $i <= $n; $i++) {
        $next = $fib1 + $fib2;
        echo ", $next";
        $fib1 = $fib2;
        $fib2 = $next;
    }
?>