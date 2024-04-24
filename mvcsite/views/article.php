<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="#">
	<link rel="stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-gn5384xqq1aowxa+058rxpxpg6fy4iwvtnh0e263xmfcjlsawiggfaw/dais6jxm" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<h1> Концепция MVC </h1>
	<a href = "admin">Вход в админ панель</a>
<div>
	
	<div class="article">
		<h3><a href="article.php?id=<?=$a['id']?>"><?=$article['title']?></a></h3>
		<em>Опубликовано: <?=$article['date']?><</em>
		<p><?=$a['content']?><</p>
	</div>
	<footer>
		<p>Концепция MVC<br>Copyright &copy;2018</p>
	</footer>
</div>
</body>
</html>