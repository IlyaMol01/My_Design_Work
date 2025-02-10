<?php
session_start();
?>
  <!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Главная</title>
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
                        echo '<a href="profile.php"><i class="fa  fa-user" aria-hidden="true"></i></a>';
						echo '<p>',$_SESSION['login'], '</p>';
						echo '</div>';
						echo '<div class="icons_cont">';
						echo '<a href="logout.php"><i class="fa   fa-chevron-circle-right"  aria-hidden="true"></i></a>';
                        echo '<p>Выйти</p>';
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
			<div class="wrapper_hi">
			<div class="hello">
				<div class="hi_text">
				<h5>Baker Magic основана в 2023 году,<br> благодаря наивысшей выпечкой.</h5>
				<h2>Сладости,<br> приготовленные<br> с любовью</h2>
				<h5>Вся продукция с гарантией и сроками годности<br> – доставляем за 2-4 дня от заказа.</h5>
				</div>
				<div class="hi_img">
					<img src="img/bulochki_mini-prais.jpeg">
				</div>
			</div>
			</div>
			<div class="hello2">
				<div class="hi_text">
					<h5>Наши повара и кондитеры<br>стараются сделать производство лучше других</h5>
					<h2>Только качественная <br> продукция</h2>
					<div class="icon_text_all">
						<div class="icon_text">
							<img src="img/pretzel.svg" alt="">
						<p>Свежие <br> и натуральные ингредиенты</p>
						</div>
						<div class="icon_text">
							<img src="img/kitchen-tools.svg" alt="">
							<p>Принцип <br>профессиональной выпечки</p>
						</div>
						<div class="icon_text">
							<img src="img/croissant-2.svg" alt="">
							<p>Более 750 заказов<br> за несколько месяцев</p>
						</div>
					</div>
				</div>
				<div class="hi_img2">
					<img src="img/tortiki.jpg" alt="">
				</div>
			</div>
			<div class="cards_info">
				<div class="card_text_hi">
					<h1><small>Выпускаемая продукция</small></h1>
					<h5>Производим 92 кондитерских изделия <br>– Торты, кексы, пончики, булочки.</h5>
				</div>
				<div class="cards">
				<div class="card" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; width: 370px; height: 270px;">
					<img src="img/keksi_mini-prais.jpeg" alt="" style="width: 370px; border-top-left-radius: 25px; border-top-right-radius: 25px;">
					 <div class="info" style="height: 60px;">
						<h5>Тортики</h5>
						<h6><small>Около 22 видов.</small></h6>
					 </div>
				</div>
				<div class="card" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; width: 370px; height: 270px;">
					<img src="img/tortiki.jpg" alt="" style="width: 370px; border-top-left-radius: 25px; border-top-right-radius: 25px;">
					 <div class="info" style="height: 60px;">
						<h5>Кексы</h5>
						<h6><small>Около 23 видов.</small></h6>
					 </div>
				</div>
				<div class="card" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; width: 370px; height: 270px;">
					<img src="img/bulochki_mini-prais.jpeg" alt="" style="width: 370px; border-top-left-radius: 25px; border-top-right-radius: 25px;">
					 <div class="info" style="height: 60px;">
						<h5>Пончики</h5>
						<h6><small>Около 23 видов.</small></h6>
					 </div>
				</div>
				<div class="card" style="border-bottom-right-radius: 25px; border-bottom-left-radius: 25px; width: 370px; height: 270px;">
					<img src="img/ponchiki_mini-prais.jpeg" alt="" style="width: 370px; border-top-left-radius: 25px; border-top-right-radius: 25px;">
					 <div class="info" style="height: 60px;">
						<h5>Булочки</h5>
						<h6><small>Около 23 видов.</small></h6>
					 </div>
				</div>
			</div>
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
