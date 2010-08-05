<?php
$username = $_POST['username'];
if ($username != "") {
    require_once ("email.php");
    $line = $_POST['line'];
    $line = preg_replace("/,(.*)/", "*,\\1", $line);
    $content = addslashes($_POST['content']);
    $filename = $_POST['primary'];
    $url = $_POST['title'];
    $recevier = array(
        array("sunxinghua008", "sunxinghua008@gmail.com"),
        array("xjzc", "xjzc01@gmail.com"),
        array("leask", "leaskh@gmail.com"),
        array("lovelywcm", "lovelywcm@gmail.com")
    );

    for ($i = 0; $i < count($recevier); $i++) {
        if ($recevier[$i][0] != $username) {
            $newrecevier[] = $recevier[$i][1];
        }
    }
    $email = new Email(array(
                'host' => 'smtp.gmail.com',
                'port' => '587', // Backup port: 465
                'auth' => true,
                'username' => 'anyuanproject@gmail.com',
                'password' => 'AnYuan.Project.for.Redmine'
                    ), "anyuanproject@gmail.com");
    $email->send($newrecevier, "[SaaS]" . " " . $filename, '', "<html><body>" . "<br>" . $username . "：" . "<a href=" . $url . ">" . $content . "</a>" . "</body></html>");
    echo "邮件发送成功";
} else {
    echo '<script type="text/javascript">alert ("你无权访问此文件!!!");history.go(-1);</script>';
}
?>