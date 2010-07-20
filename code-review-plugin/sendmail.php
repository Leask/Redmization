<?php
require_once ("email.php");
$line=str_replace("", "0", $_POST['line']);
$content=addslashes($_POST['content']);
$filename=$_POST['primary'];
$recevier=array("sunxinghua008","xjzc01","leaskh","lovelywcm");
$username=$_POST['username'];
for ($i=0;$i<4;$i++) {
    if ($recevier[$i]!=$username){
        $new[]=$recevier[$i];
    }
}
$email= new Email(array(
                 'host' => 'smtp.gmail.com',
                 'port' => '587', // Backup port: 465
                 'auth' => true,
                 'username' => 'anyuanproject@gmail.com',
                 'password' => 'AnYuan.Project.for.Redmine'
          ),"anyuanproject@gmail.com");
$email->send("$new"." "."<$username@gmail.com>", $filename."文件下".$line."行", $content);
echo "邮件发送成功";
?>
