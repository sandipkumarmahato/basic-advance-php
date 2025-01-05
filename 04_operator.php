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
    
    echo "<br>";
    echo "<br>";


    // Comparison Operators

    $x = 100;  
    $y = "100";

    var_dump($x == $y); // returns true because values are equal

    echo "<br>";

    $x = 100;  
    $y = "100";

    var_dump($x === $y); // returns false because types are not equal

    echo "<br>";

    $x = 100;  
    $y = "100";

    var_dump($x != $y); // returns false because values are equal

    echo "<br>";
    
    $x = 100;  
    $y = "100";
    
    var_dump($x <> $y); // returns false because values are equal

    echo "<br>";
    
    $x = 100;  
    $y = "100";
    
    var_dump($x !== $y); // returns true because types are not equal

    echo "<br>";
    
    $x = 100;
    $y = 50;
    
    var_dump($x > $y); // returns true because $x is greater than $y
    
    echo "<br>";
    
    $x = 10;
    $y = 50;
    
    var_dump($x < $y); // returns true because $x is less than $y

    echo "<br>";
    
    $x = 50;
    $y = 50;
    
    var_dump($x >= $y); // returns true because $x is greater than or equal to $y
    
    echo "<br>";
    
    $x = 50;
    $y = 50;
    
    var_dump($x <= $y); // returns true because $x is less than or equal to $y
    
    echo "<br>";

    $x = 5;  
    $y = 10;

    echo ($x <=> $y); // returns -1 because $x is less than $y
    echo "<br>";

    $x = 10;  
    $y = 10;

    echo ($x <=> $y); // returns 0 because values are equal
    echo "<br>";
    
    $x = 15;  
    $y = 10;
    
    echo ($x <=> $y); // returns +1 because $x is greater than $y
    echo "<br>";
    echo "<br>";

    // Increment / Decrement Operators

    $x = 10;  
    echo ++$x;  // 11

    echo "<br>";
    
    $x = 10;  
    echo $x++;  // 10
    
    echo "<br>";
    
    $x = 10;  
    echo --$x;   // 9   
    
    echo "<br>";
    
    $x = 10;  
    echo $x--;  // 10
    
    echo "<br>";
    echo "<br>";

    // Logical Operators

    $x = 100;  
    $y = 50;

    if ($x == 100 && $y == 50) {
        echo "Hello world!";
    }
    
    echo "<br>";

    $x = 100;  
    $y = 50;

    if ($x == 100 || $y == 80) {
        echo "Hello world!";
    }
    
    echo "<br>";

    $x = 100;  
    $y = 50;

    if ($x == 100 xor $y == 80) {
        echo "Hello world!";
    }
    
    echo "<br>";

    $x = 100;  

    if (!($x == 90)) {
        echo "Hello world!";
    }
    
    echo "<br>";

    if ($x == 100 and $y == 50) {
        echo "Hello world!";
    }
    
    echo "<br>";
    
    $x = 100;  
    $y = 50;
    
    if ($x == 100 or $y == 80) {
        echo "Hello world!";
    }
    
    echo "<br>";
    echo "<br>";
    

    // Ternary Operator

    $age = 20;
    print ($age >= 18) ? "Adult" : "Not Adult";
    ?>