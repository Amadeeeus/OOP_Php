<h1>Определение принадлежности объекта к классу</h1><br><br>
<span>Исходный код</span><br>
<pre>

	// Первый класс:
	class Class1
	{
		
	}
	
	// Второй класс:
	class Class2
	{
		
	}

	$obj = new Class1;

    // Выведет true, тк объект принадлежит классу Class1:
	var_dump($obj instanceof Class1);
	
	// Выведет false, тк объект НЕ принадлежит классу Class2:
	var_dump($obj instanceof Class2);
</pre><br>
<?php
require_once "./classes/instance_of.php"; 
$obj1 = new Class1;
$obj2 = new Class2;
var_dump($obj1 instanceof Class1);
var_dump($obj1 instanceof Class2);
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Задание</h1><br>
Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).<br><br>
Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).<br><br>
Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.<br><br>
Переберите циклом массив $arr и выведите на экран столбец имен всех работников.<br><br>
Аналогичным образом выведите на экран столбец имен всех студентов.<br><br>
Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. После цикла выведите эти два числа на экран.<br><br>
<span>Исходный код</span><br>
<pre>
class Compare
{
public function __construct(private $peoples = [])
{
    
}

public function add($emp)
{
    if(!in_array($emp, $this->peoples, false))
    {
        $this->peoples[]= $emp;
    }
}

public function Show()
{
    echo "<pre>".print_r($this->peoples)."</pre>";
}
public function getEmpArr()
{
    foreach($this->peoples as $emp)
    {
        if($emp instanceof Employee)
        echo "Работник - ".$emp->getName()."<br>";
    }
    foreach($this->peoples as $stud)
    {
        if($stud instanceof Student)
        {
           echo  "Студент - ".$stud->getName()."<br>";
        }
    }
}

public function getSum()
{   $sum = 0;
    foreach($this->peoples as $emp)
    {
        if($emp instanceof Employee)
        {
       $sum+=$emp->getSalary();
    }
    }
    echo "Сумма зарплат = ".$sum."\n";
    $sum=0;
    foreach($this->peoples as $stud)
    {
        if($stud instanceof Student)
        {
        $sum+=$stud->getScholarship();
    }
    }
    echo "Сумма стипендий = ".$sum;
}
}
$comp = new Compare();
$comp ->add(new Employee("pavel", 20000));
$comp ->add(new Employee("Andrei", 30000));
$comp ->add(new Employee("Dima", 30000));
$comp ->add(new Student("Igor", 2000));
$comp ->add(new Student("Yura", 1000));
$comp ->add(new Student("Platon", 500));
$comp->Show();
$comp->getEmpArr();
echo "\n";
$comp->getSum();
</pre><br>
<?php 
require_once "./classes/compare1.php";
require_once "./classes/Student5.php";
require_once "./classes/Employee6.php";
$comp = new Compare();
$comp ->add(new Employee("pavel", 20000));
$comp ->add(new Employee("Andrei", 30000));
$comp ->add(new Employee("Dima", 30000));
$comp ->add(new Student("Igor", 2000));
$comp ->add(new Student("Yura", 1000));
$comp ->add(new Student("Platon", 500));
$comp->Show();
$comp->getEmpArr();
echo "\n";
$comp->getSum();

?>
<br><h1>Наследование</h1><br>

<span>Исходный код</span><br>
<pre>
// Родительский класс:
	class ParentClass
	{
		
	}
	
	// Дочерний класс:
	class ChildClass extends ParentClass
	{
		
	}
    $obj = new ChildClass;
    var_dump($obj instanceof ChildClass);  // выведет true
	var_dump($obj instanceof ParentClass); // тоже выведет true
    $obj = new ParentClass; // объект родительского класса
	
	var_dump($obj instanceof ParentClass); // выведет true
	var_dump($obj instanceof ChildClass); // выведет false
</pre><br>
<?php 
require_once "./classes/InstOfInheritance.php";
$obj = new ChildClass;
var_dump($obj instanceof ParentClass);
var_dump($obj instanceof ChildClass);
$obj1 = new ParentClass;
var_dump($obj1 instanceof ParentClass);
var_dump($obj1 instanceof ChildClass);
?>
<br><h1>Задание</h1><br>

