function addErrorClass(fieldName) {
    const inputField = document.querySelector(`input[name="${fieldName}"]`);
    if (inputField) {
        inputField.classList.add('input-error');
    }
}

function removeErrorClass(fieldName) {
    const inputField = document.querySelector(`input[name="${fieldName}"]`);
    if (inputField) {
        inputField.classList.remove('input-error');
        inputField.classList.remove('input-error-hover');
        inputField.style.border = '';
    }
}

document.querySelectorAll('.error-icon-city, .error-icon-day, .error-icon-month, .error-icon-year, .error-icon-name, .error-icon-surname, .error-icon-login, .error-icon-email, .error-icon-password').forEach(icon => {
    const fieldName = icon.getAttribute('data-field');

    addErrorClass(fieldName);

    icon.addEventListener('mouseenter', function() {
        const inputField = document.querySelector(`input[name="${fieldName}"]`);
        if (inputField) {
            inputField.classList.add('input-error-hover');
        }
    });

    icon.addEventListener('mouseleave', function() {
        const inputField = document.querySelector(`input[name="${fieldName}"]`);
        if (inputField) {
            inputField.classList.remove('input-error-hover');
        }
    });
});

document.querySelectorAll('input').forEach(input => {
    input.addEventListener('input', function() {
        const fieldName = this.getAttribute('name');
        const errorIcon = document.querySelector(`.error-icon-${fieldName}`);
        if (errorIcon) {
            errorIcon.style.display = 'none';
            removeErrorClass(fieldName);
        }
    });
});

document.querySelectorAll('.selected-country, .selected-total').forEach(select => {
    select.addEventListener('change', function() {
        const fieldName = this.getAttribute('name');
        const errorIcon = document.querySelector(`.error-icon-${fieldName}`);
        if (errorIcon) {
            errorIcon.style.display = 'none';
            removeErrorClass(fieldName);
        }
    });
});

document.querySelectorAll('.error-icon-city, .error-icon-day, .error-icon-month, .error-icon-year, .error-icon-name, .error-icon-surname, .error-icon-login, .error-icon-email, .error-icon-password').forEach(icon => {
    icon.addEventListener('mouseenter', function() {
        const popup = this.querySelector('.error-popup');
        if (popup) {
            popup.style.display = 'block';
        }
    });

    icon.addEventListener('mouseleave', function() {
        const popup = this.querySelector('.error-popup');
        if (popup) {
            popup.style.display = 'none';
        }
    });
});