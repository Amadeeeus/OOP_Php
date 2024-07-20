<h1>Статические свойства в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test
{
    public static $property;
}

Test::$property = "Test";
echo Test::$property;
</pre><br>
<?php 
require_once "./classes/Test2.php";
Test::$property = "Test";
echo Test::$property;
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Практика</h1><br><br>
Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2. 
Запишите в первое свойство число 2, а во второе - число 3. 
Выведите сумму значений свойств на экран.
<br><br><span>Исходный код</span><br>
<pre>
class Num
{
 public static $num1;
 public static $num2;
 
 public static function NumSum()
 {
    return self::$num1+self::$num2;
 }
}

require_once "./classes/Num.php";
Num::$num1 =2;
Num::$num2 =3;
Echo "Num = ".Num::NumSum();
</pre><br>
<?php 
require_once "./classes/Num.php";
Num::$num1 =2;
Num::$num2 =3;
Echo "Num = ".Num::NumSum();
?>
<h1>Статическое свойство внутри класса</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test2
{
private static $property;
public static function setProperty($prop)
{
   self::$property = $prop;
}

public static function getProperty()
{
    return self::$property;
}

}

require_once "./classes/Test3.php";
Test2::setProperty("Hello");
echo "Property = ".Test2::getProperty();
</pre><br>
<?php 
require_once "./classes/Test3.php";
Test2::setProperty("Hello");
echo "Property = ".Test2::getProperty();
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Практика</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Num1
{
    private static $num1 = 2;
    private static $num2=3;

    public static function getSum()
    {
        return self::$num1 + self::$num2;
    }
}

require_once "./classes/Num2.php";
echo "Sum = ".Num1::getSum();
</pre><br>
<?php 
require_once "./classes/Num2.php";
echo "Sum = ".Num1::getSum();
?>
<br><h1>Применение</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Geometry
{
    private static $pi = 3.14;
    private static $double = 2;
    private static $cube =3;

    private static $drob = 4/3;
    public static function getCircleSquare($radius)
{
  return self::$pi * $radius * $radius;
}

public static function getCircleCircuit($radius)
{
   return self::$double * self::$pi * $radius;
}

public static function getVolumeShar($radius)
{
  return self::$drob * self::$pi * pow($radius, self::$cube);
}


</pre><br>
<?php 
require_once "./classes/Geometry.php";
echo "Длина окружности ".Geometry::getCircleCircuit(40)."<br>";
echo "Площадь круга ".Geometry::getCircleSquare(40)."<br>";
echo "Обьем шара ".Geometry::getVolumeShar(40)."<br>";
?>