<h1>Класс File</h1><br><br>

<?php 
//echo "Имя= ".$stud->getName()."\n"."Возраст= ".$stud->getAge()."\n"."Курс= ".$stud->getCourse()."\n";
require_once "./classes/FIle.php";
$file = new File("./files/test.txt");
echo "Полный путь = ".$file->getPath()."<br>";
echo "Имя директории = ".$file->getDir()."<br>";
echo "Имя файла = ".$file->getName()."<br>";
echo "Расширение = ".$file->getExt()."<br>";
echo "Размер = ".$file->getSize()." Байт"."<br>";
echo "Текст файла = ".$file->getText()."<br>";
$file->setText("  Получилось!");
echo "Текст файла при полной замене = ".$file->getText()."<br>";
$file->appendText("Еще раз!");
echo "Текст файла добавляется в конце = ".$file->getText()."<br>";
$file->copy("./files/text2.txt");
echo "Файл скопирован"."<br>"."<pre>";
echo $file->getPath()."<br>";
print_r(scandir("./files"));
echo "</pre>";
$file->setDir("./files/text2.txt");
$file->delete();
echo "Файл удален"."<br>"."<pre>";
echo $file->getPath()."<br>";
print_r(scandir("./files"));
echo "</pre>";
$file->setDir("./files/test.txt");
$file->rename("./files/text.txt");
echo "Файл переименован"."<br>"."<pre>";
echo $file->getPath()."<br>";
print_r(scandir("./files"));
echo "</pre>";
$file->setDir("./files/text.txt");
$file->replace("../text.txt");
echo "Файл перемещен"."<br>"."<pre>";
echo $file->getPath()."<br>";
print_r(scandir("./files"));
echo "</pre>";


?>