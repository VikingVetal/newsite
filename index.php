<?php
abstract class ParentClass
{
  public $a = 5;
  public $b = 10;
  // get
  public function getA()
  {
    return $this -> a;
  }

  public function getB ()
  {
    return $this -> b ;
  }
// set
  public function setA ($a)
  {
    return $this -> a = $a;
  }

  public function setB ($b)
  {
    return $this -> b = $b;
  }

  abstract protected function MyFunction($a) // не работает
  {
    return $this ->a + $this->b;
  }

}
$parentObj = new ParentClass ();
$parentObj -> getA(15);
$parentObj -> getb(20);
echo $parentObj -> a .' and ' .$parentObj -> b.'<br />';
$parentObj -> setA(1);
$parentObj -> setb(2);
echo $parentObj -> a .' and ' .$parentObj -> b.'<br />';

// Первый
class FirstChild extends ParentClass
{
protected $num1 = 18;
public function SumParent()
  {
  return $this->a + $this->num1;
  }

  public function setNum1()
  {
    return $this -> num1 = $num1;
  }
  public function getNum1()
  {
    return $this -> num1 = $num1;
  }
}

// Второй
class SecondChild extends ParentClass
{
protected $num2 = 21;
public function SumParent()
  {
  return $this->num2 - $this->b ;
  }

  public function setNum2()
  {
    return $this -> num2 = $num2;
  }
  public function getNum2()
  {
    return $this -> num2 = $num2;
  }
}

// Третий
final class ThirdChild extends ParentClass // Один наследник не должен быть наследуемым
{
protected $num3 = 4;
public function SumParent()
  {
  return $this->num3 * $this->b ;
  }
  public function setNum3()
  {
    return $this -> num3 = $num3;
  }
  public function getNum3()
  {
    return $this -> num3 = $num3;
  }
}


$firstChildObj = new FirstChild();
echo $firstChildObj-> SumParent().'<br />';// сумма родителя ParentClass $a и FirstChild $num1

$secondChildobj = new SecondChild();
echo $secondChildobj-> SumParent().'<br />';// разница  SecondChild $num2 и  родителя ParentClass $b

$thirdChildrObj = new ThirdChild();
echo $thirdChildrObj-> SumParent().'<br />';// результат умножения ThirdChild $num3 на родителя $b  = 40


//Дочерние классы FirstChild
class sub1_FirstChild extends FirstChild
{
  protected $subNum = 2;
  public function getSubNum()
  {
    return $this -> subNum;
  }
  public function setSubNum()
  {
    return $this -> subNum;
  }

  //метод который выполняет одно математическое действие с данными родителя и своими данными
  public function SumParent()
    {
    return $this->num1 * $this->subNum ;
    }
  // метод который выполняет любое математическое действие со свойством корневого класса и своим свойством
  public function SumHeadParent()
  {
    return $this->a + $this->subNum ;
  }
}



class sub2_FirstChild extends FirstChild
{
  protected $subNum2 = 3;
  public function getSubNum()
  {
    return $this -> subNum2;
  }
  public function setSubNum()
  {
    return $this -> subNum;
  }

  //метод который выполняет одно математическое действие с данными родителя и своими данными
  public function SumParent()
    {
    return $this->num1 * $this->subNum2 ;
    }
  // метод который выполняет любое математическое действие со свойством корневого класса и своим свойством
  public function SumHeadParent()
  {
    return $this->a + $this->subNum2 ;
  }
}

$sub1_firstChildObj = new sub1_FirstChild();
echo $sub1_firstChildObj-> SumParent().'<br />'; // 18*2
echo $sub1_firstChildObj-> SumHeadParent().'<br />';// 5+2

$sub2_FirstChildObj = new sub2_FirstChild();
echo $sub2_FirstChildObj-> SumParent().'<br />';
echo $sub2_FirstChildObj-> SumHeadParent().'<br />';



//Дочерние классы SecondChild

class sub1_SecondChild extends SecondChild
{
  protected $subNum = 4;
  public function getSubNum()
  {
    return $this -> subNum;
  }
  public function setSubNum()
  {
    return $this -> subNum;
  }

  //метод который выполняет одно математическое действие с данными родителя и своими данными
  public function SumParent()
    {
    return $this->num2 * $this->subNum ;
    }
  // метод который выполняет любое математическое действие со свойством корневого класса и своим свойством
  public function SumHeadParent()
  {
    return $this->a + $this->subNum ;
  }
}


$sub1_fSecondChildObj = new sub1_SecondChild();
echo $sub1_fSecondChildObj-> SumParent().'<br />';
echo $sub1_fSecondChildObj-> SumHeadParent().'<br />';


$sub2_fSecondChildObj = new sub2_SecondChild();
echo $sub2_fSecondChildObj-> SumParent().'<br />';
echo $sub2_fSecondChildObj-> SumHeadParent().'<br />';

class sub2_SecondChild extends SecondChild
{
  protected $subNum2 = 7;
  public function getSubNum()
  {
    return $this -> subNum2;
  }
  public function setSubNum()
  {
    return $this -> subNum2;
  }

  //метод который выполняет одно математическое действие с данными родителя и своими данными
  public function SumParent()
    {
    return $this->num2 * $this->subNum2 ;
    }
  // метод который выполняет любое математическое действие со свойством корневого класса и своим свойством
  public function SumHeadParent()
  {
    return $this->a + $this->subNum2 ;
  }
}



?>
