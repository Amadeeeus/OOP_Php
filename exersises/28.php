<h1>Контроль типов при работе с обьектами</h1><br><br>
<span>Исходный код</span><br>
<pre>

class Employee
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

require_once "./classes/Employee9.php";
class EmployeeCollection
{
    public function __construct(private $collection= [])
    {
        
    }
    public function add(Employee $employees)
    {
        $this->collection[] = $employees;
    }

    public function getTotalSalary()
    {
        $sum = 0;
        foreach($this->collection as $coll)
        {
            $sum += $coll->getSalary();
        }
    }
}
</pre><br>
<?php 
require_once "./classes/Employee9.php";
require_once "./classes/EmployeeCollection2.php";
$emp = new EmployeeCollection();
$emp->add(new Employee('pavel', 2000));
$emp->add(new Employee('andrei', 3000));
$emp->add(new Employee('enot', 4000));
echo "Зарплата".$emp->getTotalSalary()."\n";
?>
<br><h1>Практика</h1><br><br>
Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name и salary.
Создайте несколько объектов класса Post: программист, менеджер водитель.
Сделайте класс Employee, в котором будут следующие свойства: name и surname. Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
Сделайте геттеры и сеттеры для свойств name и surname.
Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.
Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.
Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.
Выведите на экран имя, фамилию, должность и зарплату созданного работника.
Реализуйте в классе Employee метод changePost, который будет изменять должность работника на другую. Метод должен принимать параметром объект класса Post.
 Укажите в методе тип принимаемого параметра в явном виде.
<span>Исходный код</span><br>
<pre>
require_once "./classes/post.php";
class Employee1
{
    public function __construct(private $name, private $surname,private Post $post)
    {
        
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setName($name)
    {
      $this->name = $name;
    }

    public function setSurname($surname)
    {
      $this->surname = $surname;
    }

    public function setPost(Post $post)
    {
        $this->post = $post;
    }

    public function getPost()
    {
        return $this->post->getPost();
    }

    public function getSalary()
    {
        return $this->post->getSalary();
    }

    public function changePost(Post $post)
    {
         $this->post = $post;
    }
}

class Post{
    public function __construct(private $post, private $salary)
    {
        
    }
    public function getPost()
    {
        return $this->post;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

require_once "./classes/Employee10.php";
require_once "./classes/post.php";
$programmer = new Post("programmer",20000);
$driver = new Post("driver", 30000);
$manager = new Post("Manager", 50000);
$emp = new Employee1("Pavel", "Kravchenko", $programmer);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."Должность= ".$emp->getPost()."\n"."Зарплата= ".$emp->getSalary()."\n"."После замены: "."\n";
$emp->changePost($manager);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."Должность= ".$emp->getPost()."\n"."Зарплата= ".$emp->getSalary()."\n";
</pre><br>
<?php 
require_once "./classes/Employee10.php";
require_once "./classes/post.php";
$programmer = new Post("programmer",20000);
$driver = new Post("driver", 30000);
$manager = new Post("Manager", 50000);
$emp = new Employee1("Pavel", "Kravchenko", $programmer);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."Должность= ".$emp->getPost()."\n"."Зарплата= ".$emp->getSalary()."\n"."После замены: "."\n";
$emp->changePost($manager);
echo "Имя= ".$emp->getName()."\n"."Фамилия= ".$emp->getSurname()."\n"."Должность= ".$emp->getPost()."\n"."Зарплата= ".$emp->getSalary()."\n";
?>