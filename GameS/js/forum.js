//Первое FAQ: 1 - 01, 02, 03.//
let currentOpenMenu = null;

const text = document.querySelector(".cont_faq_01 > p");
const menu = document.querySelector(".faq_info_1");
const arrow_ = document.querySelector("#arrow_01");
toggleMenu(text, menu, arrow_);

function toggleMenu(text, menu, arrow) {
arrow.addEventListener("click", function() {
if (menu.classList.contains("show")) {
menu.classList.remove("show");
arrow.innerHTML = "<i class='bx bxs-right-arrow'></i>";
} else {
if (currentOpenMenu && currentOpenMenu !== menu) {
currentOpenMenu.classList.remove("show");
}
menu.classList.add("show");
arrow.innerHTML = "<i class='bx bxs-down-arrow'></i>";
currentOpenMenu = menu;
}
});

text.addEventListener("click", function() {
if (currentOpenMenu && currentOpenMenu !== menu) {
currentOpenMenu.classList.remove("show");
}
currentOpenMenu = menu;
menu.classList.toggle("show");
});
};

//Второе FAQ: 2 - 01, 02, 03.//
const text_02 = document.querySelector(".cont_faq_02 > p");
const menu_02 = document.querySelector(".faq_info_2");
const arrow_02_ = document.querySelector("#arrow_02");
toggleMenu(text_02, menu_02, arrow_02_);

function toggleMenu(text_02, menu_02, arrow_02_) {
arrow_02_.addEventListener("click", function() {
if (menu_02.classList.contains("show")) {
menu_02.classList.remove("show");
arrow_02_.innerHTML = "<i class='bx bxs-right-arrow'></i>";
} else {
if (currentOpenMenu && currentOpenMenu !== menu_02) {
currentOpenMenu.classList.remove("show");
}
menu_02.classList.add("show");
arrow_02_.innerHTML = "<i class='bx bxs-down-arrow'></i>";
currentOpenMenu = menu_02;
}
});

text_02.addEventListener("click", function() {
if (currentOpenMenu && currentOpenMenu !== menu_02) {
currentOpenMenu.classList.remove("show");
}
currentOpenMenu = menu_02;
menu_02.classList.toggle("show");
});
}
//Третье FAQ: 3 - 01, 02, 03.//
const text_03 = document.querySelector(".cont_faq_03 > p");
const menu_03 = document.querySelector(".faq_info_3");
const arrow_03_ = document.querySelector("#arrow_03");
toggleMenu(text_03, menu_03, arrow_03_);

function toggleMenu(text_03, menu_03, arrow_03_) {
arrow_03_.addEventListener("click", function() {
if (menu_03.classList.contains("show")) {
menu_03.classList.remove("show");
arrow_03_.innerHTML = "<i class='bx bxs-right-arrow'></i>";
} else {
if (currentOpenMenu && currentOpenMenu !== menu_03) {
currentOpenMenu.classList.remove("show");
}
menu_03.classList.add("show");
arrow_03_.innerHTML = "<i class='bx bxs-down-arrow'></i>";
currentOpenMenu = menu_03;
}
});

text_03.addEventListener("click", function() {
if (currentOpenMenu && currentOpenMenu !== menu_03) {
currentOpenMenu.classList.remove("show");
}
currentOpenMenu = menu_03;
menu_03.classList.toggle("show");
});
}

//Четвертая FAQ: 4 - 01, 02.//
const text_04 = document.querySelector(".cont_faq_04 > p");
const menu_04 = document.querySelector(".faq_info_4");
const arrow_04_ = document.querySelector("#arrow_04");
toggleMenu(text_04, menu_04, arrow_04_);

function toggleMenu(text_04, menu_04, arrow_04_) {
arrow_04_.addEventListener("click", function() {
if (menu_04.classList.contains("show")) {
menu_04.classList.remove("show");
arrow_04_.innerHTML = "<i class='bx bxs-right-arrow'></i>";
} else {
if (currentOpenMenu && currentOpenMenu !== menu_04) {
currentOpenMenu.classList.remove("show");
}
menu_04.classList.add("show");
arrow_04_.innerHTML = "<i class='bx bxs-down-arrow'></i>";
currentOpenMenu = menu_04;
}
});

text_04.addEventListener("click", function() {
if (currentOpenMenu && currentOpenMenu !== menu_04) {
currentOpenMenu.classList.remove("show");
}
currentOpenMenu = menu_04;
menu_04.classList.toggle("show");
});
}

