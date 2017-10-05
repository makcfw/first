<?php
header('Content-type: text/html; charset=utf-8');
$name = Maxim;
$age = 31;
echo "Меня зовут $name <br>";
echo "Мне $age год<br><br>";
//Задание 2
$name2 = "Maxim";
$age2 = "31<br>" ;
echo "Меня зовут $name <br>";
echo "Мне $age год<br><br>";
//задание 3
define("cons",99);
 if (defined("cons")==true) echo "констатна существует<br>";
else echo "константы нет";
echo cons;
//Задание 4
$age4 = -9;
 if ($age4>18 and $age4<65) {
     echo "<br>вам еще работать и работать";}
     elseif ($age4 > 65){
       echo "<br>вам пора на пенсию";}
       elseif ($age4>=1 and $age4<=17){
         echo "<br>вам еще рано работать";
       }
       elseif ($age4<1){
           echo "<br>неизвестный возраст";
       }
//Задание 5
$day = 7;
switch ($day){
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "<br>Это рабочий день";
        break;
    case 6:
    case 7:
        echo "<br>выходной день";
    break;
}
if ($day<1 or $day>7)
    echo "<br>Неизвестный день";
//Задание 6
$bmw = array(
    "model"=>"X5",
    "speed"=>"120",
    "doors"=>"5",
    "year"=>"2015");
$opel = array(
        "model"=>"astra",
        "speed"=>"150",
        "doors"=>"3",
        "year"=>"2013"
);
$toyota = array(
    "model"=>"corolla",
    "speed"=>"99",
    "doors"=>"5",
    "year"=>"2017"
);
echo "<br>";
echo "BMW";
foreach($bmw as $value)
{
    echo "   ", $value," ";}
echo "<br>";
echo "OPEL";
foreach($opel as $value)
    {
        echo "   ", $value," ";
}
echo "<br>";
echo "TOYOTA";
foreach($toyota as $value)
{
    echo "   ", $value," ";
}

?>