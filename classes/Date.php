<?php
class Date
{
    public function __construct(public $year, public $month, public $day)
    {
        
    }


    public function __get($name)
    {
        if($name == "weekDate")
        {
            return date("l", $this->dateTimestamp());
        }
    }

    //mktime(0,0,1,$this->month,$this->day,$this->year
    private function dateTimestamp()
    {
        return strtotime($this->year.'-'.$this->month."-".$this->day);
    }
}
?>