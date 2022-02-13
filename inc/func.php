<?php

//Работа с датой
date_default_timezone_set('asia/yekaterinburg');
$dateNow = date('H:i');
if ($dateNow >= 8 and $dateNow < 20){
    echo "<style> 
            main {background: linear-gradient(to right, aquamarine, #2e2ec4);}
          </style>";
} else{
    echo "<style> main {background: linear-gradient(to left, #050565, #1414af);
                        color: lightgray;}
          </style>";
}
//Разница в днях
$dateDiff = date_diff(new DateTime(), new DateTime('2000-03-30 00:00:01'))->days;

//Количество слов, глассные
global $str;
global $str1;
global $str2;
global $str3;
global $str4;
global $str5;
global $str6;
global $str7;
global $str8;
global $str9;
echo $str9;
$result_str = explode(' ', $str) + explode(' ', $str1);
?>
