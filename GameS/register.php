<?php
include_once('base.php');
session_start();

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    $errors = [];
    $show_errors = false;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Компьютерные игры</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/error.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<header>
    <div class="reg-container" data-container="1">
        <div class="reg_logo">
            <img src="img/icons/Logo_CyberCult.png" alt="Logo">
        </div>
        <div class="reg_message">
            <p style="font-size: 28px;">Регистрация</p>
        </div>
        <form action="reg.php" method="post">
            <div class="select-country">
                <input type="text" placeholder="Выберите Страну" name="city" id="citySelect" class="selected-country input-field" data-field="city" readonly onclick="this.nextElementSibling.style.display = 'none'; showCityOptions()" value="<?php echo isset($city) ? htmlspecialchars($city) : ''; ?>">
                <div id="arrowIcon" class="arrow-icon" style="color: gray; font-size: 25px;"><i class='bx bxs-chevron-down'></i></div>
                <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['city'])): ?>
                    <i class='bx bxs-error-circle error-icon-city' data-field="city"><span class="error-popup"><?php echo $errors['city']; ?></span></i>
                    <?php endif; ?>
                </div>
            <div class="select_total">
                <div class="select-day">
                    <input type="text" placeholder="День" name="day" id="DaySelect" class="selected-total input-field" readonly onclick="showDayOptions(); resetErrors('day')" value="<?php echo isset($day) ? htmlspecialchars($day) : ''; ?>">
                    <div id="arrowIcon_01" class="arrow-icon_01" style="color: gray; font-size: 25px;"><i class='bx bxs-down-arrow'></i></div>
                    <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['day'])): ?>
                    <i class='bx bxs-error-circle error-icon-day' data-field="day"><span class="error-popup"><?php echo $errors['day']; ?></span></i>
                    <?php endif; ?>
                </div>
                <div class="select-month">
                    <input type="text" placeholder="Месяц" name="month" id="MonthSelect" class="selected-total input-field" readonly onclick="showMonthOptions(); resetErrors('month')" value="<?php echo isset($month) ? htmlspecialchars($month) : ''; ?>">
                    <div id="arrowIcon_02" class="arrow-icon_02" style="color: gray; font-size: 25px;"><i class='bx bxs-down-arrow'></i></div>
                    <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['month'])): ?>
                    <i class='bx bxs-error-circle error-icon-month' data-field="month"><span class="error-popup"><?php echo $errors['month']; ?></span></i>
                    <?php endif; ?>
                </div>
                <div class="select-year">
                    <input type="text" placeholder="Год" name="year" id="YearSelect" class="selected-total input-field" readonly onclick="showYearOptions(); resetErrors('year')" value="<?php echo isset($year) ? htmlspecialchars($year) : ''; ?>">
                    <div id="arrowIcon_03" class="arrow-icon_03" style="color: gray; font-size: 25px;"><i class='bx bxs-down-arrow'></i></div>
                    <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['year'])): ?>
                    <i class='bx bxs-error-circle error-icon-year' data-field="year"><span class="error-popup"><?php echo $errors['year']; ?></span></i>
                    <?php endif; ?>
                </div>
            </div>
            <div class="select-data">
                <div class="select_totals">
                    <div class="select-name">
                        <input type="text" placeholder="Имя" name="name" id="nameSelect" class="selected-totals" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>">
                        <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['name'])): ?>
                    <i class='bx bxs-error-circle error-icon-name' data-field="name"><span class="error-popup"><?php echo $errors['name']; ?></span></i>
                    <?php endif; ?>
                    </div>
                    <div class="select-surname">
                        <input type="text" placeholder="Фамилия" name="surname" id="surnameSelect" class="selected-totals" value="<?php echo isset($surname) ? htmlspecialchars($surname) : ''; ?>">
                        <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['surname'])): ?>
                    <i class='bx bxs-error-circle error-icon-surname' data-field="surname"><span class="error-popup"><?php echo $errors['surname']; ?></span></i>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="select_totals_">
                    <div class="select-nickname">
                        <input type="text" placeholder="Никнейм" name="login" id="nicknameSelect" class="selected-nick" value="<?php echo isset($login) ? htmlspecialchars($login) : ''; ?>">
                        <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['login'])): ?>
                    <i class='bx bxs-error-circle error-icon-login' data-field="login"><span class="error-popup"><?php echo $errors['login']; ?></span></i>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="select_totals_02">
                    <div class="select-email">
                        <input type="text" placeholder="Адрес электронной почты" name="email" id="emailSelect" class="selected-email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>">
                        <div class="error-message" style="display: none;"></div>
                <?php if (isset($errors['email'])): ?>
                    <i class='bx bxs-error-circle error-icon-email' data-field="email"><span class="error-popup"><?php echo $errors['email']; ?></span></i>
                    <?php endif; ?>
                    </div>
                </div>
                <div class="select_totals_03">
    <div class="select-pass">
        <input type="password" placeholder="Пароль" name="password" id="passSelect" class="selected-pass" value="<?php echo isset($password) ? htmlspecialchars($password) : ''; ?>">
        <div class="error-message" style="display: none;"></div>
        <?php if (isset($errors['password'])): ?>
            <i class='bx bxs-error-circle error-icon-password' data-field="password"><span class="error-popup"><?php echo $errors['password']; ?></span></i>
        <?php endif; ?>
    </div>
</div>
            </div>
            <button type="submit" class="button_">Зарегистрироваться</button>
            <div class="logs_a" style="display: flex; align-items: center; margin-left: 80px;">
                <p style="flex: 1;">Для опытных геймеров >></p>
                <a href="login.php" style="flex: 1; text-align: center; margin-left: -120px; text-decoration: none; color: darkorchid;">Вход</a>
            </div>
        </form>
    </div>
</header>
<script src="js/reg.js"></script>
<script src="js/error.js"></script>
</body>
</html>