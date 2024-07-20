
<span>Начальные значения свойств в конструкторе</span><br><br>
<span>Исходный код</span><br><br>
<pre>

</pre>
<?php 
require_once "./classes/Student.php";
$stud = new Student("Pavel");
echo "Студент= ".$stud ->getName()."\n"."Курс= ".$stud->getCourse()."\n";
$stud->addToNextCourse();
echo "Студент= ".$stud ->getName()."\n"."Курс= ".$stud->getCourse()."\n";
?>