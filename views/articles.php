<! DOCTYPE html>
<html>
<head>
<meta charset="utf8">
<title>Концепция MVC</title>
<link rel="stylesheet" href="#">
<link rel="stylesheet"
href=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap .min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFCJ1SAwiGgFAW/dAiS6JXm"
crossorigin="anonymous">
</head>
<body>
<div class="container">
<h1>Концепция MVC</h1>
<a href="admin">Вход в админ-панель</a> <div>
<?php foreach ($articles as $a): ?>
<div class="article">
<h3><a
href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
<em>Опубликовано: <?=$a['data']?></em>
<p><?=articles_intro($a['content'])?></p>
</div>
<?php endforeach ?>
</div>
<footer>
<p>Концепция MVC<br>Copyright &copy; 2018</p> </footer>
</div>
</body>
</html>