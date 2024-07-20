<?php  
require_once "./classes/Employee13.php";
require_once "./classes/iProgrammer.php";
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
?>