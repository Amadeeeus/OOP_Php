<?php
interface IDate
{
    public function __construct();
    public function getDay();
    public function getMonth();
    public function getYear();
    public function getWeekDay();
    public function addDay($value);
    public function subDay($value);
    public function addMonth($value);
    public function subMonth($value);
    public function addYear($value);
    public function subYear($value);
    public function format($format);
    public function __tostring();

}
?>