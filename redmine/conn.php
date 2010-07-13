<?php
$conn=@mysql_connect("localhost", "root", "AnYuan") or die("mysql数据库没有打开");
@mysql_select_db("feedback",$conn) or die ("无法连接feeback数据库");
mysql_query("set names utf8");
$str=stristr(__FILE__, "?");
$str=substr($str, 1);
?>