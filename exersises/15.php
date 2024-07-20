<span>Переменные названия методов</span><br><br>
<span>Исходный код</span><br>
<pre>
class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
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
require_once "./classes/user3.php";
$user = new User("Pavel",26);
$method = "getName";
echo $user->$method();
</pre><br>
<?php 
require_once "./classes/user3.php";
$user = new User("Pavel",26);
$method = "getName";
echo $user->$method();
?>
<br><span>Задание</span><br><br>
Пусть массив $methods будет ассоциативным с ключами method1 и method2<br>
Выведите имя и возраст пользователя с помощью этого массива.<br>
<span>Исходный код</span><br>
<pre>
$user1 = new User('Jonh', 27);
$methods = ['method1'=>'getName', 'method2'=>'getAge'];
echo $user1->{$methods['method1']}()."\n";
echo $user1->{$methods['method2']}(); 
</pre><br>
<?php 
$user1 = new User('Jonh', 27);
$methods = ['method1'=>'getName', 'method2'=>'getAge'];
echo $user1->{$methods['method1']}()."\n";
echo $user1->{$methods['method2']}(); 
?>