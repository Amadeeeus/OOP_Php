<h1>Параметры в методах интерфейсов ООП</h1><br><br>
<span>Исходный код</span><br>
<pre>
interface iMath
{
    public function sum($a,$b);
    public function substract($a,$b);
    public function multiply($a,$b);
    public function divide($a,$b);
}

require_once "./classes/iMath.php";
class Math implements iMath
{
    public function sum($a, $b)
    {
        return $a + $b;
    }

    public function substract($a, $b)
    {
        return $a-$b;
    }

    public function divide($a, $b)
    {
        return $a/$b;
    }

    public function multiply($a, $b)
    {
        return $a*$b;
    }
}

require_once "./classes/Math2.php";
$math = new Math;
echo "Сумма = ".$math->sum(1,2)."<br>";
echo "Вычитание = ".$math->substract(2,3)."<br>";
echo "Умножение = ".$math->multiply(8,7)."<br>";
echo "Деление = ".$math->divide(9,5)."<br>";
</pre><br>
<?php 
require_once "./classes/Math2.php";
$math = new Math;
echo "Сумма = ".$math->sum(1,2)."<br>";
echo "Вычитание = ".$math->substract(2,3)."<br>";
echo "Умножение = ".$math->multiply(8,7)."<br>";
echo "Деление = ".$math->divide(9,5)."<br>";
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Практика</h1><br><br>
<span>Исходный код</span><br>
<pre>
interface User
{
    public function setName($name);
    public function getName();
    public function setAge($age);
    public function getAge();
}

class User
{
    public function __construct(private $name = 0, private $age = 0)
    {
        
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
       return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
</pre><br>
<?php 
require_once "./classes/user12.php";
$user = new User;
$user->setName("PAvel");
$user->setAge(12);
echo "Имя = ".$user->getName()."<br>";
echo "Возраст = ".$user->getAge()."<br>";
?>