<?php
$conn=@mysql_connect("localhost", "****", "******") or die("mysql数据库没有打开");
@mysql_select_db("feedback") or die ("无法连接feeback数据库");
mysql_query("set names utf8");
?>
