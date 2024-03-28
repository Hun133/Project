<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="../css/login.css" rel="stylesheet">
</head>
<body> 
<div class="login-container">
    <div class="logo">
            <img src="../css/image/loginlogo.png" alt="ARES 로고">
            <div id="login_wrap" class="wrap">   
        <form class="login-form" action="login.php" method="post">
            <input type="text" name="id" placeholder="ID" required>
            <input type="password" name="pw" placeholder="PW" required>
            <label>
                <input type="checkbox" name="remember"> 자동 로그인
            </label>
            <input type="submit" value="로그인">
        </form> 
</div>
        <div class="link-container">
        <a href="#">ID 찾기</a> |
        <a href="#">PW 찾기</a> |
        <a href="#">회원가입</a>
</div>
</body>
</html>
