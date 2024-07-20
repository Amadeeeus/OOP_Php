<h1>Абстрактные класс в ООП</h1><br><br>
Пусть у вас есть класс User, а от него наследуют классы Employee и Student.
При этом предполагается, что вы будете создавать объекты классов Employee и Student, но объекты класса User - не будете, 
так как этот класс используется только для группировки общих свойств и методов своих наследников.
В этом случае можно принудительно запретить создавать объекты класса User, чтобы вы или другой программист где-нибудь их случайно не создали.
Для этого существуют так называемые абстрактные классы. Абстрактные классы представляют собой классы, предназначенные для наследования от них. При этом объекты таких классов нельзя создать.
<span>Исходный код</span><br>
<pre>
abstract class User
{
  public function __construct(private $name = 0)
  {
    
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }
  abstract public function increaseRevenue($value);
  abstract public function decreaseRevenue($value);
}

require_once "./classes/User11.php";
class Student extends User
{
    public function __construct(private $scholarship = 0)
    {
        
    }

    public function setScholarship($scholarship)
{
  $this->scholarship = $scholarship;
}
public function getScholarship()
{
    return $this->scholarship;
}

public function increaseRevenue($value)
{
    $this->scholarship+=$value;
}

public function decreaseRevenue($value)
{
    $this->scholarship-=$value;
}
}

require_once "./classes/User11.php";
class Employee extends User
{
    public function __construct(private $salary=0)
    {
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function increaseRevenue($value)
    {
        $this->salary+=$value;
    }

    public function decreaseRevenue($value)
    {
        $this->salary-=$value;
    }
}

require_once "./classes/Employee11.php";
require_once "./classes/Student7.php";
$emp = new Employee;
$emp->setName("Pavel");
$emp->setSalary(30000);
echo "Имя = ".$emp->getName()."<br>";
echo "Зарплата = ".$emp->getSalary()."<br>";
$emp->increaseRevenue(100);
echo "Зарплата = ".$emp->getSalary()."<br>";
$emp->decreaseRevenue(3000);
echo "Зарплата = ".$emp->getSalary()."<br>";
$stud = new Student;
$stud->setName("Andrei");
$stud->setScholarship(3000);
echo "Имя = ".$stud->getName()."<br>";
echo "Зарплата = ".$stud->getScholarship()."<br>";
$stud->increaseRevenue(150);
echo "Зарплата = ".$stud->getScholarship()."<br>";
$stud->decreaseRevenue(50);
echo "Зарплата = ".$stud->getScholarship()."<br>";
</pre><br>
<?php
require_once "./classes/Employee11.php";
require_once "./classes/Student7.php";
$emp = new Employee;
$emp->setName("Pavel");
$emp->setSalary(30000);
echo "Имя = ".$emp->getName()."<br>";
echo "Зарплата = ".$emp->getSalary()."<br>";
$emp->increaseRevenue(100);
echo "Зарплата = ".$emp->getSalary()."<br>";
$emp->decreaseRevenue(3000);
echo "Зарплата = ".$emp->getSalary()."<br>";
$stud = new Student;
$stud->setName("Andrei");
$stud->setScholarship(3000);
echo "Имя = ".$stud->getName()."<br>";
echo "Зарплата = ".$stud->getScholarship()."<br>";
$stud->increaseRevenue(150);
echo "Зарплата = ".$stud->getScholarship()."<br>";
$stud->decreaseRevenue(50);
echo "Зарплата = ".$stud->getScholarship()."<br>";

//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Применение</h1><br><br>
Пусть нам необходимо работать с геометрическими фигурами, например, с квадратами, прямоугольниками, треугольниками и так далее. 
Пусть каждая фигура будет описываться своим классом, при этом мы хотим сделать так, чтобы каждый класс имел метод для вычисления площади и метод для вычисления периметра фигуры.
Давайте сделаем для этого абстрактный класс Figure с двумя абстрактными методами getSquare и getPerimeter.
Почему класс Figure абстрактный: потому что он не описывает реально существующую геометрическую фигуру и, соответственно, объект этого класса мы не будем создавать.
Почему методы getSquare и getPerimeter абстрактные: потому что каждая фигура имеет свой алгоритм вычисления площади и периметра и, соответственно, класс Figure не может написать реализацию этих методов.
Зачем нам вообще нужен класс Figure: чтобы наследовать от него и таким образом заставить всех наследников реализовать указанные методы.
<span>Исходный код</span><br>
<pre>
abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();

    public function getRatio()
    {
        return $this->getSquare()/$this->getPerimeter();
    }

    public function getSquarePerimeterSum()
    {
        return $this->getSquare()+$this->getPerimeter();
    }
}
}

require_once "./classes/Figure.php"; 
class Quadrate extends Figure
{
 public function __construct(private $a)
 {
    
 }
 
 public function getSquare()
 {
    return $this->a*$this->a;
 }

 public function getPerimeter()
 {
    return $this->a*4;
 }
}

require_once "./classes/Figure.php";
class Rectangle extends Figure
{
  public function __construct(private $a, private $b)
  {
    
  }

  public function getSquare()
  {
    return $this->a*$this->b;
  }

  public function getPerimeter()
  {
    return 2*$this->a + 2*$this->b;
  }
}
</pre><br>
<?php 
require_once "./classes/Quadrate.php";
require_once "./classes/Rectangle.php";
$qu = new Quadrate(4);
$rect = new Rectangle(4,7);
echo "Площадь = ".$qu->getSquare()."<br>";
echo "Периметр = ".$qu->getPerimeter()."<br>";
echo "Отношение = ".$qu->getRatio()."<br>";
echo "Сумма = ".$qu->getSquarePerimeterSum()."<br>";
echo "Площадь = ".$rect->getSquare()."<br>";
echo "Периметр = ".$rect->getPerimeter()."<br>";
echo "Отношение = ".$rect->getRatio()."<br>";
echo "Сумма = ".$rect->getSquarePerimeterSum()."<br>";
?>
<br><h1></h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 

?>