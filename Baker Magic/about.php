<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>О компаний</title>
    <link href="style.css"rel="stylesheet">
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
        <div class="hello">
            <div class="hi_text">
            <h2 style="text-align: left;">История Компании</h2>
            <h5 style="text-align: left; font-size: 18px;">Baker Magic основана в 2024 году, которые разделена выпечкой. <br>
                Компания специализируется на производстве высококачественных десертов и булочек, <br>
                которые продаются на нашем Интернет - магазине, в городах Казахстан. <br>
                Секрет успеха компании - это использование только натуральных ингредиентов <br>
                и тщательно разработанных рецептов. Со временем Baker Magic станет одним из лидеров <br>
                на рынке по десертам, вкусным булочкам и изумительными тортиками, благодаря своему узнаваемому стилю. <br>
                Компания активно развивает свой Интернет - магазин и постоянно расширяет ассортимент продукции, <br>
                чтобы удовлетворить потребности самых взыскательных клиентов. <br>
                Наша компания придерживается того, что каждый десерт или выпечка должна быть не просто вкусным, <br>
                но и создавать особое волшебство, эмоции у своих клиентов. <br></h5>
                </div>
            <div class="hi_img">
                <img src="img/kartinka_olohka2.jpeg" alt="">
            </div>
        </div>
        <div class="hello2">
           <div class="hi_text">
            <h2 style="text-align: left;">Секретные ингридиенты</h2>
            <h5 style="text-align: left; font-size: 18px;">Тайным ингредиентом, придающим неповторимый вкус нашей выпечке, является особенный джем, <br>
                который мы закупаем у нашего поставщика. Мы также добавляем в наши рецепты натуральные <br>
                ванильные стружки, чтобы придать изысканный аромат нашим булочкам, кексам. <br>
                Шоколад, который мы используем для наших десертов, имеет высокий процент какао и тщательно <br>
                отобран для создания неповторимого вкуса. Секретом нашего идеального теста для выпечки является <br>
                использование свежего молока и качественного сливочного масла от местных производителей. <br>
                Кроме того, мы добавляем в наши рецепты свежие фрукты и ягоды, которые придают десертам неповторимый вкус и аромат. <br>
                Наша компания стремится использовать только натуральные и свежие ингредиенты без искусственных <br>
                добавок и консервантов. Наша цель - радовать клиентов качественной и изысканной выпечкой, <br>
                в которой каждый ингредиент имеет значение и призван создать неповторимый вкус. <br>
            </h5>
               </div>
               <div class="hi_img2">
                   <img src="img/kartinka_oblohka1.jpeg" alt="">
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
