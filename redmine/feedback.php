<?php
require_once ("conn.php");
$line=$_GET['line'];
$content=$_GET['content'];
$file=$_GET['primary'];
$username=$_GET['username'];
$sql="INSERT INTO `feedback`.`feedbackview` (`id`, `url`, `line`, `content`,`filename`,`username`) VALUES (NULL, '$str', '$line', '$content', '$file','$username')";
$result=@mysql_query($sql);
if ($result){
   echo "评论提交成功";
} else {
   echo "数据有误";
}
?>