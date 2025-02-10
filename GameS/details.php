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
            <div class="menu_total" style="display: flex; justify-content: center; align-items: center; margin-top: 40px;">
            <div class="search-bar">
                <img src="img/icons/lupa.png" alt="Search">
                <input type="text" placeholder="Поиск по играм">
                <button class="clear-text" style="display: none; font-size: 25px; margin-bottom: 2px;">×</button>
            </div>
            <div class="main-menu">
                <a href="index.php">Главная</a>
                <a href="faq_forum.php">Популярные</a>
                <a href="shop_games.php">Все игры</a>
                <a href="news_game.php">Новости</a>
                <a href="forum.php">Форум</a>
            </div>
        </div>
        <?php
if(isset($_GET['id'])) {
    $game_id = $_GET['id'];
    $query_goods = "SELECT * FROM goods WHERE id = $game_id";
    $result_goods = mysqli_query($base, $query_goods);
    $row_goods = mysqli_fetch_assoc($result_goods);

    $query_details = "SELECT * FROM details WHERE id = $game_id";
    $result_details = mysqli_query($base, $query_details);
    $row_details = mysqli_fetch_assoc($result_details);
}
?>
<div class="slider_0">
    <div class="image-slider_0">
        <img src="<?php echo $row_goods['img']; ?>" alt="Image 1" class="slide-">
        <img src="<?php echo $row_goods['img_1']; ?>" alt="Image 2" class="slide-">
        <img src="<?php echo $row_goods['img_2']; ?>" alt="Image 3" class="slide-">
        <img src="<?php echo $row_goods['img_3']; ?>" alt="Image 4" class="slide-">
    </div>
    <div class="indicators_0">
        <img src="<?php echo $row_goods['img']; ?>" alt="Indicator 1" class="indicator_0">
        <img src="<?php echo $row_goods['img_1']; ?>" alt="Indicator 2" class="indicator_0">
        <img src="<?php echo $row_goods['img_2']; ?>" alt="Indicator 3" class="indicator_0">
        <img src="<?php echo $row_goods['img_3']; ?>" alt="Indicator 4" class="indicator_0">
    </div>
    <div class="game-info">
        <h2><?php echo $row_goods['name']; ?></h2>
        <p>Дата выпуска: <?php echo $row_goods['Date_of_issue']; ?></p>
        <p>Цена: <?php echo $row_goods['price']; ?></p>
        <button>Купить</button>
    </div>
</div>
<div class="game-details">
    <h3>Описание:</h3>
    <p><?php echo $row_details['overview']; ?></p>
    <h3>Сюжет:</h3>
    <p><?php echo $row_details['plot']; ?></p>
    <div class="additional-info">
        <h3>Дополнительная информация:</h3>
        <p>Версия: <?php echo $row_details['version']; ?></p>
        <p>Процессор: <?php echo $row_details['CPU']; ?></p>
        <p>Оперативная память: <?php echo $row_details['memory']; ?></p>
        <p>Видеокарта: <?php echo $row_details['video_card']; ?></p>
        <p>Место на диске: <?php echo $row_details['RAM']; ?></p>
    </div>
</div>
<script>
    let currentSlide = 0;
const slides = document.querySelectorAll('.image-slider_0 .slide-');
const indicators = document.querySelectorAll('.indicators_0 img');

function showSlide(index) {
    slides.forEach(slide => {
        slide.style.display = 'none';
    });
    slides[index].style.display = 'block';
}

function showIndicator(index) {
    indicators.forEach(indicator => {
        indicator.style.opacity = 0.5;
    });
    indicators[index].style.opacity = 1;
}

function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
    showIndicator(currentSlide);
}

indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        showSlide(index);
        showIndicator(index);
        currentSlide = index;
    });
});

setInterval(nextSlide, 3000);
    </script>
</body>
</html>




<!--СЛайдер для ИНФО:
Для реализации слайдера с картинками и небольшими кнопками под ним, можно воспользоваться HTML, CSS и JavaScript.

HTML:
```html

```

CSS:
```css
.images {
    display: flex;
    overflow: hidden;
}

.images img {
    width: 100%;
    transition: transform 0.3s ease;
}

.thumbnails {
    display: flex;
    justify-content: center;
    gap: 5px;
}

.thumbnails img {
    width: 30px;
    border: 2px solid transparent;
    transition: border-color 0.3s ease;
}

.thumbnails img:hover {
    border-color: #fff;
}
```

JavaScript (jQuery):
```javascript
$(document).ready(function() {
    let currentIndex = 0;
    const images = $('.images img');
    const thumbnails = $('.thumbnails img');

    const updateSlide = () => {
        images.css('transform', `translateX(${-currentIndex * 100}%)`);
        thumbnails.css('border-color', 'transparent');
        thumbnails.eq(currentIndex).css('border-color', '#fff');
    };

    const nextSlide = () => {
        currentIndex = (currentIndex + 1) % images.length;
        updateSlide();
    };

    setInterval(nextSlide, 5000);

    thumbnails.on('click', function() {
        currentIndex = thumbnails.index(this);
        updateSlide();
    });
});
```

Этот код добавляет слайдер с автоматической сменой изображений в блоке с классом "totals_info". Ниже основного изображения добавлены миниатюры изображений в блоке с классом "thumbnails". При наведении на миниатюру она выделяется белым цветом, при этом изображение на главном слайде переключается соответственно.



ТЕМА: Сделай по готовому коду, чтобы картинки был как слайдеры, чтобы картинка была справа, также под основной картинкой были небольшие маленькие картинки как кнопки, которые будут затемненные, при наведении на одну из маленьких картинок чтобы затемнение пропадало, еще обязательно сделай чтобы эти картинки как слайдеры менялись автоматически и снизу на маленьких картинках чтобы границы выделялись белым цветом. Распиши каждый элемент работы. Код: echo '<div class="totals_info">';
echo "<h2>{$game['name']}</h2>";
echo '<div class="images_">';
echo "<img src='{$game['img']}' alt='img1'>";
echo "<img src='{$game['img_1']}' alt='img2'>";
echo "<img src='{$game['img_2']}' alt='img3'>";
echo "<img src='{$game['img_3']}' alt='img4'>";
echo '</div>'; 













-->