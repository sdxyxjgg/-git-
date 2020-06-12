<?php
session_start();
if (isset($_POST['key']) && isset($_POST['url']) && isset($_POST['dir']) && isset($_POST['code'])) {
    if (!(empty($_POST['key']) && empty($_POST['url']) && empty($_POST['dir']) && empty($_POST['code']))) {
        $mark = $_POST['key'];
        $link = $_POST['url'];
        $toc = $_POST['dir'];
        $code = $_POST['code'];
        $str = file_get_contents('model.php');
        $str = str_replace('$mark', '"' . $mark . '"', $str);
        $str = str_replace('$code', $code, $str);
        $str = str_replace('$link', $link, $str);
        $str = str_replace('$toc', '"' . $toc . '"', $str);
        mkdir($code);
        file_put_contents($code . '/test.php', $str);
        $_SESSION['success'] = 'yesxjgg';
        header('location:main.php');
    } else {
        $_SESSION['error'] = '请先登陆';
        header('location:index.php');
    }
} else {
    $_SESSION['error'] = '请先登陆';
    header('location:index.php');
}
