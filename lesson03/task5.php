<?php
    /*
    Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
    */

    $text = 'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.';

    function spaceToUnderscore($string) {
        $dictionary = [
            " " => "_"
        ];
        
        $len = mb_strlen($string, 'UTF-8');
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            $result[] = mb_substr($string, $i, 1, 'UTF-8');
        }
        foreach ($result as $key => $character) {
            foreach ($dictionary as $symbol => $sign) {
                if ($character == $symbol) {
                    $result[$key] = $sign;
                    break;
                }
            }
        }
        return implode($result);
    }
        
    echo "<b>До замены:</b> $text <hr>";
    echo "<b>После замены:</b>" . spaceToUnderscore($text);  
        
?>