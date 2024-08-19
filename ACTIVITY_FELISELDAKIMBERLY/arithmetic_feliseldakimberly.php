<?php
    $number1 = 10;
    $number2 = 20;
    $number3 = 30;
    $number4 = 40;

    $sum = $number1 + $number2;
    $difference = $number3 - $number2;
    $product = $number1 * $number4;
    $division = $number4 / $number2;

    $total = $sum + $difference + $product + $division;

    $average = $total / 4;

    echo "The sum of $number1 and $number2 is $sum.<br><br>";
    echo "The difference between $number3 and $number2 is $difference.<br><br>";
    echo "The product of $number1 and $number4 is $product.<br><br>";
    echo "The division of $number4 and $number2 is $division.<br><br>";
    echo "The total of all results is $total.<br><br>";
    echo "The average of all results is $average.<br><br>";

?>