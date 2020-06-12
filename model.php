<?php
//自配window系统，需要先安装git软件
$secret = $mark;
$path = 'C:/Program Files/Git/bin';
$dir = "C:\wamp64\www\main\$code"; //路径最好是这样的，不然批处理命令不认识
$dir = $dir . '\\' . $toc;
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE'];
if ($signature) {
    $hash = "sha1=" . hash_hmac('sha1', file_get_contents("php://input"), $secret);
    if (strcmp($signature, $hash) == 0) {
        // echo shell_exec('cd {$path} && dir && git --version');
        echo shell_exec("rmdir /q /s {$dir}"); //下载前先清空一下文件夹，否则会下载失败
        echo shell_exec("cd {$path} && git clone $link {$dir}");
        // echo shell_exec("cd {$path} && git reset --hard origin/master && git clean -f && git pull 2>&1");
        exit();
    }
}
http_response_code(404);
