<?php
session_start();
include_once('base.php');
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <link type="image/x-icon" href="img/icons/icon_CyberCult.ico" rel="shortcut icon">
        <title>Lifes Games</title>
        <link href="css/style.css" rel="stylesheet">
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
        <a href="profile.php" style="text-decoration: none; color: white; font-size: 19px;">
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
                    <input type="text" placeholder="Поиск по играм" oninput="searchGames()">
                    <button class="clear-text" style="display: none; font-size: 25px; margin-bottom: 2px;">×</button>
                </div>
                <div id="gamesResults" style="display: none;"></div>
            <div class="main-menu">
                <a href="" style="color: #8F509D; pointer-events: none;">Главная</a>
                <a href="shop_games.php">Все игры</a>
                <a href="news_game.php">Новости</a>
                <a href="forum.php">Форум</a>
            </div>
        </div>
            <div class="container">
                <div class="slider">
                    <div class="slide active">
                        <img src="img/games/Головоломка/Necro Smith.jpeg" alt="Necro Smith">
                    </div>
                    <div class="slide">
                        <img src="img/games/Симулятор/Youtubers Life.jpeg" alt="Youtubers Life">
                    </div>
                    <div class="slide">
                        <img src="img/games/Экшен/Metro Exodus.jpeg" alt="Metro Exodus">
                    </div>
                    <div class="slide">
                        <img src="img/games/Симулятор/Cities Skylines.jpeg" alt="Cities Skylines">
                    </div>
                    <div class="slide">
                        <img src="img/games/Стратегия/Anno 1800.jpeg" alt="Anno 1800">
                    </div>
                    <div class="slide">
                        <img src="img/games/Хоррор/Outlast 2.jpeg" alt="Outlast 2">
                    </div>
                </div>
            
                <div class="controls">
                    <button class="prev">&lt;</button>
                    <button class="next">&gt;</button>
                </div>
            
                <div class="indicators">
                    <button class="indicator active" data-slide="0"></button>
                    <button class="indicator" data-slide="1"></button>
                    <button class="indicator" data-slide="2"></button>
                    <button class="indicator" data-slide="3"></button>
                    <button class="indicator" data-slide="4"></button>
                    <button class="indicator" data-slide="5"></button>
                </div>
            </div>            
        </header>
        <section class="products">
            <h2 style="color: white; max-width: 1180px; font-size: 28px; text-align: left; margin-left: auto; margin-right: auto;">Новейшие игры</h2>
            <div class="product-cards">
                <div class="product-card">
                    <img src="img/games/Приключения/Senua's Saga Hellblade 2.jpg" alt="Squad Busters" class="product-card__image">
                    <div class="product-card__info">
                        <div class="new-label">Новинка</div>
                        <h3 style="margin-top: -5px;">Senua's Saga Hellblade 2</h3>
                        <span class="product-card__price">15.250 KZT</span>
                        <a href="shop_games.php" class="product-card__button">Купить</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="img/games/Мобильные/Squad Busters.png" alt="Squad Busters" class="product-card__image">
                    <div class="product-card__info">
                        <div class="coming-soon-label">Скоро в продаже</div>
                        <h3 style="margin-top: -5px;">Squad Busters</h3>
                        <span class="product-card__price">Нет в продаже</span>
                        <a href="shop_games.php" class="product-card__button">Предзаказ</a>
                    </div>
                </div>
                <div class="product-card">
                    <img src="img/games/Приключения/Ender Magnolia Bloom in the Mist.png" alt="Squad Busters" class="product-card__image">
                    <div class="product-card__info">
                        <div class="new-label">Новинка</div>
                        <h3 style="margin-top: -5px;">Ender Magnolia Bloom in the Mist</h3>
                        <span class="product-card__price">9.500 KZT</span>
                        <a href="shop_games.php" class="product-card__button">Купить</a>
                    </div>
                </div>
            </div>
        </section>
