<?php
session_start();
include_once('base.php');

//Временный пример заполнения//

$userStatistics = [
    'купленные_игры' => 5,
    'общее_время_в_играх' => 120,
    'достижения' => 15,
    'друзья' => 23,
    'средняя_оценка' => 4.7,
    'завершенные_игры' => 3,
];
$purchasedGames = [
    ['title' => 'Cyberpunk 2077', 'purchase_date' => '2023-01-15', 'play_time' => 45, 'achievements' => 10],
    ['title' => 'The Witcher 3: Wild Hunt', 'purchase_date' => '2023-02-20', 'play_time' => 60, 'achievements' => 20],
    ['title' => 'Assassin\'s Creed Valhalla', 'purchase_date' => '2023-03-10', 'play_time' => 15, 'achievements' => 5],
];
$accountSettings = [
    ['link' => 'change_password.php', 'text' => 'Сменить пароль'],
    ['link' => 'delete_account.php', 'text' => 'Удалить аккаунт'],
    ['link' => 'edit_profile.php', 'text' => 'Редактировать профиль'],
    ['link' => 'notification_settings.php', 'text' => 'Настройки уведомлений'],
];
$friendsActivity = [
    ['name' => 'PlayerOne', 'status' => 'В сети', 'game' => 'Cyberpunk 2077'],
    ['name' => 'GamerX', 'status' => 'Не в сети', 'game' => 'The Witcher 3'],
];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link type="image/x-icon" href="img/icons/icon_CyberCult.ico" rel="shortcut icon">
    <title>Профиль пользователя - Lifes Games</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/profile.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
    <div class="menu_logo">
        <a class="logo" href=""><img src="img/icons/Logo_CyberCult.png" alt="CyberCult"></a>
        <button class="language-icon"><i class='bx bx-globe'></i></button>
        <?php if (isset($_SESSION['nickname'])): ?>
            <a href="" style="text-decoration: none; color: white; font-size: 19px;">
                <button class="account-icon animated-icon active"><i class='bx bxs-user-circle'></i></button>
                <span><?php echo $_SESSION['nickname'];?></span>
            </a>
        <?php else: ?>
            <a href="register.php">
                <button class="account-icon grey-icon">
                    <i class='bx bxs-user-circle'></i>
                </button>
            </a>
        <?php endif; ?>
    </div> 
    <div class="menu_total">
        <div class="main-menu">
            <a href="index.php">Главная</a>
            <a href="shop_games.php">Все игры</a>
            <a href="news_game.php">Новости</a>
            <a href="forum.php">Форум</a>
            <a href="Profile.php" style="color: #8F509D;">Профиль</a>
        </div>
    </div>
</header>
<section class="profile-section">
    <div class="profile-container">
        <div class="avatar-sidebar-container">
            <div class="avatar">
                <img src="path/to/avatar.jpg" alt="User Avatar">
            </div>
            <div class="sidebar">
                <ul>
                    <?php foreach ($accountSettings as $setting): ?>
                        <li><a href="<?php echo $setting['link']; ?>"><?php echo $setting['text']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <div class="content-container">
            <div class="header">
                <h2>Статистика</h2>
            </div>
            <div class="stat-cards">
                <div class="stat-card stat-card-nickname">
                    <p class="nickname-text"><strong>Никнейм:</strong> <?php echo $_SESSION['nickname']; ?></p>
                    <div class="nickname-effect"></div>
                </div>
                <div class="stat-card stat-card-last-login">
                    <p><strong>Последний вход:</strong> <?php echo isset($_SESSION['last_login']) ? $_SESSION['last_login'] : 'Неизвестно'; ?></p>
                    <div class="activity-indicator">
                        <svg class="activity-circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gradient" x1="0%" y1="0%" x2="100%" y2="0%">
                                <stop offset="0%" stop-color="#2ECC71" />
                                <stop offset="50%" stop-color="#F1C40F" />
                                <stop offset="100%" stop-color="#E74C3C" />
                            </linearGradient>
                        </defs>
                            <circle cx="50" cy="50" r="45" stroke-width="5" fill="none" stroke="#8F509D" />
                            <circle cx="50" cy="50" r="45" stroke-width="5" fill="none" stroke="url(#gradient)" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="header">
                <h2>Общие данные</h2>
            </div>
            <div class="stat-block">
                <div class="stat-item">
                    <i class='bx bx-time-five'></i>
                    <span><strong>Общее время в играх:</strong> <?php echo $userStatistics['общее_время_в_играх']; ?> ч.</span>
                </div>
                <div class="stat-item">
                    <i class='bx bx-download'></i>
                    <span><strong>Скачанные игры:</strong> <?php echo $userStatistics['купленные_игры']; ?></span>
                </div>
                <div class="stat-item">
                    <i class='bx bx-group'></i>
                    <span><strong>Количество друзей:</strong> <?php echo $userStatistics['друзья']; ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<div id="profile-modal" class="modal">
    <div class="modal-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <h2>Редактировать профиль</h2>
        <form action="edit_profile.php" method="POST">
            <label for="nickname">Имя пользователя:</label>
            <input type="text" id="nickname" name="nickname" value="<?php echo $_SESSION['nickname']; ?>">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>">
            <button type="submit">Сохранить</button>
        </form>
    </div>
</div>
<footer>
    <div class="cont_foot" style="background-color: indigo; padding: 50px; margin-left: 1px; padding-right: 50px; border-top-left-radius: 25px; border-top-right-radius: 25px; text-align: left; ">
        <div class="menu_s" style="margin-left: 190px; margin-right: 190px;">
            <div class="fots-menu" style="font-size: 20px; text-decoration: none; color: white;">
                <a href="index.php" style="text-decoration: none; color: white;">Главная</a>
                <a href="php/shop_games.php" style="text-decoration: none; color: white;">Все игры</a>
                <a href="php/news_game.php" style="text-decoration: none; color: white;">Новости</a>
                <a href="php/forum.php" style="text-decoration: none; color: white;">Форум</a>
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
<script src="js/profile.js"></script>
<script src="js/style.js"></script>
</body>
</html>