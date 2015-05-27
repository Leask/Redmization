<?php
require_once ("conn.php");
$line=$_POST['line'];
$content = $_POST['content'];
$content = str_replace('<', '&lt;', $content);
$content = str_replace('>', '&gt;', $content);
$content=addslashes($_POST['content']);
$file=$_POST['primary'];
$lineNum=$_POST['lineNum'];
$username=$_POST['username'];
$str=$_POST['url'];
$sql="INSERT INTO `feedback`.`feedbackview` (`id`, `url`, `line`, `content`,`filename`,`username`,`lineNum`) VALUES (NULL, '$str', '$line', '$content', '$file','$username','$lineNum')";
$result=mysql_query($sql);
?>