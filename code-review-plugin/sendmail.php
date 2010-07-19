<?php
require_once ("email.php");
$line=$_POST['line'];
$content=addslashes($_POST['content']);
$filename=$_POST['primary'];
$username=$_POST['username'];
$email= new Email(array(
                 'host' => 'smtp.gmail.com',
                 'port' => '587', // Backup port: 465
                 'auth' => true,
                 'username' => 'anyuanproject@gmail.com',
                 'password' => 'AnYuan.Project.for.Redmine'
          ),"anyuanproject@gmail.com");
$email->send('"sunxinghua008"."<sunxinghua008@gmail.com>"', "111", "1111");
echo "邮件发送成功";
?>
