<?php
    /*
    Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
    Написать функцию транслитерации строк.
    */
    $text = 'По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение при попытках прочитать рыбу текст. В отличии от lorem ipsum, текст рыба на русском языке наполнит любой макет непонятным смыслом и придаст неповторимый колорит советских времен.';
    
    function translit($string) {
        $dictionary = [
            "а" => "a",
            "б" => "b",
            "в" => "v",
            "г" => "g",
            "д" => "d",
            "е" => "e",
            "ё" => "e",
            "ж" => "zh",
            "з" => "z",
            "и" => "i",
            "й" => "y",
            "к" => "k",
            "л" => "l",
            "м" => "m",
            "н" => "n",
            "о" => "o",
            "п" => "p",
            "р" => "r",
            "с" => "s",
            "т" => "t",
            "у" => "u",
            "ф" => "f",
            "х" => "h",
            "ц" => "c",
            "ч" => "ch",
            "ш" => "sh",
            "щ" => "sch",
            "ь" => "'",
            "ы" => "y",
            "ъ" => "''",
            "э" => "e",
            "ю" => "yu",
            "я" => "ya"
        ];
        $len = mb_strlen($string, 'UTF-8');
        $result = [];
        for ($i = 0; $i < $len; $i++) {
            $result[] = mb_substr($string, $i, 1, 'UTF-8');
        };
        foreach ($result as $key => $character) {
            foreach ($dictionary as $rus => $trans) {
                if ($character == $rus) {
                    $result[$key] = $trans;
                    break;
                } elseif ($character == mb_strtoupper($rus)) {
                    $result[$key] = mb_strtoupper($trans);
                    break;
                }
            }
        };
        return implode($result);
    };

    echo "<b>Исходная строка:</b> $text <hr>";
    echo "<b>Транслитерация:</b>" . translit($text);
    
?>