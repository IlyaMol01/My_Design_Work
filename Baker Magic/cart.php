<?php
session_start();
include_once('base.php');
$id_user = $_SESSION['id'];
$sum = 0;
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
			<div class="catalog_hi">
 <h1>Корзина</h1>
 <div class="catalog_cont">
 <?php


$sql = "SELECT g.name, g.price, g.img, g.id, cart.quantity
FROM cart
JOIN goods g ON cart.id_goods = g.id
WHERE cart.id_users = '$id_user';";

$result = mysqli_query($base, $sql);

$sum = 0;

if ($result->num_rows > 0) {
  echo '<div class="catalog_hi">
          <h1>Корзина</h1>
          <div class="catalog_cont">';

  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    $item_total = $row["price"] * $row["quantity"];
    $sum += $item_total;

    echo '<div class="card_catalog">
              <img src="' . $row["img"] . '">
              <p>' . $row["name"] . '</p>
              <p>Цена: ' . $row["price"] . '</p>
              <p>Количество: ' . $row["quantity"] . '</p>
              <p>Стоимость: ' . $item_total . '</p>';

    if (isset($_SESSION['login'])) {
      echo '<form action="cart_quantity.php" method="post">
                <input type="hidden" name="goods_id" value="' . $row["id"] . '">
                <div class="buttoms">
                  <input type="submit" value="+" name="plus">
                  <input type="submit" value="-" name="munus">
                  <input type="submit" value="X" name="delete">
                </div>
              </form>';
    } else {
      echo '<p>Авторизируйтесь для изменения количества или удаления</p>';
    }

    echo '</div>';
  }

  echo '</div>'; 
  echo '<h1>Сумма: ' . $sum . '</h1>';
  echo '</div>';
} else {
  echo '<p>Ваша корзина пуста.</p>';
}
?>

  </div>
  <h1>Сумма: <?php echo($sum); ?></h1>
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
<button onclick="openForm()">Оформить заказ</button>

<div id="popupForm" class="pop-up">
  <h2>Введите данные для оформления заказа</h2>
  <form>
    <label for="fullname">Ф.И.О:</label><br>
    <input type="text" id="fullname" name="fullname" required><br><br>
    <label for="phone">Телефон:</label><br>
    <input type="tel" id="phone" name="phone" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="location">Страна/Город:</label><br>
    <input type="text" id="location" name="location" required><br><br>
    <label for="address">Адрес проживания:</label><br>
    <input type="text" id="address" name="address" required><br><br>
    <label for="zip">Индекс:</label><br>
    <input type="text" id="zip" name="zip" required><br><br>
    <input type="submit" value="Отправить">
  </form>
</div>

<script>
function openForm() {
  document.getElementById("popupForm").style.display = "block";
}
</script>
<style>
.pop-up {
  display: none;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: white;
  padding: 20px;
  border: 1px solid black;
  z-index: 999;
}
</style>