const searchLink = document.querySelector(".line_faq_1_01");
const mainContainer = document.querySelector(".cont_FAQ");
const replacementContainer = document.createElement("div");
replacementContainer.innerHTML = "<div class='faq_info_1_01_'><p style='margin-left: 30px;'>Почему поиск на сайте не работает?</p><br><a href='forum.html' class='backLink_1_01'>Обратно</a></div><p class='texts_1_01'>Дорогой пользователь, самая частая проблема с поиском информации на нашем сайте может вызывать неудобства, и хотел бы объяснить возникновение данной темы.<br><br><span style='font-size: 20px;'>1) Почему поиск на сайте не работает?</span><br><br>Основной причиной этой проблемы может быть недостаточная оптимизация поисковой системы нашего сайта. Это может привести к неправильным или неполным результатам поиска, что затрудняет пользователям находить нужную информацию.<br><br><span style='font-size: 20px;'>2) Зачем ее нужно исправлять?</span><br><br>Наша команда понимает, что эффективный поиск информации на сайте является ключевым элементом удобства использования и обеспечивает удовлетворение потребностей пользователей. Если поиск не работает правильно, это может привести к потере посетителей и уменьшению интереса к нашему ресурсу. Из-за нескольких причин мы не сможем сделать прекрасный поиск нашего сайта.<br><br><span style='font-size: 20px;'>3) Решение и исправление данной проблемы:</span><br><br>Для улучшения поиска информации на сайте мы планируем провести обновление поисковой системы, чтобы сделать ее более точной и эффективной. В то же время, чтобы помочь пользователям находить нужную информацию без использования поиска, мы будем улучшать навигацию по сайту, создавать каталоги и разделы с четкими описаниями и метками.<br><br>Мы  стремимся к постоянному улучшению нашего сайта. Мы надеемся, что наши действия по исправлению проблемы с поиском информации сделают ваше взаимодействие с нашим сайтом более приятным и удобным. Спасибо за ваше терпение и понимание.</p>";
searchLink.addEventListener("click", function() {
mainContainer.innerHTML = "";
mainContainer.appendChild(replacementContainer);
});
mainContainer.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_1_01")) {
mainContainer.innerHTML = "";
}
});



const searchLink_02 = document.querySelector(".line_faq_1_02");
const mainContainer_02 = document.querySelector(".cont_FAQ");
const replacementContainer_02 = document.createElement("div");
replacementContainer_02.innerHTML = "<div class='faq_info_1_02_'><p style='margin-left: 30px;'>Как можно найти нужную информацию без использования поиска?</p><br><a href='forum.html' class='backLink_1_02'>Обратно</a></div><p class='texts_1_01'>Дорогой пользователь, мы приносим извинения за возникшие проблемы на нашем сайте.<br><br><span style='font-size: 17px;'>1) Проблема в работоспособности сайта возникла из-за технических неполадок и недостаточной информационной поддержки. Мы осознаем важность правильного функционирования и доступности всей необходимой информации для наших пользователей.</span><br><br><span style='font-size: 17px;'>2) Исправление данной проблемы необходимо для того, чтобы обеспечить полноценное использование сайта и предоставить пользователям максимально комфортные условия для поиска и приобретения игр, общения с другими геймерами, а также получения актуальной информации о новинках игровой индустрии.</span><br><br><span style='font-size: 18px;'>3) Для решения проблемы с поиском нужной информации без использования поиска, мы предлагаем следующие шаги:</span><br><br>- Организация навигации на сайте, чтобы пользователи могли легко и быстро находить нужные разделы и страницы.<br>- Создание категорий и тегов для игр, чтобы пользователи могли фильтровать информацию и находить интересующее их содержание.<br>- Размещение актуальных новостей, обзоров и анонсов игр на главной странице сайта, чтобы пользователи могли быть в курсе последних событий.<br>- Проведение обучающих видео-уроков или туториалов для пользователей, объясняющих как пользоваться сайтом и находить нужную информацию.<br><br>Мы надеемся, что наши усилия по улучшению функциональности и удобства использования сайта помогут вам получать максимальное удовольствие от игрового процесса и взаимодействия с другими геймерами. Спасибо за ваше терпение и понимание.</p>";
searchLink_02.addEventListener("click", function() {
mainContainer_02.innerHTML = "";
mainContainer_02.appendChild(replacementContainer_02);
});
mainContainer_02.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_1_02")) {
mainContainer_02.innerHTML = "";
}
});


