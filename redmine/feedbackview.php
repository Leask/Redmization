<?php
require_once ("conn.php");
$str=stristr(__FILE__, "?");
$str=substr($str, 1);
$line=$_GET['line'];
?>