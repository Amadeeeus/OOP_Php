<h1>Функция get_class</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Practice
{
    public function __construct(private $arr = [])
    {
        
    }
    public function add($arr)
    {
        $this->arr[] = $arr; 
    }

    public function getInfo()
    {
        foreach($this->arr as $val)
        {
           echo "Имя =".$val->name."<br>"."Класс = ".get_class($val);
        }
    }
}

require_once "./classes/Test5.php";
require_once "./classes/Test11.php";
require_once "./classes/Test22.php";
require_once "./classes/practice.php";
$test = new Test;
echo "Класс = ".get_class($test);
$test1 = new Practice();
$test1->add(new Test1("pavel"));
$test1->add(new Test1("ivan"));
$test1->add(new Test1("igor"));
$test1->add(new Test2("andrei"));
$test1->add(new Test2("egor"));
$test1->add(new Test2("igor"));
$test1->getInfo();
</pre><br>
<?php 
require_once "./classes/Test5.php";
require_once "./classes/Test11.php";
require_once "./classes/Test22.php";
require_once "./classes/practice.php";
$test = new Test;
echo "Класс = ".get_class($test);
$test1 = new Practice();
$test1->add(new Test1("pavel"));
$test1->add(new Test1("ivan"));
$test1->add(new Test1("igor"));
$test1->add(new Test2("andrei"));
$test1->add(new Test2("egor"));
$test1->add(new Test2("igor"));
$test1->getInfo();
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Функция get_class_methods</h1><br><br>
<span>Исходный код</span><br>
<pre>
class TestMethods
{
public function Method1()
{
    echo "Method1";
}
public function Method2()
{
    echo "Method2";
}
public function Method3()
{
    echo "Method3";
}
}

require_once "./classes/TestMethods.php";
$methods = new TestMethods;
$arr = get_class_methods($methods);
echo "<pre>";
print_r($arr);
echo "</pre>";
</pre><br>
<?php 
require_once "./classes/TestMethods.php";
$methods = new TestMethods;
$arr = get_class_methods($methods);
echo "<pre>";
print_r($arr);
echo "</pre>";

foreach($arr as $val)
{
    TestMethods::$val();
}
?>
<br><h1>Функция get_class_vars</h1><br><br>
<span>Исходный код</span><br>
<pre>
class TestMethods
{
   public function __construct(public $prop1 = 1, public $prop2 = 2, private $prop3 = 3, private $prop4 = 4)
   {
    
   }
public static function Method1()
{
    echo "Method1";
}
public static function Method2()
{
    echo "Method2";
}
public static function Method3()
{
    echo "Method3";
}

public static function getVars()
{
 return get_class_vars(__CLASS__);
}
}


</pre><br>
<?php 
require_once "./classes/TestMethods1.php";
$methods2 = new TestMethods1;
echo "<pre>";
print_r(get_class_vars("TestMethods1"));
echo "</pre>";
$arr = $methods2->getVars();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<br><h1>get_object_vars</h1><br><br>
<span>Исходный код</span><br>
<pre>
class TestMethods2
{
   public function __construct(public $prop1 = 1, public $prop2 = 2, private $prop3 = 3, private $prop4 = 4)
   {
    
   }
public static function Method1()
{
    echo "Method1";
}
public static function Method2()
{
    echo "Method2";
}
public static function Method3()
{
    echo "Method3";
}

public static function getVars()
{
 return get_class_vars(__CLASS__);
}
}

require_once "./classes/TestMethods2.php";
$methods3 = new TestMethods2();
$arr = get_object_vars($methods3);
echo "<pre>";
print_r($arr);
echo "</pre>";
</pre><br>
<?php 
require_once "./classes/TestMethods2.php";
$methods3 = new TestMethods2();
$arr = get_object_vars($methods3);
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<br><h1>Class exist</h1><br><br>
<span>Исходный код</span><br>
<pre>
class_exists("TestMethods") ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
class_exists("User7") ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
class_exists($_GET['class']) ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
</pre><br>
<?php 
class_exists("TestMethods") ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
class_exists("User7") ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
class_exists($_GET['class']) ? $a = "Класс существует" : $a = "Класс не обьявлен";
echo $a;
?>
<br><h1>method_exist</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
method_exists($methods2, "Method1") ? $a = "Существует" : $a = "нет";
echo $a."\n";
method_exists($methods2, "Method5") ? $a = "Существует" : $a = "нет";
echo $a."\n";
class_exists($_GET['class']) ? method_exists($_GET['class'], $_GET['method']) ? $a = "Существует" : $a = "нет"  : $a = "Класс не обьявлен";
//method_exists($methods2, $_GET['method']) ? $a = "Существует" : $a = "нет";
echo $a."\n";
?>
<br><h1>get_declared_classes</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 
$arr = get_declared_classes();
echo "<pre>";
print_r($arr);
echo "</pre>";
?>
<br><h1>задание</h1><br><br>
<span>Исходный код</span><br>
<pre>

</pre><br>
<?php 

?>
