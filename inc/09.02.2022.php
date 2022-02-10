<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Задание 1</h1>
        <?
        for ($i = 5; $i <= 13; $i++){
            echo "$i<br>";
        }
        ?>
    </div>
    <div>
        <h1>Задание 2. While</h1>
        <?
        $num = 1000;
        $i = 0;
        while ($num > 50){
            $result = $num /= 2;
            $i += 1;
            //echo "Количество итераций: $i, Результат выполнения цикла: $num";
        }
        echo "Количество итераций = $i, Результат работы цикла = $result";
        ?>
        <h1>Задание 2. For</h1>
        <?
        $j = 0;
        $num2 = 1000;
        for ($num2; $num2 > 50; $num2 /= 2){
            $j += 1;
        }
        echo "Количество итераций = $j, Результат работы цикла =  $num2"
        ?>
    </div>
    <div>
        <h1>Задание 3. (Ничего лучше не придумал к сожалению)</h1>
        <form name="name" method="post">
        i=<input type="text" name="i" style="width: 50px">
            <input type="submit">
        </form>

        <?
        $a = $_POST['i'];
        switch ($a){
            case 0;
                echo '0,1,2,3,4,5,6,7,8,9,10'; break;
            case 1;
                echo '0,1,2,3,4,5,6,7,8,9'; break;
            case 2;
                echo '0,1,2,3,4,5,6,7,8'; break;
            case 3;
                echo '0,1,2,3,4,5,6,7'; break;
            case 4;
                echo '0,1,2,3,4,5,6'; break;
            case 5;
                echo '0,1,2,3,4,5'; break;
            case 6;
                echo '0,1,2,3,4'; break;
            case 7;
                echo '0,1,2,3'; break;
            case 8;
                echo '0,1,2'; break;
            case 9;
                echo '0,1'; break;
            case 10;
                echo '0'; break;

        }
        ?>
        <h1>Задание 3. Неправильный аналог</h1>
        <?
        $arr = [
            '0,1,2,3,4,5,6,7,8,9,10',
            '0,1,2,3,4,5,6,7,8,9',
            '0,1,2,3,4,5,6,7,8',
            '0,1,2,3,4,5,6,7',
            '0,1,2,3,4,5,6',
            '0,1,2,3,4,5',
            '0,1,2,3,4',
            '0,1,2,3',
            '0,1,2',
            '0,1',
            '0'
        ];
        for ($m = 0; $m <= 10; $m++){
            echo "i = $m, Выводит: $arr[$m]";
            echo "<br>";
        }
        ?>
    </div>
</body>
</html>
