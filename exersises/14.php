<span>Массив свойств</span><br><br>
<span>Исходный код</span><br><br>
<pre>
class User
{
    public $name;
    public $surname;
    public $patronymic;

    public function __construct($name, $surname, $patronymic)
    {
        $this->name = $name;
        $this->surname=$surname;
        $this->patronymic= $patronymic;
    }
}
require_once "./classes/user2.php";
$user = new User("Pavel","Kravchenko","Andreevich");
$props = ['name','surname','patronymic'];
$props1 = ['Имя= '=>'name','Фамилия= '=>'surname','Отчество= '=>'patronymic'];
echo $user->{$props[0]}."\n";
echo $user->{$props[1]}."\n";
echo $user->{$props[2]}."\n";
foreach($props1 as $key => $val)
{
  echo $key.$user->$val."\n";
}
</pre>
<?php 
require_once "./classes/user2.php";
$user = new User("Pavel","Kravchenko","Andreevich");
$props = ['name','surname','patronymic'];
$props1 = ['Имя= '=>'name','Фамилия= '=>'surname','Отчество= '=>'patronymic'];
echo $user->{$props[0]}."\n";
echo $user->{$props[1]}."\n";
echo $user->{$props[2]}."\n";
echo "<pre>";
print_r($props);
print_r($props1);
echo "</pre>";
?>
<br><br>
<?php
foreach($props1 as $key => $val)
{
  echo $key.$user->$val."\n";
}
?>
<br><br><span>Имя свойства из другого обьекта и метода</span><br><br>
<span>Исходный код</span><br><br>
<pre>
class Prop
{
    private $value;
    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getVal()
    {
        return $this->value;
    }
}
require_once './classes/prop.php';
$user = new User("Pavel","Kravchenko","Andreevich");
$prop = new Prop('name');
echo "Результат= ".$user->{$prop->getVal()};
</pre>
<?php 
require_once './classes/prop.php';
$user = new User("Pavel","Kravchenko","Andreevich");
$prop = new Prop('name');
echo "Результат= ".$user->{$prop->getVal()};
?>