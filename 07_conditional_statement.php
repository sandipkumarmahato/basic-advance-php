<?php

    // If Statement

    $num = 10;
    if ($num > 5) {
        echo "The number is greater than 5.";
    }

    echo "<br>";

    // if else Statement
    
    $num = 3;
    if ($num > 5) {
        echo "The number is greater than 5.";
    } else {
        echo "The number is 5 or less.";
    }
    
    echo "<br>";
    
    // if elseif else Statement
    
    $num = 7;
    if ($num > 10) {
        echo "The number is greater than 10.";
    } 
    elseif ($num > 5) {
        echo "The number is greater than 5 but not more than 10.";
    } 
    else {
        echo "The number is 5 or less.";
    }
    
    echo "<br>";
    
    // switch Statement

    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "Start of the week!";
            break;
        case "Friday":
            echo "Weekend is near!";
            break;
        default:
            echo "It's just another day.";
    }

    echo "<br>";

    // for Loop

    for ($i = 1; $i <= 5; $i++) {
        echo "$i<br>";
    }

    echo "<br>";

    // while Loop

    $i = 5;
    while ($i <= 10) {
        echo "$i<br>";
        $i++;
    }

    echo "<br>";

    // do while loop

    $i = 11;
    do {
        echo "$i<br>";
        $i++;
    } while ($i <= 15);

    echo "<br>";

    // foreach Loop

    $colors = ["Red", "Green", "Blue"];
    foreach ($colors as $color) {
        echo "$color<br>";
    }

    $person = ["Name" => "Sandip", "Age" => 25, "City" => "Kolkata"];
    foreach ($person as $key => $value) {
        echo "$key: $value<br>";
    }

    
    
?>