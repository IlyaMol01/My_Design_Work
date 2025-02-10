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
            <div class="menu_for">
                <div class="site">
                        <a href="index.php" class="silk_01">На Сайт</a>
                        <a href="#FAQ_a" class="silk_02">FAQ</a>
                        <a href="#Game-sovet_a" class="silk_03">Game-Советы</a>
                        <a href="#soob" class="silk_04">Сообщество</a>
                    </div>
                <div class="pod-menu-for">
                    <div class="silk" style="display: flex; font-size: 13px;">
                        <a href="index.php" style="text-decoration: none; margin-right: 10px;">Главная</a>
                        <a href="index.php" style="margin-right: 10px; text-decoration: none;">></a>
                        <a href="forum.php" style="margin-right: 10px; text-decoration: none;">FAQ</a>
                        <a href="forum.php" style="margin-right: 10px; text-decoration: none;">></a>
                    </div>
                    <div class="line_01"></div>
                    <h2 class="for_h2" style="display: flex; font-size: 40px; font-weight: 400; margin-left: 40px;">Добро пожаловать на Форум игроков <span class="h2_span">Cyber<span style="display: inline-block; color: #32CD32;">Cult</span></span></h2>
                <div class="faq_">
                  <div id="FAQ_a"></div>
                    <p class="pod_1">Поддержка CyberCult (FAQ)</p>
                    <p class="pod_2">С чем вам нужна помощь?</p>
                </div>
                <div class="cont_FAQ">
                <div class="cont_faq_01">
                    <p style="margin-left: 20px; font-size: 17px">Проблема с поиском информации</p>
                    <p id="arrow_01"><i class='bx bxs-right-arrow'></i></p>
                </div>
                <div class="faq_info_1">
                    <div class="faq_info_1_01">
                      <p style="margin-left: 30px;"><a class="line_faq_1_01">Почему поиск на сайте не работает?</a></p>
                    </div>
                    <div class="faq_info_1_02">
                        <p style="margin-left: 30px;"><a class="line_faq_1_02">Как можно найти нужную информацию без использования поиска?</a></p>
                    </div>
                </div>
                <div class="cont_faq_02">
                    <p style="margin-left: 20px; font-size: 17px;">Технические проблемы</p>
                    <p id="arrow_02"><i class='bx bxs-right-arrow'></i></p>
                </div>
                <div class="faq_info_2">
                    <div class="faq_info_2_01">
                        <p style="margin-left: 30px;"><a class="line_faq_2_01">Почему страницы сайта загружаются медленно?</a></p>
                    </div>
                    <div class="faq_info_2_02">
                        <p style="margin-left: 30px;"><a class="line_faq_2_02">Как исправить ошибку 404?</a></p>
                    </div>
                </div>
                <div class="cont_faq_03">
                    <p style="margin-left: 20px; font-size: 17px;">Проблемы с контентом</p>
                    <p id="arrow_03"><i class='bx bxs-right-arrow'></i></p>
                </div>
                <div class="faq_info_3">
                    <div class="faq_info_3_01">
                        <p style="margin-left: 30px;"><a class="line_faq_3_01">Почему не все страницы сайта отображаются корректно?</a></p>
                    </div>
                    <div class="faq_info_3_03">
                        <p style="margin-left: 30px;"><a class="line_faq_3_02">Почему не удается просмотреть видео/изображения на сайте?</a></p>
                    </div>
                </div>
                <div class="cont_faq_04">
                    <p style="margin-left: 20px; font-size: 17px;">Проблемы с работоспособностью сайта на мобильных устройствах</p>
                    <p id="arrow_04"><i class='bx bxs-right-arrow'></i></p>
                </div>
                <div class="faq_info_4">
                    <div class="faq_info_4_01">
                        <p style="margin-left: 30px;"><a class="line_faq_4_01">Почему сайт отображается некорректно на мобильном устройстве?</a></p>
                    </div>
                </div>
                </div>
                <div class="sovet_total">
                  <div class="sov_">
                    <div id="Game-sovet_a"></div>
                    <p class="pod_1">Советы любому, даже начинающему геймеру</p>
                    <p class="pod_2">Помощь советом от популярного Ютубера!</p>
                </div>
                  <div class="comm_1">
                    <div class="total_left">
                      <p>
                    <img src="img/icons/marmok.jpg" alt="marmok" class="ico_01">
                    <span style="display: inline; margin-left: 15px; font-size: 20px;" title="Подписчиков: 19 млн">Mr. Marmok</span></p><br>
                    <p style="display: inline; margin-left: 50px;">
                            <h2 style="color: darkgray; font-size: 15px; margin-top: -30px; margin-left: 30px;">
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
                        </p>
                    <span>
                    <div class="star" style="margin-left: 15px;"><i class='bx bxs-star'></i>
                    </div>
                    <div class="star"><i class='bx bxs-star'></i>
                    </div>
                    <div class="star"><i class='bx bxs-star'></i>
                    </div>
                    <div class="star"><i class='bx bxs-star'></i>
                    </div>
                    <div class="star"><i class='bx bxs-star-half'></i>
                    </div>
                  </span>
                  <div class="line"></div>
                  <p style="font-size: 16px;">Привет, друзья! Сегодня я хочу поделиться с вами своими советами по различным компьютерным играм для начинающих, любителей и профессионалов. Я, как опытный геймер и стример, знаю, насколько важно иметь правильные навыки и тактику в играх, чтобы быть успешным и получать удовольствие от процесса.
                    <br><br>Для начинающих геймеров я рекомендую начать с простых игр, которые помогут вам освоить базовые навыки и привыкнуть к управлению. Например, такие игры, как Minecraft, Fortnite или Rocket League, отлично подойдут для новичков. Постепенно вы сможете пробовать более сложные игры, такие как PUBG, Overwatch или League of Legends.</p>
                    <p style="font-size: 16px; display: none;" class="hidden_text">Для любителей игр я советую не останавливаться на достигнутом и постоянно совершенствовать свои навыки. Играйте в разные жанры игр, чтобы разнообразить свой опыт и научиться новым приемам. Экспериментируйте с разными тактиками и стратегиями, чтобы найти свой стиль игры.
                    <br><br>Для профессиональных геймеров я рекомендую постоянно тренироваться и участвовать в турнирах и соревнованиях. Постоянно оттачивайте свои навыки и изучайте игровые механики, чтобы быть на шаг впереди своих соперников. Работайте над командной игрой и обучайте других игроков, чтобы повысить ваш уровень в игре.
                    <br><br>Не забывайте, что главное в играх - это удовольствие от процесса и возможность общаться с друзьями и сообществом. Играйте с умом, развивайтесь и не бойтесь испытывать новое. Удачи вам в играх, друзья!</p>
                    <a href="javascript:void(0)" class="expand_link"><i class='bx bxs-chevron-down'></i>Развернуть</a>
                  </div>               
                </div>
                <div class="comm_1">
                  <div class="total_left">
                    <p>
                  <img src="img/icons/Kuplinov Play.jpg" alt="kuplinov" class="ico_01">
                  <span style="display: inline; margin-left: 15px; font-size: 20px;" title="Подписчиков: 16.7 млн">Kuplinov ► Play</span></p><br>
                  <p style="display: inline; margin-left: 50px;">
                  <h2 style="color: darkgray; font-size: 15px; margin-top: -30px; margin-left: 30px;">
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
                  </p>
                  <span>
                  <div class="star" style="margin-left: 15px;"><i class='bx bxs-star'></i>
                  </div>
                  <div class="star"><i class='bx bxs-star'></i>
                  </div>
                  <div class="star"><i class='bx bxs-star'></i>
                  </div>
                  <div class="star"><i class='bx bxs-star'></i>
                  </div>
                  <div class="star"><i class='bx bxs-star'></i>
                  </div>
                </span>
                <div class="line"></div>
                <p style="font-size: 16px;">Привет, друзья! Сегодня хочу поделиться с вами некоторыми советами по различным играм от начинающих до профессионалов, чтобы помочь вам стать лучшими геймерами!
                  <br><br>1. Для начинающих: 
                  <br><br>- Если вы только начали играть в какую-то игру, не стоит сразу ожидать от себя профессионального уровня игры. Не бойтесь ошибаться и учиться на своих ошибках.
                  <p style="font-size: 16px; display: none;" class="hidden_text_02">- Начните с освоения базовых навыков и правил игры, изучите управление и основные механики перед тем, как приступать к сложным заданиям.
                  <br><br>2. Для любителей: 
                    <br><br>- Играйте регулярно, чтобы поддерживать свои игровые навыки в форме. Старайтесь играть разнообразные игры, чтобы разнообразить свой опыт и расширить кругозор.
                    <br><br>- Смотрите стримы и Let's Play от опытных игроков, чтобы узнать новые приемы и тактики, а также получить вдохновение.
                    <br><br>- Присоединяйтесь к игровым сообществам и форумам, общайтесь с другими игроками, обменивайтесь опытом и советами.
                    <br><br>3. Для профессионалов: 
                    <br><br>- Участвуйте в турнирах и соревнованиях, чтобы испытать свои силы против других опытных игроков и продвинуться на профессиональном уровне.
                    <br><br>- Постоянно совершенствуйте свои игровые навыки, изучайте новые стратегии и тактики, анализируйте свои игры и ошибки для постоянного роста.
                    <br><br>- Не забывайте о здоровом образе жизни: правильное питание, здоровый сон и физические упражнения помогут вам оставаться в форме и максимально концентрироваться во время игры.
                    <br><br>Надеюсь, что эти советы помогут вам стать успешными геймерами и достичь новых высот в мире компьютерных игр! Удачи и побед!</p>
                  <a href="javascript:void(0)" class="expand_link_02"><i class='bx bxs-chevron-down'></i>Развернуть</a>
                </div>               
              </div>
              <div class="comm_1">
                <div class="total_left">
                  <p>
                <img src="img/icons/windy31.jpg" alt="windy31" class="ico_01">
                <span style="display: inline; margin-left: 15px; font-size: 20px;" title="Подписчиков: 10.8 млн">Windy31</span></p><br>
                <p style="display: inline; margin-left: 50px;">
                <h2 style="color: darkgray; font-size: 15px; margin-top: -30px; margin-left: 30px;">
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
                </p>
                <span>
                <div class="star" style="margin-left: 15px;"><i class='bx bxs-star'></i>
                </div>
                <div class="star"><i class='bx bxs-star'></i>
                </div>
                <div class="star"><i class='bx bxs-star'></i>
                </div>
                <div class="star"><i class='bx bxs-star'></i>
                </div>
                <div class="star"><i class='bx bxs-star'></i>
                </div>
              </span>
              <div class="line"></div>
              <p style="font-size: 16px;">Привет, друзья! Меня зовут windy31, и я рад приветствовать. Сегодня я хочу поделиться с вами своими советами по различным компьютерным играм для начинающих, любителей и профессионалов. Независимо от вашего уровня игры, уверен, что мои советы помогут вам стать еще лучше в вашем любимом хобби.
                <br><br>Для начинающих игроков, я бы порекомендовал начать с простых и легких игр, чтобы научиться основам управления и правилам. Например, игры в жанре пазлов или аркад могут быть отличным выбором для тех, кто только начинает знакомиться с миром компьютерных игр.
                <p style="font-size: 16px; display: none;" class="hidden_text_03">- Начните с освоения базовых навыков и правил игры, изучите управление и основные механики перед тем, как приступать к сложным заданиям.
                <br><br>Если вы уже немного продвинутый игрок, то мой совет для вас - не бойтесь испытать различные жанры и игры разной сложности. Это поможет вам расширить свой игровой опыт и научиться анализировать ситуации быстрее и эффективнее.
                <br><br>Для профессиональных геймеров, я бы посоветовал сосредоточиться на тренировках и поднятии своего уровня игры на новую высоту. Практика, анализ своих стратегий и игрового процесса - вот ключ к успеху на турнирах и соревнованиях.
                <br><br>Независимо от вашего уровня игры, помните о важности командной работы и взаимодействия с другими игроками. Общение и координация действий в игре помогут вам достичь новых успехов и побед.
                <br>Надеюсь, мои советы будут полезны для вас, друзья. Помните, что основной целью игры должно быть удовольствие и развлечение. Не забывайте быть честными и уважительными к своим соперникам и помнить, что в конце концов, это всего лишь игра.</p>
                <a href="javascript:void(0)" class="expand_link_03"><i class='bx bxs-chevron-down'></i>Развернуть</a>
              </div>               
            </div>
            <div class="comm_1">
              <div class="total_left">
                <p>
              <img src="img/icons/perpetuumworld.jpg" alt="perpetuumworld" class="ico_01">
              <span style="display: inline; margin-left: 15px; font-size: 20px;" title="Подписчиков: 3.8 млн">Perpetuumworld</span></p><br>
              <p style="display: inline; margin-left: 50px;">
              <h2 style="color: darkgray; font-size: 15px; margin-top: -30px; margin-left: 30px;">
                            <?php
                            $news_date = "2024-04-16";$current_date = date("Y-m-d");
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
              </p>
              <span>
              <div class="star" style="margin-left: 15px;"><i class='bx bxs-star'></i>
              </div>
              <div class="star"><i class='bx bxs-star'></i>
              </div>
              <div class="star"><i class='bx bxs-star'></i>
              </div>
              <div class="star"><i class='bx bxs-star'></i>
              </div>
              <div class="star"><i class='bx bxs-star'></i>
              </div>
            </span>
            <div class="line"></div>
            <p style="font-size: 16px;">Привет, друзья! Сегодня я хочу поделиться с вами некоторыми полезными советами по играм от начинающих до профессионалов. Я - perpetuumworld, и мой канал на YouTube посвящен компьютерным играм, так что доверьтесь моему опыту и послушайте мои советы.
              <br><br>1. Для начинающих геймеров:
              <br><br>- Начните с простых игр, чтобы освоить базовые навыки и привыкнуть к управлению. Отличными вариантами для новичков будут Minecraft, Stardew Valley, и World of Warcraft.
              <p style="font-size: 16px; display: none;" class="hidden_text_04">- Попробуйте разные жанры игр, чтобы найти то, что вам нравится больше всего.
                <br><br>- Не бойтесь проигрышей! Это часть игрового процесса, и каждая неудача приносит вам опыт и уроки.
                <br><br>2. Для любителей игр:
                <br><br>- Играйте со своими друзьями или найдите сообщество с единомышленниками для обмена опытом и впечатлениями.
                <br><br>- Поставьте цели и задачи в играх, чтобы сохранить мотивацию и интерес.
                <br><br>- Изучайте игровую механику и стратегии, чтобы стать более компетентным игроком.
                <br><br>3. Для профессиональных геймеров:
                <br><br>- Участвуйте в турнирах и соревнованиях, чтобы проверить свои навыки и соревноваться с лучшими игроками.
                <br><br>- Практикуйтесь регулярно и следите за обновлениями и патчами игр, чтобы быть в курсе всех изменений.
                <br><br>Надеюсь, эти советы помогут вам улучшить свои навыки и насладиться играми еще больше. Удачи и приятной игры!</p>
              <a href="javascript:void(0)" class="expand_link_04"><i class='bx bxs-chevron-down'></i>Развернуть</a>
            </div>               
          </div>
          <div class="comm_1">
            <div class="total_left">
              <p>
            <img src="img/icons/ViteC ► Play.webp" alt="ViteC Play" class="ico_01">
            <span style="display: inline; margin-left: 15px; font-size: 20px;" title="Подписчиков: 3.7 млн">ViteC ► Play</span></p><br>
            <p style="display: inline; margin-left: 50px;"><h2 style="color: darkgray; font-size: 15px; margin-top: -30px; margin-left: 30px;">
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
                            </h2></p>
            <span>
            <div class="star" style="margin-left: 15px;"><i class='bx bxs-star'></i>
            </div>
            <div class="star"><i class='bx bxs-star'></i>
            </div>
            <div class="star"><i class='bx bxs-star'></i>
            </div>
            <div class="star"><i class='bx bxs-star'></i>
            </div>
            <div class="star"><i class='bx bxs-star'></i>
            </div>
          </span>
          <div class="line"></div>
          <p style="font-size: 16px;">Привет, дорогие друзья! Сегодня я хочу поделиться с вами своими советами по различным компьютерным играм для начинающих, любителей и профессионалов. Я - ViteC ► Play, и моя цель - помочь вам стать лучшими игроками!
            <br><br>Для начинающих игроков я бы порекомендовал начать с игр, которые не требуют особых навыков и опыта. Например, простые платформеры или головоломки. Помните, что самое важное - это умение наслаждаться процессом игры и не падать духом, если что-то не получается сразу.
            <p style="font-size: 16px; display: none;" class="hidden_text_05">Для любителей игр я бы порекомендовал экспериментировать с разными жанрами и стилями игр. Попробуйте что-то новое, возможно вы найдете свой любимый жанр! Также не забывайте следить за обновлениями игр и участвовать в мероприятиях, которые проводятся в играх.
              <br><br>Для профессионалов геймеров мой совет - постоянно совершенствоваться и улучшать свои навыки. Уделяйте время тренировкам, изучайте тактики и стратегии, общайтесь с другими профессионалами и участвуйте в соревнованиях. Помните, что победа приходит к тем, кто не останавливается на достигнутом.
              <br><br>В общем, самое главное - это наслаждаться игрой и не забывать, что главное в играх - это процесс, а не результат. Будьте открыты для нового, учите новые техники и стратегии, и помните - игры созданы для того, чтобы приносить удовольствие! Удачи и победы вам, друзья!</p>
            <a href="javascript:void(0)" class="expand_link_05"><i class='bx bxs-chevron-down'></i>Развернуть</a>
          </div>               
        </div>
        <div class="sov_">
          <div id="soob"></div>
          <div id="Game-sovet_a"></div>
          <p class="pod_1">Сообщество или общение с окружением</p>
          <p class="pod_2">Общяйся и узнавай о играх и многом!</p>
      </div>
        <div class="soob">
          <a href="soobchestvo.php" class="soob_but">Перейти к Сообществу <i class='bx bxs-chevrons-right'></i></a>
        </div>
                </div>
            </div>
            </div>
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
        <script src="/js/forum.js"></script>
    </body>
</html>