<section class="products_">
    <div class="container_">
        <h2 style="color: white; width: 600px; font-size: 28px; text-align: left; margin-left: 5px;">Рекомендуем</h2>
        <div class="products-row_">
            <div class="product_">
                <img src="img/games/Бесплатно/Fortnite.jpeg" alt="Bloons TD 6">
                <h3>Fortnite</h3>
                <p>Выпуск: 09 июля 2013 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">Бесплатно</div>
                <a href="shop_games.php" class="btn" style="text-align: left; margin-left: 15px;">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Бесплатно/Grand Theft Auto V.jpeg" alt="Forager">
                <h3>Grand Theft Auto V</h3>
                <p>Выпуск: 17 сен. 2013 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">Бесплатно</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Симулятор/Supermarket Simulator.jpeg" alt="THE WALKING DEAD">
                <h3>Supermarket Simulator</h3>
                <p>Выпуск: 18 янв. 2024 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">2.990 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Приключения/Minecraft Legends.jpeg" alt="Metro Last Light Redux">
                <h3>Minecraft Legends</h3>
                <p>Выпуск: 18 апр. 2023 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">6.155 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Хоррор/Phasmophobia.jpeg" alt="Fortnite">
                <h3>Phasmophobia</h3>
                <p>Выпуск: 04 сен. 2020 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">6.500 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="container_">
    <div class="products-row_">
        <div class="product_">
            <img src="img/games/Приключения/Attack on Titan 2 - A.O.T.2.jpeg" alt="Cyberpunk 2077">
            <h3>Attack on Titan 2 - A.O.T.2</h3>
            <p>Выпуск: 17 сен. 2013 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">2.100 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Приключения/DEVOUR.jpeg" alt="Need for Speed">
            <h3>DEVOUR</h3>
            <p>Выпуск: 28 янв. 2021 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">4.500 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Симулятор/Youtubers Life 2.jpeg" alt="Car For Sale Simulator 2023">
            <h3>Youtubers Life 2</h3>
            <p>Выпуск: 19 окт. 2021 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">7.400 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Симулятор/The Sims™ 4.jpeg" alt="Metro 2033 Redux">
            <h3>The Sims™ 4</h3>
            <p>Выпуск: 02 сен. 2014 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">3.300 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Мобильные/Call of Duty.jpg" alt="Minecraft Dungeons">
            <h3>Call of Duty</h3>
            <p>Выпуск: 05 ноя. 2021 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">5.000 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>
    </div>
</div>
    </div>
</section>
<!--Новая - АКТУАЛЬНОЕ-->
<section class="product_I">
    <div class="container_">
        <h2 style="color: white; width: 600px; font-size: 28px; text-align: left; margin-left: 5px;">Актуальное</h2>
        <div class="products-row_">
            <div class="product_">
                <img src="img/games/Бесплатно/Counter-Strike 2.jpeg" alt="Bloons TD 6">
                <h3>Counter-Strike 2</h3>
                <p>Выпуск: 27 сен. 2023 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">Бесплатно</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Бесплатно/Dota 2.jpeg" alt="Forager">
                <h3>Dota 2</h3>
                <p>Выпуск: 09 июля 2013 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">Бесплатно</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Хоррор/Outlast 2.jpeg" alt="THE WALKING DEAD">
                <h3>Outlast 2</h3>
                <p>Выпуск: 24 апр. 2017 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">13.500 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Экшен/Cuphead.jpeg" alt="Metro Last Light Redux">
                <h3>Cuphead</h3>
                <p>Выпуск: 29 сен. 2017 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">9.900 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Симулятор/Project Zomboid.jpeg" alt="Fortnite">
                <h3>Project Zomboid</h3>
                <p>Выпуск: 08 ноя. 2013 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">1.300 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="container_">
    <div class="products-row_">
        <div class="product_">
            <img src="img/games/Бесплатно/World of Tanks.jpeg" alt="Cyberpunk 2077">
            <h3>World of Tanks</h3>
            <p>Выпуск: 12 авг. 2010 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">Бесплатно</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Симулятор/Хаус Флиппер 2.jpeg" alt="Need for Speed">
            <h3>Хаус Флиппер 2</h3>
            <p>Выпуск: 14 дек. 2023 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">6.400 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Приключения/Sons Of The Forest.jpeg" alt="Car For Sale Simulator 2023">
            <h3>Sons Of The Forest</h3>
            <p>Выпуск: 23 фев. 2023 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">6.250 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Головоломка/MultiVersus.jpeg" alt="Metro 2033 Redux">
            <h3>MultiVersus</h3>
            <p>Выпуск: 19 июля 2022 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">590 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Спортивные/Full Court Heroes.jpeg" alt="Minecraft Dungeons">
            <h3>Full Court Heroes</h3>
            <p>Выпуск: 2024 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">8.450 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>
    </div>
