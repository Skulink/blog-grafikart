<?php

$categorie = \App\Table\Categorie::find($_GET['id']);
var_dump($categorie);
$article = \App\Table\Article::lastByCategory($_GET['id']);

?>
