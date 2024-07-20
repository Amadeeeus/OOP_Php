<h1>Наследование от класса и реализация интерфейса</h1><br><br>
<span>Исходный код</span><br>
<pre>
class Employee
{
    public function __construct(protected $name, protected $salary)
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

interface iProgrammer
{
    public function __construct($name, $salary);
    public function getName();
    public function getSalary();
    public function getLangs();
    public function setLang($lang);

}

class Programmer extends Employee implements iProgrammer
{
  private $arr = [];
  public function setLang($lang)
  {
    $this->arr[] = $lang;
  }

  public function getLangs()
  {
    $lang  = $this->arr;
    echo "Языки: "."<pre>";
    print_r($lang);
    echo "</pre>";
  }
}
</pre><br>
<?php
require_once "./classes/Programmer2.php";
$prog = new Programmer("Pavel", 200000);
$prog->setLang("PHP");
$prog->setLang("SQl");
$prog->setLang("JS");
$prog->setLang("C#");
echo "Имя =".$prog->getName()."<br>"."Зарплата =".$prog->getSalary()."<br>";
$prog->getLangs();
?>
