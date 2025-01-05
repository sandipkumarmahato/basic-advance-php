<?php
    // Arithmetic operators

    $x = 5;
    $y = 2;

    $sum = $x+$y;
    $sub = $x-$y;
    $mult = $x*$y;
    $div = $x/$y;
    $modulus = $x%$y;
    $exponentiation = $x**$y;


    echo "$x + $y = $sum";
    echo "<br>";
    echo "$x - $y = $sub";
    echo "<br>";
    echo "$x * $y = $mult";
    echo "<br>";
    echo "$x / $y = $div";
    echo "<br>";
    echo "$x % $y = $modulus";
    echo "<br>";
    echo "$x ** $y = $exponentiation";
    echo "<br>";
    echo "<br>";

    // Assignment Operators

    $a = 20;  
    $a += 100;
    echo $a;

    echo "<br>";
    
    $b = 120;  
    $b -= 100;
    echo $b;
    
    echo "<br>";
    
    $c = 12;  
    $c *= 10;
    echo $c;
    
    echo "<br>";
    
    $d = 120;  
    $d /= 13;
    echo $d;
    
    echo "<br>";

    $e = 120;  
    $e %= 13;
    echo $e;

    
?>