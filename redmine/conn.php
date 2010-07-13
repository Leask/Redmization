<?php
$conn=@mysql_connect("localhost", "root", "AnYuan") or die("mysql数据库没有打开");
@mysql_select_db("feedback",$conn) or die ("无法连接feeback数据库");
mysql_query("set names utf8");
<<<<<<< HEAD
=======
$str=stristr($_SERVER['REQUEST_URI'], "?");
$str=substr($str, 1);
>>>>>>> f2b5045d71ff2fc523cbbe79e24a7bbeb9aeab78
?>