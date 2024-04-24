<<?php 
require_once('datebase.php');
require_once('D:/openserver/domains/localhost/mvcsite/models/articles.php');

$link = db_connect();
$articles = articles_all($link);

include ('D:/openserver/domains/localhost/mvcsite/views/articles.php');
 ?>
