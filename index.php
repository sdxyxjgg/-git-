<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>后台登陆</title>
    <link rel="stylesheet" href="src/xjgg.css">

</head>

<body>
    <main>
        <article>
            <aside>
                <a href="javascript:" class="pretty"><span class="prettycopy">
                        <?php
                        session_start();
                        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                            echo $_SESSION['error'];
                        } else {
                            echo '请先登陆';
                        }
                        ?>
                    </span></a>
            </aside>
            <form action="logo.php" method="POST" name="xjgg">
                <aside><input type="text" name="username" required='required' placeholder="请输入你的账号" /></aside>
                <aside><input type="password" name="password" required='required' placeholder="请输入你的密码" /></aside>
                <aside><button class="streamer">登陆</button></aside>
            </form>
        </article>
    </main>
    <script>
        let head = document.head;

        function css(str) {
            let style = document.createElement('style');
            style.innerHTML = str;
            head.append(style);
        }
        css(`
            a::after{
            content: '<?php
                        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                            echo $_SESSION['error'];
                        } else {
                            echo '请先登陆';
                        }
                        ?>';
            }
            a::before{
                content: '<?php
                            if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                                echo $_SESSION['error'];
                            } else {
                                echo '请先登陆';
                            }
                            ?>';
            }
            span::after{
                content: '<?php
                            if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                                echo $_SESSION['error'];
                            } else {
                                echo '请先登陆';
                            }
                            ?>';
            }
            span::before{
                content: '<?php
                            if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
                                echo $_SESSION['error'];
                            } else {
                                echo '请先登陆';
                            }
                            ?>';
            }
        `);
    </script>
</body>

</html>