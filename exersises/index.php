<?php 
require_once "./classes/Tag.php";
require_once "./classes/Image.php";
require_once "./classes/Link.php";
$tag = new Tag("h2");
$tag->setAttr('class', 'myClass')->text("Tag");
echo $tag->show();
//print_r($image->getAttrs());
$image = new Image();
$image->setAttr('src', './files/pic2.jpg')->setAttr('alt','')->setAttr('width','300')->setAttr('height','200');
echo $image;
$link = new Link();
$link->setAttr("href",'')->setAttr('text-align','center')->text("ссылка")->setAttr('text-decoration','none');
echo $link; 
echo $_SERVER['REQUEST_URI'];
?>