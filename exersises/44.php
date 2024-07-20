<h1>Функции для работы с интерфейсами</h1><br><br>
<span>Исходный код</span><br>
<pre>
interface_exists("test") ? $a= "yes" : $a = "none";
echo $a."<br>";
print_r(get_declared_interfaces());
</pre><br>
<?php 
interface_exists("test") ? $a= "yes" : $a = "none";
echo $a."<br>";
echo "<pre>";
print_r(get_declared_interfaces());
echo "</pre>"
?>