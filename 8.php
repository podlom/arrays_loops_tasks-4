<?php
$arr = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9
];
$a = '';
foreach ($arr as $element) {
    $a .= '-'.$element;
}
echo $a.'-';


/*8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9.
С помощью цикла foreach создайте строку
'­1­2­3­4­5­6­7­8­9­'


*/