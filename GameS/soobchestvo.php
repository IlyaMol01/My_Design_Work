<?php
session_start();
include_once('base.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link type="image/x-icon" href="img/icons/icon_CyberCult.ico" rel="shortcut icon">
        <title>CyberCult</title>
        <link href="/css/style.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <header>
        <div class="menu_logo" style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 18px;">
    <a class="logo" href=""><img src="img/icons/Logo_CyberCult.png" alt="CyberCult" style="align-items: center;"></a>
    <button class="language-icon" style="margin-right: -10px;"><i class='bx bx-globe'></i></button>
    <?php if (isset($_SESSION['nickname'])): ?>
        <a href="#" style="text-decoration: none; color: white; font-size: 19px;">
            <button class="account-icon animated-icon active" style="margin-right: 15px;"><i class='bx bxs-user-circle'></i></button>
            <span style="margin-right: 155px; font-size: 19px;"><?php echo $_SESSION['nickname'];?></span>
        </a>
    <?php else: ?>
        <a href="register.php">
            <button class="account-icon grey-icon" style="margin-right: 155px;">
                <i class='bx bxs-user-circle'></i>
            </button>
        </a>
    <?php endif; ?>
</div> 
            <div class="menu_for">
                <div class="site">
                        <a href="index.php" class="silk_01">На Сайт</a>
                        <a href="forum.php" class="silk_02">FAQ</a>
                        <a href="forum.php" class="silk_03">Game-Советы</a>
                        <a href="" class="silk_04">Сообщество</a>
                    </div>
                    <div class="pod-menu-for">
                        <div class="soob_01" style="text-align: center; background-color: none;">
                            <h1>В ближайшем Будущем!</h1>
                        </div>
                    </div>
            </div>
            <footer>
    <div class="cont_foot" style="background-color: indigo; padding: 50px; margin-left: 1px; padding-right: 50px; border-top-left-radius: 25px; border-top-right-radius: 25px; text-align: left; ">
        <div class="menu_s" style="margin-left: 190px; margin-right: 190px;">
            <div class="fots-menu" style="font-size: 20px; text-decoration: none; color: white;">
                <a href="index.php" style="text-decoration: none; color: white;">Главная</a>
                <a href="/shop_games.php" style="text-decoration: none; color: white;">Все игры</a>
                <a href="/news_game.php" style="text-decoration: none; color: white;">Новости</a>
                <a href="/forum.php" style="text-decoration: none; color: white;">Форум</a>
            </div>
            <div class="line"></div>
        </div>
        <div class="foot_info"><div class="menu_logo" style="display: flex; justify-content: center; align-items: center; margin-top: 10px; margin-bottom: 18px;">
        <a class="logo" href=""><img src="img/icons/Logo_CyberCult.png" alt="CyberCult" style="align-items: center;"></a></div>
        <div class="soc" style=" margin-right: 220px; float: right;">
            <a href="https://x.com/-"><img src="img/icons/tw.png" alt="X" style="width: 40px; height: 40px; background-color: white; border-radius: 50%;"></a>
            <a href="https://www.instagram.com/?hl=ru"><img src="img/icons/inst.png" alt="inst" style="width: 40px; height: 40px; background-color: white; border-radius: 50%;"></a>
            <a href="https://ru-ru.facebook.com/index.php/"><img src="img/icons/fb.png" alt="fb" style="width: 40px; height: 40px; background-color: white; border-radius: 50%;"></a>
            <a href="https://discord.com/"><img src="img/icons/disc.png" alt="disc" style="width: 40px; height: 40px; background-color: white; border-radius: 50%;"></a>
        </div>
        </div>
        <div style="margin-left: 0px; text-align: center; font-size: 16px; color: darkgray; margin-top: 120px; margin-bottom: -15px;">©2024 CyberCult Entertainment, Inc.</div>
    </div>
</footer>
        </header>
        <div id="modal" class="modal">
  <div class="modal-content">
    <h2>Вы хотите Выйти?</h2>
    <a href="#" id="logout" style="text-decoration: none; color: gray; font-size: 22px;">Выйти</a>
    <a href="#" id="cancel" style="text-decoration: none; color: gray; font-size: 22px;">Отмена</a>
  </div>
</div>
    </body>
</html>