<span>задание</span><br><br>
Сделайте класс User, в котором будут следующие свойства только для чтения: name и surname.<br> Начальные значения этих свойств должны устанавливаться в конструкторе.<br> Сделайте также геттеры этих свойств.<br>
Модифицируйте предыдущую задачу так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день.<br> 
Запишите ее в свойство birthday. Сделайте геттер для этого свойства.<br>
Модифицируйте предыдущую задачу так, чтобы был приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.<br>
Модифицируйте предыдущую задачу так, чтобы метод calculateAge вызывался в конструкторе объекта, рассчитывал возраст пользователя и записывал его в приватное свойство age.<br> Сделайте геттер для этого свойства.<br>
Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника.<br> Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.<br><br>
<span>Исходный код</span><br>
<pre>
{
    public function __construct(public readonly string $name, public readonly string $surname, private $birthday, private $age = 0)// private $birthday = date('Y:m:d'))
    {
       $this->age = $this->calculateAge();
    }

    public function getName()
    {
        return $this->name;
    }
    
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getAge()
    {
        return $this->age;
    }
    private function currentDate(){
      return date("Y:m:d");
    }
    
    private function currentDateOnArray()
    {
        $date = $this->currentDate();
        return explode(":", $date);
    }
    private function getArrayBirthday()
    {
        $bday= $this->getBirthday();
        return explode(":", $bday);
    }

    private function calculateAge()
    {
        $date1 = $this->getArrayBirthday();
        $date2 = $this->currentDateOnArray();
        if($date2[1]>=$date1[1] && $date2[2] >=$date1[2])
        {
        $currenAge = $date2[0] - $date1[0];
        }
        else
        {
            $currenAge = $date2[0]-$date1[0] - 1;  
        }
        return $currenAge;
    }
    
}

require_once "./classes/Employee3.php";
class Employee extends User{
public function __construct($name, $surname, $birthday, protected $salary)
{
    parent::__construct($name,$surname,$birthday);
}

public function getSalary()
{
    return $this->salary;
}
}

require_once "./classes/User7.php";
require_once "./classes/Employee3.php";
$emp = new Employee("Pavel","Kravchenko", "1997:04:01", 200000);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."День рождения= ".$emp->getBirthday()."\n"."Возраст= ".$emp->getAge()."\n"."Зарплата= ".$emp->getSalary()."\n";
</pre><br>
<span>Результат</span><br>
<?php 
require_once "./classes/User7.php";
require_once "./classes/Employee3.php";
$emp = new Employee("Pavel","Kravchenko", "1997:04:01", 200000);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."День рождения= ".$emp->getBirthday()."\n"."Возраст= ".$emp->getAge()."\n"."Зарплата= ".$emp->getSalary()."\n";
?>
