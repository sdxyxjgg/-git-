<?php
session_start();
if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
    if ($_POST['username'] == "3250403060" && $_POST['password'] == "xing78910") {
        $_SESSION['success'] = 'yes';
        header('location:main.php');
    } else {
        $_SESSION['error'] = '账号或密码错误';
        header('location:index.php');
    }
} else {
    $_SESSION['error'] = '账号或密码错误';
    header('location:index.php');
}
