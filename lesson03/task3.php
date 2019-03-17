<?php
    /*
        Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
        Московская область:
            Москва, Зеленоград, Клин
        Ленинградская область:
            Санкт-Петербург, Всеволожск, Павловск, Кронштадт
        Рязанская область … (названия городов можно найти на maps.yandex.ru)
    */

    $array = [
        "Московская область" => ["Москва", "Зеленоград", "Клин"],
        "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
        "Иркутская область" => ["Иркутск", "Братск", "Зима", "Усолье-Сибирское"],
        "Республика Бурятия" => ["Улан-Удэ", "Закаменск", "Кяхта", "Бабушкин"]
    ];
    foreach ($array as $state => $towns) {
        echo "<b>$state:</b><br>";
            foreach ($towns as $key => $value) {
                $separator = ($key < count($towns) - 1) ? ", " : "";
                echo "$value" . $separator;
            }
        echo "<br>";
}
?>