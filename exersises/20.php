<span>Модификатор доступа protected</span><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
    public function __construct(protected $name, protected $age)
    {
        
    }
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
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

class Student extends User
{
    public function __construct($name, $age, protected $course)
    {
        parent::__construct($name, $age);
    }
public function addOneYear()
{
    $this->age++;
}

  public function setCourse($course)
  {
    $this->course = $course;
  }
  
  public function getCourse()
{
    return $this->course;
}
}
require_once "./classes/User5.php";
require_once "./classes/Student3.php";

$stud = new Student("pavel", 27, 4);
$stud->addOneYear();
echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
</pre><br>
<?php 
require_once "./classes/User5.php";
require_once "./classes/Student3.php";

$stud = new Student("pavel", 27, 4);
$stud->addOneYear();
echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><span>задание</span><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 

?>