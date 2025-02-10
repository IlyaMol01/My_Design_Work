<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Обратная связь</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<div class="headercont" style="background-color: BlanchedAlmond;">
			<div class="header">
				<div class="logo">
					<img src="img/Logo.png" alt="">
				</div>
				<div class="menu">
				<a href="index.php">Главная</a>
				<a href="catalog.php">Каталог</a>
				<a href="forms.php">Обратная связь</a>
				<a href="about.php">О компаний</a>
			</div>
				<div class="icons">
                    <?php
                    if (isset($_SESSION['login'])) {
						echo '<div class="icons_cont">';
                        echo '<a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>';
						echo '<p>Корзина</p>';
						echo '</div>';
						echo '<div class="icons_cont">';
                        echo '<i class="fa  fa-user" aria-hidden="true"></i>';
						echo '<p>',$_SESSION['login'], '</p>';
						echo '</div>';
						echo '<div class="icons_cont">';
						echo '<i class="fa   fa-chevron-circle-right"  aria-hidden="true"></i>';
                        echo '<a href="logout.php">Выйти</a>';
						echo '</div>';
                    }
                    else {
						echo '<div class="icons_cont">';
						echo('<a href="login.html"><i class="fa  fa-user" aria-hidden="true"></i></a>');
                        echo('<a href="login.html">Вход</a>');
						echo '</div>';
                    }
                    ?>
				</div>
				</div>
			</div>
			</div>
        <div class="forms">
            <h2>Обратная связь</h2>
            <p style="font-size: 21px;">Если у Вас есть вопросы или предложения, заполните форму обратной связи. <br>
                Мы обязательно свяжемся с Вами.</p>
				<form name="feedback" action="forma.php" method="post">
                <p style="font-size: 25px; color: DarkGreen; font-weight: 500;">Ваш номер телефона *</p>
                <input type="text" name="number" placeholder="Введите телефон">
                <p style="font-size: 25px; color: DarkGreen; font-weight: 500;">Ваш Email *</p>
                <input type="text" name="email" placeholder="Введите Email">
                <p style="font-size: 25px; color: DarkGreen; font-weight: 500;">Ваше имя *</p>
                <input type="text" name="name" placeholder="Введите Имя">
                <p style="font-size: 25px; color: DarkGreen; font-weight: 500;">О чем хотите сообщить? *</p>
                <textarea name="message" placeholder="Напишите сообщение"></textarea>           
                <button type="submit">Отправить</button>
			</form>
        </div>
		<div class="botter_cont" style="background-color: BlanchedAlmond; border-top-right-radius: 3%; border-top-left-radius: 3%;">
        <div class="botter">
            <div class="menu_all">
                <div class="menu_text" style="margin-bottom: 30px;">
                    <a href="index.php" style="color: DarkSlateGrey; font-weight: 600;"><small>Главная</small></a>
                    <a href="catalog.php" style="font-weight: 600; color: DarkSlateGrey;"><small>Каталог</small></a>
                    <a href="forms.php" style="font-weight: 600; color: DarkSlateGrey;"><small>Обратная связь</small></a>
                    <a href="about.php" style="font-weight: 600; color: DarkSlateGrey;"><small>О компаний</small></a>
                </div>
                <div class="logo_footer" style="margin-bottom: 30px;">
                    <img src="img/Logo.png" alt="" style="height: 90px; width: 250px;">
                </div>
            </div>
            <div class="bot_info">
          <div class="bot_text">
          <p class="infor" style="color: DarkSlateGrey; margin-bottom: 12px;">Контактная информация:</p>
						<p style="color: DarkSlateGrey; margin-bottom: 15px;"><small><small>Наш телефон: <a href="+7-772-723-6123" style="color: SaddleBrown; font-weight: 400; text-decoration: none;">+7-772-723-6123</a><br>Наша почта: <a href="ilya.molokob@gmail.com" style="text-decoration: none; color: SaddleBrown; font-weight: 400;">ilya.molokob@gmail.com</a></small></small></p>
						<p style="color: DarkSlateGrey; margin-bottom: 25px;"><small>Наш адрес:<br><small>РК, г. Петропавловск, ул. Театральная 121</small></small></p>
					</div>
               <div class="bot_icons">
							<p style="color: DarkSlateGrey; margin-bottom: 35px;"><small>Следите за нами:</small></p>
							<div class="bot_icons_imgs" style="margin-bottom: 13px;">
							<a href="#"><img src="img/icons/wapp.png" alt=""></a>
							<a href="#"><img src="img/icons/inst.png" alt=""></a>
							<a href="#"><img src="img/icons/tg.png" alt=""></a>
							<a href="#"><img src="img/icons/vk.png" alt=""></a>
							</div>
						</div>
					</div>
					<div class="total_icon_text">
          <div class="copy" style="margin-bottom: 15px; margin-right: 25px; display: flex; flex-direction: row; justify-content: space-between; justify-content: left; align-items: center;">
          <p style="color: DarkSlateGrey; margin-right: 80px; text-align: center; margin-top: 12px; margin-left: auto; margin: center;"><small>© "Baker Magic" 2023-2024</small></p>
		  <a href="#" class="karts_1"><i class="fa fa-cc-mastercard" aria-hidden="true"></i></a>
		  <a href="#" class="karts_2"><i class="fa fa-cc-visa" aria-hidden="true"></i></a>
          </div>
          </div>
		</div>
	</div>
		<div class="header_m">
					<div class="icons_m">
						<a href="index.php"><i class="fa fa-home" aria-hidden="true"></i></i></a>
						<a href="index.php">Главная</a>
					</div>
					<div class="icons_m">
						<a href="catalog.php"><i class="fa fa-list-ul" aria-hidden="true"></i></a>
						<a href="catalog.php">Каталог</a>
					</div>
					<div class="icons_m">
						<a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></i></a>
						<a href="cart.php">Корзина</a>
					</div>
					<div class="icons_m">
					<?php
                   		if (isset($_SESSION['login'])) {
						echo '<a href="logout.php"><i class="fa fa-user" aria-hidden="true"></i></a>';
						echo '<a href="logout.php">', $_SESSION['login'], '</a>';
						}
					else {
						echo '<a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a>';
						echo '<a href="login.html">', 'Вход', '</a>';
					}
					?>
					</div>

					<div class="icons_m">
						<a href="forms.php"><i class="fa fa-reorder" aria-hidden="true"></i></a>
						<a href="forms.php">Контакты</a>
					</div>
				</div>
			</div>
		</div>
</body>
</html>
