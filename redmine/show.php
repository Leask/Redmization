<?php

require_once ("conn.php");
$str=$_GET['url'];
$sql="select * from feedbackview where url='".$str."'";
$query=mysql_query($sql);
 while ($row=mysql_fetch_array($query)){
    $arr[]=array("primary"=>$row["filename"],"url"=>$row["url"],"line"=>$row["line"],"content"=>$row["content"],"username"=>$row["username"]);
}
if (count($arr)==0) {
   echo "true";
} else {
   echo  json_encode($arr);
}
?>
