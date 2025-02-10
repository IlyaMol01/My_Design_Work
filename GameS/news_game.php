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
            <div id="gamesResults" style="display: none;"></div>
            <div class="main-menu">
                <a href="index.php">Главная</a>
                <a href="shop_games.php">Все игры</a>
                <a href="" style="color: #8F509D; pointer-events: none;">Новости</a>
                <a href="forum.php">Форум</a>
            </div>
        </div>
        <main>
            <section class="news_">
                <h2 style="color: white; width: 600; font-size: 23px; text-align: left; margin-left: 145px;">Новости CyberCult</h2>
            <div class="container_01">
                <div class="news-item">
                        <img src="img/icons/Like a Dragon_02.webp" alt="Новость 1">
                    <div class="news-content">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-06-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                        <h3>Очередная часть серии Like a Dragon, также известной как Yakuza, — одна из самых удачных во франшизе</h3>
                        <p style="color: darkgray;">В плане основного сюжета игра отстает от предшественниц. 
                            Амбициозной истории о раскаянии и искуплении не хватило изящного конца. 
                            Но это с лихвой компенсирует второстепенный контент: в одних только режимах, вдохновленных Pokémon и Animal Crossing, 
                            можно пропасть на десятки часов.</p>
                        <a href="">Подробнее</a>
                    </div>
                </div>
                <div class="news-item">
                        <img src="img/icons/News_Stalker2.jpg" alt="Новость 2">
                    <div class="news-content">
                    <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-05-25";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                        <h3>Долгожданный анонс будучи релиз S.T.A.L.K.E.R. 2</h3>
                        <p style="color: darkgray;">Даже до релиза видно, что S.T.A.L.K.E.R. 2 в разы амбициознее прошлых частей. 
                            Он первым в серии представит полноценный открытый мир без загрузочных экранов. 
                            Искусственный интеллект врагов улучшат, и перестрелки станут еще напряженнее. 
                            К тому же в игре появятся элементы выживания.</p>
                        <a href="">Подробнее</a>
                    </div>
                </div>
                <div class="line"></div>
            </div>
            </section>
            <section class="news_02">
                <div class="container_news_02">
                    <div class="news-item_02">
                            <img src="img/icons/fortnite_metallica_1.jpg" alt="Новость 3" style="width: 630px; border-radius: 15px;">
                        <div class="news-content_02">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-06-06";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3>Metallica в четвертом сезоне Фортнайт Фестиваля</h3>
                            <p style="color: darkgray;">Ни для кого не секрет, что четвертый сезон Fortnite Festival полностью посвящен группе Metallica. 
                                По-другому и быть не могло: нам показали скины боевого пропуска, уже доступны некоторые композиции для Фестиваля и совсем скоро состоится настоящий концерт Metallica в фортнайте.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="container_news_03">
                    <div class="news-item_03">
                            <img src="img/icons/hades-2-2024.avif" alt="Новость 3" style="width: 600px; border-radius: 15px;">
                        <div class="news-content_03">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-04-15";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3>Полноценный релиз Hades II случится не ранее 2025 года</h3>
                            <p style="color: darkgray;">Hades II вышел в раннем доступе и предлагает долгожданное продолжение мифического приключения, разрывая чарты продаж. 
                                Несмотря на то что даже в предрелизном виде Hades 2 уже отполирована до блеска, вы можете подумать, 
                                что полноценный релиз 1.0 не за горами, однако креативный директор игры считает, что нам придется ждать еще около года, 
                                прежде чем игра будет считаться полностью готовой.</p>
                            <a href="" style="float: left;">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="container_news_04">
                    <div class="news-item_04">
                            <img src="img/icons/gta-VI.jpeg" alt="Новость 3" style="width: 600px; border-radius: 15px;">
                        <div class="news-content_04">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-06-01";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3>Анонс ПК-версии GTA 6 - вопрос времени, уверяет руководитель Take-Two</h3>
                            <p style="color: darkgray;">В недавнем интервью на конференции TD Cowen руководитель издательства Take-Two Interactive
                                 Штраусс Зельник прокомментировал ситуацию с отсутствием анонса ПК-версии грядущей Grand Theft Auto 6. 
                                 Несмотря на то, что игра пока заявлена только для консолей нового поколения PlayStation 5 и Xbox Series, 
                                 Зельник дал понять, что решение о сроках и платформах для анонса GTA 6 находится полностью в 
                                 руках разработчиков из Rockstar Games.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </section>
            <section class="news_mini" style="margin-top: -40px;">
                <div class="container_news_mini">
                    <div class="news-item_mini">
                            <img src="img/icons/Dragon Age.jpg" alt="Новость 3">
                        <div class="news-content_mini">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2023-10-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">Новый этап для Dragon Age: Dreadwolf</h3>
                            <p style="color: darkgray;">В прошлой статье в феврале я рассказывал, что новая часть Dragon Age™ вступает в стадию производства. 
                                Что ж, с тех пор мы прошли очень долгий путь и сейчас невероятно рады сообщить об огромном прогрессе в 
                                разработке игры, которую вы теперь знаете как Dragon Age: Dreadwolf™. Мы только что завершили этап альфа-тестирования!</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_02" style="margin-top: 20px;">
                    <div class="news-item_mini_02">
                            <img src="img/icons/indian.jpg" alt="Новость 3">
                        <div class="news-content_mini_02">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-02-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">Авторы Indiana Jones and The Great Circle десятки раз пересмотрели фильмы Спилберга</h3>
                            <p style="color: darkgray;">Приключенческий боевик Indiana Jones and the Great Circle 
                                появился на презентации Xbox Games Showcase 2024, тогда мы увидели ролик игрового процесса. 
                                А теперь в подкасте Xbox авторы рассказали ряд подробностей о будущей игре.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_03" style="margin-top: 20px;">
                    <div class="news-item_mini_03">
                            <img src="img/icons/Metro 4.webp" alt="Новость 3">
                        <div class="news-content_mini_03">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2023-09-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                        <h3 style="margin-top: -5px;">Metro 4 неожиданными известиями восхитило фанатов</h3>
                            <p style="color: darkgray;">Студия 4A Games работает над игрой «Метро 4», 
                                которая должна стать продолжением прошлой части Metro: Exodus. По словам Хендерсона, 
                                игра Metro 4 находится уже на такой стадии готовности, что ее можно полностью пройти. 
                                Инсайдер отмечает, что эти детали могут предполагать, что анонс и показ «Метро 4» состоится 
                                уже в этом 2023 году, а релиз, в свою очередь, может произойти в 2024 году.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_04" style="margin-top: 20px;">
                    <div class="news-item_mini_04">
                            <img src="img/icons/Little Nightmares III.jpg" alt="Новость 3">
                        <div class="news-content_mini_04"><div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-03-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">Релиз Little Nightmares III отложили до 2025 года — игре нужно «больше заботы и тепла» от разработчиков</h3>
                            <p style="color: darkgray;">Разработчики из британской студии Supermassive Games совместно с издательством Bandai 
                                Namco объявила о переносе релиза своего хоррор-платформера Little Nightmares III на 2025 год. 
                                До публикации соответствующего объявления в X (бывший Twitter) считалось, что игра выйдет в текущем году.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_05" style="margin-top: 20px;">
                    <div class="news-item_mini_05">
                        <a href="#">
                            <img src="img/icons/Assassin’s Creed Codename Red.webp" alt="Новость 3">
                        </a>
                        <div class="news-content_mini_05">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2023-12-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">В описании первого трейлера Assassin’s Creed Codename: Red засветилась дата выхода игры — она получила название Assassin’s Creed Shadows</h3>
                            <p style="color: darkgray;">Судя по описанию трейлера в итальянском YouTube, Assassin’s Creed 
                                Shadows выйдет 15 ноября текущего года. Релиз ожидается в рамках платформы Assassin’s Creed Infinity 
                                 на PC, PS5, Xbox Series X и S. О том, что Ubisoft может готовить кинематографический 
                                 Codename: Red, на прошлой неделе рассказывал инсайдер Том Хендерсон. По его данным, 
                                 геймплей проекта покажут 10 июня на шоу Ubisoft Forward.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_06" style="margin-top: 20px;">
                    <div class="news-item_mini_06">
                            <img src="img/icons/Tomb Raider 2024.jpg" alt="Новость 3">
                        <div class="news-content_mini_06">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-05-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">Tomb Raider 2024: новые подробности следующей части культовой игры</h3>
                            <p style="color: darkgray;">Продолжение знаменитой приключенческой серии Tomb Raider анонсировали в апреле 2022 года. 
                                Точно известно, что новую часть готовит Crystal Dynamics на движке Unreal Engine 5. 
                                Если верить инсайдерской информации, Лара будет путешествовать по обширной области Индии.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
                <div class="container_news_mini_07" style="margin-top: 20px;">
                    <div class="news-item_mini_07">
                            <img src="img/icons/Alone in the Dark.jpg" alt="Новость 3">
                        <div class="news-content_mini_07">
                        <div class="dates_">
                            <h2 style="color: darkgray; font-size: 13px;">
                            <?php
                            $news_date = "2024-01-16";$current_date = date("Y-m-d");
                            $diff = strtotime($current_date) - strtotime($news_date);
                            $days_ago = floor($diff / (60 * 60 * 24));
                            if ($days_ago == 0) {
                                $text = "Сегодня";
                            } elseif ($days_ago == 1) {
                                $text = "Вчера";
                            } elseif ($days_ago < 7) {
                                $text = $days_ago == 2 || $days_ago == 3 || $days_ago == 4 ? $days_ago . " Дня назад" : $days_ago . " Дней назад";
                            } elseif ($days_ago < 30) {
                                $weeks = floor($days_ago / 7);
                                $text = $weeks == 1 ? "Неделю назад" : $weeks . " Недели назад";
                            } elseif ($days_ago < 365) {
                                $months = floor($days_ago / 30);
                                $text = $months == 1 ? "Месяц назад" : $months . " Месяцев назад";
                            } else {
                                $years = floor($days_ago / 365);
                                $text = $years == 1 ? "Год назад" : ($years > 1 && $years < 5 ? $years . " Года назад" : $years . " Лет назад");
                            }
                            echo $text;
                            ?>
                            </h2>
                        </div>
                            <h3 style="margin-top: -5px;">Новая Alone in the Dark — позор: в игре даже нечего похвалить</h3>
                            <p style="color: darkgray;">Alone in the Dark — проклятый бренд. Сформировав основы любимого миллионами жанра «хоррор 
                                на выживание» (survival horror), серия так и не смогла найти себя, а в XXI веке она кажется каким-то странным 
                                приветом из другого столетия.</p>
                            <a href="">Подробнее</a>
                        </div>
                    </div>
                    <div class="line"></div>
                </div>
            </section>
          </main>
          <footer>
    <div class="cont_foot" style="background-color: indigo; padding: 50px; margin-left: 1px; padding-right: 50px; border-top-left-radius: 25px; border-top-right-radius: 25px; text-align: left; ">
        <div class="menu_s" style="margin-left: 190px; margin-right: 190px;">
            <div class="fots-menu" style="font-size: 20px; text-decoration: none; color: white;">
                <a href="index.php" style="text-decoration: none; color: white;">Главная</a>
                <a href="shop_games.php" style="text-decoration: none; color: white;">Все игры</a>
                <a href="news_game.php" style="text-decoration: none; color: white;">Новости</a>
                <a href="forum.php" style="text-decoration: none; color: white;">Форум</a>
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
        <script src="/js/style.js"></script>
        <script src="/js/search.js"></script>
</body>
</html>