<?php
require_once ("conn.php");
$str="";
$str=$_GET['url'];
$sql="";
$sql="select * from feedbackview where url='".$str."'";
$query="";
$query=mysql_query($sql);
$vailable=false;
 while ($row=mysql_fetch_array($query)){
    $arr[]=array("primary"=>$row["filename"],"url"=>$row["url"],"line"=>$row["line"],"content"=>$row["content"],"username"=>$row["username"]);
	$vailable=true;
}
if ($vailable==false) {
   echo "no";
} else {
   echo  json_encode($arr);
}
?>