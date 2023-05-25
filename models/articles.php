<?php
function articles all($link) {
$query = "SELECT * FROM articles ORDER BY id DESC";
$result = mysqli query($link, $query);
if (! $result) die (mysqli_error($link));
$n = mysqli_num_rows($result);
$articles = array();
for ($i = 0; $i < $n; $i++) {
$row = mysqli_fetch_assoc($result);
$articles [] = $row;
}
return $articles;
}
function articles_get($link, $id_article) {
$query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article);
$result = mysqli_query($link, $query) ;
if(!result) die (mysqli_error($link));
$article = mysqli_fetch_assoc($result);
return $article;
}
function articles_new($title, $date, $content) {
}
function articles_edit($id, $title, $date, $content) {
  // Подготовка
        $title = trim($title);
        $content = trim(Scontent);
        Sdata = trim($data);
        Şid = (int) Sid;
        // Проверка
        if (Stitle == '')
        return false;
        // Запрос $sql = "UPDATE articles SET title='ts', content='ts', data='ts' WHERE id='$d'";
        Squery = sprintf($sql, mysqli_real_escape_string($link, $title), mysqli_real_escape_string($link, $content), mysqli_real_escape_string ($link, $data), $id);
        $result = mysqli_query($link, $query);
        if (!Sresult)
        die (mysqlierror($link));
        return mysqli_affected_rows (Slink);
}
function articles_delete ($id) {
 $id = (int) $id;
    // Проверка
    if (Sid == 0)
    return false;
    //Запрос
    $query = $printf("DELETE FROM articles WHERE id = '8d'", Sid); $result = mysqli_query($link, $query);
    if (!$result) die (mysqli_error($link));
    return mysqli_affected_rows ($link);
    function articles_intro($text, $len = 500){ return mb_substr($text, 0, $len);
    }
    function articlesnew($link, $title, $date, $content){
    //Подготовка
    $title = trim($title) ;
    $content = trim($content);
    //Проверка
    if ($title == '')
    return false;
    //Запрос
    $t = "INSERT INTO articles (title, date, content) VALUES ('%s', '%s', '%s')";
    $query = sprintf($t, mysqli real escape string($link, $title), mysqli real escape string($link, $date), mysqli real escape string($link, $content));
    //echo Squery;
    $result = mysqli_query($link, $query);
    if (!$result)
    die (mysqlierror ($link));
    return true;
?>