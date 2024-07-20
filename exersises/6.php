<span>Конструктор обьектов ООП в PHP</span><br><br>
<span>Код примера</span><br><br>
<pre>
class User{
private $name;
private $age;

public function __construct($name, $age)
{
    $this->name = $name;
    $this->age= $age;
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

$user = new User("Pavel", 18);
echo $user->getAge();
echo $user->getName();
    </pre>
<?php
class User{
private $name;
private $age;

public function __construct($name, $age)
{
    $this->name = $name;
    $this->age= $age;
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

$user = new User("Pavel", 18);
echo "Имя= ".$user->getName().", Возраст= ".$user->getAge();
?>
<span>Практическое задание</span><br><br>
<span>Код</span><br><br>
<pre>
class Employee{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
  {
  $this->name=$name;
  $this->age= $age;
  $this->salary= $salary;
  }
   
  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getSalary()
  {
    return $this->salary;
  }

}

$emp1 = new Employee("pavel", 27, 2000);
$emp2 = new Employee("eric", 25, 1000);
$emp3 = new Employee("kyle", 30, 2000);
function getSumm($o,$tw, $th)
{
  $one = $o;
  $two = $tw;
  $three = $th;
  $sum =   $one+$two+$three;
  return $sum;
}
echo "Имя= ".$emp1->getName()." Возраст= ".$emp1->getAge(). " Зарплата= ".$emp1->getSalary()."<br>";
echo "Имя= ".$emp2->getName()." Возраст= ".$emp2->getAge(). " Зарплата= ".$emp2->getSalary()."<br>";
echo "Имя= ".$emp3->getName()." Возраст= ".$emp3->getAge(). " Зарплата= ".$emp3->getSalary()."<br>";
echo " сумма зарплат= ".getSumm( $emp1->getSalary(), $emp2->getSalary(),  $emp3->getSalary())
</pre><br><br>
<?php 


class Employee{
    private $name;
    private $age;
    private $salary;

    public function __construct($name, $age, $salary)
  {
  $this->name=$name;
  $this->age= $age;
  $this->salary= $salary;
  }
   
  public function getName()
  {
    return $this->name;
  }

  public function getAge()
  {
    return $this->age;
  }

  public function getSalary()
  {
    return $this->salary;
  }

}

$emp1 = new Employee("pavel", 27, 2000);
$emp2 = new Employee("eric", 25, 1000);
$emp3 = new Employee("kyle", 30, 2000);
function getSumm($o,$tw, $th)
{
  $one = $o;
  $two = $tw;
  $three = $th;
  $sum =   $one+$two+$three;
  return $sum;
}
echo "Имя= ".$emp1->getName()." Возраст= ".$emp1->getAge(). " Зарплата= ".$emp1->getSalary()."<br>";
echo "Имя= ".$emp2->getName()." Возраст= ".$emp2->getAge(). " Зарплата= ".$emp2->getSalary()."<br>";
echo "Имя= ".$emp3->getName()." Возраст= ".$emp3->getAge(). " Зарплата= ".$emp3->getSalary()."<br>";
echo " сумма зарплат= ".getSumm( $emp1->getSalary(), $emp2->getSalary(),  $emp3->getSalary())
?>
