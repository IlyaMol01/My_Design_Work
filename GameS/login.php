<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Компьютерные игры</title>
        <link href="/css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header>
        <div class="reg-container" data-container="1" style="height: 500px;">
    <div class="reg_logo">
        <img src="img/icons/Logo_CyberCult.png" alt="Logo">
    </div>
    <div class="reg_message">
        <p>Войти или Зарегистрироваться</p>
    </div>
    <form action="logins.php" method="post">
        <div class="select_totals_">
            <div class="select-nickname">
                <input type="text" placeholder="Никнейм" name="login" id="nicknameSelect" class="selected-nick" value="<?php if(isset($_COOKIE['login'])) { echo $_COOKIE['login']; } ?>">
                <span id="user-nickname" style="display: none;"></span>
            </div>
        </div>
        <div class="select_totals_03">
            <div class="select-pass">
                <input type="text" placeholder="Пароль" name="password" id="passSelect" class="selected-pass" value="<?php if(isset($_COOKIE['password'])) { echo $_COOKIE['password']; }?>">
            </div>
        </div>
        <button type="submit" class="button_" onclick="showUserNickname()">Авторизоваться</button>
    </form>
    <div class="logs_a" style="display: flex; align-items: center; margin-left: 80px;">
        <p style="flex: 1;">Для новеньких геймеров >></p>
        <a href="register.php" style="flex: 1; text-align: center; margin-left: -50px; text-decoration: none; color: darkorchid;">Регистрация</a>
    </div>
</div>
<script src="/js/reg.js"></script>
        </header>
    </body>
</html>