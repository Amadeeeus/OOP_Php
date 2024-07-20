<h1>Наследование интерфейсов друг от друга</h1><br><br>
<span>Исходный код</span><br>
<pre>
require_once "./classes/iUser3.php";
interface iEmployee extends iUser
{
    public function setSalary($salary);
    public function getSalary();
    public function getMethods();
}

interface iUser
{
    public function getName();
    public function setName($name);
    public function getAge();
    public function setAge($age);
}

class Employee implements iEmployee
{
    public function __construct(private $name = 0, private $age = 0, private $salary = 0)
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

    public function setSalary($salary)
    {
        $this->salary = $salary;
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

    public function getMethods()
    {
        return get_class_methods(__CLASS__);
    }
}
</pre><br>
<?php 
require_once "./classes/Employee12.php";
$emp = new Employee();
$emp->setName("Pavel");
$emp->setAge(27);
$emp->setSalary(2000);
echo "Имя= ".$emp->getName()."\n"."Возраст= ".$emp->getAge()."\n"."Курс= ".$emp->getSalary()."\n";
echo '<pre>';
$a = $emp->getMethods();
print_r($a);
echo "</pre>"
?>
