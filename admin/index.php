<?php
require_once("…/database.php"); require once("./models/articles.php");
$link = db_connect();
if(isset($_GET['action']))
$action = $_GET['action']; Else
$action = "";
if(Saction == "add"){
if(!empty(S_POST)) { articles_new($link, $_POST['title'], $_POST['data'], $_POST['content']);
header("Location: index.php");
include("…/views/article_admin.php");
}else if($action == "edit")(
if(!isset ($ GET['id']))
header("Location: index.php"); $id = (int)$_GET['id'];
if(!empty($_POST) && $id > 0){ articles_edit($link, $id, $_POST('title'], $_POST['data'],
$ POST('content']);
header("Location: index.php");
}
$article = articles_get($link, $id);
include("/views/article admin.php");
} else if($action = "delete"){
$id = $ GEt['id']; $article = articles delete($link, $id); header("Location: index.php"); else
Sarticles = articles_all($link); include("…/views/articles_admin.php");
?>