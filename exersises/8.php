<span>Свойства только для чтения в ООП</span><br><br>
<span>Исходный код</span><br><br>
<pre>
class User{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
       if($this->isAgeCorrect($age))
       {
        $this->age=$age;
       }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function isAgeCorrect($age)
    {
       if($age>=1 && $age <= 99)
       {
        $this->age= $age;
       }
    }
}
</pre>
<?php 
class User{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setAge($age)
    {
       if($this->isAgeCorrect($age))
       {
        $this->age=$age;
       }
    }

    public function getAge()
    {
        return $this->age;
    }

    private function isAgeCorrect($age)
    {
       if($age>=1 && $age <= 99)
       {
        $this->age= $age;
       }
    }
}

$user = new User("Pavel", 26);
echo "Имя= ".$user->getName()."<br>"."Возраст= ".$user->getAge()."<br>";
$user->setAge(30);
echo "Имя= ".$user->getName()."<br>"."Возраст= ".$user->getAge()."<br>";

?>
<span>Практическое задание</span><br><br>
<span>Исходный код</span><br><br>
<pre>
</pre>
<?php 
class Employee{
    private $name;

    private $surname;
    private $age;
    private $salary;

    public function __construct($name, $surname, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary= $salary;
        $this->surname= $surname;
    }
    public function setAge($age)
    {
      if($this->isAgeCorrect($age))
      {
        $this->age = $age;
      }
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAge()
    {
         return $this->age;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    private function isAgeCorrect($age)
    {
      if($age >=1 && $age <= 99)
      {
        $this->age = $age;
      }
    }   
}

$emp = new Employee("Pavel", "Kravchenko", 28,2000);?>
<span>Начальные данные</span><br><br>
<?php
echo "Имя= ".$emp->getName()."<br>"."Фамилия= ".$emp->getSurname()."<br>"."Возраст= ".$emp->getAge()."<br>"."Зарплата".$emp->getSalary()."<br>";
?>
<br><span>Конечные данные</span><br><br>
<?php
$emp->setAge(45);
$emp->setSalary(20000);
echo "Имя= ".$emp->getName()."<br>"."Фамилия= ".$emp->getSurname()."<br>"."Возраст= ".$emp->getAge()."<br>"."Зарплата".$emp->getSalary()."<br>";
?>