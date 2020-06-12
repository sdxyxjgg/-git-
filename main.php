<?php
session_start();
if (!(isset($_SESSION['success']) && !empty($_SESSION['success']))) {
    $_SESSION['error'] = '请先登陆';
    header('location:index.php');
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>管理员界面</title>
        <link rel="stylesheet" href="css/main.css">
    </head>

    <body>
        <main>
            <article>
                <form action="oper.php" method="post">
                    <div>
                        <aside>
                            <span>github操作</span>
                            <label>钩子标识码
                                <input type="password" required placeholder="请输入钩子标识码" name="key">
                            </label>
                            <label>项目链接（https格式）
                                <input type="text" required placeholder="请输入项目链接" name="url">
                            </label>
                        </aside>
                        <aside>

                        </aside>
                        <aside>
                            <span>服务器操作</span>
                            <label>项目放的位置(相对同步代码的路径)
                                <input type="text" required placeholder="请输入项目放的位置" name="dir">
                            </label>
                            <label>同步代码放的位置（相对路径）
                                <input type="text" required placeholder="请输入同步代码放的位置" name="code">
                            </label>
                        </aside>
                        <aside>
                            <button>确认提交</button>
                        </aside>
                    </div>
                </form>
            </article>
        </main>
    </body>

    </html>
<?php
}
