<?php

require_once ("conn.php");
////先测试地址
$from="http://testing.aysaas.com/AnYuan/projects/saas/repository/revisions/a91b663b4aa77cfccca9e507ec3ed16c57957119/diff?rev_to=b049d7c7eff9df8f19ca07bf198c942972853cce";
//$str=stristr(__FILE__, "?");
$str=stristr($from, "?");
$str=substr($str, 1);
$sql="select * from feedbackview where url='".$str."'";
$query=mysql_query($sql);
 while ($row=mysql_fetch_array($query)){
    $arr[]=array("primary"=>$row["filename"],"url"=>$row["url"],"line"=>$row["line"],"content"=>$row["content"],"username"=>$row["username"]);
}
echo  json_encode($arr);
?>
