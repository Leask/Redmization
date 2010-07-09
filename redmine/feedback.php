<?php
require_once ("conn.php");
////先测试地址
$from="http://testing.aysaas.com/AnYuan/projects/saas/repository/revisions/a91b663b4aa77cfccca9e507ec3ed16c57957119/diff?rev_to=b049d7c7eff9df8f19ca07bf198c942972853cce";
//$str=stristr(__FILE__, "?");
$str=stristr($from, "?");
$str=substr($str, 1);
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