<!DOCTYPE html>
<html lang="en">

<?php 
    session_start();
    if (isset($_SESSION["user"])) {
        header("location: /admin/index.php");
    }
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="gooey hidden">
            <div class="loader-dots">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-login">
                <h1 class="text-center">Авторизация</h1>
                <div class="login-input">
                    <label class="title-login" for="login">Логин</label>
                    <input name="login" type="text" id="login" placeholder="Логин">
                </div>
                <div class="login-input">
                    <label class="title-password" for="password">Пароль</label>
                    <input name="password" type="password" id="password" placeholder="Пароль">
                </div>
                <div class="btn-login text-center">
                    <button class="btn" onclick="login()">Войти</button>
                    <a href="/">Назад</a>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery-3.7.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>