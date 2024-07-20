<?php
require_once('IDate.php'); 
Class Date implements IDate
{
  public function __construct(private $date = null, $dateArray = null)
  {
  if($date == null){
    $this->date = date("Y:m:d");
  }
  }
  
  public function setDate($y, $m, $d)
  {
     $this->date = $y.":".$m.":".$d;
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
      if($this->getDay() <31)
      {
      $chktime = date("Y:m:d", strtotime("+".$value."day"));
    }
      if($chktime <=31)
      {
      $this->date = $chktime;
      }
      
      return $this;
  }
  public function subDay($value)
  {
      if($this->date >=1 and $this->date <=31)
      {
         $chktime = date("Y:m:d", strtotime(("-".$value."day")));
      }
        if($chktime >=1 and $this->date <=31)
        {
            $this->date = $chktime;
        }
  }
  public function addMonth($value)
  {

  }
  public function subMonth($value)
  {

  }
  public function addYear($value)
  {

  }
  public function subYear($value)
  {

  }
  public function format($format)
  {

  }
  public function __toString()
  {

  }
}
?>