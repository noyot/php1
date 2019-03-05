<?php
    /*
    *Написать функцию, которая вычисляет текущее время и возвращает его в формате с
    правильными склонениями, 
    например: 
    22 часа 15 минут, 
    21 час 43 минуты
    */
    
    $todayDate = date("H:i:s");
    echo "Время сейчас: " . $todayDate . "<br>";
    
    $hours = date("H");
    $minutes = date("i");
    $seconds = date("s");
    
    function defineDate($t){
        if (($t==0) || ($t%10==0) || ($t>=5 && $t<=14) || ($t%10>=5 && $t%10<=9)) {
            return 1;
        }
        elseif ($t==1 || $t%10==1){
            return 2;
        }
        else {
            return 3;
        }
    }

    switch (defineDate((int)$hours)) {
        case 1:
            $dateH = "часов";
            break;
        case 2:
            $dateH = "час";
            break;
        default:
            $dateH = "часа";
    }

    switch (defineDate((int)$minutes)) {
        case 1:
            $dateM = "минут";
            break;
        case 2:
            $dateM = "минута";
            break;
        default:
            $dateM = "минуты";
    }

    switch (defineDate((int)$seconds)) {
        case 1:
            $dateS = "секунд";
            break;
        case 2:
            $dateS = "секунда";
            break;
        default:
            $dateS = "секунды";
    }
    
    echo ("Текущее время: " . $hours . " " . $dateH . ", " . $minutes . " " . $dateM . ", " . $seconds . " " . $dateS);
?>