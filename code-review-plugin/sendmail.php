<?php
if (isset ($_POST['content'])) {
    require_once ("email.php");
    $line = $_POST['line'];
    $line = preg_replace("/,(.*)/", "*,\\1", $line);
    $filename = $_POST['primary'];
    $url = $_POST['title'];
	$username = $_POST['username'];
    $name = $_POST['file'];
	$content = $_POST['content'];
    $content = str_replace('<', '&lt;', $content);
    $content = str_replace('>', '&gt;', $content);
    $recevier = array(array("sunxinghua008", "sunxinghua008@gmail.com"),
                      array("xjzc", "xjzc01@gmail.com"),
                      array("Leask", "leaskh@gmail.com"),
                      array('lovelywcm', "lovelywcm@gmail.com"),
                      array('wuhao520', '957554513@qq.com'),
                      array('pekingBoy', 'hzlhu.dargon@gmail.com'),
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
                'username' => '*******',
                'password' => '*******')
                , "*******"
            );
    $email->send($newrecevier, "[SaaS]" .  $filename, '', "<html><body>" . "<br>" . $username . "：" . "<a href=" . $url . ">" . $content . "</a>" . "</body></html>");
} else {
    echo '<script type="text/javascript">alert ("You do not have access to this document!!!");history.go(-1);</script>';
}
?>
