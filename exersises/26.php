<span>Сравнение обьектов в ООП</span><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
require_once "./classes/user8.php";
function CompareObj($obj1, $obj2)
{
  return $obj1 == $obj2 ? true : false;
}
function CompareSame($obj1,$obj2)
{
  return $obj1 === $obj2 ? 'true' : 'false';
}

function Compare($obj1, $obj2)
{
switch (true)
{
    case $obj1 === $obj2 : $value =  "1"; break;
    case $obj1 == $obj2 : $value = "0"; break;
    default : $value = -1; break;
}
return $value;
}
$obj1 = new User("Pavel", 28);
$obj2 = new User("Slavik", 28);
var_dump($obj1==$obj2);
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><span>задание</span><br><br>
Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, 
если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так.
<span>Исходный код</span><br>
<pre>
class Compare
{
public function __construct(public $compare1 = 0, public $compare2 = 0)
{
    
}

public function getCompare1()
{
   return $this->compare1;
}
public function getCompare2()
{
    return $this->compare2;
}
public function setCompare1($compare)
{
    $this->compare1= $compare;
}
public function setCompare2($compare)
{
    $this->compare2 = $compare;
}

public function CompareObj($obj1, $obj2)
{
  return $obj1 == $obj2 ? true : false;
}
</pre><br>
<?php 
require_once "./classes/compare.php";
$com = new Compare();
$com->setCompare1(new User("Pavel", 27));
$com1 = new Compare();
$com1->setCompare1(new User("Pavel", 28));
echo "Равны? = ".CompareObj($com->getCompare1(), $com1->getCompare1());
?>
<br><span>задание</span><br><br>
Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, 
если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса, и false, если это не так.
<span>Исходный код</span><br>
<pre>
function CompareSame($obj1,$obj2)
{
  return $obj1 === $obj2 ? 'true' : 'false';
}
</pre><br>
<?php 
echo "Равны? =".CompareSame($com->getCompare1(), $com1->getCompare1());
?>
<br><span>задание</span><br><br>
Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.

Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.

Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями.

Функция должна возвращать -1 в противном случае.
<span>Исходный код</span><br>
<pre>
function CompareSame($obj1,$obj2)
{
  return $obj1 === $obj2 ? 'true' : 'false';
}
</pre><br>
<?php 
echo "Равны? =".Compare($com->getCompare1(), $com->getCompare1());
?>
<br><h1>Применение</h1><br><br>

<span>Исходный код</span><br>
<pre>
private function exists($emp)
    {
        foreach($this->employeers as $employee)
        {
            if($employee == $emp)
            {
                return true;
            }
                
        }
      return false;  
    }
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
 public function add($emp)
    {
        if(!$this->exists($emp))
        {
            $this->employeers[] = $emp; 
        }
    }
</pre><br>
<?php 
require_once "./classes/Employee5.php";
require_once "./classes/EmployeeCollection.php";
$emp2 = new EmployeeCollection();
$emp2->add(new Employee("Pavel",20000));
$emp2->add(new Employee("andrei",34000));
$emp2->add(new Employee("andrei",34000));
$arr = $emp2->get();
print_r($arr);
?>
<br><h1>in_array</h1><br><br>

<span>Исходный код</span><br>
<pre>
public function add_arr($emp)
    {
        if(!in_array($emp, $this->employeers, false))
        {
           $this->employeers[] = $emp;
        }
    }
</pre><br>
<?php 
require_once "./classes/Employee5.php";
require_once "./classes/EmployeeCollection.php";
$emp3 = new EmployeeCollection();
$emp3->add_arr(new Employee("Pavel",20000));
$emp3->add_arr(new Employee("andrei",34000));
$emp3->add_arr(new Employee("andrei",34000));
$arr = $emp3->get();
print_r($arr);
?>