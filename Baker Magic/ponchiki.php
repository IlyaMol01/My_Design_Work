<?php
session_start();
include_once('base.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пончики | Каталог</title>
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
</div>
<div class="catalog_hi">
<div class="transition" style="display: flex; margin-top: 20px; flex-direction: row; justify-content: space-between; justify-content: left; margin-right: auto; margin-left: 85px;">
		<a href="index.php" style="color: Lime;" class="___">Главная</a>
		<p style="margin-left: 3px; color: DarkGray;">/</p>
		<a href="catalog.php" style="color: Lime; margin-left: 3px;" class="__">Каталог</a>
		<p style="margin-left: 3px; color: DarkGray;">/</p>
		<p style="color: DarkGray; margin-left: 3px;">Пончики</p>
	</div>
    <h1>Пончики</h1>
	<div class="sort_">
<button class="sorting">Сортировать</button>
    <div class="sort_menu">
      <ul>
        <li><a href="?sort=cheap">Дешевые цены</a></li>
        <li><a href="?sort=expensive">Дорогие цены</a></li>
		<li><a href="ponchiki.php">Сбросить</a></li>
      </ul>
    </div>
  </div>
    <div class="catalog_cont1">
	<div id="popup" class="popup">Товар добавлен <a href="cart.php" class="panel">в Корзину</a></div>
	<?php
		$sort = isset($_GET['sort']) ? $_GET['sort'] : '';
		$sql = "SELECT * FROM goods WHERE id_catalog = '4'";
		if ($sort === 'expensive') {
		  $sql .= "ORDER BY price DESC";
		} else if ($sort === 'cheap') {
		  $sql .= "ORDER BY price ASC";
		}
		$result = mysqli_query($base,$sql);


         while ($row = $result-> fetch_array(MYSQLI_ASSOC)) {?>
            <form class="card_catalog1" action="add_goods.php" method="post">
                <input type="hidden" name="goods_id" value="<?php echo($row["id"]) ?>">
				<div class="card_border">
                <img src="<?php echo($row["img"]) ?>"></div>
                <p style="font-weight: 600; text-align: left; margin-top: 15px; color: LawnGreen; font-size: 20px; margin-right: auto; margin-left: 61px;"><?php echo($row["name"]) ?></p>
				<div style="display: flex; flex-direction: row; justify-content: left; align-items: center; margin-top: 10px;">
				<small><p style="font-weight: 300; text-align: left; color: DimGray; margin-bottom: 15px;">Кол-во:</p></small>
				<small><p style="font-weight: 300; color: DimGray; margin-left: 6px; margin-right: 150px; margin-bottom: 15px;"><?php echo($row["weight"]) ?></p></small></div>
				<div style="display: flex; flex-direction: row; justify-content: space-between; justify-content: left; align-items: center; margin-top: 5px;">
				<p style="font-weight: 600;">Цена:</p>
				<p style="font-weight: 400; margin-left: 6px; margin-right: 150px;"><?php echo($row["price"]) ?>₸</p></div>
                <?php
                if (isset($_SESSION['login'])) {
                echo ('<button><i class="fa fa-shopping-cart" aria-hidden="true"></i>Добавить</button>');
                }
                else {
                    echo('<p style="margin-top: 9px; margin-bottom: 4px; color: OliveDrab; font-weight: 600;">Авторизируйтесь для покупки</p>');
                }
                ?>
            </form>

        <?php }
        ?>

    </div>
</div>
<script>
	document.addEventListener("DOMContentLoaded", function() {
		document.querySelectorAll('.card_catalog1 button').forEach(function(button) {
			button.addEventListener('click', function(e) {
				e.preventDefault();
				document.getElementById('popup').style.display = 'block';
				setTimeout(function() {
					document.getElementById('popup').style.display = 'none';
				}, 2000);
			});
		});
		});
		</script>
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
