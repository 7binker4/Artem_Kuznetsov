<?php
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
?>

<?php require_once 'inc/header.php' ?>
<main>
    <div class="fio"><b>Артем Кузнецов</b></div>
    <div class="main">
        <div align="center"><img id="img" src="images/jOP0dbKmH9s.jpg" width="70%" height="80%" alt="Фотография профиля"></div>
        <div class="about_me">Всем привет! Немного расскажу о себе. Родился в Магнитогорске в 2000 году. В 2018 окончил
            шкoлу и на данный момент
            являюсь студентом 4 курса МГТУ им. Носова. Учусь на кафедре: "Информатика и вычислительная техника". Во
            время учебной практике был
            опыт работы в кампании "Информсервис". Периодически занимаюсь самообучением в мире web-технологий. За 4
            года обучения я понял что душа
            лежить больше к web разработке. Увлекаюсь воллейболом и компьютерными технологиями.
        </div>
        <div class="about_courses">Если говорить по поводу данного курса, то мне все очень нравиться,
            так как уделяется внимание каждому ученику и разбираются все возможные ошибки. А так же очень понятно
            и доступно преподноситься материал в каждом уроке
        </div>
    </div>

    <div class="grid">
        <div class="div1">
            <div class="photo div1"><img src="images/car.jpg"  width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1">Это моя машина на которой я езжу</div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/dog.jpg"  width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1">Это моя собака, которая мешает мне ночью спать</div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/its_me.jpg" width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1">Это я в осенней чаще</div>
        </div>
        <div class="div1">
            <div class="photo div1"><img src="images/baban.jpg" width="100%" alt="Картинка"></div>
            <br>
            <div class="opisanie div1">Это боевой банан</div>
        </div>
    </div>

    <div class="container1">
        <div class="item">
            <p><img align="center" style="border-radius: 50px" src="images/sity.jpg" width="100%" alt="Картинка">
            </p>
            <p style="text-align: center">Какой-то красивый город</p>
        </div>
        <div class="item">
            <p><img src="images/88.jpg" style="border-radius: 50px" width="100%" alt="Картинка"></p>
            <p style="text-align: center">Еще один красивый город</p>
        </div>
        <div class="item">
            <p><img style="border-radius: 50px" src="images/mountain.jpg" width="100%"
                    alt="Картинка"></p>
            <p style="text-align: center">Снежные горы на рассвете</p>
        </div>
        <div class="item">
            <p><img style="border-radius: 50px" src="images/lake.jpg" width="100%" alt="Картинка">
            </p>
            <p style="text-align: center">Зимнее ночное озеро</p>
        </div>
    </div>
</main>
<?php require_once 'inc/footer.php'?>