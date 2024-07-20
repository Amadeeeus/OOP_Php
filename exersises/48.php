<h1>Магический метод get</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test
{
    private $prop1 = 1; 
    private $prop2 = 2;
   // public function __construct(private $prop1 = 1, public $prop2 = 2)
    //{

   // }

    public function __get($name)
    {
        return $this->$name;
    }
}

$test = new Test();
echo $test->prop1;
echo $test->prop2;
</pre><br>
<?php 
require_once "./classes/Test7.php";
$test = new Test();
echo $test->prop1;
echo $test->prop2;
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Тест get</h1><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
    public function __construct(private $name, private $age)
    {
        
    }

    public function __get($name)
    {
        return $this->$name;
    }
}

$user = new User("pavel",27);
echo $user->name, $user->age;
</pre><br>
<?php 
require_once "./classes/User17.php";
$user = new User("pavel",27);
echo $user->name, $user->age;
?>
<h1>Несуществующее свойство</h1><br><br>
Сделайте класс Date с публичными свойствами year, month и day.
С помощью магии сделайте свойство weekDay, которое будет возвращать день недели, соответствующий дате.
<span>Исходный код</span><br>
<pre>
class Date
{
    public function __construct(public $year, public $month, public $day)
    {
        
    }


    public function __get($name)
    {
        if($name == "weekDate")
        {
            return date("l", $this->dateTimestamp());
        }
    }

    //mktime(0,0,1,$this->month,$this->day,$this->year
    private function dateTimestamp()
    {
        return strtotime($this->year.'-'.$this->month."-".$this->day);
    }

    $time = new Date(19, 06,2024);
echo "День недели - ".$time->weekDate;
</pre><br>
<?php 
require_once "./classes/Date.php";
$time = new Date(19, 06,2024);
echo "День недели - ".$time->weekDate;
?>