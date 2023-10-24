<?php 

    // functions decleration

    function add($a,$b)
    {
        echo $a + $b;
    }

    add(4,56);

    echo "<br>";

    function sub(int $a, int $b)
    {
        echo $a - $b;
    }

    sub(67,56);


    echo "<br>";

    // arrow functions decleration
    $square = fn($val) => $val **2;

    echo $square(5);

    ?>
