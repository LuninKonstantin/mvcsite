<?php

define("MYSQL_SERVER", "localhost");
define("MYSOL_USER"root");
define("MYSOL_PASSWORD");
define("MYSQL_DB", 'mvcsite');
function db_connect(){
Slink = mysqli_connect(MYSQL_SERVER,MYSQL_USER,MYSQL_PASSWORD,MYSQL_DB)
or die("Error: " mysqli_error($link));
if (!mysqli_set_charset($link, "utf8"))(
printf("Error: " mysqli error($link));
return $link;
?>