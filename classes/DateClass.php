<?php
require_once('IDate.php'); 
Class Date implements IDate
{
  public function __construct(private $date = null, private $y =null,private $m = null,private $d = null)
  {
    $this->date = date("Y-m-d");
  }
  
  public function setDate($y, $m, $d)
  {
    $this->date = $y."-".$m."-".$d;
  }
  public function getDay()
  {
    return date("j", strtotime($this->date));
  }
  public function getMonth()
  {
      return date("F", strtotime(($this->date)));
  }
  public function getYear()
  {
      return date("Y", strtotime(($this->date)));
  }
  public function getWeekDay()
  {
     return date("l;", strtotime(($this->date)));
  }
  public function addDay($value)
  {
      return $this->date = date("Y-m-d", strtotime("+".$value."day"));
  }
  public function subDay($value)
  {
    return $this->date = date("Y-m-d", strtotime("-".$value."day"));
  }
  public function addMonth($value)
  {
    return $this->date = date("Y-m-d", strtotime("+".$value."month"));
  }
  public function subMonth($value)
  {
      return $this->date = date("Y-m-d", strtotime("-".$value."month"));
  }
  public function addYear($value)
  {
      return $this->date = date("Y-m-d", strtotime("+".$value."year"));
  }
  public function subYear($value)
  {
      return $this->date = date("Y-m-d", strtotime("-".$value."year"));
  }
  public function format($format)
  {
    return date($format, strtotime(($this->date)));
  }
  public function __toString()
  {
    return $this->date;
  }
}
?>