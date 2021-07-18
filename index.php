<?php
//Homework 2 lesson

//Действия с числами
echo "<b>Действия с числами </b><br />";
echo "Остаток деления : 7/3 =". 7/3 ."<br />";
echo "Целая часть сложения 7 и 7,15 =". intval(7+7.15) . "<br />";

$num = 25;
echo "Корень из 25 =" .sqrt($num) ."<br />";

//Действия со строками
echo "<b>Работа со строками</b> <br />";
$text = "десять негритят пошли купаться в море";
$date = explode(" ", $text);
echo "4-е слово из фразы : " .$date[3]."<br />";
echo "17-й символ из фразы :". mb_substr($text, 16, 1)."<br />";
echo mb_convert_case( $text, MB_CASE_TITLE, 'UTF-8').'<br />'; // ucwords не работает
echo "Длина строки = " .mb_strlen($text). " "."символов <br /> ";

//bool
echo "<b>Действия с логическими значениями</b> <br />";
if (1 == TRUE) {
    echo "Утверждение true равно 1 <br />";
  }
  else {
    echo "Утверждение не верно <br />";
  }

  if (FALSE === 0) {
      echo "Утверждение false тождественно 0 <br />";
    }
    else {
      echo "Утверждение false тождественно 0 не верно <br />";
    }

    //Какая строка длиннее three - три

$str1 = "three";
$str2 = "три";
$results1 = mb_strlen($str1);
$results2 = mb_strlen($str2);
if ( $results1 > $results2 )
  {
    echo "Строка $str1 больше, в ней $results1 символов";
  }
  else {
    echo "Строка $str2 больше,в ней $results2 символов";
  }

// какое число больше ?
$a = 125*13+7;
$b = 223+28*2;
//echo "<br />" . $a . " ". $b;
if ( $a > $b )
  {
    echo "<br /> Сумма 125*13+7 больше, так как она = $a, а сумма 223+28*2 = $b ";
  }
  else {
    echo "<br /> Сумма 223+28*2; больше, так как она = $b, а сумма 125*13+7 = $a";
  }


 ?>
