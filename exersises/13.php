<span>Переменные названия обьектов свойств</span><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
public $name;
public $age;

public function __construct($name, $age)
{
    $this->name=$name;
    $this->age= $age;
}
}
require_once "./classes/user1.php";
$user = new User('Jonh', 25);
$prop = 'name';
echo $user->$prop;
</pre><br>
<?php 
require_once "./classes/user1.php";
$user = new User('Jonh', 25);
$prop = 'name';
echo $user->$prop;
?>
<br><span>задание</span><br><br>
<br><span>Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса.
Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.</span><br><br>
<span>Исходный код</span><br>
<pre>
class City
{
    public $name;
    public $foundation;
    public $population;

    public function __construct($name, $foundation, $population)
    {
        $this->name =$name;
        $this->foundation = $foundation;
        $this->population = $population;
    }
}
require_once "./classes/city1.php";
$city = new City("Shakhty", 1800, 250000);
$props = ['Город= '=>'name','Основание= '=>'foundation','Население= '=>'population'];
foreach($props as $key =>$val)
{
    echo $key.$city->$val."\n";
}
</pre><br>
<?php 
require_once "./classes/city1.php";
$city = new City("Shakhty", 1800, 250000);
$props = ['Город= '=>'name','Основание= '=>'foundation','Население= '=>'population'];
foreach($props as $key =>$val)
{
    echo $key.$city->$val."\n";
}
?>
