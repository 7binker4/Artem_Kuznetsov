<?php
<<<<<<< HEAD
session_start();
=======
>>>>>>> 9b530aa3dbd431e6b545eee14c9ade4fac5a2fce
//Количество глассных
function letters($get){
    return $count = preg_match_all('/[ёуеыаоэяиюЁУЕЫАОЭЯИЮ]/i', $get, $m) / 2;
}
//количество слов
function words($get){
    return $result_str = count(explode(' ', $get));
}
//Разница в днях
function diffDays()
{
    return $dateDiff = date_diff(new DateTime(), new DateTime('2000-03-30 00:00:01'))->days;
}
?>
