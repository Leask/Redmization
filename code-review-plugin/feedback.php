<?php
require_once ("conn.php");

$line=$_POST['line'];
$content=addslashes($_POST['content']);
$file=$_POST['primary'];
$username=$_POST['username'];
$str=$_POST['url'];


$sql="INSERT INTO `feedback`.`feedbackview` (`id`, `url`, `line`, `content`,`filename`,`username`) VALUES (NULL, '$str', '$line', '$content', '$file','$username')";
$result=mysql_query($sql);
?>