</div>
    </div>
</section>
<!--Новая - ИДЕАЛЬНЫЙ ПОДАРОК-->
<section class="product_II">
    <div class="container_">
        <h2 style="color: white; width: 600px; font-size: 28px; text-align: left; margin-left: 5px;">Идеальный подарок</h2>
        <div class="products-row_">
            <div class="product_">
                <img src="img/games/Симулятор/Farming Simulator 22.jpeg" alt="Bloons TD 6">
                <h3>Farming Simulator 22</h3>
                <p>Выпуск: 21 ноя. 2021 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">11.900 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Выживание/DayZ.jpeg" alt="Forager">
                <h3>DayZ</h3>
                <p>Выпуск: 16 дек. 2013 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">7.855 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Спортивные/Spike Volleyball.jpeg" alt="THE WALKING DEAD">
                <h3>Spike Volleyball</h3>
                <p>Выпуск: 05 фев. 2019 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">4.420 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Хоррор/THE WALKING DEAD.jpeg" alt="Metro Last Light Redux">
                <h3>The Walking Dead</h3>
                <p>Выпуск: 31 окт. 2010 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">5.250 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>

            <div class="product_">
                <img src="img/games/Гонки/Need for Speed.jpeg" alt="Fortnite">
                <h3>Need for Speed</h3>
                <p>Выпуск: 01 окт. 2015 г.</p>
                <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">4.195 KZT</div>
                <a href="shop_games.php" class="btn">Подробнее</a>
            </div>
        </div>
    </div>
    <div class="container_">
    <div class="products-row_">
        <div class="product_">
            <img src="img/games/Выживание/Stardew Valley.jpeg" alt="Cyberpunk 2077">
            <h3>Stardew Valley</h3>
            <p>Выпуск:26 фев. 2016 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">2.525 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Головоломка/Bloons TD 6.jpeg" alt="Need for Speed">
            <h3>Bloons TD 6</h3>
            <p>Выпуск: 14 июня 2018 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">3.750 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Приключения/Minecraft Dungeons.jpeg" alt="Car For Sale Simulator 2023">
            <h3>Minecraft Dungeons</h3>
            <p>Выпуск: 26 мая 2020 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">3.500 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Экшен/Metro 2033 Redux.jpeg" alt="Metro 2033 Redux">
            <h3>Metro 2033 Redux</h3>
            <p>Выпуск: 26 авг. 2014 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">2.200 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>

        <div class="product_">
            <img src="img/games/Экшен/Fallout 4.jpeg" alt="Minecraft Dungeons">
            <h3>Fallout 4</h3>
            <p>Выпуск: 10 ноя. 2015 г.</p>
            <div class="price" style="margin-left: 15px; margin-bottom: 10px; margin-top: 10px;">6.400 KZT</div>
            <a href="shop_games.php" class="btn">Подробнее</a>
        </div>
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
</div>
</section>
<div id="cookie-popup">
    <i class='bx bxs-cookie' ></i>
    <p>Мы используем файлы cookie для <span>улучшения вашего опыта на сайте.</span></p>
    <button id="accept">Принять</button>
    <button id="reject">Отклонить все</button>
    </header>
</div>
<script src="js/cuci.js"></script>
<script src="js/style.js"></script>
<script src="js/search.js"></script>
    </body>
</html>