<h1>Обьект со статическими свойствами и методами</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test
{
    public static $staticProperty;
    public $usualProperty;
    
}  

require_once "./classes/Test4.php";

Test::$staticProperty = "Static";
$test = new Test;
$test->usualProperty ="Usual";
echo $test::$staticProperty;
</pre><br>
<?php 
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
require_once "./classes/Test4.php";
Test::$staticProperty = "Static";
$test = new Test;
$test->usualProperty ="Usual";
echo $test::$staticProperty;
?>
<br><h1>Несколько обьектов</h1><br><br>
Статические свойства принадлежат не какому-то объекту класса, а самому классу, хотя объекты класса и имеют доступ к этим свойствам.
На практике это означает то, что если у нас есть несколько объектов класса - статические свойства у них будут общие. 
То есть, если в одном объекте поменять значение статического свойства - изменения произойдут во всех объектах.
<br><br><span>Исходный код</span><br>
<pre>
$test2 = new Test;
$test1 = new Test;
echo $test1::$staticProperty;
echo $test2::$staticProperty;
</pre><br>
<?php 
$test2 = new Test;
$test1 = new Test;
echo $test1::$staticProperty."<br>";
echo $test2::$staticProperty."<br>";
?>

<br><h1>Статические методы и $this</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Test
{
    public static $staticProperty;
    public $usualProperty;

    public function method()
    {
        var_dump(self::$staticProperty);
        var_dump($this->usualProperty);
    }
}  

$test2->usualProperty = "usual";
$test2->method();
</pre><br>
<?php 
$test2->usualProperty = "usual";
$test2->method();
?>
<h1>Применение</h1><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
private static $count =0;
    public function __construct(public $name)
    {
       self::$count++; 
    }
    public function getCount()
    {
        return self::$count;
    }
}

require_once "./classes/User10.php";
$user = new User("pavel");
echo "Имя = ".$user->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
$user1 = new User("pavel");
echo "Имя = ".$user1->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
$user2= new User("pavel");
echo "Имя = ".$user2->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
</pre><br>
<?php 
require_once "./classes/User10.php";
$user = new User("pavel");
echo "Имя = ".$user->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
$user1 = new User("pavel");
echo "Имя = ".$user1->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
$user2= new User("pavel");
echo "Имя = ".$user2->name."\n";
echo "Экземпляры= ".$user->getCount()."<br>";
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>