<span>Исходный код</span><br>
<pre>
// Родительский класс:
	class ParentClass
	{
		
	}
	
	// Дочерний класс:
	class ChildClass extends ParentClass
	{
		
	}
    $obj = new ChildClass;
    var_dump($obj instanceof ChildClass);  // выведет true
	var_dump($obj instanceof ParentClass); // тоже выведет true
    $obj = new ParentClass; // объект родительского класса
	
	var_dump($obj instanceof ParentClass); // выведет true
	var_dump($obj instanceof ChildClass); // выведет false
</pre><br>
<?php 
require_once "./classes/City2.php";
require_once "./classes/User9.php";
require_once "./classes/Employee7.php";
require_once "./classes/compare2.php";

$compare = new Compare1();
$compare->add(new User("Pavel", 'Kravchenko'));
$compare->add(new User('Ivan', 'Petrov'));
$compare->add(new User('Name', 'Surname'));
$compare->add(new Employee1('Pavel','Kravchenko', 20000));
$compare->add(new Employee1('Ivan','Petrov',20000));
$compare->add(new Employee1('Andrei', 'Kravchenko', 8000));
$compare->add(new City('Schakhty', 200000));
$compare->add(new City('Rostov', 3000000));
$compare->add(new City('Novocherkassk',300000));
$compare->getNameUser();
$compare->getNonUser();
$compare->getUser();
?>
<br><h1>Практика</h1><br><br>
Реализовать 2 класса: студенты и работники, для них Реализовать класс, который хранит данные и высчитывает сумму выплат
<span>Исходный код</span><br>
<pre>
class Employee2
{
    public function __construct(private $name, private $salary)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class Student1
{
    public function __construct(private $name, private $scholarship)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }
    public function getScholarship()
    {
        return $this->scholarship;
    }
}

require_once "./classes/Employee8.php";
require_once "./classes/Student6.php";
class UserCollection
{
  public function __construct(private $employees = [], private $students = [])
  {
    
  }

  public function add($user)
  {
     if($user instanceof Employee2)
     {
        $this->employees[]= $user;
     }
     if($user instanceof Student1)
     {
        $this->students[]= $user;
     }
  }

  public function getTotalSalary()
  {
    $sum = 0;
    foreach($this->employees as $emp)
    {
        $sum += $emp->getSalary();
    }
    return $sum;
  }

  public function getTotalScholarship()
  {
    $sum = 0;
    foreach($this->students as $stud)
    {
        $sum += $stud->getScholarship();
    }
    return $sum;
  }

  public function getAllMoney()
  {
    return $this->getTotalSalary() + $this->getTotalScholarship();
  }
}

require_once "./classes/Employee8.php";
require_once "./classes/Student6.php";
require_once "./classes/UserCollection.php";
$user = new UserCollection;
$user->add(new Student1("pavel", 3000));
$user->add(new Student1("igor", 3500));
$user->add(new Student1("vlad", 500));
$user->add(new Employee2('pavel', 20000));
$user->add(new Employee2("igor", 50000));
$user->add(new Employee2("vlad", 25000));
echo "Зарплата= ".$user->getTotalSalary()."\n";
echo "Стипендия".$user->getTotalScholarship()."\n";
echo "Общая стоимость".$user->getAllMoney()."\n";
</pre><br>
<?php 
require_once "./classes/Employee8.php";
require_once "./classes/Student6.php";
require_once "./classes/UserCollection.php";
$user = new UserCollection;
$user->add(new Student1("pavel", 3000));
$user->add(new Student1("igor", 3500));
$user->add(new Student1("vlad", 500));
$user->add(new Employee2('pavel', 20000));
$user->add(new Employee2("igor", 50000));
$user->add(new Employee2("vlad", 25000));
echo "Зарплата= ".$user->getTotalSalary()."\n";
echo "Стипендия".$user->getTotalScholarship()."\n";
echo "Общая стоимость".$user->getAllMoney()."\n";
?>