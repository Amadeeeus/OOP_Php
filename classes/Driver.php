<?php 
require_once "./classes/Employee2.php";
class Driver extends Employee
{
  private $DrExp;
  private $category;

  public function setDrExp($DrExp)
  {
     $this->DrExp = $DrExp."years";
  }
  
  public function setCategory($category)
  {
    $this->category = $category;
  }

  public function getDrExp()
  {
    return $this->DrExp;
  }

  public function getCategory()
  {
    return $this->category;
  }
}
?>