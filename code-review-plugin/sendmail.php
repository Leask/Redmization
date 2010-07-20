<?php
require_once ("email.php");
$line=str_replace("", "0", $_POST['line']);
$content=addslashes($_POST['content']);
$filename=$_POST['primary'];
$recevier=array(
          array("sunxinghua008","sunxinghua008@gmail.com"),
          array("xjzc"=>"xjzc01@gmail.com"),
          array("leaskh"=>"leaskh@gmail.com"),
          array("lovelywcm"=>"lovelywcm@gmail.com")
    );
$username=$_POST['username'];
for ($i=0;$i<count($recevier);$i++) {
    if ($recevier[$i][0]!=$username){
        $newrecevier[]=$recevier[$i][0];
    }
}
$email= new Email(array(
                 'host' => 'smtp.gmail.com',
                 'port' => '587', // Backup port: 465
                 'auth' => true,
                 'username' => 'anyuanproject@gmail.com',
                 'password' => 'AnYuan.Project.for.Redmine'
          ),"anyuanproject@gmail.com");
$email->send($newrecevier, $filename."文件下".$line."行", $content);
echo "邮件发送成功";
?>
