<?php
require_once ("conn.php");
$line=$_POST['line'];
$content=$_POST['content'];
$file=$_POST['primary'];
$username=$_POST['username'];
$sql="INSERT INTO `feedback`.`feedbackview` (`id`, `url`, `line`, `content`,`filename`,`username`) VALUES (NULL, '$str', '$line', '$content', '$file','$username')";
$result=@mysql_query($sql);
?>