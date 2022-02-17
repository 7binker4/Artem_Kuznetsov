<?php
//Слайд 14. Задание 1
$arr = ['a', 'b', 'c'];
function foo1($arr, $min, $max, $len){
    for ($i = 0; $i < $len; $i++){
        $arr[] = mt_rand($min, $max);
    }
    return $arr;
}
$b = foo1($arr, 1,10, 10);
print_r($b);
echo '<br>';

//Слайд 14. Задание 2
$str = "HTML, CSS, PHP, BITRIX";
function foo2($str){
    return count(explode(',', $str));
}
echo foo2($str);
echo '<br>';

//Слайд 14. Задание 3
$str = "HTML, CSS, PHP, BITRIX";
function foo3($str){
    for ($i = mb_strlen($str); $i >= 0; $i--){
        $strRevers .= mb_substr($str, $i, 1, "UTF-8");
    }
    return$strRevers;
}
echo foo3($str);
echo '<br>';

//Слайд 14. Задание 4
$str = "HTML, CSS, PHP, BITRIX";
function foo4($str){
    return $str_len = strlen($str);

}
echo foo4($str);
echo '<br>';

//Слайд 14. Задание 5
$str = "HTML, CSS, PHP, BITRIX";
function foo5($str){
    $str1 = str_split($str);
    for ($i = 0; $i <= strlen($str); $i++){
        echo $str1[$i];
        echo '<br>';
    }
}
echo foo5($str);

?>