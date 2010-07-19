<?php
require_once ("conn.php");
require_once ("email.php");
$email= new Email(array(
                 'host' => 'smtp.gmail.com',
                 'port' => '587', // Backup port: 465
                 'auth' => true,
                 'username' => 'anyuanproject@gmail.com',
                 'password' => 'AnYuan.Project.for.Redmine'
          ),"anyuanproject@gmail.com");

$email->send('"sunxinghua" <sunxinghua008@gmail.com>', "孙兴华用来测试的", "还是来测试的");
die();
$line=$_POST['line'];
$content=addslashes($_POST['content']);
$file=$_POST['primary'];
$username=$_POST['username'];
$str=$_POST['url'];


$sql="INSERT INTO `feedback`.`feedbackview` (`id`, `url`, `line`, `content`,`filename`,`username`) VALUES (NULL, '$str', '$line', '$content', '$file','$username')";
$result=mysql_query($sql);
?>