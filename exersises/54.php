
<h1>Класс Tag</h1><br><br>
<?php
require_once $_SERVER['DOCUMENT_ROOT']."/exersises/requireforTag.php";
$tag = new Tag("h2");
$tag->setAttr('class', 'myClass')->text("Tag");
echo $tag->show();
//print_r($image->getAttrs());
$image = new Image();
$image->setAttr('src', '/files/pic2.jpg')->setAttr('alt','')->setAttr('width','300')->setAttr('height','200');
echo $image;
$link = new Link();
$link->setAttr("href",'/exersises/54.php')->setAttr('text-align','center')->text("ссылка")->setAttr('text-decoration','none');
echo $link; 
$list = new HtmlList("ul");
echo $list->addItem((new ListItem())->text('item1'))->addItem((new ListItem())->text('item2'))
->addItem((new ListItem())->text('item3'))
->show();
$ul = new Ul();
echo $ul->addItem((new ListItem())->text('item1'))->addItem((new ListItem())->text('item2'))
->addItem((new ListItem())->text('item3'))
->show();
$ol = new Ol();
echo $ol->addItem((new ListItem())->text('item1'))->addItem((new ListItem())->text('item2'))
->addItem((new ListItem())->text('item3'))
->show();
$form = new Form();
$button = new Button();
$input = new Input();

$form->setAttrs(['action'=>"$_SERVER[PHP_SELF]",'method'=>'POST']);
echo $form->open();
echo (new Input)->setAttr('name','year')->open();
echo (new Input)->setAttr('type','submit')->open();
echo $button->text('Кнопка')->show();
echo $form->close();
$attrs = ["Input"=>["name"=>"year", "type"=>"text"], "Button"=>["name"=>"mybutton"]];
$formattrs = ["action"=>"$SERVER[PHP_SELF]","method"=>"POST"];
echo $form->form($attrs, $formattrs, "текст");
echo $link->link(["href"=>"/exersises/54.php"]);
echo $image->image(["src"=>"/files/pic2.jpg"]);
$ol1 = new Ol;
$ul1 = new Ul;
echo $ol1->ol([(new Link)->link(["href"=>"/exersises/53.php"]),2,3]);
echo $ul1->ul([1,2,3]);
print_r($_POST);
?>