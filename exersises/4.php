<span>Геттеры</span><br><br>
<?php
 class Employee{
     public $name;
     public $age;
     public $salary;

     public function getName(){
        return $this->name;
     }

     public function getAge(){
       return $this->age;
     }

     public function getSalary()
     {
       return $this->salary;
     }

     public function checkAge(){
        if($this->age>=18)
        {
            return "True";
        }
        else
        {
            return "False";
        }
     }
 }

 $user1 = new Employee;
 $user1->name = "pavel";
 $user1->age="27";
 $user1->salary="1000";

 $user2 = new Employee;
 $user2->name= "andrei";
 $user2->age="35";
 $user2->salary="2000";

 echo "Зарплата 1 пользователя= ".$user1->getSalary()."<br>"."Имя= ".$user1->getName()."<br>"."Возраст= ".$user1->getAge()."<br>";
 echo "Зарплата 2 пользователя= ".$user2->getSalary()."<br>"."Имя= ".$user2->getName()."<br>"."Возраст= ".$user2->getAge()."<br>";
 echo "Сумма зарплат= ".$user1->getSalary() + $user2->getSalary()."<br>";

 echo "Проверка возраста первого пользователя= ".$user1->checkAge()."<br>"."Проверка возраста 2 пользователя= ".$user2->checkAge();



?>
<br><br>
<span>Сеттеры</span><br><br>

<?php 
class User
{
    public $name;
    public $age;

    public function setAge($age){
        if($this->age>=28){
       $this->age = $age;
    }
    }
}

$user = new User;
$user->name = "jonh";
$user->age = "67";
echo "До изменения= ".$user->age.'<br>';
$user->setAge("30");
echo "После изменения= ".$user->age.'<br>';

class Employee2
{
    public $name;
    public $salary;
    public function setName($name)
    {
        $this->name=$name;
    }

    public function setSalary($salary)
    {
        $this->salary=$salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }

    public function setDoubleSalary($salary)
    {
      return $this->salary = $salary*2;
    }
}

$emp = new Employee2;
$emp->setName("Pasha");
$emp ->setSalary("1000");
echo "Имя= ".$emp->getName()."<br>";
echo "Зарплата= ".$emp->getSalary()."<br>";
echo "Двойная зарплата= ".$emp->setDoubleSalary($emp->getSalary())."<br>";
?>
<br><br><span>Прямоугольники</span><br><br>
<?php
class Rectangle
{
    private $height;
    private $width;

    public function setWidth($width)
    {
      $this->width = $width;
    }

    public function setHeight($height)
    {
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getSquare()
    {
        return $this->height*$this->width;
    }

    public function getPerimeter(){
        return $this->height+$this->width;
    }
}

$rectangle = new Rectangle;
$rectangle->setWidth(20);
$rectangle->setHeight(40);

echo "Ширина= ".$rectangle->getWidth()."<br>";
echo "Высота= ".$rectangle->getHeight()."<br>";

echo "Площадь= ".$rectangle->getSquare()."<br>";
echo "Периметр= ".$rectangle->getPerimeter()."<br";
?>

