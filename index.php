<?php
//посчитать длину массива
$arr = [1, 2, 3, 7, 31, 4, 1, 8, 6];
echo 'Длина массива ='. count($arr).' ' .'символов <br /> ';

//получить сумму 4,5,6 элемента
echo 'Сумма 4, 5, 6 элемента ='. $arr[3] + $arr[4] + $arr[5]."<br />";


//переместить первые 4 элемента массива в конец массива
$count = 0;
foreach ($arr as $key => $value) {
  $arr[] = array_shift($arr);
  $count++;
  if ($count>=4){
    break;
  }
}
var_dump($arr);


// Второй блок
echo "<br /> <b>Второй блок </b> ";

$firstArr = [
  'one' => 1,
  'two' => 2,
  'three' => 3,
  'foure' => 5,
  'five' => 12,
];

$secondArr = [
  'one' => 1,
  'seven' => 22,
  'three' => 32,
  'foure' => 5,
  'five' => 13,
  'six' => 37,
];

//найти все элементы которые присутствую в первом и отсутствуют во втором
echo "<br /> найти все элементы которые присутствую в первом и отсутствуют во втором :" . ' ';
$result = array_diff($firstArr, $secondArr);
print_r($result);


//найти все элементы которые отсутствуют во втором  массиве и присутствуют в первом
echo "<br /> найти все элементы которые отсутствуют во втором  массиве и присутствуют в первом :" . ' ';
$result2 = array_diff($secondArr, $firstArr);
print_r($result2);


//найти все элементы значения которых совпадают
echo "<br /> найти все элементы значения которых совпадают :" . ' ';
$result3 = array_intersect($firstArr, $secondArr);
print_r($result3) ."<br />";

//найти все элементы значения которых отличается
echo "<br /> найти все элементы значения которых отличаеться :" . ' ';
$result4 = array_merge($result,$result2);
print_r($result4);


// Третий блок
echo "<br /> <b> Третий блок </b> ";
$lasttArr = [

  'one' => 1,
  'two' => [
    'one' => 1,
    'seven' => 22,
    'three' => 32,
  ],

  'three' => [
    'one' => 1,
    'two' => 2,
  ],

  'foure' => 5,
  'five' => [
   'three' => 32,
   'foure' => 5,
   'five' => 12,
],
];

//получить все вторые элементы вложенных массивов
echo "<br /> получить все вторые элементы вложенных массивов : ";
//var_dump($lasttArr['two'],['three'],['five']);
function foo($arr) {
  foreach ($arr as $k => $v) {
    if (is_array($v)) {
      foo($v);
    }
    else {
      echo "{$k} = {$v}<br>";
    }
  }
}
foo($lasttArr);



//получить общее количество элементов в массиве
echo "<br /> общее количество элементов в массиве = ";
echo count($lasttArr, COUNT_RECURSIVE);

//получить сумму всех значений в массиве
function sumRecursive($lasttArr){
  $sum = 0;
  foreach ($lasttArr as $key => $value) {
    if(is_array($value)){
      $sum += sumRecursive ($value);
    } else{
      $sum += $value;
    }
  }
  return $sum;
}
echo "<br />получить сумму всех значений в массиве = ";
print_r(sumRecursive($lasttArr));

?>
