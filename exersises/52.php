<?php 
require_once "./classes/Interval.php";
$time = new Date();
$time->setDate(2024,07,01);
$interval = new Interval(new Date(),$time);
echo $interval->toDays()."<br>";
echo $interval->toMonths()."<br>";
echo $interval->toYears()."<br>";
echo $interval->getDiff()."<br>";
echo $interval->date1."<br>";
echo strtotime($interval->date1)."<br>";
echo strtotime($interval->date2);
?>