<?php
// 假设这里是你的验证登录逻辑的结果
$userLoggedIn = true; // 示例变量，表示用户已成功登录
$username = "JohnDoe"; // 示例用户名，实际应用中应从登录验证逻辑获取

if (!$userLoggedIn) {
    // 如果用户未登录，重定向回登录页面
    header('Location: login.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>欢迎页面</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .header { background-color: #007bff; color: white; padding: 20px; text-align: center; }
        .content { margin: auto; width: 60%; padding: 20px; }
        .footer { position: fixed; left: 0; bottom: 0; width: 100%; background-color: #007bff; color: white; text-align: center; padding: 10px; }
        a { color: white; text-decoration: none; }
    </style>
</head>
<body>

<div class="header">
    <h1>欢迎, <?php echo $username; ?>!</h1>
</div>

<div class="content">
    <p>这是一个示例欢迎页面，你可以在这里添加更多的信息。</p>
    <p>使用上方的导航栏来探索网站。</p>
</div>

<div class="footer">
    <a href="#">主页</a> | <a href="#">个人资料</a> | <a href="#">注销</a>
</div>

</body>
</html>
