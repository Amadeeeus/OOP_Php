<span>Наследование классов</span><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
private $name;
private $age;

public function setName($name)
{
    $this->name =$name;
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
class Employee extends User
{
    private $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}
require_once "./classes/user4.php"; 
class Student extends User
{
private $course= 1;

public function addToNextCourse()
{
   if($this->checkCourse($this->course))
   {
     $this->course++;
   }
}
public function getCourse()
{
    return $this->course;
}
public function downToLowCourse()
{
    if($this->checkCourse($this->course))
    {
      $this->course--;
    }
}
private function checkCourse($course)
{
  if($course >= 1 && $course <= 5)
  {
    $this->course = $course;
    return $this->course;
  }
}
}
require_once "./classes/user4.php";
require_once "./classes/Employee2.php";
require_once "./classes/Student2.php";
$user = new Employee;
$user->setName("Pave;");
$user->setAge(27);
$user->setSalary(20000);
echo "Имя= ".$user->getName()."\n"."Возраст= ".$user->getAge()."\n"."Зарплата= ".$user->getSalary()."\n";
$stud = new Student;
$stud->setName('Pavel');
$stud->setAge(27);
$stud->addToNextCourse();
echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
</pre><br>
<?php 
require_once "./classes/user4.php";
require_once "./classes/Employee2.php";
require_once "./classes/Student2.php";
require_once "./classes/Programmer.php";
require_once "./classes/Driver.php";
$user = new Employee;
$user->setName("Pave;");
$user->setAge(27);
$user->setSalary(20000);
echo "Имя= ".$user->getName()."\n"."Возраст= ".$user->getAge()."\n"."Зарплата= ".$user->getSalary()."\n";
$stud = new Student;
$stud->setName('Pavel');
$stud->setAge(27);
$stud->addToNextCourse();
echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><span>задание</span><br><br>
Сделайте класс Programmer, который будет наследовать от класса Employee. 
Пусть новый класс имеет свойство langs, в котором будет хранится массив языков, которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
 Сделайте класс Driver (водитель), который будет наследовать от класса Employee. 
 Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
<span>Исходный код</span><br>
<pre>
$prog = new Programmer();
$prog->setName('Pavel');
$prog->setAge('27');
$prog->setSalary('10000');
$langs = $prog->getLangs();
echo 'Имя= '.$prog->getName()."\n".'Возраст= '.$prog->getAge()."\n".'Зарплата= '.$prog->getSalary()."\n".'Языки='."<pre>";
print_r($langs);
echo "</pre>"."\n";
</pre><br>
<?php 
$prog = new Programmer();
$prog->setName('Pavel');
$prog->setAge('27');
$prog->setSalary('10000');
$langs = $prog->getLangs();
echo 'Имя= '.$prog->getName()."\n".'Возраст= '.$prog->getAge()."\n".'Зарплата= '.$prog->getSalary()."\n".'Языки='."<pre>";
print_r($langs);
echo "</pre>"."\n";
?>
<br><span>задание</span><br><br>
Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
$driver = new Driver;
$driver->setName("pavel");
$driver->setAge('27');
$driver->setSalary(10000);
$driver->setDrExp(5);
$driver->setCategory("A,B,C,D");
echo 'Имя= '.$driver->getName()."\n".'Возраст= '.$driver->getAge()."\n".'Зарплата= '.$driver->getSalary()."\n".'Стаж='.$driver->getDrExp()."\n"."Категории= ".$driver->getCategory()."\n";
?>