
<?php
    echo "Hello world!<br>"; // php echo равнозначно =
    // print "";
    //print_r("Name $s", $s);
    #-- однострочный комментарий
    /* конкатенация в php в отличие от js осуществляется не знаком "+", а "."*/

    $var = 1;
    $var1 = 2;
    echo $var.$var1."<br>"; // 12
    echo $var + $var1."<br>"; // 3
    //echo "<a href=\" \">"; // экранирование кавычек. Можно снаружи поставить одинарные ' '
    // <a href="/url/"<?php echo "url"; </a>
?>

<?php  //Arrays //

    $array = [];
    $array1 = Array();
    $arr = ["black", "red"]; // простой массив
    $associat = [
            "color" => "red",
            "age" => 25
    ];

    //Objects
    /*$obj = new A;
    $obj->color = "red";
    echo  $obj->"color";*/

    TRUE == 1;
    FALSE == 0;
    "" == FALSE;
    " " == TRUE;
    $var2 = true;
    echo $var2++."<br>"; //выведет все равно 1
    echo $var3 = null; //ничего не выведет

    // isset - оператор, кот. проверяет наличие переменной, возврыщает булевское значение
    echo isset($var1).PHP_EOL; // PHP_EOL - пробел
    //echo "<br>";

    // unset - удаление переменной
    unset($var2);
    echo isset($var)."<br>";

    // методы
    $var5 = 6;
    echo is_int($var5)."<br>";
    echo gettype($var5)."<br>";
    $var6 = (int)"19kjlj";
    echo $var6."<br>";

    // одинарные кавычки выведутся как есть
    echo  '$var + $var2'."<br>";
    // двойные
    echo  "$var1 + $var2"."<br>";

    //возведение в степень
    $a = 2;
    $b = 3;
    echo $a**$b;

    // вывести массив
    print_r($arr);
    echo "<br>";

    // определение констант
    define('NAME_STUDENT', 'Max');

    echo NAME_STUDENT."<br>";
    echo "Hello ".NAME_STUDENT."<br>";

    // отладочные функции: print_r() - выв. значение переменной, Var_dump() - инфо о переменной и ее тип
    echo "<pre>";
    print_r($arr);
    Var_dump($arr);

    // сокращенные записи
    $n = 6;
    echo ($n += 1)."<br>";
    $message = "Hello";
    $message .= " world!";
    echo $message."<br>";

    //lets practics//
    $variable_1 = 66;
    $variable_2 = 6;
    echo $variable_1+$variable_2."<br>";
    echo $variable_1-$variable_2."<br>";
    echo $variable_1*$variable_2."<br>";
    echo $variable_1/$variable_2."<br>";
    echo $variable_1%$variable_2."<br>";
    echo $variable_1**$variable_2."<br>";

    $v = 25;
    $m = 70;
    $l =100;
    if(($v>26 && $v<$m)
        || ($v ==25 && $l ==100 && $m == 70)){
        echo "OK";
    }
?>












