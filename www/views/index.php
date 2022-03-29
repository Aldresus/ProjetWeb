<?php
// Extraction des informations

$query = $connexion->prepare("SELECT * FROM news ORDER BY id DESC");
$query->execute();

$list_news = array();
$i = 0;
while($data = $query->fetch()){
    $list_news[$i]['id'] = $data['id'];
    $list_news[$i]['titre'] = $data['titre'];
    $list_news[$i]['date'] = $data['date'];
    $list_news[$i]['content'] = $data['contenu'];
    $i++;
}

// On lance Smarty

require('Smarty-4.1.0/libs/Smarty.class.php');

$tpl = new Smarty();

$tpl->assign('list_news', $list_news);

$tpl->display("news.html");
?>
