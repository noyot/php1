<?php
    /* 
    Реализовать основные 4 арифметические операции в виде функций 
    с двумя параметрами. Обязательно использовать оператор return.
    */
    $a = rand(-500,500);
    $b = rand(-500,500);
    echo "Значение переменной \$a равно: " . $a . "<br>";
    echo "Значение переменной \$b равно: " . $b . "<hr>";
    function plus($a,$b){
        return $a+$b;
    }
    function minus($a,$b){
        return $a-$b;
    }
    function multiply($a,$b){
        return $a*$b;
    }
    function divide($a,$b){
        return $a/$b;
    }
    echo "Сложение чисел \$a и \$b равно " . plus($a,$b) . "<br>";
    echo "Вычитание чисел \$a и \$b равно " . minus($a,$b) . "<br>";
    echo "Умножение чисел \$a и \$b равно " . multiply($a,$b) . "<br>";
    echo "Деление чисел \$a и \$b равно " . divide($a,$b) . "<br>";
?>