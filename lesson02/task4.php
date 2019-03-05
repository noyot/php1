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

    function mathOperation($arg1, $arg2, $operation){
        switch ($operation) {
            case "cложение":
                return plus($arg1, $arg2);
                break;
            case "вычитание":
                return minus($arg1, $arg2);
                break;
            case "умножение":
                return multiply($arg1, $arg2);
                break;
            case "деление":
                return divide($arg1, $arg2);
                break;
            default: 
                return "Неправильно задана операция";
                break;
        }
    }
    
    echo "Сложение чисел \$a и \$b равно " . mathOperation ($a, $b, "cложение") . "<br>";  
    echo "Вычитание чисел \$a и \$b равно " . mathOperation ($a, $b, "вычитание") . "<br>";  
    echo "Умножение чисел \$a и \$b равно " . mathOperation ($a, $b, "умножение") . "<br>";  
    echo "Деление чисел \$a и \$b равно " . mathOperation ($a, $b, "деление") . "<br>";  
?>