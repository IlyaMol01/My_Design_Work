    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');
    const controls = document.querySelector('.controls');

    let activeSlideIndex = 0;

    function showSlide(slideIndex) {
        slides.forEach(slide => slide.style.opacity = 0);
        slides[slideIndex].style.opacity = 1;

        indicators.forEach(indicator => indicator.classList.remove('active'));
        indicators[slideIndex].classList.add('active');
    }

    showSlide(activeSlideIndex);

    prevButton.addEventListener('click', () => {
        activeSlideIndex = activeSlideIndex === 0 ? slides.length - 1 : activeSlideIndex - 1;
        showSlide(activeSlideIndex);
    });

    nextButton.addEventListener('click', () => {
        activeSlideIndex = activeSlideIndex === slides.length - 1 ? 0 : activeSlideIndex + 1;
        showSlide(activeSlideIndex);
    });

    setInterval(() => {
        activeSlideIndex = activeSlideIndex === slides.length - 1 ? 0 : activeSlideIndex + 1;
        showSlide(activeSlideIndex);
    }, 5000);

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            activeSlideIndex = index;
            showSlide(activeSlideIndex);
        });
    });

    function hideControls() {
    const isHovering = [].some.call(slides, function(element) {
        const rect = element.getBoundingClientRect();
        return event.clientX >= rect.left && event.clientX <= rect.right && event.clientY >= rect.top && event.clientY <= rect.bottom;
    });
    if (!isHovering) {
        controls.style.display = 'none';
    }
}

//------------------------------------------------------------------------------------------------//



//------------------------------------------------------------------------------------------------//

window.addEventListener('resize', function() {
    if (window.innerWidth < 0.75 * window.innerWidth) {
      document.querySelector('.menu_logo').style.width = '75%';
    } else {
      document.querySelector('.menu_logo').style.width = 'initial';
    }
  });
  window.addEventListener('resize', function() {
    if (window.innerWidth < 0.75 * window.innerWidth) {
      document.querySelector('.menu_logo').style.width = '75%';
      document.querySelectorAll('.logo, .account-icon, .language-icon').forEach(function(elem) {
        elem.style.width = 'auto';
      });
    } else {
      document.querySelector('.menu_logo').style.width = 'initial';
      document.querySelectorAll('.logo, .account-icon, .language-icon').forEach(function(elem) {
        elem.style.width = 'initial';
      });
    }
  });





  if (document.querySelector('.account-icon.active')) {
    document.querySelector('.account-icon').addEventListener('click', function(e) {
        e.preventDefault();
        window.location.href = "profile.php";
    });
}

if (document.querySelector('.account-icon.active')) {
    document.querySelector('.account-icon').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('modal').style.display = 'block';
    });
}

document.getElementById('cancel').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('modal').style.display = 'none';
});

document.getElementById('logout').addEventListener('click', function(e) {
    e.preventDefault();
    // Перенаправляем на logout.php
    window.location.href = "logout.php";
});

  




  const text = document.querySelector(".cont_faq_01 > p");
  const menu = document.querySelector(".faq_info_1");
  
  text.addEventListener("click", function() {
    menu.classList.toggle("show");
  });
  
  const arrow = document.querySelector(".cont_faq_01");
  arrow.addEventListener("click", function() {
    menu.classList.toggle("show");
  });





  document.querySelectorAll(".product_shop").forEach(item => {
    item.addEventListener("mouseover", function() {
      const popup = this.querySelector(".popup_shop");
      popup.style.display = "block";
    });
    
    item.addEventListener("mouseout", function() {
      const popup = this.querySelector(".popup_shop");
      popup.style.display = "none";
    });
  });