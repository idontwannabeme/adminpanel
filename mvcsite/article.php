<?php 
requiere_once("datebase.php");
requiere_once("models/articles.php");

$link = db_connenct();
$article = articles_get($link,$_GET['id']);

include("D:/OpenServer/domains/localhost/mvcsite/article.php");
 ?>