const searchLink_03 = document.querySelector(".line_faq_2_01");
const mainContainer_03 = document.querySelector(".cont_FAQ");
const replacementContainer_03 = document.createElement("div");
replacementContainer_03.innerHTML = "<div class='faq_info_2_01_'><p style='margin-left: 30px;'>Почему страницы сайта загружаются медленно?</p><br><a href='forum.html' class='backLink_2_01'>Обратно</a></div><p class='texts_1_01'>Приносим извинения за неудобства, вызванные медленной загрузкой страниц сайта. Мы понимаем, что это является серьезной проблемой.<br><br><span style='font-size: 20px;'>1) Почему эта проблема взялась: </span><br><br>Медленная загрузка страниц сайта может быть связана с различными техническими проблемами, такими как перегрузка серверов, плохое качество хостинга, неоптимизированный код сайта и другие факторы. Мы признаем, что это проблема, которую необходимо решить как можно скорее.<br><br><span style='font-size: 20px;'>2) Зачем ее нужно исправлять: </span><br><br>Медленная загрузка страниц сайта может отпугнуть пользователей, вызвать негативное впечатление о нашем сервисе и привести к потере потенциальных клиентов. Быстрая и плавная загрузка страниц - это один из ключевых факторов для удовлетворения пользователей и обеспечения успешной работы нашего сайта.<br><br><span style='font-size: 20px;'>3) Решение и исправление данной проблемы: </span><br><br>Для улучшения скорости загрузки страниц сайта мы проводим анализ и оптимизацию работы серверов, улучшаем качество хостинга, оптимизируем код сайта, используем кеширование и другие технические методы. Мы также следим за обновлениями и новыми технологиями, чтобы постоянно улучшать производительность и отзывчивость нашего сайта.<br><br>Благодарим за ваше терпение и понимание. Мы уверены, что наши усилия приведут к значительному улучшению работы нашего сайта и удовлетворят ваши потребности и ожидания.</p>";
searchLink_03.addEventListener("click", function() {
mainContainer_03.innerHTML = "";
mainContainer_03.appendChild(replacementContainer_03);
});
mainContainer_03.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_2_01")) {
mainContainer_03.innerHTML = "";
}
});


const searchLink_04 = document.querySelector(".line_faq_2_02");
const mainContainer_04 = document.querySelector(".cont_FAQ");
const replacementContainer_04 = document.createElement("div");
replacementContainer_04.innerHTML = "<div class='faq_info_2_02_'><p style='margin-left: 30px;'>Как исправить ошибку 404?</p><br><a href='forum.html' class='backLink_2_02'>Обратно</a></div><p class='texts_1_01'>Дорогой пользователь, мы очень серьезно относимся к проблемам нашего сайта, и понимаем, что возникшие технические проблемы могут негативно отразиться на вашем опыте. Одной из таких проблем является ошибка 404, которая возникает при попытке доступа к несуществующей странице на сайте.<br><br><span style='font-size: 20px;'>1) Почему эта проблема взялась?</span><br><br> Эта проблема возникла из-за различных причин, таких как неправильная ссылка, удаление страницы, ошибки в коде и другие технические недочеты.<br><br><span style='font-size: 20px;'>2) Зачем ее нужно исправлять?</span><br><br> Исправление ошибки 404 необходимо для обеспечения бесперебойной работы сайта и улучшения пользовательского опыта. Каждый раз, когда пользователь сталкивается с ошибкой 404, это может вызвать разочарование и негативное отношение к нашему сайту.<br><br><span style='font-size: 20px;'>3) Решение и исправление данной проблемы:</span><br><br> Для исправления ошибки 404 мы рекомендуем следующие шаги:<br>- Проверьте правильность введенного URL.<br>- Убедитесь, что страница не была перемещена или удалена.<br>- Перезагрузите страницу или попробуйте обновить ее.<br>- Используйте поисковую строку или навигационное меню для поиска нужной информации.<br><br>Мы также работаем над улучшением нашей инфраструктуры и постоянно обновляем сайт, чтобы минимизировать количество ошибок и обеспечить качественный сервис для наших пользователей.</p>";
searchLink_04.addEventListener("click", function() {
mainContainer_04.innerHTML = "";
mainContainer_04.appendChild(replacementContainer_04);
});
mainContainer_04.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_2_02")) {
mainContainer_04.innerHTML = "";
}
});


