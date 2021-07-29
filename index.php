<?php
echo "<b> Первое задание</b><br />";
// Создать функцию определяющую какой тип данных ей передан и выводящей соответствующее сообщение.
$data = array(7, 6, 9., NULL, new stdClass, 'строка');

foreach ($data as $value) {
  dataType($value);
}

function dataType($val){
  echo gettype($val). "<br />";
}

//Второе задание
//Создать функцию которая считает все буквы b в переданной строке, в случае если передается не строка функция должна возвращать false
echo "<b> Второе задание</b><br />";

echo $data = "Brown bear, red book, best, studio, common, branch.". '<br />';//  строка для примера
$b = 'b';

everyB($data, $b);

function everyB($string, $find){
  if(gettype($string)=== 'string') {
    echo "Функцию которая считает все буквы b в переданной строке. в данной строке : ". substr_count($string, $find).' '.'символов b';
  } else {
    echo 'false';
  }
}
//ubstr_count(mb_strtolower($string), $find) // как вариант с регистром, но после стал показывать на 1 больше
echo "<br />";



//  Третье задание
// Создать функцию которая считает сумму значений всех элементов массива произвольной глубины

echo "<b>Третье задание</b><br />";
 ///
// function arraySum($arr) {
//     $sum = 0;
//     foreach($arr as $elem)
//         $sum += $elem;
//     return $sum;
// }
// $values = array(1,2,5,100,-30,30.5);
// echo arraySum($values); //выведет 108.5

function arraySum($arr){
  $sum = 0;
  foreach ($arr as $key => $value) {
    if(is_array($value)){
      $sum += arraySum ($value);
    } else{
      $sum += $value;
    }
  }
  return $sum;
}
$values = array(1,2,5,100,-30,30.5);
echo arraySum($values); //выведет 108.5

echo "<br />";

// Создать функцию которая определит сколько квадратов меньшего размера можно вписать в квадрат большего размера размер возвращать в float
echo "<b> Четвертое задание</b><br />";

$a = 9;
$b = 4;

echo squerCount($a, $b);
echo "<br />";
echo squerCount2($a, $b);

function squerCount($big, $small){
  $big *= $big;
  $small *= $small;
  if($big > $small){
    echo (float)($big / $small);
  }else {
    echo (float)($small / $big);
  }
}
// Этот вариант с целыми числами
function squerCount2($big, $small){
  $round = round($big / $small, 0, PHP_ROUND_HALF_DOWN);
  echo $round * $round;
}

?>
