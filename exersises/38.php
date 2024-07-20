<h1>Объявление конструктора в интерфейсе</h1><br><br>
<span>Исходный код</span><br>
<pre>
interface iCube
{
    public function __construct($side);
    public function getSquare();
    public function getVolume();
}

require_once "./classes/iCube.php";
class Cube implements iCube
{
    private static $squareMultiply = 6;
    public function __construct(private $side)
    {
        
    }

    public function getVolume()
    {
        return pow($this->side, 3);
    }
    public function getSquare()
    {
        return self::$squareMultiply*pow($this->side,2);
    }
}
</pre><br>
<?php 
include_once "./classes/Cube.php";
$cube = new Cube(55);
echo "Площадь = ".$cube->getSquare()."<br>";
echo "Обьем куба = ".$cube->getVolume()."<br>";

//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
?>
<br><h1>Применение</h1><br><br>
Сделайте интерфейс iUser, который будет описывать юзера. 
Предполагается, что у юзера будет имя и возраст и эти поля будут передаваться параметрами конструктора. 
Пусть ваш интерфейс также задает то, что у юзера будут геттеры (но не сеттеры) для имени и возраста.
<span>Исходный код</span><br>
<pre>
interface iUser
{
    public function __construct($name, $age);
    public function getName();
    public function getAge();

}

class User implements iUser
{
    public function __construct(private $name, private $age)
    {
        
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

require_once "./classes/User13.php";
$user = new User("Pavel",21);
echo "Имя = ".$user->getName()."<br>";
echo "Возраст = ".$user->getAge()."<br>";
</pre><br>
<?php 
require_once "./classes/User13.php";
$user = new User("Pavel",21);
echo "Имя = ".$user->getName()."<br>";
echo "Возраст = ".$user->getAge()."<br>";
?>