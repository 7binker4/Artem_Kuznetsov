<?php
session_start();
//Работа с датой
//date_default_timezone_set('asia/yekaterinburg');
//$dateNow = date('H:i');
//function foo1($dateNow)
//{
//    if ($dateNow >= 8 and $dateNow < 20) {
//        return "<style>
//            main {background: linear-gradient(to right, aquamarine, #2e2ec4);}
//          </style>";
//    } else {
//        return "<style> main {background: linear-gradient(to left, #050565, #1414af);
//                        color: lightgray;}
//          </style>";
//    }
//}
?>
<main>
    <div class="fio"><b>Артем Кузнецов</b></div>
    <div class="main">
        <div align="center"><img id="img" src="images/jOP0dbKmH9s.jpg" width="70%" height="80%" alt="Фотография профиля"></div>
        <div class="about_me">
            <? $str = "Всем привет! Немного расскажу о себе. Родился в Магнитогорске в 2000 году. В 2018 окончил шкoлу и на данный момент являюсь студентом 4 курса МГТУ им. Носова. Учусь на кафедре: Информатика и вычислительная техника. Во время учебной практике был опыт работы в кампании Информсервис. Периодически занимаюсь самообучением в мире web-технологий. За 4 года обучения я понял что душа лежит больше к web разработке. Увлекаюсь воллейболом и компьютерными технологиями.";
                    echo $str;
            //           $str_me = explode(' ', $str);
//            for ($key = 0, $size = count($str_me); $key < $size; $key++){
//                if ($key >= 0 and $key <= 5){
//                    echo'<p style="color: yellow; display: inline; float: left; height: 20px; align: center"> ' . $str_me[$key] . '&nbsp' . '</p>';
//                } else {
//                    echo  '<p style="display: inline; float: left; height: 20px; align: center">' . $str_me[$key] . '&nbsp' . '</p>';
//                }
//            }?>
        </div>
        <div class="about_courses"><? $str1 = "Если говорить по поводу данного курса, то мне все очень нравиться, так как уделяется внимание каждому ученику и разбираются все возможные ошибки. А так же очень понятно и доступно преподноситься материал в каждом уроке";
                echo $str1;
            //            $str_courses = explode(' ', $str1);
//            for ($key = 0, $size = count($str_courses); $key < $size; $key++){
//                if ($key % 2 == 0){
//                    echo'<p style="color: red; display: inline; float: left";> ' . $str_courses[$key] . '&nbsp' . '</p>';
//                } else if ($key % 2 !== 0){
//                    echo'<p style="color: green; display: inline; float: left";"> ' . $str_courses[$key] . '&nbsp' . '</p>';
//                }
//            }?>
        </div>
    </div>

    <div class="grid">
        <div class="div1">
            <div class="photo div1"><img src="images/car.jpg"  width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1"><? $str2 = "Это моя машина на которой я езжу"; echo $str2; ?></div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/dog.jpg"  width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1"><? $str3 = "Это моя собака, которая мешает мне ночью спать"; echo $str3; ?></div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/its_me.jpg" width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1"> <?$str4 = "Это я в осенней чаще"; echo $str4; ?></div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/baban.jpg" width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1"><?$str5 = "Это боевой банан"; echo $str5; ?></div>
        </div>
    </div>

    <div class="container1">
        <div class="item">
            <p><img align="center" style="border-radius: 50px" src="images/sity.jpg" width="100%" alt="Картинка">
            </p>
            <p style="text-align: center"><?$str6 = "Какой-то красивый город"; echo $str6; ?></p>
        </div>
        <div class="item">
            <p><img src="images/88.jpg" style="border-radius: 50px" width="100%" alt="Картинка"></p>
            <p style="text-align: center"><?$str7 = "Еще один красивый город"; echo $str7;?></p>
        </div>
        <div class="item">
            <p><img style="border-radius: 50px" src="images/mountain.jpg" width="100%"
                    alt="Картинка"></p>
            <p style="text-align: center"><? $str8 = "Снежные горы на рассвете";  echo $str8; ?></p>
        </div>
        <div class="item">
            <p><img style="border-radius: 50px" src="images/lake.jpg" width="100%" alt="Картинка">
            </p>
            <p style="text-align: center"><? $str9 = "Зимнее ночное озеро";  echo $str9; ?></p>
        </div>
    </div>
</main>

<?php
$text  = $str . $str1 . $str2 . $str3 . $str4 . $str5 . $str6 . $str7 . $str8 . $str9;

$_SESSION['letters'] = $text;

?>


