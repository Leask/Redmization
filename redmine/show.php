<?php

require_once ("conn.php");
$sql="select * from feedbackview where url='".$str."'";
$query=mysql_query($sql);
 while ($row=mysql_fetch_array($query)){
    $arr[]=array("primary"=>$row["filename"],"url"=>$row["url"],"line"=>$row["line"],"content"=>$row["content"],"username"=>$row["username"]);
}
echo  json_encode($arr);
?>
