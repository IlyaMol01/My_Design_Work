const countries = ["Австралия", "Австрия", "Азербайджан", "Алжир", "Албания", "Ангола", "Антарктика", "Аргентина", "Армения", "Афганистан", "Багамы", "Бангладеш", "Барбадос", "Бельгия", "Болгария", "Боливия", "Бразилия", "Бурунди", "Бутан", "Великобритания", "Венгрия", "Венесуэла",
    "Вьетнам", "Габон", "Гаити", "Гвинея", "Германия", "Гондурас", "Гонконг", "Гренада", "Гренландия", "Греция", "Грузия", "Дания", "Доминика", "Египет", "Зимбабве", "Израиль", "Индия", "Индонезия", "Ирак", "Ирландия", "Иран", "Исландия", "Испания", "Италия", "Казахстан", "Камбоджа",
    "Канада", "Кения", "Кипр", "Колумбия", "Куба", "Кыргызстан", "Латвия", "Ливан", "Литва", "Люксембург", "Мадагаскар", "Малайзия", "Марокко", "Мексика", "Монако", "Монголия", "Непал", "Нигер", "Нигерия", "Нидерланды", "Никарагуа", "Новая Зеландия", "Норвегия", "ОАЭ", "Оман",
    "Пакистан", "Палестина", "Панама", "Папуа Новая Гвинея", "Парагвай", "Перу", "Польша", "Португалия", "Пуэрто-Рико", "Республика Беларусь", "Республика Корея", "Республика Мальдивы", "Республика Молдова", "Российская Федерация", "Румыния", "Сальвадор", "Сан-Марино", "Саудовская Аравия",
    "Сербия", "Сингапур", "Словакия", "Сомали", "США", "Таджикистан", "Таиланд", "Тайвань", "Тунис", "Туркменистан", "Турция", "Уганда", "Узбекистан", "Украина", "Уругвай", "Филиппины", "Финляндия", "Оман", "Франция", "Хорватия", "Центральноафриканская республика", "Черногория",
    "Чешская республика", "Чили", "Швейцария", "Швеция", "Шри-Ланка", "Эквадор", "Экваториальная Гвинея", "Эстония", "Эфиопия", "Южно-Африканская Республика", "Ямайка", "Япония"]; 

let optionsList = null;
const citySelect = document.getElementById('citySelect');
const arrowIcon = document.querySelector('.arrow-icon');

function showCityOptions() {
    if (optionsList) {
        optionsList.remove();
        optionsList = null;
        arrowIcon.style.display = 'block';
        return;
    }
    
    let options = "<ul id='optionsList' style='display: block'>";
    countries.forEach(country => {
        options += `<li onclick="selectCountry('${country}')" style="text-align: left;">${country}</li>`;
    });
    options += '</ul>';
    
    citySelect.insertAdjacentHTML('afterend', options);
    
    optionsList = document.getElementById('optionsList');
    
    document.addEventListener('click', function closeList(e) {
        if (!e.target.classList.contains('selected-country') && optionsList) {
            optionsList.remove();
            optionsList = null;
            arrowIcon.style.display = 'block';
            document.removeEventListener('click', closeList);
        }
    });
    
    arrowIcon.style.display = 'none';
}

function selectCountry(country) {
    citySelect.value = country;
    
    optionsList.remove();
    optionsList = null;
    arrowIcon.style.display = 'block';
}

arrowIcon.addEventListener('click', function() {
    showCityOptions();
});

//------------------------------------------------------------------------------------//

const countries_01 = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12", "13", "14",
    "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"]; 

let optionsList_01 = null;
const DaySelect = document.getElementById('DaySelect');
const arrowIcon_01 = document.querySelector('.arrow-icon_01');

function showDayOptions() {
    if (optionsList_01) {
        optionsList_01.remove();
        optionsList_01 = null;
        arrowIcon_01.style.display = 'block';
        return;
    }
    
    let options_01 = "<ul id='optionsList_01' style='display: block'>";
    countries_01.forEach(country_01 => {
        options_01 += `<li onclick="selectCountry_01('${country_01}')" style="text-align: left;">${country_01}</li>`;
    });
    options_01 += '</ul>';
    
    DaySelect.insertAdjacentHTML('afterend', options_01);
    
    optionsList_01 = document.getElementById('optionsList_01');
    
    document.addEventListener('click', function closeList(e) {
        if (!e.target.classList_01.contains('selected-day') && optionsList_01) {
            optionsList_01.remove();
            optionsList_01 = null;
            arrowIcon_01.style.display = 'block';
            document.removeEventListener('click', closeList);
        }
    });
    
    arrowIcon_01.style.display = 'none';
}

function selectCountry_01(country_01) {
    DaySelect.value = country_01;
    
    optionsList_01.remove();
    optionsList_01 = null;
    arrowIcon_01.style.display = 'block';
}

arrowIcon_01.addEventListener('click', function() {
    showDayOptions();
});

//------------------------------------------------------------------------------------//

const countries_02 = ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"]; 

let optionsList_02 = null;
const MonthSelect = document.getElementById('MonthSelect');
const arrowIcon_02 = document.querySelector('.arrow-icon_02');

function showMonthOptions() {
    if (optionsList_02) {
        optionsList_02.remove();
        optionsList_02 = null;
        arrowIcon_02.style.display = 'block';
        return;
    }
    
    let options_02 = "<ul id='optionsList_02' style='display: block'>";
    countries_02.forEach(country_02 => {
        options_02 += `<li onclick="selectCountry_02('${country_02}')" style="text-align: left;">${country_02}</li>`;
    });
    options_02 += '</ul>';
    
    MonthSelect.insertAdjacentHTML('afterend', options_02);
    
    optionsList_02 = document.getElementById('optionsList_02');
    
    document.addEventListener('click', function closeList(e) {
        if (!e.target.classList_02.contains('selected-month') && optionsList_02) {
            optionsList_02.remove();
            optionsList_02 = null;
            arrowIcon_02.style.display = 'block';
            document.removeEventListener('click', closeList);
        }
    });
    
    arrowIcon_02.style.display = 'none';
}

