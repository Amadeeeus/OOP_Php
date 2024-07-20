<span>Работа с геттерами и сеттерами</span><br><br>
<span>Исходный код</span><br><br>
<pre>
class User{
    private $name;
    private $age;

    public function setName($name)
    {
       $this->name = $name;
    }

    public function setAge($age)
    {
        if($this->isAgeCorrect($age))
        {
        $this->age = $age;
    }
    }

    

    public function getAge()
    {
        
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
    
    
    private function isAgeCorrect($age)
    {
        if($age >= 18 && $age <= 60)
        {
            $this->age = $age;
        }
    }
}

$user = new User;
$user->setAge(26);
$user->setName("pavel");
echo "Имя= ".$user->getName().' Возраст= '.$user->getAge().'';
    </pre>
    <span>Результат</span><br><br>
<?php 
class User{
    private $name;
    private $age;

    public function setName($name)
    {
       $this->name = $name;
    }

    public function setAge($age)
    {
        if($this->isAgeCorrect($age))
        {
        $this->age = $age;
    }
    }

    

    public function getAge()
    {
        
        return $this->age;
    }
    public function getName()
    {
        return $this->name;
    }
    
    
    private function isAgeCorrect($age)
    {
        if($age >= 18 && $age <= 60)
        {
            $this->age = $age;
        }
    }
}

$user = new User;
$user->setAge(26);
$user->setName("pavel");
echo "Имя= ".$user->getName().'<br>'.' Возраст= '.$user->getAge().'<br>';
?>
<br><br>
    <span>Практическое задание</span><br><br>
    <span>Исходный код</span><br><br>
    <pre>
    class Employee
    {
        private $name;
        private $age;
        private $salary;

        public function setName($name)
        {
            $this->name = $name;
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

        private function isAgeCorrect($age){
        if($age>=1 && $age <=100)
        { 
            $this->age = $age;
        }
}

public function getName(){
    return $this->name;
}

public function getAge()
{
    return $this->age;
}

public function getSalary()
{
    return "$".$this->salary;
}
    }

    $emp = new Employee;
    $emp ->setName("PAVEL");
    $emp->setAge(18);
    $emp->setSalary(2000);

    echo "Имя= ".$emp->getName()."<>"."Возраст= ".$emp->getAge().""."Зарплата= ".$emp->getSalary().""."";
    </pre>
    <span>Результат</span><br><br>
    <?php 
    class Employee
    {
        private $name;
        private $age;
        private $salary;

        public function setName($name)
        {
            $this->name = $name;
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

        private function isAgeCorrect($age){
        if($age>=1 && $age <=100)
        { 
            $this->age = $age;
        }
}

public function getName(){
    return $this->name;
}

public function getAge()
{
    return $this->age;
}

public function getSalary()
{
    return "$".$this->salary;
}
    }

    $emp = new Employee;
    $emp ->setName("PAVEL");
    $emp->setAge(18);
    $emp->setSalary(2000);

    echo "Имя= ".$emp->getName()."<br>"."Возраст= ".$emp->getAge()."<br>"."Зарплата= ".$emp->getSalary().""."<br>";

    ?>