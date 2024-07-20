<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ООП Задания</title>
</head>
<body>
<?php
function pasteCodeArr($code){
    echo "<pre>";
    print_r($code);
    echo "</pre>";
}

function pasteCode($code)
{
    echo "<pre>".$code."</pre>";
}
$arr = scandir($_SERVER['DOCUMENT_ROOT']."/exersises");
if(isset($_GET)){
@$select = $_GET['count'];
}
else{
    $select = 1;
}
$count = array_key_last($arr);
?>
<form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="get">
<select name="count">
    <?php
    for($i=2; $i<=$count; $i++)
    { 
        ++$id;
        ++$ik;
        
        ?>
        <option name="count" value ="<?php echo  $id ?>" <?php if ($ik == $select) {echo "selected";}?> ><?php echo $id ?></option>
        <?php
    } 
    
    ?>
    </select>
    <input type="submit" name="submit" value= "Перейти">

</form>
<?php 
@$select = $_GET['count'];
if(isset($_GET)){
@include "./exersises/".$select.".php";
}
?>
</body>
</html>