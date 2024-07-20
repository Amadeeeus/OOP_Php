<h1>Константы классов в ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test
{
    const CONSTANT = "Test";
    function getConstant()
    {
        return self::CONSTANT;
    }
}

require_once "./classes/Test5.php";
echo TEST::CONSTANT;
$test = new Test;
echo "Константа".$test->getConstant();
</pre><br>
<?php 
require_once "./classes/Test5.php";
echo TEST::CONSTANT;
$test = new Test;
echo "Константа".$test->getConstant();
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Применение</h1><br><br>
Давайте сделаем класс Circle, с помощью которого можно будет найти площадь круга и длину окружности. 
Для работы с кругом нам понадобится число Пи, равное 3.14. Логично будет для хранения этого числа использовать константу, 
чтобы случайно где-нибудь в коде наше число Пи вдруг не поменялось.
С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
<br><br><span>Исходный код</span><br>
<pre>
class Circle
{
    const PI = 3.14;
    public function __construct(private $radius)
    {
        
    }

    public function getSquare()
    {
        return self::PI*pow($this->radius, 2);
    }
    
    
    public function getCircuit()
    {
       return 2*self::PI*$this->radius;
    }
}

require_once "./classes/circle.php";
$circle = new Circle(10);
echo "Длина окружности = ".$circle->getCircuit()."<br>";
echo "Площадь круга = ".$circle->getSquare()."<br>";
</pre><br>
<?php 
require_once "./classes/circle.php";
$circle = new Circle(10);
$arr = [1, 2, 3, 4, 5];
$b = $arr[abs(-3)];
echo $b;
echo "Длина окружности = ".$circle->getCircuit()."<br>";
echo "Площадь круга = ".$circle->getSquare()."<br>";
?>