const searchLink_05 = document.querySelector(".line_faq_3_01");
const mainContainer_05 = document.querySelector(".cont_FAQ");
const replacementContainer_05 = document.createElement("div");
replacementContainer_05.innerHTML = "<div class='faq_info_3_01_'><p style='margin-left: 30px;'>Почему не все страницы сайта отображаются корректно?</p><br><a href='forum.html' class='backLink_3_01'>Обратно</a></div><p class='texts_1_01'>Приветствуем Вас! Спасибо за обращение с вопросом о проблемах функционирования нашего сайта.<br><br><span style='font-size: 17px;'>1) Вы правы, не все страницы нашего сайта отображаются корректно из-за различных проблем с контентом. Эта проблема взялась из-за того, что мы стремимся создать удобное и функциональное пространство для наших пользователей, где они могут находить и покупать игры, общаться с другими игроками и получать информацию об актуальных событиях в мире видеоигр. Однако, из-за различных технических проблем и недостаточного контроля над контентом мы сталкиваемся с проблемами отображения страниц.</span><br><br><span style='font-size: 17px;'>2) Важно исправить эти проблемы, так как они создают негативное впечатление у пользователей и мешают им получить доступ к нужной информации и функционалу сайта. Нерабочие страницы могут вызывать разочарование и раздражение у пользователей, что может отразиться на репутации нашего сайта.</span><br><br><span style='font-size: 17px;'>3) Для решения данной проблемы нам необходимо провести тщательный анализ контента на сайте и выявить все ошибки и проблемы с отображением страниц. После этого, необходимо внести соответствующие исправления, обновить контент и убедиться, что все страницы отображаются корректно для всех пользователей. Мы также можем улучшить процессы контроля качества контента и регулярно проверять работоспособность сайта для предотвращения подобных проблем в будущем.</span><br><br>Надеемся, что наше решение проблемы с контентом поможет улучшить пользовательский опыт и сделает наш сайт более удобным и функциональным для всех игроков. Благодарим Вас за обращение и надеемся на вашу поддержку при решении данных проблем.</p>";
searchLink_05.addEventListener("click", function() {
mainContainer_05.innerHTML = "";
mainContainer_05.appendChild(replacementContainer_05);
});
mainContainer_05.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_3_01")) {
mainContainer_05.innerHTML = "";
}
});



const searchLink_06 = document.querySelector(".line_faq_3_02");
const mainContainer_06 = document.querySelector(".cont_FAQ");
const replacementContainer_06 = document.createElement("div");
replacementContainer_06.innerHTML = "<div class='faq_info_3_02_'><p style='margin-left: 30px;'>Почему не удается просмотреть видео/изображения на сайте?</p><br><a href='forum.html' class='backLink_3_02'>Обратно</a></div><p class='texts_1_01'>Приветствуем Вас, уважаемый пользователь!<br><br><span style='font-size: 16px;'>К сожалению, проблема с невозможностью просмотра видео и изображений на нашем сайте возникла из-за недостаточной оптимизации контента. Мы осознаем, что это серьезная проблема, которая мешает пользователям получить полноценное удовольствие от использования нашего сервиса.</span><br><br><span style='font-size: 16px;'>Важно исправить эту проблему по нескольким причинам. Во-первых, возможность просмотра видео и изображений на сайте значительно повышает пользовательский опыт и делает сервис более привлекательным. Во-вторых, контент - один из ключевых элементов любого игрового портала, и его доступность должна быть гарантирована.</span><br><br><span style='font-size: 16px;'>Для исправления данной проблемы мы планируем провести тщательный анализ и оптимизацию контента на сайте. Мы также будем работать над улучшением системы хранения и воспроизведения видео и изображений, чтобы обеспечить более быстрый и стабильный доступ к ним. Кроме того, мы возьмем на себя обязательство регулярно обновлять контент и следить за его качеством.</span><br><br>Мы признаем наличие проблемы с контентом на сайте и обещаем принять все необходимые меры для ее решения. Благодарим Вас за обратную связь и обещаем сделать наш сервис лучше для всех пользователей.</p>";
searchLink_06.addEventListener("click", function() {
mainContainer_06.innerHTML = "";
mainContainer_06.appendChild(replacementContainer_06);
});
mainContainer_06.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_3_02")) {
mainContainer_06.innerHTML = "";
}
});