function selectCountry_02(country_02) {
    MonthSelect.value = country_02;
    
    optionsList_02.remove();
    optionsList_02 = null;
    arrowIcon_02.style.display = 'block';
}

arrowIcon_02.addEventListener('click', function() {
    showMonthOptions();
});

//------------------------------------------------------------------------------------//

const countries_03 = ["2015 г.", "2014 г.", "2013 г.", "2012 г.", "2011 г.", "2010 г.", "2009 г.", "2008 г.", "2007 г.", "2006 г.", "2005 г.", "2004 г.", "2003 г.", "2002 г.",
    "2001 г.", "2000 г.", "1999 г.", "1998 г.", "1997 г.", "1996 г.", "1995 г.", "1994 г.", "1993 г.", "1992 г.", "1991 г.", "1990 г.", "1989 г.", "1988 г.", "1987 г.",
    "1986 г.", "1985 г.", "1984 г.", "1983 г.", "1982 г.", "1981 г.", "1980 г.", "1979 г.", "1978 г.", "1977 г.", "1976 г.", "1975 г.", "1974 г.", "1973 г.", "1972 г.", "1971 г.", "1970 г.", "54+"]; 

let optionsList_03 = null;
const YearSelect = document.getElementById('YearSelect');
const arrowIcon_03 = document.querySelector('.arrow-icon_03');

function showYearOptions() {
    if (optionsList_03) {
        optionsList_03.remove();
        optionsList_03 = null;
        arrowIcon_03.style.display = 'block';
        return;
    }
    
    let options_03 = "<ul id='optionsList_03' style='display: block'>";
    countries_03.forEach(country_03 => {
        options_03 += `<li onclick="selectCountry_03('${country_03}')" style="text-align: left;">${country_03}</li>`;
    });
    options_03 += '</ul>';
    
    YearSelect.insertAdjacentHTML('afterend', options_03);
    
    optionsList_03 = document.getElementById('optionsList_03');
    
    document.addEventListener('click', function closeList(e) {
        if (!e.target.classList_03.contains('selected-year') && optionsList_03) {
            optionsList_03.remove();
            optionsList_03 = null;
            arrowIcon_03.style.display = 'block';
            document.removeEventListener('click', closeList);
        }
    });
    
    arrowIcon_03.style.display = 'none';
}

function selectCountry_03(country_03) {
    YearSelect.value = country_03;
    
    optionsList_03.remove();
    optionsList_03 = null;
    arrowIcon_03.style.display = 'block';
}

arrowIcon_03.addEventListener('click', function() {
    showYearOptions();
});


document.addEventListener('click', function(e) {
    if (!e.target.closest('.select-country') && optionsList) {
        optionsList.remove();
        optionsList = null;
        arrowIcon.style.display = 'block';
    }

    if (!e.target.closest('.select-day') && optionsList_01) {
        optionsList_01.remove();
        optionsList_01 = null;
        arrowIcon_01.style.display = 'block';
    }

    if (!e.target.closest('.select-month') && optionsList_02) {
        optionsList_02.remove();
        optionsList_02 = null;
        arrowIcon_02.style.display = 'block';
    }

    if (!e.target.closest('.select-year') && optionsList_03) {
        optionsList_03.remove();
        optionsList_03 = null;
        arrowIcon_03.style.display = 'block';
    }
});





function showUserNickname() {
    var nickname = document.getElementById('nicknameSelect').value;
    document.getElementById('user-nickname').textContent = nickname;
    document.getElementById('user-nickname').style.display = 'block';
}







document.querySelectorAll('.selected-totals, .selected-email, .selected-pass, .selected-nick').forEach(input => {
    input.addEventListener('input', function() {
        const errorMessage = this.nextElementSibling;
        const icon = document.querySelector(`.error-icon-${this.name}`);

        if (errorMessage && errorMessage.classList.contains('error-message')) {
            errorMessage.style.display = 'none';
        }

        if (icon) {
            icon.style.display = 'none';
        }
    });

    input.addEventListener('focus', function() {
        const icon = document.querySelector(`.error-icon-${this.name}`);
        if (icon) {
            icon.style.display = 'none';
        }
    });
});

document.querySelectorAll('.selected-country, .selected-total').forEach(select => {
    select.addEventListener('click', function() {
        const icon = document.querySelector(`.error-icon-${this.name}`);
        if (icon) {
            icon.style.display = 'none';
        }
    });

    select.addEventListener('change', function() {
        const icon = document.querySelector(`.error-icon-${this.name}`);
        if (icon) {
            icon.style.display = 'none';
        }
    });
});

document.querySelector('.button_').addEventListener('click', function() {
    document.querySelectorAll('.error-icon').forEach(icon => {
        const field = icon.getAttribute('data-field');
        const errorMessage = document.querySelector(`.error-message[data-field="${field}"]`);

        if (errorMessage && errorMessage.textContent) {
            icon.style.display = 'block';
        }
    });
});

function resetErrors(field) {
    const errorMessage = document.querySelector(`.error-message[data-field="${field}"]`);
    const icon = document.querySelector(`.error-icon-${field}`);
    
    if (errorMessage) {
        errorMessage.style.display = 'none';
        errorMessage.textContent = '';
    }
    if (icon) {
        icon.style.display = 'none';
    }
}