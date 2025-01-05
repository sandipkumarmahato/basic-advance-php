<?php
    $num = 5;
    $factorial = 1;
    
    $i = $num;
    while ($i > 0) {
        $factorial *= $i;
        $i--;
    }
    
    echo "Factorial of $num is $factorial.";    
?>