const searchLink_07 = document.querySelector(".line_faq_4_01");
const mainContainer_07 = document.querySelector(".cont_FAQ");
const replacementContainer_07 = document.createElement("div");
replacementContainer_07.innerHTML = "<div class='faq_info_4_01_'><p style='margin-left: 30px;'>Почему сайт отображается некорректно на мобильном устройстве?</p><br><a href='forum.html' class='backLink_4_01'>Обратно</a></div><p class='texts_1_01'>1) Проблема с работоспособностью сайта на мобильных устройствах возникла из-за того, что при создании сайта не было уделено достаточного внимания адаптации его под различные экраны и разрешения мобильных устройств. Возможно, не были использованы современные технологии и подходы к созданию респонсивного дизайна.<br><br>2) Эта проблема нуждается в немедленном исправлении, так как с каждым годом количество пользователей, посещающих сайты и совершающих покупки с мобильных устройств, растет. Если сайт не отображается корректно на мобильных устройствах, это может привести к потере клиентов, негативному впечатлению от использования сайта и, как следствие, к снижению доходов.<br><br>3) Для решения проблемы с работоспособностью сайта на мобильных устройствах необходимо провести аудит сайта с учетом специфики мобильных устройств и создать адаптивный дизайн, который будет корректно отображаться на всех разрешениях экранов. Также важно оптимизировать содержимое сайта для быстрой загрузки на мобильных устройствах и убедиться, что все функции сайта работают исправно на любых устройствах. Создание мобильной версии сайта или доработка существующего дизайна под мобильные платформы поможет улучшить пользовательский опыт и увеличить конверсию.</p>";
searchLink_07.addEventListener("click", function() {
mainContainer_07.innerHTML = "";
mainContainer_07.appendChild(replacementContainer_07);
});
mainContainer_07.addEventListener("click", function(event) {
if (event.target.classList.contains("backLink_4_01")) {
mainContainer_07.innerHTML = "";
}
});


document.querySelector('.expand_link').addEventListener('click', function() {
const hiddenText = document.querySelector('.hidden_text');
if (hiddenText.style.display === 'none') {
hiddenText.style.display = 'block';
this.innerHTML = "<i class='bx bxs-chevron-up'></i> Свернуть";
} else {
hiddenText.style.display = 'none';
this.innerHTML = "<i class='bx bxs-chevron-down'></i> Развернуть";
}
});

document.querySelector('.expand_link_02').addEventListener('click', function() {
const hiddenText_02 = document.querySelector('.hidden_text_02');
if (hiddenText_02.style.display === 'none') {
hiddenText_02.style.display = 'block';
this.innerHTML = "<i class='bx bxs-chevron-up'></i> Свернуть";
} else {
hiddenText_02.style.display = 'none';
this.innerHTML = "<i class='bx bxs-chevron-down'></i> Развернуть";
}
});

document.querySelector('.expand_link_03').addEventListener('click', function() {
const hiddenText_03 = document.querySelector('.hidden_text_03');
if (hiddenText_03.style.display === 'none') {
hiddenText_03.style.display = 'block';
this.innerHTML = "<i class='bx bxs-chevron-up'></i> Свернуть";
} else {
hiddenText_03.style.display = 'none';
this.innerHTML = "<i class='bx bxs-chevron-down'></i> Развернуть";
}
});

document.querySelector('.expand_link_04').addEventListener('click', function() {
const hiddenText_04 = document.querySelector('.hidden_text_04');
if (hiddenText_04.style.display === 'none') {
hiddenText_04.style.display = 'block';
this.innerHTML = "<i class='bx bxs-chevron-up'></i> Свернуть";
} else {
hiddenText_04.style.display = 'none';
this.innerHTML = "<i class='bx bxs-chevron-down'></i> Развернуть";
}
});

document.querySelector('.expand_link_05').addEventListener('click', function() {
const hiddenText_05 = document.querySelector('.hidden_text_05');
if (hiddenText_05.style.display === 'none') {
hiddenText_05.style.display = 'block';
this.innerHTML = "<i class='bx bxs-chevron-up'></i> Свернуть";
} else {
hiddenText_05.style.display = 'none';
this.innerHTML = "<i class='bx bxs-chevron-down'></i> Развернуть";
}
});

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
              anchor.addEventListener('click', function(e) {
                  e.preventDefault();
                  
                  const targetId = this.getAttribute('href');
                  const targetElement = document.querySelector(targetId);
                  const offsetPosition = targetElement.offsetTop;
      
                  window.scroll({
                      top: offsetPosition,
                      left: 0,
                      behavior: 'smooth'
                  });
              });
          });